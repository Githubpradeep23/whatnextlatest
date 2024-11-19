<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ReportExport;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function appointmentList(Request $request)
    {
        $Title = "Contact Data List";
        if ($request->isMethod('get')) {
            $data = $request->all();
            $appointmentList = Appointment::query();
            if (isset($data['name']) && !empty($data['name'])) {
                $appointmentList = $appointmentList->where('name', 'LIKE', '%' . $data['name'] . '%');
            }
            if (isset($data['mobile']) && !empty($data['mobile'])) {
                $appointmentList = $appointmentList->where('mobile', $data['mobile']);
            }
            $appointmentList = $appointmentList->orderBy('id', 'DESC')->paginate(20);
            $appointmentList->appends($request->all());
            return view('admin.users.appointmentlist', compact('appointmentList', 'Title'));
        }
    }

    public function exportAppoinmentReport(Request $request)
    {
        $data = $request->all();
        if (isset($data['date_from']) && !empty($data['date_from']) && isset($data['date_to']) && !empty($data['date_to'])) {
        $appoinmentData = Appointment::whereDate('created_at', '>=', $data['date_from'])
            ->whereDate('created_at', '<=', $data['date_to'])
            ->orderBy('id', 'DESC')->get();
        $headerExcelData = [
            'Name', 'Email', 'Mobile', 'Created At'
        ];
        $arr = array();
        foreach ($appoinmentData as $key => $users) {
            $data = array(@$users->name, @$users->email, @$users->mobile, Carbon::parse(@$users->created_at)->format('Y-m-d'));
            array_push($arr, $data);
        }
        return  Excel::download(new ReportExport($arr, $headerExcelData), 'contact-reports-' . date("d-m-Y") . '.csv');
        }
        return redirect()->back();
    }
}

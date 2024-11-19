<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    use Exportable;

    protected $exportData;
    protected $headerData;

    function __construct($exportData, $headerData)
    {
        $this->exportData = $exportData;
        $this->headerData = $headerData;
    }

    public function collection()
    {

        return collect($this->exportData);
    }

    public function headings(): array
    {
        return $this->headerData;
    }
}

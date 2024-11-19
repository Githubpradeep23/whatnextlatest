@extends('layouts.admin')
@section('title','Dashboard')
@section('content')

<div class="row justify-content-center">
  <div class="col-xxl-8">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-sm-6">
        <div class="stats-box card bg-white border-0 rounded-10 mb-4">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
              <div class="flex-grow-1 me-3">
                <h3 class="body-font fw-bold fs-3 mb-2">{{$bannerCount ?? 0}}</h3>
                <span>Total Banner</span>
              </div>
              <div class="flex-shrink-0">
                <div class="icon transition">
                  <i class="flaticon-donut-chart"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="stats-box card bg-white border-0 rounded-10 mb-4">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
              <div class="flex-grow-1 me-3">
                <h3 class="body-font fw-bold fs-3 mb-2">{{$categoryCount ?? 0}}</h3>
                <span>Total Home Content</span>
              </div>
              <div class="flex-shrink-0">
                <div class="icon transition">
                  <i class="flaticon-goal"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="stats-box card bg-white border-0 rounded-10 mb-4">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
              <div class="flex-grow-1 me-3">
                <h3 class="body-font fw-bold fs-3 mb-2">{{$servicesCount ?? 0}}</h3>
                <span>Total Service</span>
              </div>
              <div class="flex-shrink-0">
                <div class="icon transition">
                  <i class="flaticon-award"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

@endsection
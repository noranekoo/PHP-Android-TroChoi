@extends('layout')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    @include('extends/table-header')
    @include('extends/SA-header')
@endsection
@section('main-content')

<div class="row">
     <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-soft-info rounded">
                            <i class="fe-cpu avatar-title font-22 text-info"></i>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">
                            {{ App\NguoiChoi::count() }}
                        </span></h3>
                        <p>Tổng số user</p>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-soft-purple rounded">
                            <i class="fe-aperture avatar-title font-22 text-purple"></i>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $usermoi }}</span></h3>
                        <p>User mới hôm nay</p>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-soft-success rounded">
                            <i class="fe-shopping-cart avatar-title font-22 text-success"></i>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $goicreditbanra }}</span></h3>
                    </div>
                    <p>Số gói credit bán được hôm nay</p>

                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-soft-primary rounded">
                            <i class="fe-bar-chart-2 avatar-title font-22 text-primary"></i>
                        </div>
                    </div>
                    <div class="text-left">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{$thunhaptrongngay}}</span></h3>
                        <p>Thu nhập hôm nay</p>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->        
    </div>
<div class="row">
    <div class="col-xl-4">
        <div class="card-box">
            <h4 class="header-title">Báo cáo thu nhập</h4>
            <p class="text-muted">Dữ liệu tổng</p>
            <h2 class="mb-4">{{App\LichSuMuaCredit::sum('so_tien')}}<i class="text-primary">VNĐ</i></h2>

            <div class="row mb-4">
                <div class="col-6">
                    <p class="text-muted mb-1">Tháng này</p>
                    <h3 class="mt-0 font-20">{{$thanghientai}}<i class="text-primary">VNĐ</i></h3>
                </div>

                <div class="col-6">
                    <p class="text-muted mb-1">Tháng trước</p>
                    <h3 class="mt-0 font-20">{{$thangtruoc}}<i class="text-primary">VNĐ</i></h3>
                </div>
            </div>
        </div> <!-- end card-box -->
    </div> <!-- end col -->
    <div class="col-xl-8">
        <div class="card-box">
          <h4 class="header-title mb-3">Top 20 người chơi nhiều Credit nhât</h4>
            <div class="table-responsive">
               <table class="table table-centered table-borderless table-hover table-nowrap mb-0" id="datatable">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-top-0">Tên</th>
                        <th class="border-top-0">Số Credit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($top20credit as $top20)
                    <tr>
                        <td>
                           <img src="assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm" />
                           <span class="ml-2">{{ $top20->ten_dang_nhap }}</span>
                        </td>
                        <td>
                            <span class="ml-2">{{ $top20->credit }}</span>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div> <!-- end table-responsive -->
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('js')
  @include('extends/table-footer')
  @include('extends/SA-footer')
  <script src="{{ asset('assets/js/pages/dashboard-2.init.js') }}"></script>
  <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
  <script src="assets/libs/peity/jquery.peity.min.js"></script>
  <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
@endsection
@extends('layout')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
@endsection
@section('main-content')
<div class="row">
    <div class="col-lg-4">
        <div class="text-center card-box">
            <div class="pt-2 pb-2">
                <img src="assets/images/users/batman.png" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Nguyễn Hiếu Luân</a></h4>
                <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> VietNam</p>
                <div class="font-14">
                    <span class="badge badge-light-primary badge-pill">PHP</span>
                    <span class="badge badge-light-secondary badge-pill">Laravel</span>
                    <span class="badge badge-light-success badge-pill">Python</span>
                </div>
                 <p class="text-muted mt-3">{{ App\QuanTriVien::find(3)->gioi_thieu }}</p>
            </div> <!-- end .padding -->
        </div> <!-- end card-box-->
    </div> <!-- end col -->

    <div class="col-lg-4">
        <div class="text-center card-box">
            <div class="pt-2 pb-2">
                <img src="assets/images/users/duy.png" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Lê Đình Bảo Duy</a></h4>
                <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> VietNam</p>
                <div class="font-14">
                    <span class="badge badge-light-danger badge-pill">Vue Js</span>
                    <span class="badge badge-light-info badge-pill">PHP</span>
                    <span class="badge badge-light-dark badge-pill">Nodejs</span>
                </div>
                 <p class="text-muted mt-3">{{ App\QuanTriVien::find(2)->gioi_thieu }}</p>
            </div> <!-- end .padding -->
        </div> <!-- end card-box-->
    </div> <!-- end col -->

    <div class="col-lg-4">
        <div class="text-center card-box">
            <div class="pt-2 pb-2">
                <img src="assets/images/users/admin1.png" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Nguyễn Anh Thi</a></h4>
                <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> VietNam</p>
                <div class="font-14">
                    <span class="badge badge-light-info badge-pill">PHP</span>
                    <span class="badge badge-light-success badge-pill">React</span>
                    <span class="badge badge-light-secondary badge-pill">Angular</span>
                </div>
                 <p class="text-muted mt-3">{{ App\QuanTriVien::find(1)->gioi_thieu }}</p> 
            </div> <!-- end .padding -->
        </div> <!-- end card-box-->
    </div> <!-- end col -->
    </div>
@endsection
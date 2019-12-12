@extends('layout')
@section('css')
    @include('extends/table-header')
    @include('extends/SA-header')
@endsection
@section('main-content')
@include('sweetalert::alert')
<div class="container-fluid">
<!-- start page title -->

<!-- end page title --> 

<div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card-box text-center">
            <img src="{{ asset('assets/images/users/').'/'.Auth::user()->anh_dai_dien }} " class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

            <h4 class="mb-0"> {{ Auth::user()->ho_ten }} </h4>
            <p class="text-muted">@webdesigner</p>

            <div class="text-left mt-3">
                <h4 class="font-13 text-uppercase">Giới thiệu :</h4>
                <p class="text-muted font-13 mb-3">
                    {{ Auth::user()->gioi_thieu }}
                </p>
                <p class="text-muted mb-2 font-13"><strong>Họ tên đầy đủ :</strong> <span class="ml-2"> {{ Auth::user()->ho_ten }} </span></p>

                <p class="text-muted mb-2 font-13"><strong>Số liên hệ :</strong><span class="ml-2">{{ Auth::user()->sdt }}</span></p>

                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{ Auth::user()->email }}</span></p>
<!-- 
                <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">USA</span></p> -->
            </div>

            <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                </li>
            </ul>
        </div> <!-- end card-box -->


    </div> <!-- end col-->

    <div class="col-lg-8 col-xl-8">
        @if( $errors->any() )
      <div class="alert alert-danger alert-dismissable fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">x</span>
          </button>
          <ul>
              @foreach( $errors->all() as $error )
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
                        <div class="card-box">
                            <ul class="nav nav-pills navtab-bg">
                                <li class="nav-item">
                                    <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="mdi mdi-settings-outline mr-1"></i>Cài đặt
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="mdi mdi-timeline mr-1"></i>Đổi mật khẩu
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                
                                <div class="tab-pane" id="settings">
                                     <form method="POST" action="{{route('change-password',Auth::user()->id)}}">
                                        @csrf
                                        <h5 class="mb-3 text-uppercase bg-light p-2">
                                        <i class="mdi mdi-account-circle mr-1"></i> Thông tin</h5>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstname">Mật khẩu cũ</label>
                                                    <input type="password" class="form-control" name="old_matkhau" id="firstname" placeholder="Nhập mật khẩu cũ">
                                                </div>
                                                <div class="form-group">
                                                    <label for="firstname">Mật khẩu mới</label>
                                                    <input type="password" class="form-control" name="new_matkhau" id="firstname" placeholder="Nhập mật khẩu mới">
                                                </div>
                                                <div class="form-group">
                                                    <label for="firstname">Nhập lại mật khẩu mới</label>
                                                    <input type="password" class="form-control" name="re_matkhau" placeholder="Nhập lại mật khẩu mới">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Lưu</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end timeline content-->
                                
                                <div class="tab-pane show active" id="timeline">
                                    <form method="POST" action="{{route('admin-profile.post',Auth::user()->id)}}">
                                        @csrf
                                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Thông tin</h5>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstname">Họ tên</label>
                                                    <input type="text" class="form-control" name="hoten" id="firstname" placeholder="Nhập vào họ tên" value="{{Auth::user()->ho_ten}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstname">Giới thiệu</label>
                                                    <input type="text" class="form-control" name="gioithieu" id="firstname" placeholder="Giới thiệu" value="{{Auth::user()->gioi_thieu}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstname">Số điện thoại</label>
                                                    <input type="text" class="form-control" name="sdt" id="firstname" placeholder="Nhập vào họ tên" value="{{Auth::user()->sdt}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstname">Email</label>
                                                    <input type="text" class="form-control" name="email" id="firstname" placeholder="Nhập vào họ tên" value="{{Auth::user()->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Lưu</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end settings content-->



                            </div> <!-- end tab-content -->
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
</div>
<!-- end row-->
</div>
@endsection
@section('js')
@include('extends/table-footer')
    @include('extends/SA-footer')
@endsection
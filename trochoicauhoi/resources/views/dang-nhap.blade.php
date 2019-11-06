<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Upvex - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                  
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="#">
                                        <span><img src="{{ asset('assets/images/logo-dark.png')}}" alt="" height="26"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Nhập vào tên đăng nhập và mật khẩu của bạn để truy cập admin panel</p>
                                </div>
                            
                                <h5 class="auth-title"> Đăng nhập </h5>
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
                                  @if( $message = Session::get('fail'))
                                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">x</span>
                                    </button>
                                    <ul>
                                        <li>{{ $message }}</li>
                                    </ul>
                                </div>
                                @endif
                                <form action="{{ route('dangnhap.xuly') }}" method="POST" >
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Tên đăng nhập</label>
                                        <input class="form-control" type="text" id="emailaddress" name="ten_dang_nhap" required="" placeholder="Nhập vào tên đăng nhập"/>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Mật khẩu</label>
                                        <input class="form-control" type="password" required="" name="mat_khau" id="password" placeholder="Nhập vào mật khẩu"/>
                                    </div>

                                    <div class="form-group mb-3">
                                        <!-- <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div> -->
                                         @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                            <p>{!! \Session::get('success')[0] !!}</p>
                                            </div>
                                         @endif
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Đăng nhập </button>
                                    </div>

                                </form>

                             
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Chưa có tài khoản? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Đăng ký</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2019 &copy; Upvex theme by <a href="" class="text-muted">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>
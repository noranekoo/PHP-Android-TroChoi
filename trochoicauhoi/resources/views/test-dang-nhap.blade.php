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
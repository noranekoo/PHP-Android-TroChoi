@extends('layout')
@section('css')
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('main-content')
@include('sweetalert::alert')
<div class="row">
	<div class="col-lg-7">
		<div class="card">
			<div class="card-body">
					<div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						<h2 class="header-title">Danh Sách Người chơi</h2>
					<div class="row">

						<div class="col-sm-12 col-md-12">
							<div class="dataTables_length" id="basic-datatable_length">
							<table id="basic-datatable" class="table dt-responsive nowrap">

                                    <thead>
                                        <tr role="row">
                                        	<th>ID</th>
                                        	<th>Tên đăng nhập</th>
                                        	<th>Email</th>
                                        	<th>Hình đại diện</th>
                                        	<th>Điểm cao nhất</th>
                                        	<th>Credit</th>
                                        	<th></th>
                                        </tr>
                                    </thead>                   
                                
                                    <tbody>
                             	@foreach ($dsNguoiChoi as $nc)						
							<tr>
							<td>{{$nc->id}}</td>
							<td>{{$nc->ten_dang_nhap}}</td>
							<td>{{$nc->email}}</td>
							<td>{{$nc->hinh_dai_dien}}</td>
							<td>{{$nc->diem_cao_nhat}}</td>
							<td>{{$nc->credit}}</td>
							<td>
								<a href="{{ url('/nguoi-choi/xoa/'.$nc->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
                                </table>
                            </div>
                        </div>

			</div> <!-- end card body-->
		</div> <!-- end card -->
		
	</div>
</div>
</div>
<div class="col-lg-5">
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
                       <div class="card">
                            <div class="card-body"><h4>Thêm người chơi</h4>
                                 <form action="{{ route('nguoichoi.themmoipost') }}" method="POST">
							    	@csrf
							        <div class="form-group">
							            <label for="exampleInputPassword1">Tên đăng nhập</label>
							            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên đăng nhập"
							            value="" name="ten_dang_nhap" >
							        </div>
							        <div class="form-group">
							            <label for="exampleInputPassword1">Mật khẩu</label>
							            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu"
							            value="" name="mat_khau" >
							        </div>
							          <div class="form-group">
							            <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
							            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập lại mật khẩu"
							            value="" name="mat_khau_reinput" >
							        </div>
							        <div class="form-group">
							            <label for="exampleInputPassword1">Email</label>
							            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email"
							            value="" name="email" >
							        </div>
							         <div class="form-group">
							            <label for="exampleInputPassword1">Hình đại diện</label>
							            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Hình đại diện"
							            value="" name="hinh_dai_dien" >
							        </div>
							        <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm mới</button>
								</form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
</div>


@endsection

@section('js')
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection
	
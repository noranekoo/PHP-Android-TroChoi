@extends('layout')
@section('css')
	@include('../extends/SA-header')
@endsection
@section('main-content')
@include('sweetalert::alert')
Thùng rác lĩnh vực
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Người chơi</th>
							<th>Email</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($dsNguoiChoi as $nc)						
						<tr>
							<td>{{$nc->id}}</td>
							<td>{{$nc->ten_dang_nhap}}</td>
							<td>{{$nc->email}}</td>
							<td>
								<form action="{{ url('/nguoi-choi/thung-rac/xoa/'.$nc->id) }}" method="GET" >
									<a href="{{ url('/nguoi-choi/thung-rac/khoi-phuc/'.$nc->id) }}" class="btn btn-success waves-effect waves-light "><i class="fe-heart"></i></a> 
									<button class="btn btn-danger waves-effect waves-light" id="sa-warning"><i class="mdi mdi-close"></i></button>
								</form>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>

			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>
@endsection
@section('js')
	@include('extends/SA-footer')
@endsection
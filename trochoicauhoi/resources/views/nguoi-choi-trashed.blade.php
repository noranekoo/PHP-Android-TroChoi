@extends('layout')
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
							<th>Tên lĩnh vực</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach ($dsNguoiChoi as $nc)						
						<tr>
							<td>{{$nc->id}}</td>
							<td>{{$nc->ten_dang_nhap}}</td>
							<td>{{$nc->email}}</td>
							<td>
								<a href="{{ url('/nguoi-choi/thung-rac/khoi-phuc/'.$nc->id) }}" class="btn btn-success waves-effect waves-light "><i class="fe-heart"></i></a> 
								<a href="{{ url('/nguoi-choi/thung-rac/xoa/'.$nc->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
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


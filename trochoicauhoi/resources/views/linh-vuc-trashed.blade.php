@extends('layout')
@section('main-content')
Thùng rác lĩnh vực
<div class="row">
	<div class="col-lg-12">
		@include('sweetalert::alert')
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
						@foreach ($dsLinhvuc as $lv)						
						<tr>
							<td>{{$lv->id}}</td>
							<td>{{$lv->ten_linh_vuc}}</td>
							<td>
								<a href="{{ url('/linh-vuc/thung-rac/khoi-phuc/'.$lv->id) }}" class="btn btn-success waves-effect waves-light "><i class="fe-heart"></i></a> 
								<a href="{{ url('/linh-vuc/thung-rac/xoa/'.$lv->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
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


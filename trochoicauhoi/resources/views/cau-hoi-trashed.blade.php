@extends('layout')
@section('main-content')
Thùng rác câu hỏi
<div class="row">
	<div class="col-lg-12">
		<div class="card">
		@include('sweetalert::alert')
			<div class="card-body">
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nội dung</th>
							<th>Lĩnh vực</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach ($dsCauHoi as $ch)						
						<tr>
							<td>{{$ch->id}}</td>
							<td>{{$ch->noi_dung}}</td>
<!-- 							<td>{{App\LinhVuc::find($ch->linh_vuc_id)->ten_linh_vuc}}</td>
 -->
							<td>
								<a href="{{ url('/cau-hoi/thung-rac/khoi-phuc/'.$ch->id) }}" class="btn btn-success waves-effect waves-light "><i class="fe-heart"></i></a> 
								<a href="{{ url('/cau-hoi/thung-rac/xoa/'.$ch->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
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


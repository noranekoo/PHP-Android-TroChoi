@extends('layout')
@section('css')
	@include('../extends/SA-header')
@endsection
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
								<form action="{{ url('/cau-hoi/thung-rac/xoa/'.$ch->id) }}"	method="GET">
									<a href="{{ url('/cau-hoi/thung-rac/khoi-phuc/'.$ch->id) }}" class="btn btn-success waves-effect waves-light "><i class="fe-heart"></i></a> 
									<button class="btn btn-danger waves-effect waves-light" id="sa-warning" ><i class="mdi mdi-close"></i></button>
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

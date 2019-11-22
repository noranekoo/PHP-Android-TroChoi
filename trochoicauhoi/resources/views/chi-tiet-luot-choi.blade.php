@extends('layout')
@section('main-content')
 @include('sweetalert::alert')
<h3>Chi tiết lượt chơi </h3>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID lượt chơi</th>
							<th>Câu hỏi</th>
							<th>Phương án</th>
							<th>Điểm</th>
						</tr>
					</thead>
					<tbody>
						@foreach($chiTietLichSu as $lsc)
						<tr>
							<td>{{$lsc->luot_choi_id}}</td>
							<td>
								{{ isset(App\CauHoi::find($lsc->cau_hoi_id)->noi_dung) ? App\CauHoi::find($lsc->cau_hoi_id)->noi_dung : 'Câu hỏi đã bị xóa' }}
							</td>
							<td>{{$lsc->phuong_an}}</td>
							<td>{{$lsc->diem}}</td>
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


@extends('layout')
@section('main-content')
 @include('sweetalert::alert')
<h3>Lịch sử chơi người chơi:  {{ $nguoiChoi->ten_dang_nhap }} </h3>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Số câu</th>
							<th>Điểm</th>
							<th>Ngày giờ</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($lichSuChoi as $lsc)
						<tr>
							<td>{{$lsc->id}}</td>
							<td>{{$lsc->so_cau}}</td>
							<td>{{$lsc->diem}}</td>
							<td>{{$lsc->ngay_gio}}</td>
							<td>
								<a role="button" href="{{ route('ls-choi.detail',$lsc->id) }}"class="btn btn-info waves-effect waves-light">Chi tiết lượt chơi</a>
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


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
							<th>Gói Credit</th>
							<th>Credit</th>
							<th>Số tiền</th>
						</tr>
					</thead>
					<tbody>
						@foreach($lichSuMua as $lsm)
						<tr>
							<td>{{$lsm->id}}</td>
							<td>{{
								isset( App\GoiCredit::find($lsm->goi_credit_id)->ten_goi_credit ) 
								? App\GoiCredit::find($lsm->goi_credit_id)->ten_goi_credit 
								: $lsm->goi_credit_id
							}}</td>
							<td>{{$lsm->credit}}</td>
							<td>{{$lsm->so_tien}}</td>
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


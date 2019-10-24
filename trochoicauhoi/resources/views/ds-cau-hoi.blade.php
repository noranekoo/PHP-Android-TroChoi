@extends('layout')
@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h2 class="header-title">Danh Sách Lĩnh Vực</h2>
				<p class="text-muted font-13 mb-4">
					DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
					function:
					
				</p>

				<table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Câu hỏi</th>
							<th>Lĩnh Vực</th>
							<th>PA A</th>
							<th>PA B</th>
							<th>PA C</th>
							<th>PA D</th>
							<th>Đáp án</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($dsCauHoi as $ch)						
						<tr>
							<td>{{$ch->id}}</td>
							<td>{{$ch->noi_dung}}</td>
							<td>{{$ch->linh_vuc_id}}</td>
							<td>{{$ch->phuong_an_a}}</td>
							<td>{{$ch->phuong_an_b}}</td>
							<td>{{$ch->phuong_an_c}}</td>
							<td>{{$ch->phuong_an_d}}</td>
							<td>{{$ch->dap_an}}</td>
							<td>
								<button type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></button> 
								<button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
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


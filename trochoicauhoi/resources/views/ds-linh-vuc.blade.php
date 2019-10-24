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
					<code>$().DataTable();</code>.
				</p>

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
								<a href="{{ url('/test/'.$lv->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></a> 
								<a href="#" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
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


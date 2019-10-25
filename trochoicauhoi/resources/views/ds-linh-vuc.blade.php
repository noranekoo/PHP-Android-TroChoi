@extends('layout')
@section('main-content')
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
 @endif
<div class="row">
	<div class="col-lg-6">
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
								<a href="{{ url('/linh-vuc/'.$lv->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></a> 
								<a href="{{ url('/linh-vuc/xoa/'.$lv->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>

			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
			<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Chi tiết lĩnh vực</h4>
                                <form action="{{ route('linhvuc.capnhat',isset($dsLinhvuc2->id) ? $dsLinhvuc2->id : '1')}}" method="POST">
                                	@csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ isset($dsLinhvuc2->id) ? $dsLinhvuc2->id : ''}}" aria-describedby="emailHelp"disabled="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên lĩnh vực</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên lĩnh vực"
                                        value="{{ isset($dsLinhvuc2->id) ? $dsLinhvuc2->ten_linh_vuc : ''}}" name="ten_linh_vuc" >
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
</div>
@endsection


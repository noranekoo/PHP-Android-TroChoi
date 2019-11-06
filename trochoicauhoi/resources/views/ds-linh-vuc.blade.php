@extends('layout')
@section('css')
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('main-content')
 @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">x</span>
    </button>
     <ul>
       <li>{{$message}}</li>
    </ul>
</div>
 @endif
<div class="row">
	<div class="col-lg-6">
		 <div class="card">

			<div class="card-body">
				 
				<table table id="basic-datatable" class="table dt-responsive nowrap">
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

			</div> <!-- end card body -->
			
		</div> <!-- end card -->
	</div><!-- end col-->
			<div class="col-lg-6">
				@if( $errors->any() )
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <ul>
                        @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">
                                	{{ isset($dsLinhvuc2) ? 'Cập nhật lĩnh vực' : 'Thêm mới lĩnh vực'  }} 
                                	
                            	</h4>
                                <form action="{{
                                 isset($dsLinhvuc2) ? route('linhvuc.capnhat',$dsLinhvuc2->id) : 
                             	 route('linhvuc.themmoipost') }}" 
                                 method="POST">
                                	@csrf
                                	@if(isset($dsLinhvuc2))
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ isset($dsLinhvuc2->id) ? $dsLinhvuc2->id : ''}}" aria-describedby="emailHelp"disabled="true">
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên lĩnh vực</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên lĩnh vực"
                                        value="{{ isset($dsLinhvuc2->id) ? $dsLinhvuc2->ten_linh_vuc : ''}}" name="ten_linh_vuc" >
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($dsLinhvuc2) ? 'Cập nhật lĩnh vực' : 'Thêm mới'  }}</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
</div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection
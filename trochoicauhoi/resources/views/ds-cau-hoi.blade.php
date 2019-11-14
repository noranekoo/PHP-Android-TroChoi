@extends('layout')
@section('css')
    @include('extends/table-header')
    @include('extends/SA-header')
@endsection
@section('main-content')
@include('sweetalert::alert')
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
					<div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						<h2 class="header-title">Danh Sách Câu Hỏi</h2>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="dataTables_length" id="basic-datatable_length">
							<table id="basic-datatable" class="table dt-responsive nowrap">

                                    <thead>
                                        <tr role="row">
                                        	<th>Câu hỏi</th>
                                        	<th>ID</th>
                                        	<th>Lĩnh vực</th>
                                        	<th>Đáp án A</th>
                                        	<th>Đáp án B</th>
                                        	<th>Đáp án C</th>
                                        	<th>Đáp án D</th>
                                        	<th>Đáp án</th>
                                        	<th></th>
                                        </tr>
                                    </thead>                   
                                
                                    <tbody>
                                   @foreach ($dsCauHoi as $ch)						
							<tr>
							<td>{{$ch->noi_dung}}</td>
							<td>{{$ch->id}}</td>
							<td>{{  App\LinhVuc::find($ch->linh_vuc_id)->ten_linh_vuc }}</td>
							<td>{{$ch->phuong_an_a}}</td>
							<td>{{$ch->phuong_an_b}}</td>
							<td>{{$ch->phuong_an_c}}</td>
							<td>{{$ch->phuong_an_d}}</td>
							<td>{{$ch->dap_an}}</td>
							<td>
                                <form action="{{ url('/cau-hoi/xoa/'.$ch->id) }}" method="GET">
    								<a href="{{ url('/cau-hoi/'.$ch->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></a> 
    								<button class="btn btn-danger waves-effect waves-light" id="sa-warning"><i class="mdi mdi-close"></i></button>
                                 </form>
							</td>
						</tr>
						@endforeach
					</tbody>
                                </table>
                            </div>
                        </div>

			</div> <!-- end card body-->
		</div> <!-- end card -->
		
	</div>
</div>
</div>
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
            {{ isset($dsCauHoi2) ? 'Cập nhật câu hỏi' : 'Thêm mới câu hỏi' }}
        	</h4>
            <form action="{{ 
            isset($dsCauHoi2) ? route('cauhoi.capnhat',$dsCauHoi2->id)
            : route('cauhoi.themmoipost')
            }}" method="POST">
            	@csrf
            	@if ( isset($dsCauHoi2) )
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{ isset($dsCauHoi2->id) ? $dsCauHoi2->id : ''}}" aria-describedby="emailHelp"disabled="true">
                </div>
                @endif
                 <div class="form-group">
                    
                     <label for="linh_vuc_id">Lĩnh vực</label>
                    <select name="linh_vuc_id" id="linh_vuc_id" class=form-control>
					@foreach (App\LinhVuc::all() as $dsLV)
						@if( isset($dsCauHoi2) && $dsCauHoi2->linh_vuc_id == $dsLV->id )
							<option value="{{ $dsLV->id }}" selected="true">
						 	{{ $dsLV->ten_linh_vuc}}</option>
						@else
							<option value="{{ $dsLV->id }}" >
						 	{{ $dsLV->ten_linh_vuc}}</option>
						@endif
					@endforeach
					</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nội dung câu hỏi"
                    value="{{ isset($dsCauHoi2->id) ? $dsCauHoi2->noi_dung : ''}}" name="noi_dung" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Đáp án A</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{ isset($dsCauHoi2->id) ? $dsCauHoi2->phuong_an_a : ''}}" name="phuong_an_a" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Đáp án B</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" 
                    value="{{ isset($dsCauHoi2->id) ? $dsCauHoi2->phuong_an_b : ''}}" name="phuong_an_b" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Đáp án C</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"
                    value="{{ isset($dsCauHoi2->id) ? $dsCauHoi2->phuong_an_c : ''}}" name="phuong_an_c" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Đáp án D</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" 
                    value="{{ isset($dsCauHoi2->id) ? $dsCauHoi2->phuong_an_d : ''}}" name="phuong_an_d" >
                </div>
                <div class="form-group">
                	 <label for="dapan">Đáp án</label>
                    <select name="dap_an" id="dap_an" class=form-control>
					  <option value="A">A</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					  <option value="D" selected>D</option>
					</select>
				</div>
                <button type="submit" class="btn btn-primary waves-effect waves-light">
				{{ isset($dsCauHoi2) ? 'Cập nhật' : 'Thêm mới' }}
                </button>
            </form>

        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
</div>


@endsection

@section('js')
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
@include('extends/table-footer')
    @include('extends/SA-footer')
@endsection
	
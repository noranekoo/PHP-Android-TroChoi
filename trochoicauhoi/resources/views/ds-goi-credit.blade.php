@extends('layout')
@section('css')
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css">
<!--sweet alert -->
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css')}}" />
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
				 <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						<h2 class="header-title">Danh Sách Gói Credit</h2></div>
				<table table id="basic-datatable" class="table dt-responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên gói Credit</th>
							<th>Credit</th>
							<th>Số tiền</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach($dsGoiCredit as $gc)						
						<tr>
							<td>{{$gc->id}}</td>
							<td>{{$gc->ten_goi_credit}}</td>
							<td>{{$gc->credit}}</td>
							<td>{{$gc->so_tien}}</td>
							<td>
								<a href="{{ url('/goi-credit/'.$gc->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline" ></i></a> 
								<a href="{{ url('/goi-credit/xoa/'.$gc->id) }}" class="btn btn-danger waves-effect waves-light "><i class="mdi mdi-close sa-warning"></i></a>
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
                                {{ isset($dsGoiCredit2) ? 'Cập nhật gói Credit' : 'Thêm mới gói Credit' }}</h4>
                                <form action="{{ isset($dsGoiCredit2) ? route('goicredit.capnhat',$dsGoiCredit2->id) :
                                route('goicredit.themmoipost') }}" method="POST">
                                	@csrf
                                    @if ( isset($dsGoiCredit2) )
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ isset($dsGoiCredit2->id) ? $dsGoiCredit2->id : ''}}" aria-describedby="emailHelp"disabled="true">
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tên gói Credit</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên gói credit"
                                        value="{{ isset($dsGoiCredit2->id) ? $dsGoiCredit2->ten_goi_credit : ''}}" name="ten_goi_credit" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Credit</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                        value="{{ isset($dsGoiCredit2->id) ? $dsGoiCredit2->credit : ''}}" name="credit" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số tiền</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" 
                                        value="{{ isset($dsGoiCredit2->id) ? $dsGoiCredit2->so_tien : ''}}" name="so_tien" >
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"> {{ isset($dsGoiCredit2) ? 'Cập nhật' : 'Thêm mới' }}</h4></button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> -->
</div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

        <!-- Sweet alert init js-->
        <script>
        	$(document).on('click','#sa-warning',function(e){
        		e.preventDefault();
        		var ch = $(this);
            Swal.fire({
                title: "Bạn có chắc chắn muốn xóa?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ok!"
            }).then(function(t) {
               if(t.value){
               	ch.parent().submit()}
                })
        	})
        	
        	
        </script>
@endsection
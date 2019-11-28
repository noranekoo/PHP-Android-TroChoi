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
              <h2 class="header-title">Danh Sách Người chơi</h2>
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="dataTables_length" id="basic-datatable_length">
                <table id="basic-datatable" class="table dt-responsive nowrap">
                  <thead>
                      <tr role="row">
                        <tr>
                          <th>ID</th>
                          <th>Tên lĩnh vực</th>
                          <th></th>
                        </tr>
                      </tr>
                  </thead>                   
                 <tbody>
              @foreach ($dsLinhvuc as $lv)            
              <tr>
                <td>{{$lv->id}}</td>
                <td>{{$lv->ten_linh_vuc}}</td>
                <td>
                  <form action="{{ url('/linh-vuc/xoa/'.$lv->id) }}" method="GET">
                    <a href="{{ url('/linh-vuc/'.$lv->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></a>
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
@endsection
@section('js')
  @include('extends/table-footer')
  @include('extends/SA-footer')
@endsection
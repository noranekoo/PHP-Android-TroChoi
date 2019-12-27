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
              <h2 class="header-title">Cấu hình trợ giúp</h2>
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="dataTables_length" id="basic-datatable_length">
                <table id="basic-datatable" class="table dt-responsive nowrap">
                  <thead>
                      <<tr role="row">
                        <tr>
                          <th>ID</th>
                          <th>Loại trợ giúp</th>
                          <th>Thứ tự</th>
                          <th>Credit</th>
                          <th></th>
                        </tr>
                      </tr>
                  </thead>                   
                 <tbody>
              @foreach ($dsCauHinh as $lv)            
              <tr>
                <td>{{$lv->id}}</td>
                <td>{{$lv->loai_tro_giup}}</td>
                <td>{{$lv->thu_tu}}</td>
                <td>{{$lv->credit}}</td>
                <td>
                  <form action="{{route('cauhinh.trogiup.delete',$lv->id)}}" method="GET">
                    <a href="{{ route('cauhinh.trogiup.show',$lv->id) }}" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i></a>
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
              	{{ isset($CauHinh) ? 'Cập nhật' : 'Thêm mới'  }} 
              	
          	</h4>
              <form action="{{
               isset($CauHinh) ? route('cauhinh.trogiup.edit',$CauHinh->id) : 
           	 route('cauhinh.trogiup.store') }}" 
               method="POST">
              	@csrf
              	@if(isset($CauHinh))
                  <div class="form-group">
                      <label for="exampleInputEmail1">ID</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{{ isset($CauHinh->id) ? $CauHinh->id : ''}}" aria-describedby="emailHelp" disabled="true">
                  </div>
                  @endif
                  <div class="form-group">
                      <label for="exampleInputPassword1">Loại trợ giúp</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" 
                      value="{{ isset($CauHinh->id) ? $CauHinh->thu_tu : ''}}" name="loai_tro_giup" >
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Thứ tự</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" 
                      value="{{ isset($CauHinh->id) ? $CauHinh->diem : ''}}" name="thu_tu" >
                  </div>
                   <div class="form-group">
                      <label for="exampleInputPassword1">Credit</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" 
                      value="{{ isset($CauHinh->id) ? $CauHinh->diem : ''}}" name="credit" >
                  </div>
                  <button type="submit" class="btn btn-primary waves-effect waves-light">{{ isset($CauHinh) ? 'Cập nhật' : 'Thêm mới'  }}</button>
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
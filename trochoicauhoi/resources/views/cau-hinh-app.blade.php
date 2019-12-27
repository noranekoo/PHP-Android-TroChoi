@extends('layout')
@section('css')
  @include('extends/table-header')
  @include('extends/SA-header')
@endsection
@section('main-content')
@include('sweetalert::alert')
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
              Cấu hình App             	
          	</h4>
              <form action="{{route('cauhinh.app.edit')}}" method="POST">
              	@csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Cơ hội sai</label>
                    <input type="text" class="form-control" id="chance"
                    value="{{ isset($dsCauHinhApp->id) ? $dsCauHinhApp->co_hoi_sai : ''}}" name="co_hoi_sai"  disabled="true">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Thời gian trả lời</label>
                    <input type="text" class="form-control" id="AnswerTime"
                    value="{{ isset($dsCauHinhApp->id) ? $dsCauHinhApp->thoi_gian_tra_loi : ''}}" name="thoi_gian_tra_loi" disabled="true">
                </div>
                <a id="edit" style="color: white;" onclick="A()" class="btn btn-info waves-effect waves-light"> Sửa</a>
                <button id="sa-warning" type="submit" class="btn btn-success waves-effect waves-light" style="visibility: hidden;"> Xác nhận</button>
              </form>
          </div> <!-- end card-body-->
      </div> <!-- end card-->
  </div>
@endsection
@section('js')
  @include('extends/table-footer')
   <script type="text/javascript">
    function A(){
      document.getElementById("edit").style.visibility = "hidden";
      document.getElementById("sa-warning").style.visibility = "visible";
      document.getElementById("AnswerTime").disabled = false;
      document.getElementById("chance").disabled = false;
    }
    $(document).on('click','#sa-warning',function(e){
      e.preventDefault();
      var ch = $(this);
      Swal.fire({
          title: "CẢNH BÁO",
          text: "Bạn có chắc chắn muốn sửa?",
          type: "warning",
          showCancelButton: !0,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ok",
          cancelButtonText: "Không"
      }).then(function(t) {
         if(t.value){
          ch.parent().submit()}
          })
    })
  </script>
@endsection
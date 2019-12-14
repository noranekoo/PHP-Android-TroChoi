@extends('layout')
@section('main-content')
 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
 @endif
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
	 <form action="{{ route('cauhoi.themmoipost') }}" method="POST">
    	@csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Nội dung</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên lĩnh vực"
            value="" name="noi_dung" >
        </div>
         <div class="form-group">
                                        
             <label for="linh_vuc_id">Lĩnh vực</label>
            <select name="linh_vuc_id" id="linh_vuc_id" class=form-control>
            @foreach (App\LinhVuc::all() as $dsLV)
                <option value="{{ $dsLV->id }}" > {{ $dsLV->ten_linh_vuc }} </option>
            @endforeach
            </select>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phương án A</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phương án A"
            value="" name="phuong_an_a" >
        </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Phương án B</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phương án B"
            value="" name="phuong_an_b" >
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phương án C</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phương án C"
            value="" name="phuong_an_c" >
        </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Phương án D</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phương án D"
            value="" name="phuong_an_d" >
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
        <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm mới</button>
    </form>
</div>
</div>
</div>
</div>
 @endsection
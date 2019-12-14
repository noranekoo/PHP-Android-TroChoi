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
	 <form action="{{ route('goicredit.themmoipost') }}" method="POST">
    	@csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Tên gói credit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" 
            value="" name="ten_goi_credit" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Credit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" 
            value="" name="credit" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Số tiền</label>
            <input type="text" class="form-control" id="exampleInputPassword1" 
            value="" name="so_tien" >
        </div>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm mới</button>
    </form>
</div>
</div>
</div>
</div>
 @endsection
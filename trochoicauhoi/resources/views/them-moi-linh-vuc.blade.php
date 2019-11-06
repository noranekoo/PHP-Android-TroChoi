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
	 <form action="{{ route('linhvuc.themmoipost') }}" method="POST">
    	@csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Tên lĩnh vực</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tên lĩnh vực"
            value="" name="ten_linh_vuc" >
        </div>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm mới</button>
    </form>
</div>
</div>
</div>
</div>
 @endsection
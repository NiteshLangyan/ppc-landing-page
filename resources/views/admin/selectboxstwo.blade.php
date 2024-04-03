@extends('admin.layout.main')
@section('main')
<style>
    img {
	width: 160px;
	/* background: #696cff; */
	padding: 9px;
}
</style>
<hr class="my-5">
<div class="row">
  <div class="col-12">
    <div class="card"> @if(Session::has('success'))
      <div class="card-body">
        <div class="alert alert-success alert-dismissible" role="alert">{{Session::get('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif
      <div class="card-body">
        <form method="POST" action="{{ $url }}" class="row g-3" enctype="multipart/form-data">
          @csrf
          <div class="col-md-4">
            <label class="form-label" >Sort No.</label>
            <input class="form-control" type="text"  name="sort" required  @if(!empty($selectboxstwo->sort)) value="{{ $selectboxstwo->sort }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('sort') {{$message}} @enderror </small>
        </div>

          <div class="col-md-4">
            <label class="form-label" >Text</label>
            <input class="form-control" type="text" name="heading" required  @if(!empty($selectboxstwo->heading)) value="{{ $selectboxstwo->heading }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('heading') {{$message}} @enderror </small>
        </div>
     
       
        
          <div class="col-12">
            <button type="submit" name="submitButton" class="btn btn-primary">Submit </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<hr class="my-5">
@endsection

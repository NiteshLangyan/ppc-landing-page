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
       <div class="col-md-6">
          <div class="col-md-12">
              <label class="form-label" >Image </label>
              <input class="form-control" type="file"  name="image" @if(empty($dataId->image)) required  @endif>
          </div>
          <div class="col-md-12">
              @if(!empty($dataId->image)) <img src="{{ url('storage/app/' . $dataId->image) }}" style="width: 50%;"> @endif 
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('image') {{$message}} @enderror </small>
          </div>
        </div> 
            <div class="col-md-12"> 
              <label class="form-label" >Heading</label> 
              <input class="form-control" type="text"  name="heading" required  @if(!empty($dataId->heading)) value="{{ $dataId->heading }}" @endif >
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

@extends('admin.layout.main')
@section('main')
<style>
    img {
	width: 160px; 
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
          <div class="col-md-12">
            <label class="form-label" >Description </label>
            <textarea name="text"  class="form-control"  >{{ $contactus->text }}</textarea>
            
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('text') {{$message}} @enderror </small>
         </div>
          <div class="col-md-4">
            <label class="form-label" >Phone </label>
            <input class="form-control" type="text"  name="phone" required  @if(!empty($contactus->phone)) value="{{ $contactus->phone }}" @endif > 
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('phone') {{$message}} @enderror </small>
         </div>
          <div class="col-md-4">
            <label class="form-label" >Email </label>
            <input class="form-control" type="text"  name="email" required  @if(!empty($contactus->email)) value="{{ $contactus->email }}" @endif > 
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('email') {{$message}} @enderror </small>
         </div>
          

          <div class="col-md-12">
            <label class="form-label" >location </label>
            <input class="form-control" type="text"  name="location" required  @if(!empty($contactus->location)) value="{{ $contactus->location }}" @endif > 
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('location') {{$message}} @enderror </small>
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
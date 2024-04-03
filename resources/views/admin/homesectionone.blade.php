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
          <div class="col-md-12">
            <label class="form-label" >Image </label>
            <input class="form-control" type="file"  name="image" @if(empty($applicantin->image)) required  @endif>
        </div>
        <div class="col-md-12">
            @if(!empty($applicantin->image)) <img src="{{ url('storage/app/' . $applicantin->image) }}" style="width: 50px;"> @endif

            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('image') {{$message}} @enderror </small>
        </div> 
 
          <div class="col-md-6">
            <label class="form-label" >Heading</label>
            <input class="form-control" type="text"  name="heading" required  @if(!empty($applicantin->heading)) value="{{ $applicantin->heading }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('heading') {{$message}} @enderror </small>
        </div>
          <div class="col-md-6">
            <label class="form-label" >Subheading</label>
            <input class="form-control" type="text"  name="subheading" required  @if(!empty($applicantin->subheading)) value="{{ $applicantin->subheading }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('subheading') {{$message}} @enderror </small>
        </div>
        <div class="col-md-12">
          <label class="form-label" >Description </label>
          <textarea name="description"  class="form-control" >@if(!empty($applicantin->description)){{$applicantin->description}}@else{{old('description')}}@endif</textarea>
          <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('description') {{$message}} @enderror </small>
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

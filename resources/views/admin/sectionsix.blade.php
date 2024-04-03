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
            <label class="form-label" >Heading </label> 
            <input class="form-control" type="text"  name="heading" required  @if(!empty($dataId->heading)) value="{{ $dataId->heading }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('heading') {{$message}} @enderror </small>
         </div>   
          <div class="col-md-12">
              <label class="form-label" >First Image </label>
              <input class="form-control" type="file"  name="image" @if(empty($dataId->image)) required  @endif>
          
                @if(!empty($dataId->image)) <img src="{{ url('storage/app/' . $dataId->image) }}" style="width: 20%;"> @endif 
                <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('image') {{$message}} @enderror </small> 
          </div>
         
          
          <div class="col-md-12">
            <label class="form-label" >First Heading </label>
            <textarea name="firstHeading" id="firstcode" class="form-control" >@if(!empty($dataId->firstHeading)){{$dataId->firstHeading}}@else{{old('firstHeading')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('firstHeading') {{$message}} @enderror </small>
          </div>
          <div class="col-md-12">
            <label class="form-label" >First Description </label>
            <textarea name="firstDescription" id="firstcodee"  class="form-control" >@if(!empty($dataId->firstDescription)){{$dataId->firstDescription}}@else{{old('firstDescription')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('firstDescription') {{$message}} @enderror </small>
          </div>


          <div class="col-md-12">
            <label class="form-label"> Second Heading </label>
            <textarea name="secondHeading" id="firstcodeee" class="form-control" >@if(!empty($dataId->secondHeading)){{$dataId->secondHeading}}@else{{old('secondHeading')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('secondHeading') {{$message}} @enderror </small>
          </div>
          <div class="col-md-12">
            <label class="form-label" >second Description </label>
            <textarea name="secondDescription" id="firstcodeeee"  class="form-control" >@if(!empty($dataId->secondDescription)){{$dataId->secondDescription}}@else{{old('secondDescription')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('secondDescription') {{$message}} @enderror </small>
          </div>

        
          <div class="col-md-12">
            <label class="form-label"> third Heading </label>
            <textarea name="thirdHeading" id="firstcodeeeee" class="form-control" >@if(!empty($dataId->thirdHeading)){{$dataId->thirdHeading}}@else{{old('thirdHeading')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('thirdHeading') {{$message}} @enderror </small>
          </div>
          <div class="col-md-12">
            <label class="form-label" >third Description </label>
            <textarea name="thirdDescription" id="firstcodeeeeee"  class="form-control" >@if(!empty($dataId->thirdDescription)){{$dataId->thirdDescription}}@else{{old('thirdDescription')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('thirdDescription') {{$message}} @enderror </small>
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

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
              <label class="form-label" >First Image </label>
              <input class="form-control" type="file"  name="firstImage" @if(empty($dataId->firstImage)) required  @endif>
          </div>
          <div class="col-md-12">
              @if(!empty($dataId->firstImage)) <img src="{{ url('storage/app/' . $dataId->firstImage) }}" style="width: 50%;"> @endif 
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('firstImage') {{$message}} @enderror </small>
          </div>
        </div>


          <div class="col-md-6">
            <div class="col-md-12"> 
              <label class="form-label" >Button Text</label> 
              <input class="form-control" type="text"  name="btnText" required  @if(!empty($dataId->btnText)) value="{{ $dataId->btnText }}" @endif >
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('btnText') {{$message}} @enderror </small>
           </div> 
           <div class="col-md-12"> 
            <label class="form-label" >Button Link</label> 
            <input class="form-control" type="text"  name="btnLink" required  @if(!empty($dataId->btnLink)) value="{{ $dataId->btnLink }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('btnLink') {{$message}} @enderror </small>
         </div> 
         
        <div class="col-md-12">
          <label class="form-label" >First Description </label>
          <textarea name="firstDescription" id="firstcode" class="form-control" >@if(!empty($dataId->firstDescription)){{$dataId->firstDescription}}@else{{old('firstDescription')}}@endif</textarea>
          <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('firstDescription') {{$message}} @enderror </small>
        </div>
          </div>
           
          <div class="col-md-6">  
              <div class="col-md-12">
                <label class="form-label" >Second Description </label>
                <textarea name="secondDescription" id="firstcodee" class="form-control" >@if(!empty($dataId->secondDescription)){{$dataId->secondDescription}}@else{{old('secondDescription')}}@endif</textarea>
                <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('secondDescription') {{$message}} @enderror </small>
              </div>
          </div>
   
          <div class="col-md-6">
            <div class="col-md-12">
                <label class="form-label" >Second Image </label>
                <input class="form-control" type="file"  name="secondImage" @if(empty($dataId->secondImage)) required  @endif>
            </div>
            <div class="col-md-12">
                @if(!empty($dataId->secondImage)) <img src="{{ url('storage/app/' . $dataId->secondImage) }}" style="width: 50%;"> @endif 
                <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('secondImage') {{$message}} @enderror </small>
            </div>
          </div>

          <div class="col-md-12">
            <div class="col-md-12">
                <label class="form-label" >Third Image </label>
                <input class="form-control" type="file"  name="thirdImage" @if(empty($dataId->thirdImage)) required  @endif>
            </div>
            <div class="col-md-12">
                @if(!empty($dataId->thirdImage)) <img src="{{ url('storage/app/' . $dataId->thirdImage) }}" style="width: 50%;"> @endif 
                <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('thirdImage') {{$message}} @enderror </small>
            </div>
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

@extends('admin.layout.main')
@section('main')
<style>
    img {
	width: 160px;
	/* background: #696cff; */
	padding: 9px;
}
</style>
{{-- <hr class="my-5"> --}}
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
          {{-- <div class="col-md-4">
            <label class="form-label" >Header logo </label>
            <input class="form-control" type="file"  name="headlogo" @if(empty($settingid->headlogo)) required  @endif>
            @if(!empty($settingid->headlogo)) <img src="{{ url('storage/app/' . $settingid->headlogo) }}" style="width: 160px;background-color: #ccc;"> @endif
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('headlogo') {{$message}} @enderror </small>
        </div>
        <div class="col-md-4">
            <label class="form-label" >footer logo </label>
            <input class="form-control" type="file"  name="footlogo" @if(empty($settingid->footlogo)) required  @endif>
            @if(!empty($settingid->footlogo)) <img src="{{ url('storage/app/' . $settingid->footlogo) }}" style="width: 160px;background-color: #ccc;"> @endif <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('footlogo') {{$message}} @enderror </small>
        </div>
        <div class="col-md-4">
            <label class="form-label" >favicon logo </label>
            <input class="form-control" type="file"  name="favlogo" @if(empty($settingid->favlogo)) required  @endif>
            @if(!empty($settingid->favlogo)) <img src="{{ url('storage/app/' . $settingid->favlogo) }}" style="width: 50px;background-color: #ccc;"> @endif <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('favlogo') {{$message}} @enderror </small>
        </div> --}}

         {{-- <hr class="my-5"> --}}
          <div class="col-md-6">
            <label class="form-label" >Meta Title </label>
            <input type="text"  class="form-control" @if(!empty($settingid->msettingname)) value="{{ $settingid->msettingname }}" @else value="{{ old('msettingname') }}" @endif placeholder="setting Name" name="msettingname" /> <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('msettingname') {{$message}} @enderror </small>
         </div>
         <div class="col-md-6">
            <label class="form-label" >Meta keywords </label>
            <input type="text"  class="form-control" @if(!empty($settingid->keywords)) value="{{ $settingid->keywords }}" @else value="{{ old('keywords') }}" @endif placeholder="Meta keywords" name="keywords" /> <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('keywords') {{$message}} @enderror </small>
         </div>
          {{-- <div class="col-md-4">
            <label class="form-label" >Meta Image </label>
            <input class="form-control" type="file"  name="mimage" @if(empty($settingid->mimage)) required  @endif>
            @if(!empty($settingid->mimage)) <img src="{{ url('storage/app/' . $settingid->mimage) }}" style="width: 160px;background-color: #ccc;"> @endif <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('mimage') {{$message}} @enderror </small>
        </div> --}}
        <div class="col-md-12">
          <label class="form-label" >Meta Description </label>
          <textarea name="mdesp" class="form-control" >@if(!empty($settingid->mdesp)){{$settingid->mdesp}}@else{{old('mdesp')}}@endif</textarea>
          <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('mdesp') {{$message}} @enderror </small>
       </div>
       <div class="col-md-12">
         <label class="form-label" >Script </label>
         <textarea name="script" class="form-control" >@if(!empty($settingid->script)){{$settingid->script}}@else{{old('script')}}@endif</textarea>

      </div>
       <div class="col-md-12">
         <label class="form-label" >Google analytic tags</label>
         <textarea name="footertext"  id="firstcod" class="form-control" >@if(!empty($settingid->footertext)){{$settingid->footertext}}@else{{old('footertext')}}@endif</textarea> 
      </div>

      <div class="col-md-6">
        <label class="form-label" >From Email </label>
        <input type="text"  class="form-control" @if(!empty($settingid->fromEmail)) value="{{ $settingid->fromEmail }}" @else value="{{ old('fromEmail') }}" @endif placeholder="From Email" name="fromEmail" /> <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('fromEmail') {{$message}} @enderror </small>
     </div>
     <div class="col-md-6">
    <label class="form-label">To Email <small>(Multiple emails can be added, separated by commas)</small></label>
      <input type="text"  class="form-control" @if(!empty($settingid->toEmail)) value="{{ $settingid->toEmail }}" @else value="{{ old('toEmail') }}" @endif placeholder="To Email" name="toEmail" /> <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('toEmail') {{$message}} @enderror </small>
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

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
              <input class="form-control" type="file"  name="image" @if(empty($dataId->image)) required  @endif>
          
                @if(!empty($dataId->image)) <img src="{{ url('storage/app/' . $dataId->image) }}" style="width: 50%;"> @endif 
                <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('image') {{$message}} @enderror </small> 
          </div>
          <div class="col-md-12">
            <label class="form-label" >Heading </label>
            <textarea name="heading" id="firstcode" class="form-control" >@if(!empty($dataId->heading)){{$dataId->heading}}@else{{old('heading')}}@endif</textarea>
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('heading') {{$message}} @enderror </small>
          </div>
     

         <div class="col-md-12"> 
            <label class="form-label" >Price </label> 
            <input class="form-control" type="text"  name="priceOne" required  @if(!empty($dataId->priceOne)) value="{{ $dataId->priceOne }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('priceOne') {{$message}} @enderror </small>
         </div>  
         <div class="col-md-12"> 
            <label class="form-label" >Description </label> 
            <input class="form-control" type="text"  name="descriptionOne" required  @if(!empty($dataId->descriptionOne)) value="{{ $dataId->descriptionOne }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('descriptionOne') {{$message}} @enderror </small>
         </div>  


         <div class="col-md-12"> 
            <label class="form-label" >Price </label> 
            <input class="form-control" type="text"  name="priceTwo" required  @if(!empty($dataId->priceTwo)) value="{{ $dataId->priceTwo }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('priceTwo') {{$message}} @enderror </small>
         </div>  
         <div class="col-md-12"> 
            <label class="form-label" >Description </label> 
            <input class="form-control" type="text"  name="descriptionTwo" required  @if(!empty($dataId->descriptionTwo)) value="{{ $dataId->descriptionTwo }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('descriptionTwo') {{$message}} @enderror </small>
         </div>  


         <div class="col-md-12"> 
            <label class="form-label" >Price </label> 
            <input class="form-control" type="text"  name="priceThree" required  @if(!empty($dataId->priceThree)) value="{{ $dataId->priceThree }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('priceThree') {{$message}} @enderror </small>
         </div>  
         <div class="col-md-12"> 
            <label class="form-label" >Description </label> 
            <input class="form-control" type="text"  name="descriptionThree" required  @if(!empty($dataId->descriptionThree)) value="{{ $dataId->descriptionThree }}" @endif >
            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('descriptionThree') {{$message}} @enderror </small>
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

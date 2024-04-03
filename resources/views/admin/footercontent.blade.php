@extends('admin.layout.main') @section('main')

<div class="row">
  <div class="col-12">
    <div class="card">
        @if(Session::has('success'))
      <div class="card-body">
        <div class="alert alert-success alert-dismissible" role="alert">{{Session::get('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif
        @if(Session::has('failed'))
      <div class="card-body">
        <div class="alert alert-danger alert-dismissible" role="alert">{{Session::get('failed')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif
      <div class="card-body">
        <form id="formy" class="form-repeater" method="POST" action="{{ $url }}" class="row g-3" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div  class="col-md-8"> 
                <label class="form-label">Footer Logo</label>
                <input type="file"  class="form-control"  name="footerLogo" @if(!empty($socialin->footerLogo)) {{ $socialin->footerLogo }}@endif> 
            </div>
            <div class="col-md-4">
              @if(!empty($socialin->footerLogo)) <img src="{{ url('storage/app/' . $socialin->footerLogo) }}" style="width: 50px;"> @endif 
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('footerLogo') {{$message}} @enderror </small>
          </div>
  
            <div class="col-md-12   ">
                <label class="form-label">heading </label>
                <input type="text" class="form-control"    name="heading" value= "@if(!empty($socialin->heading)) {{ $socialin->heading }} @endif"  required>
            </div>
            <div class="col-md-4">
              <label class="form-label" >Description 1 </label>
              <textarea name="description" id="description" class="form-control" >@if(!empty($socialin->description)){{$socialin->description}}@else{{old('description')}}@endif</textarea>
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('description') {{$message}} @enderror </small>
            </div>
            
            <div class="col-md-4">
              <label class="form-label" >Description 2 </label>
              <textarea name="description2" id="description2" class="form-control" >@if(!empty($socialin->description2)){{$socialin->description2}}@else{{old('description2')}}@endif</textarea>
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('description2') {{$message}} @enderror </small>
            </div>
            
            <div class="col-md-4">
              <label class="form-label" >Description 3 </label>
              <textarea name="description3" id="description3" class="form-control" >@if(!empty($socialin->description3)){{$socialin->description3}}@else{{old('description3')}}@endif</textarea>
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('description3') {{$message}} @enderror </small>
            </div>
        </div>
        <div class="col-12 mt-3">
          <button id="your-id" type="submit" name="submitButton" class="btn btn-primary">Submit </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<hr class="my-5">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery code to handle adding and removing input fields -->

<script>
    function onlyNumberKey(evt) {

        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && ASCIICode != 46 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>
@endsection

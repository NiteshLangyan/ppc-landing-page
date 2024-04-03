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

            <div  class="col-md-12">


                <label class="form-label">Logo Image</label>
                <input type="file"  class="form-control"  placeholder="image" name="image" @if(!empty($socialin->image)) {{ $socialin->image }}@endif>
  
            </div>
            <div class="col-md-12 mt-2">
              @if(!empty($socialin->image)) <img src="{{ url('storage/app/' . $socialin->image) }}" style="width: 40%;"> @endif
  
              <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('image') {{$message}} @enderror </small>
          </div>
  
            {{-- <div class="col-md-4  mt-3">
                <label class="form-label">Button link  </label>
                <input type="text" class="form-control"  placeholder="Button Link " name="link" @if(!empty($socialin->link)) value="{{ $socialin->link }}" @endif required>
            </div> --}}


           
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

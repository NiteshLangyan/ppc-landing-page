@extends('admin.layout.main')
@section('main')

    <div class="row ">
      <div class="col-12 ">
        <div class="card">
            @if(Session::has('success'))
            <div class="card-body">
                <div class="alert alert-success alert-dismissible" role="alert">{{Session::get('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>
              </div>
         @endif
            @if(Session::has('fail'))
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible" role="alert">{!! Session::get('fail') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                  </button>
                </div>
              </div>
         @endif
          <div class="card-body  mt-4"> 
            <form  method="POST" action="{{ $url }}" class="row g-3"> @csrf
                    <div class="row ">

                        {{-- <div class="col-md-12">
                            <label class="form-label" for="formValidationName">Terms & Conditions Page Heading</label>
                            <input type="text" id="formValidationName" class="form-control"  placeholder="Text" name="heading" @if(!empty($dataperid->heading )) value="{{ $dataperid->heading }}" @else value="{{ old('heading') }}" @endif>
                            @error('heading')  <small class="text-danger">{{ $message }}</small>@enderror   
                        </div> --}}
                        <div class="col-md-12">
                            <label class="form-label" for="formValidationNamess">Terms & Conditions Content</label>
                            @error('description')  <small class="text-danger">{{ $message }}</small>@enderror
                            <textarea type="text" id="firstcode" class="form-control" placeholder="policy text" rows="3" name="description">@if(!empty($dataperid->description)){{ $dataperid->description }} @else {{ old('description') }} @endif</textarea>
                        </div> 
                            <div class="col-12 mt-2">
                                <button type="submit" name="submitButton" class="btn btn-primary">Submit
                                </button>
                            </div>
                    </div>
            </form>
          </div>
        </div>
      </div>
    </div>


@endsection

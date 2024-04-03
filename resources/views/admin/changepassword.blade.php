@extends('admin.layout.main')
@section('main')

    <div class="row">
      <div class="col-12">
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
          <div class="card-body">
            <form  method="POST" action="{{ $url }}" class="row g-3">
@csrf
              <div class="col-md-6">
                <label class="form-label" for="formValidationName">Current Password </label>
                <input class="form-control" type="text" name="cpassword" placeholder="Current Password *" value="{{old('cpassword')}}" />
                <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('cpassword')
                    {{$message}}
                @enderror </small>
              </div>
              <div class="col-md-6">

              </div>
              <div class="col-md-6">
                <div class="form-password-toggle">
                  <label class="form-label" for="formValidationPass">New Password   </label>
                  <div class="input-group input-group-merge">
                    <input class="form-control" type="password" id="formValidationPass" name="password"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
                    <span class="input-group-text cursor-pointer" id="multicol-password2">
                      <i class="bx bx-hide">
                      </i>
                    </span>
                  </div>
                  <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('password')
                    {{$message}}
                @enderror </small>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-password-toggle">
                  <label class="form-label" for="formValidationConfirmPass">Confirm Password </label>
                  <div class="input-group input-group-merge">
                    <input class="form-control" type="password" id="formValidationConfirmPass"  name="password_confirmation"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
                    <span class="input-group-text cursor-pointer" id="multicol-confirm-password2">
                      <i class="bx bx-hide">
                      </i>
                    </span>
                  </div>
                  <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('password_confirmation')
                    {{$message}}
                @enderror </small>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="submitButton" class="btn btn-primary">Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


@endsection

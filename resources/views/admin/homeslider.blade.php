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
                            <div class="card">
                                @if(Session::has('success'))
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
                                            <label class="form-label">Heading</label>
                                            <input class="form-control" type="text" name="heading" required @if(!empty($applicantin->heading)) value="{{ $applicantin->heading }}" @endif>
                                            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('heading') {{$message}} @enderror </small> 
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Author Name</label>
                                            <input class="form-control" type="text" name="author" required @if(!empty($applicantin->author)) value="{{ $applicantin->author }}" @endif>
                                            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('author') {{$message}} @enderror </small>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Description </label>
                                            <textarea name="content" id="firstcode" class="form-control">@if(!empty($applicantin->content)){{$applicantin->content}}@else{{old('content')}}@endif</textarea>
                                            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('content') {{$message}} @enderror </small>
                                        </div>
<div class="col-md-6">
                                            <label class="form-label">Image </label>
                                            <input class="form-control" type="file" name="image" @if(empty($applicantin->image)) required @endif>
                                        </div>
                                        <div class="col-md-4">
                                            @if(!empty($applicantin->image)) <img src="{{ url('storage/app/' . $applicantin->image) }}" style="width: 50px;"> @endif
                                            <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('image') {{$message}} @enderror </small>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label class="form-label">Status</label>
                                            <div class="col-md">
                                                <!-- Active Radio Button -->
                                                <div class="form-check">
                                                    <input name="status" class="form-check-input" type="radio" value="active" id="defaultRadio1" @if(!empty($currentin->status)) @if($currentin->status=='active') checked @endif @else checked @endif>
                                                    <label class="form-check-label" for="defaultRadio1">
                                                        Active
                                                    </label>
                                                </div>
                                                <!-- Inactive Radio Button -->
                                                <div class="form-check">
                                                    <input name="status" class="form-check-input" type="radio" value="inactive" id="defaultRadio2" @if(!empty($currentin->status)) @if($currentin->status=='inactive') checked @endif @endif>
                                                    <label class="form-check-label" for="defaultRadio2">
                                                        Inactive
                                                    </label>
                                                </div>
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

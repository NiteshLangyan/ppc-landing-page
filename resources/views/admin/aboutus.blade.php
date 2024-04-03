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
    <div class="card"> @if(Session::has('success'))
      <div class="card-body">
        <div class="alert alert-success alert-dismissible" role="alert">{!!Session::get('success')!!}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif
      <div class="card-body">
        <form method="POST" action="{!! $url !!}" class="row g-3" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <label class="form-label" >Background Image</label>
              <input class="form-control" type="file"  name="image" @if(empty($aboutus->image)) required  @endif> </div>
            <div class="col-md-8"> @if(!empty($aboutus->image)) <img src="{!! url('storage/app/' . $aboutus->image) !!}" style="width:100%" > @endif </div>
            <div class="col-md-12 mt-2">
              <div class="row">
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label" >Count </label>
                      <input type="text" class="form-control" name="count" value="{!! $aboutus->count !!}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" >Text </label>
                      <input type="text" class="form-control" name="text" value="{!! $aboutus->text !!}">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label" >Count </label>
                      <input type="text" class="form-control" name="countt" value="{!! $aboutus->countt !!}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" >Text </label>
                      <input type="text" class="form-control" name="textt" value="{!! $aboutus->textt !!}">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label" >Count </label>
                      <input type="text" class="form-control" name="counttt" value="{!! $aboutus->counttt !!}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" >Text </label>
                      <input type="text" class="form-control" name="texttt" value="{!! $aboutus->texttt !!}">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12">
                      <label class="form-label" >Count </label>
                      <input type="text" class="form-control" name="countttt" value="{!! $aboutus->countttt !!}">
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" >Text </label>
                      <input type="text" class="form-control" name="textttt" value="{!! $aboutus->textttt !!}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-4">
              <div class="row">
                <div class="col-md-12">
                  <label class="form-label" >Left First Line </label>
                  <input class="form-control"  type="text"   name="ltext" required  @if(!empty($aboutus->ltext)) value="{!! $aboutus->ltext !!}" @endif > <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('ltext') {!!$message!!} @enderror </small> </div>
                <div class="col-md-12">
                  <label class="form-label" >Left Second Line </label>
                  <input class="form-control"  type="text"   name="ltextt" required  @if(!empty($aboutus->ltextt)) value="{!! $aboutus->ltextt !!}" @endif > <small style="font-size: 70%; color: #ec1b1b; text-transform: capitalize;"> @error('ltextt') {!!$message!!} @enderror </small> </div>
              </div>
            </div>
            <div class="col-md-8 mt-4">
              <div class="row">
                <div class="col-md-12">
                  <label class="form-label" >Right First text </label>
                  <textarea name="paratext" class="form-control"   >{!! $aboutus->paratext !!}</textarea>
                </div>
                <div class="col-md-12 mt-1">
                  <label class="form-label" >Right Second text </label>
                  <textarea name="paratextt" class="form-control"   >{!! $aboutus->paratextt !!}</textarea>
                </div>
              </div>
            </div>

          </div>
          <hr class="my-5">
          <div class="col-md-4">
            <label class="form-label" >Background imagee</label>
            <input class="form-control" type="file"  name="imagee" @if(empty($aboutus->imagee)) required  @endif> </div>
          <div class="col-md-8"> @if(!empty($aboutus->imagee)) <img src="{!! url('storage/app/' . $aboutus->imagee) !!}" style="width:100%" > @endif
        </div>
          <div class="col-12">
            <label class="form-label" >Heading first line</label>
            <input type="text" class="form-control" name="heading" value="{!! $aboutus->heading !!}">
        </div>
          <div class="col-12">
            <label class="form-label" >Heading second line</label>
            <input type="text" class="form-control" name="headingg" value="{!! $aboutus->headingg !!}">
        </div>
          <div class="col-12">
            <label class="form-label" >Text line</label>
            <textarea name="headinggtext" class="form-control"   >{!! $aboutus->headinggtext !!}</textarea> 
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

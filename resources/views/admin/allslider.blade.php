@extends('admin.layout.main') @section('main')
  <hr class="my-5">
  <div class="row">
    <div class="col-12">
      <div class="card">
        @if(Session::has('success')) <div class="card-body">
            <div class="alert alert-success alert-dismissible" role="alert">{{Session::get('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div> @endif
        <div class="card-datatable table-responsive">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>Sr.no </th>
                <th>First Text</th> 
                <th>Second Text</th>  
                <th>Edit </th>
                <th>Delete </th>
              </tr>
            </thead>
            <tbody>
                @if(!$slider->isEmpty())
                 @foreach($slider as $listing)
                <tr>
                <td>{{ $listing->sort }} </td>
                <td>{{ $listing->firstText }} </td> 
                <td>{{ $listing->secondText }} </td> 
                <td> <a href="{{ url('') }}/adm/slider/{{ $listing->id }}">
                    <button type="button" class="btn btn-warning"><span class="tf-icons bx bx-pencil"></span> Edit</button>
                 </a>   </td>
                <td>  <a href="{{ url('') }}/adm/sliderdel/{{ $listing->id }}" onclick="return confirm('Are you Sure?')">
                    <button type="button" class="btn btn-danger"><span class="tf-icons bx bx-trash"></span>Delete</button>
                </a>
                </td>
              </tr>
               @endforeach
               @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <hr class="my-5">
  @endsection

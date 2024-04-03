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
                <th>Name </th>
                <th>Email</th>
                <th>Phone </th>
                <th>query</th>
                <th>query</th>
                <th>query</th> 
                <th>query</th> 
                <th>query</th> 
                <th>query</th> 
                <th>Date </th>
                 <th>Delete </th>
              </tr>
            </thead>
            <tbody> @if(!$contact->isEmpty()) @php $i=1; @endphp @foreach($contact as $listing) <tr>

                <td>{{ $loop->iteration }} </td>
                <td>{{ $listing->name }} </td>
                <td>{{ $listing->email }} </td>
                <td>{{ $listing->phone }} </td> 
                <td>{{ $listing->interestedinchicken }} </td> 
                <td>{{ $listing->qualifiedtofranchisee }} </td> 
                <td>{{ $listing->areaofinterest }} </td>  
                <td>{{ $listing->selectboxone }} </td>  
                <td>{{ $listing->selectboxtwo }} </td>  
                <td>{{ $listing->selectboxthree }} </td>  
                <td>{{ date("F j, Y h:i A", strtotime($listing->created_at)); }} </td>
                <td>
                  <a href="{{ url('') }}/adm/contact/delete/{{ $listing->id }}" onclick="return confirm('Are you Sure?')">
                    <button type="button" class="btn btn-danger">Delete </button>
                  </a>
                </td>
              </tr> @endforeach @endif </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-5">
  @endsection

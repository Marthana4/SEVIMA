@extends('Home')

@section('content')
  <section class="section">
    <div class="section-body">
      <h2 class="section-title">category</h2>
      <p class="section-lead">
        You can manage all category, such as editing, deleting and more.
      </p>
      <div class="row">
        <div class="col-md-12"> 
          <div class="card">
            <div class="card-header">
              <form method="GET" action="{{ url('categories') }}"></form>
              <form class="form-inline">
                <div class="search-element">
                  <input class="form-control" type="text" name="keyword" placeholder="Search" >
                  <button class="btn btn btn-icon btn-light" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </form>
              <h4></h4>
              <div class="card-header-action ">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-2">
                    <a href="{{route ('add-category') }}" class="btn btn-success">Add Course</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th><center> No </center> </th>
                    <th><center> Name </center></th>
                    <th><center> Course </center></th>
                    <th><center> Status </center></th>
                    <th><center>Action</center></th> 
                  </tr>
                  @foreach($category as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->course_title}}</td>
                    @if($value->status =='inactive')
                        <td><div class="badge badge-dark">{{$value->status}}</div></td>
                    @else
                        <td><div class="badge badge-primary">{{$value->status}}</div></td>
                    @endif</td>
                        <td>
                  </tr>
                 @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
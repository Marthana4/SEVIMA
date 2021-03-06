@extends('Home')

@section('content')
  <section class="section">
    <div class="section-body">
      <h2 class="section-title">Users</h2>
      <p class="section-lead">
        You can manage all Users, such as editing, deleting and more.
      </p>
      <div class="row">
        <div class="col-md-12"> 
          <div class="card">
            <div class="card-header">
              <form method="GET" action="{{ url('users') }}"></form>
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
                    <a href="{{route ('add-user') }}" class="btn btn-success">Add User</a>
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
                    <th><center> Addres </center></th>
                    <th><center> Phone Number </center></th>
                    <th><center> Email </center></th>
                    <th ><center>Role</center></th> 
                    <th ><center>Action</center></th> 
                  </tr>
                  @foreach($user as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->phone_number}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->role}}</td>
                    <td>
                      <form action=" {{ route('delete-user', $value->id) }} " method="post">
                      @csrf
                      @method('delete')
                      <button onclick="return confirm('Are you sure delete this data?')" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i></button>
                      </form>
                    </td>
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
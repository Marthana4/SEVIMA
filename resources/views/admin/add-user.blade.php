@extends('Home')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="card card-statistic-2">
            <div class="card-stats">
              <div class="col-14 col-sm-12 offset-sm-1 col-md-10 offset-md-2 col-lg-10 offset-lg-2 col-xl-10 offset-xl-1">
                <div class="card ">
                  <div class="card-header"><h3>Add User</h3></div>

                  <div class="card-body">
                    <form method="POST" action="{{ route ('submit-user') }}">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" autofocus>
                        </div>
                        <div class="form-group col-6">
                          <label for="phone_number">Phone Number</label>
                          <input type="text" class="form-control" name="phone_number">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group col-6">
                          <label>Role</label>
                          <select class="form-control selectric" name="role">
                            <option value="">--select role--</option>
                            <option value="teacher">Teacher</option>
                            <option value="admin">Admin</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-divider">
                        Username & Password
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                        <div class="form-group col-6">
                          <label for="password" class="d-block">Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                          Submit
                        </button>
                      </div>
                    </form>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection
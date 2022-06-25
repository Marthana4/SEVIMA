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
                  <div class="card-header"><h3>Add Student Course</h3></div>

                  <div class="card-body">
                    <form method="POST" action="{{ route ('submit-category') }}">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="form-group col-12">
                        <label>Name</label>
                        <select class="form-control selectric" name="name">
                          <option value="">--select User--</option>
                          @foreach($users as $user)
                          <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>

                      <div class="row">
                        <label>Course</label>
                        <select class="form-control selectric" name="name">
                          <option value="">--select Course--</option>
                          @foreach($courses as $course)
                          <option value="{{$course->id_course}}">{{$course->course_title}}</option>
                          @endforeach
                        </select>
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
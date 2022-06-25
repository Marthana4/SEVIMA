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
                  <div class="card-header"><h3>Edit User</h3></div><div class="card-body">
                    <form method="POST" action="{{ url('courses/'.$model->id_course) }}">
                      @csrf
                      <input type="hidden" name="_method" value="PATCH">
                      <div class="row">
                        <div class="form-group col-12">
                          <label for="course_title">Course Title</label>
                          <input type="text" class="form-control" name="course_title" autofocus value="{{ $model->course_title }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12">
                          <label for="subject">Subject</label>
                          <input type="text" class="form-control" name="subject" autofocus value="{{ $model->subject }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12">
                          <label for="course_video">Course Video</label>
                          <input type="text" class="form-control" name="course_video" autofocus value="{{ $model->course_video }}">
                        </div>
                      </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Update
                      </button>
                  </div>
                  </form>
              </div>
          </div> 
        </div>
      </div>
    </section>
  </div>

@endsection
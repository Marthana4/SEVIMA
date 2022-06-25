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
                  <div class="card-header"><h3>Add Course</h3></div>

                  <div class="card-body">
                    <form method="POST" action="{{ route ('submit-user') }}">
                      {{ csrf_field() }}
                      <div class="row">
                        <div class="form-group col-12">
                          <label for="course_title">Course Title</label>
                          <input type="text" class="form-control" name="course_title" autofocus>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12">
                          <label for="image">Upload Gambar</label>
                          <input type="file" class="form-control" name="image"
                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <img id="blah" alt="" width="200" height="150" />
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12">
                          <label for="subject">Subject</label>
                          <textarea id="txtArea" class="form-control" name="subject" rows="10" cols="70"></textarea>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12">
                          <label for="course_video">Course Video</label>
                          <input type="text" class="form-control" name="course_video" autofocus>
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
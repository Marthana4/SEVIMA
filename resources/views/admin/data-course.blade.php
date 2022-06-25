@extends('Home')

@section('content')
  <section class="section">
    <div class="section-body">
      <h2 class="section-title">Courses</h2>
      <p class="section-lead">
        You can manage all courses, such as editing, deleting and more.
      </p>
      <div class="row">
        <div class="col-md-12"> 
          <div class="card">
            <div class="card-header">
              <form method="GET" action="{{ url('courses') }}"></form>
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
                    <a href="{{route ('add-course') }}" class="btn btn-success">Add Course</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th><center> No </center> </th>
                    <th><center> Course Title </center></th>
                    <th><center> Course Image </center></th>
                    <th><center> Subject </center></th>
                    <th><center> Course Video </center></th>
                    <th ><center>Action</center></th> 
                  </tr>
                  @foreach($course as $key=>$value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->course_title}}</td>
                    <td><img src  ="{{('images/'.$value->course_image )}}" width="200" height="150"></td>
                    <td>{{$value->subject}}</td>
                    <td>{{$value->course_video}}</td>
                    <td>
                        <a href="{{ route('edit-course', $value->id_course) }}" class="btn btn-link text-dark px-3 mb-0"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                        <form action=" {{ route('delete-course', $value->id_course) }} " method="post">
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
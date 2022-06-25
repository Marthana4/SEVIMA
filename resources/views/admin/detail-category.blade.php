@extends('Home')

@section('content')
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="card card-statistic-2">
            <div class="card-stats">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h2 class="card-title">Data</h2>
                <div class="card-header-action ">
                <div class="d-flex flex-row-reverse">
                  <div class="mx-2">
                    
                <form action="{{ url('delete-category/'.$category->id_category) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm('Are you sure delete this data?')"><i class="far fa-trash-alt me-2"></i></button>
                </form>
                  </div>
                </div>
              </div>
              </div>
                <div class="row align-items-center">
                  <div class="col text-center">
                  <img src  ="{{('../images/'.$category->course_image )}}" width="200" height="150">
                  </div>
                  <div class="col">
                    <div class="text-xs font-weight-bold text-uppercase">
                      Name
                    </div>
                    <div class="h6 mb-0 text-gray-800 mb-2">
                      {{ $category->name }}
                    </div>
                    <div class="text-xs font-weight-bold text-uppercase">
                      Address
                    </div>
                    <div class="h6 mb-0 text-gray-800 mb-2">
                      {{ $category->address }}
                    </div>
                    <div class="text-xs font-weight-bold text-uppercase">
                      Phone Number
                    </div>
                    <div class="h6 mb-0 text-gray-800 mb-2">
                      {{ $category->phone_number }}
                    </div>
                    <div class="text-xs font-weight-bold text-uppercase">
                      email
                    </div>
                    <div class="h6 mb-0 text-gray-800 mb-2">
                      {{ $category->email }}
                    </div>
                    <div class="text-xs font-weight-bold text-uppercase">
                      course_title
                    </div>
                    <div class="h6 mb-0 text-gray-800 mb-2">
                      {{ $category->course_title }}
                    </div>
                    <div class="text-xs font-weight-bold text-uppercase">
                      subject
                    </div>
                    <div class="h6 mb-0 text-gray-800 mb-2">
                      {{ $category->subject }}
                    </div>
                    <div class="text-xs font-weight-bold text-uppercase">
                      status
                    </div>
                    <div class="col-4">
                    <form method="POST" action="{{ url('categories/'.$category->id_category) }}">
                      @csrf
                      <input type="hidden" name="_method" value="PATCH">
                      <select class="form-control selectric" name="status">
                          <option value="">{{$category->status}}</option>
                          @if($category->status =='inactive')
                          <option value="active">active</option>
                          @else
                          <option value="inactive">inactive</option>
                          @endif
                      </select>
                    <br>
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
        </div>
      </div>
    </section>
  </div>

@endsection
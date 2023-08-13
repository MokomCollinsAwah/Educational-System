@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Student List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6" style='text-align:right;'>
          <a href="{{url('admin/student/add')}} " class='btn btn-primary'>Add New Student</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
      <div class="row">
        <div class="col-md-12">

              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Search Class</h3>
                  </div>
                  <form method="get" action="">
                      <div class="card-body">
                          <div class="row">
                            <div class="form-group col-md-2">
                              <label for="">Admission Number</label>
                              <input type="text" class="form-control" value={{Request::get('admission_number')}} name='first_name' placeholder="admission_number">
                          </div>

                          <div class="form-group col-md-2">
                              <label for="">First Name</label>
                              <input type="text" class="form-control" value={{Request::get('first_name')}} name='first_name' placeholder="First Name">
                          </div>
                          <div class="form-group col-md-2">
                              <label for="">Last Name</label>
                              <input type="text" class="form-control" value={{Request::get('last_name')}} name='last_name' placeholder="Last Name">
                          </div>
                          <div class="form-group col-md-2">
                              <label for="">Class</label>
                              <input type="text" class="form-control" value={{Request::get('class_id')}} name='class_id' placeholder="Class">
                          </div>
                          <div class="form-group col-md-2">
                              <label for="">Department</label>
                              <input type="text" class="form-control" value={{Request::get('department')}} name='department' placeholder="department">
                          </div>

                          <div class="form-group col-md-2">
                              <button class="btn btn-primary" type="submit" style="margin-top:30px;">Search</button>
                              <a href="{{url('admin/admin/list')}}" class="btn btn-success" style="margin-top:30px;">Reset</a>
                          </div>
                          </div>
                      </div>
                  </form>
              </div>

@include('message')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Class List</h3>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Class</th>
                    {{-- <th>Action</th> --}}
                </tr>
                
            </thead>
            <tbody>
              @foreach($getRecord as $value)
                <tr>
                  <td>{{$value->id}}</td>
                  <td>{{$value->first_name}}</td>
                  <td>{{$value->last_name}}</td>
                  <td>{{$value->gender}}</td>
                  <td>{{$value->department}}</td>
                  <td>{{$value->class_id}}</td>

                  {{-- Edit and Delete buttons code --}}
                  <td>
                    <a href="{{url('admin/student/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('admin/student/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                  </td>

                  </tr>
              @endforeach
            </tbody>
        </table>
        <div style="padding: 10px; float:right">
          {{-- {!! $getRecord->appends(Illuminate\Support\Facades\Request:: except('page'))->links()!!} --}}
        </div>
    </div>
</div>
        </div>
</div>
</section>
</div>
@endsection 
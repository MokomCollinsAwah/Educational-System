@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Class List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6" style='text-align:right;'>
          <a href="{{url('admin/class/add')}} " class='btn btn-primary'>Add New Class</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
      <div class="row">
        <div class="col-md-12">

              {{-- <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Search Class</h3>
                  </div>
                  <form method="get" action="">
                      <div class="card-body">
                          <div class="row">

                          <div class="form-group col-md-3">
                              <label for="">Name</label>
                              <input type="text" class="form-control" value={{Request::get('name')}} name='name' placeholder="Name">
                          </div>
                          </div>
                      </div>
                  </form>
              </div> --}}

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
                    <th>Name</th>
                    {{-- <th>Action</th> --}}
                </tr>
                
            </thead>
            <tbody>
              @foreach($getRecord as $value)
                <tr>
                  <td>{{$value->id}}</td>
                  <td>{{$value->name}}</td>

                  {{-- Edit and Delete buttons code --}}
                  {{-- <td>
                    <a href="{{url('admin/class/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('admin/class/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                  </td> --}}

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
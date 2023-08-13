@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Student</h1>
        </div><!-- /.col -->
       
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="" First Name> <span style="color:red;">*</span>First Name</label>
                                    <input type="text" class="form-control"  name='first_name' value="{{old('first_name',$getRecord->first_name)}}" required placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""> <span style="color:red;">*</span>Last Name</label>
                                    <input type="text" class="form-control"  name='last_name' value="{{old('last_name',$getRecord->last_name)}}" required placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""> <span style="color:red;">*</span>Admission Number</label>
                                    <input type="text" class="form-control"  name='admission_number'  value="{{old('admission_number',$getRecord->admission_number)}}"required placeholder="Admission Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""> <span style="color:red;">*</span>Department</label>
                                    <select name="department" class="form-control" value="{{old('department',$getRecord->department)}}" required>
                                        <option value="1">Grammar</option>
                                        <option value="1">Commercial</option>
                                        <option value="1">Electrical Power System</option>
                                        <option value="1">Clothing Industry</option>
                                        <option value="1">Building Construction</option>
                                        <option value="1">Motor Mechanics</option>
                                        <option value="1">Welding</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""> <span style="color:red;">*</span>Class</label>
                                    <select name="class_id" class="form-control" value="{{old('class_id',$getRecord->class_id)}}" required>
                                        <option value="1">FORM 1</option>
                                        <option value="1">FORM 2</option>
                                        <option value="1">FORM 3</option>
                                        <option value="1">FORM 4</option>
                                        <option value="1">FORM 5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""> <span style="color:red;">*</span>Gender</label>
                                    <select name="gender" class="form-control" value="{{old('gender',$getRecord->gender)}}" required>
                                        <option value="1">Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="1">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Date of Birth</label>
                                    <input type="date" class="form-control" value="{{old('date_of_birth',$getRecord->date_of_birth)}}" name='date_of_birth' required placeholder="DOB">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Parent/Guadian Phone Number</label>
                                    <input type="text" class="form-control" value="{{old('parents_contact',$getRecord->parents_contact)}}" name='parents_contact' required placeholder="phone_number">
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
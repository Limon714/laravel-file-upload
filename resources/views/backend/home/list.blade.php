@extends('backend.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">--</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content-header">
      <div class="container-fluid">
        @include('message')
        <div class="row mb-2">
           <div class="col-md-12"> 
            <div class= "card card-info">
                <div class= "card-header">
                   <h3 class="card-title">Hero Section</h3>
                 </div>
                 <form method="post" action="{{url('admin/home/post')}}" class="form-horizontal" enctypte="maltipart/form-data">
                  {{csrf_field()}}
                  <div class ="card-body">
                    <div class ="form-group row">
                     <label class="col-sm-2 col-form-lable">Profile Image</label>
                     <div class="col-sm-10">
                     <input type='file' name="profile" class="form-control">
                    </div>
                    </div>

                    <div class ="form-group row">
                     <label class="col-sm-2 col-form-lable">Name</label>
                     <div class="col-sm-10">
                     <input type='text' name="your_name" value="{{ $getrecord[2]->your_name }}"
                      placeholder="Enter your name" class="form-control">
                    </div>
                    </div>

                    <div class ="form-group row">
                     <label class="col-sm-2 col-form-lable">Expert</label>
                     <div class="col-sm-10">
                     <input type='text' name="work_experience" value="{{ $getrecord[2]->work_experience }}"
                     placeholder="as a ..." class="form-control">
                    </div>
                    </div>

                    <div class ="form-group row">
                     <label class="col-sm-2 col-form-lable">Description</label>
                     <div class="col-sm-10">
                     <textarea  name="description" 
                      placeholder="Describe yourself ..." class="form-control">{{ $getrecord[2]->description}}
                    </textarea>
                    </div>
                    </div>

                  </div>

                  <div class='card-footer'>
                  <button type = "submit" class="btn btn-primary">Add </button>
                  &nbsp;&nbsp;
                  <a hre="" class="btn btn-default ">Cancel </a>
                  </div>
                 </form>
           </div>
         </div>
        </div>
      </div>
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
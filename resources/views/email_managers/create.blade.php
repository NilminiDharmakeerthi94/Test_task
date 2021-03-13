@extends('templates.default')


@include('partials._mainsiderbars')
@section('content')
<div class="container">
  <div class="col-md-8">
    <div class="x_panel">
      <div class="x_title">
        Add New Email Contact
      </div>  
      <div class="x_content">
          <form action="{{ route('email_managers.store') }}" class="" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="">ID</label><br>
            <input type="text" name="id" placeholder="Post ID" class="form-control" />
            
          </div>

          <div class="form-group">
          <label for="">Name</label><br>
            <input type="text" name="name" placeholder="Post Name" class="form-control" />
            
          </div>
  
          <div class="form-group">
            <label for="">Number</label><br>
            <input type="text" name="number" placeholder="Post Number" class="form-control" />
          </div>

          <div class="form-group">
            <label for="">Email</label><br>
            <input type="text" name="email" placeholder="Post email" class="form-control" 
            />
           
          </div>
          <div class="form-group"><br>
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
          
        </form>
      </div>
    </div>
  </div>
  
</div>
@endsection
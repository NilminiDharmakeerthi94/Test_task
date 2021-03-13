@extends('templates.default')

@include('partials._mainsiderbars')
@section('content')
<div class="container">
    <div class="row">
        <div>
       
        <button class="btn btn-success"><a href="{{ route('email_managers.create')}}">Add Email</a></button>
        
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach ($email_managers as $email_manager)
        <tr>
      
        <td>{{ $email_manager->id }}</td>
        <td>{{ $email_manager->name }}</td>
        <td>{{ $email_manager->number }}</td>
        <td>{{ $email_manager->email }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>

</div>
<div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Email Data</button> <br>
                
                <a class="btn btn-warning" href="{{ route('export') }}">Export Email Data From Here</a>
            </form>
        </div>

</div> 
@endsection
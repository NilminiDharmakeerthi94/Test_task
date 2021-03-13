<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
<div>    
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}"> <h6>Home </h6></a>
      </li>
   
    </ul>
     <li><a href="{{ route('email_manager.index') }}">Email Manager</a> <span class="sr-only">(current)</span></li>
        <li><a href="{{ route('email_scheduler.index') }}">Email scheduler</a> <span class="sr-only">(current)</span></li>  
     
     </div>

    
                  
  </div>
</nav>
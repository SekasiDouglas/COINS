<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- csss -->
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css">
    
    <title>COINS</title>
  </head>
  <body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="height: 80px;>
        <a class="navbar-brand" href="#">COINS</a>
        <!-- <a href="#" class="pull-left"><img src="/images/ah1.png"></a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown ">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-danger" href="home.html"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <b>Opportunities</b> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('opportunities.create')}}"><i class="fas fa-plus"></i>  Create Opportunity</a>
                <a class="dropdown-item" href="{{route('opportunities.index')}}"><i class="fas fa-bars"></i>  View opportunities</a>
                <a class="dropdown-item" href="#"><i class="fas fa-upload"></i>  projects</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Contacts</b> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('contacts.create')}}"><i class="fas fa-user-plus"></i>  Create Contact</a>
                <a class="dropdown-item" href="#"><i class="fas fa-address-card"></i>   View Contacts</a>
                <a class="dropdown-item" href="#"><i class="fas fa-upload"></i>  Import Contacts</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b>Documents</b> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('documents.create')}}"><i class="fas fa-plus"></i>  Create document</a>
                <a class="dropdown-item" href="#"><i class="fas fa-bars"></i>  View documents</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Tasks</b> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('tasks.create')}}"><i class="fas fa-plus-square"></i> Create Task</a>
                <a class="dropdown-item" href="#"><i class="fas fa-bars"></i> View Tasks</a>
                <a class="dropdown-item" href="#"><i class="fas fa-upload"></i> Import Tasks</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <b>Scores</b>               </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Leave</b> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            <li class="nav-item active">
              <a class="nav-link text-danger " href="#" ><b>MEAT</b>  <span class="sr-only">(current)</span></a>
              </li>
          </ul>
        </div>
      </nav>

      <!-- End of Nav Bar -->
    @yield('content')

    @yield('footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/app.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>
</script>

  </body>
</html>
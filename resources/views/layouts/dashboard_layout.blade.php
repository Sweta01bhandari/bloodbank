<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Blood Bank Management System</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Donor</a></li>
        <li><a href="#">Patient</a></li>
        <li><a href="#">Donation</a></li>
        <li><a href="#">Request</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Blood Bank Management System</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/donor">Donor</a></li>
        <li><a href="/patient">Patient</a></li>
        <li><a href="/donation">Donation</a></li>
        <li><a href="/request">Request</a></li>
         <li><a href="/logout">Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-md-9">
        @yield('content')
      </div>
      
    </div>
  </div>
</div>

</body>
</html>

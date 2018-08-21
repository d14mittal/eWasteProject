<!DOCTYPE html>
<html>
<head>
<meta name="viewport">
<title>View Users</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/admin.css" />

        <style>
          table {
            font-size: 16px;
          }
        </style>

</head>


<body>

<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">E-Waste Management</a>
        </div>
          <ul class="nav navbar-nav">
           <li class="active"><a href="{{route('viewusers')}}">System Users</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
           <li><a href="{{route('adminProfile')}}">Profile</a></li>
           <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form></li>
          </ul>
      </div>
  </nav>  

<div class="sidenav">

  <div id="" style="">
    <img src="img/logo.png" class="logo" style="width: 180px; height: 180px; top: 10px" >
  </div>

  <br>
  <br>
    <a href="{{route('adminpage')}}">Home</a>
    <a href="{{route('viewnews')}}">Informations</a>
    <a href="{{route('addcategory')}}">Categories</a>
    <a href="{{route('viewusers')}}">System Users</a>
    <a href="{{route('viewreportedposts')}}">Reported Posts</a>
    <a href="{{route('configurations')}}">Configurations</a>
</div>


<div class="main">

  <br>
  <br>
  <br>


<div class="container">
    <div class="row">
    <div class="col-md-12">

      <div class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#buyers" data-toggle="tab">
              Buyers</a>
            </li>
            <li>
              <a href="#sellers" data-toggle="tab">
              Sellers </a>             
            </li>
            <li>
               <a href="#all" data-toggle="tab">
              All </a>              
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="buyers">

<div class="container">            

  <br>
  <br>
  
                   <!-- Inline Search  -->
<form class="form-inline" role="form">
  <div class="form-group">
     <label class="sr-only" for="exampleInputEmail2">UserName</label>
    <input type="text" class="form-control" id="username" placeholder="Type a name">
  </div>
  <button type="submit" class="btn btn-primary submit">Search</button>
  <button type="submit" class="btn btn-info">Refresh</button>
</form>

</form>

<hr>

      <div class="row">
            <div class="col-lg-11">
              <div class="table-responsive table-bordered">
                <table class="table">

                <tr>
                    <th>Buyer Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Buyer Type</th>
                    <th>Ratings</th>
                    <th>Joined On</th>
                    <th>Remove</th>
                    <th>Message</th>
                </tr>

                @if(count($buyers) > 0)

                  @foreach($buyers as $user)

                    <tr>
                        <td>{{ $user->User->first_name }}</td>
                        <td>{{ $user->User->address }}</td>
                        <td>{{ $user->User->phone }}</td>
                        <td>{{ $user->type }}</td>
                        <td>{{ $user->rating }}</td>
                        <td>{{ date('h: i a', strtotime($user->created_at) )}} on {{ date('F j, Y', strtotime($user->created_at) )}}</td>
                        <td><a href='deletebuyer/{{ $user->id }}'>
                        <button type='submit' class='btn btn-danger' onclick="return confirm('Are you sure you want to delete this buyer?');">Delete</button></a></td>
                        <td><a href="#">
                        <button type='submit' class='btn btn-primary' onclick="">Message</button></a></td>
                    </tr>
                   
                  @endforeach
                @endif
                      
            </table>
            </div>
          </div>
        </div>


<br>
<br>
      </div>
    

    
  

            </div>

            <div class="tab-pane" id="sellers">

<div class="container"> 
<br>
<br>
<!-- Inline Search  -->
    <form class="form-inline" role="form">
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">UserName</label>
            <input type="text" class="form-control" id="username" placeholder="Type a name">
        </div>
        <button type="submit" class="btn btn-primary submit">Search</button>
        <button type="submit" class="btn btn-info">Refresh</button>
    </form>

    </form>

    <hr>

    <div class="row">
        <div class="col-lg-11">
            <div class="table-responsive table-bordered">
                <table class="table">

                    <tr>
                        <th>Seller Name</th>
                        <th>Seller Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Joined On</th>
                        <th>Remove</th>
                        <th>Message</th>
                    </tr>
                    @csrf

                    @if(count($sellers) > 0)

                        @foreach($sellers as $user)

                      

                            <tr>
                                <td>{{ $user->first_name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ date('h: i a', strtotime($user->created_at) )}} on {{ date('F j, Y', strtotime($user->created_at) )}}</td>
                                <td><a href='deleteseller/{{ $user->id }}'>
                                        <button type='submit' class='btn btn-danger' onclick="return confirm('Are you sure you want to delete this seller?');">Delete</button></a></td>
                                <td><a href="#">
                                        <button type='submit' class='btn btn-primary' onclick="">Message</button></a></td>

                                      </tr>


                        @endforeach
                    @endif

                </table>
            </div>

        </div>
    </div>

<br>
<br>



</div>




            </div>




           <div class="tab-pane" id="all">

            ////
              
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>





</div>    





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<footer class="footer font-small blue pt-4 mt-4">
 <!-- Copyright -->
  <div class="footer-copyright text-right py-3">© 2018 Copyright:
    <a href="#"> E-Waste Management</a>
  </div>
  <!-- Copyright -->
</footer>
</html> 

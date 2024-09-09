
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{url('CSS/form.css')}}">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h1>Admin Dashboard</h1>
    <a href="{{url('employee')}}"><i class="fas fa-laptop"></i> Employee Management</a>
    <a href="{{url('viewemployee')}}"><i class="fas fa-undo"></i> View Employee</a>
    <a href="{{url('interner')}}"><i class="fas fa-plus-circle"></i> Internership Student</a>
    <a href="{{url('viewstudent')}}"><i class="fas fa-plus-circle"></i> View Internership Student</a>
    <a href="{{url('bootcamp')}}"><i class="fas fa-undo"></i> BootCamp Student</a>
    <a href="{{url('viewbootcampstudent')}}"><i class="fas fa-undo"></i> View BootCamp Student</a>
    <a href="{{url('attandance')}}"><i class="fas fa-clipboard-list"></i> Attandance</a>
    <a href="{{url('usermanagement')}}" ><i class="fas fa-user-edit"></i> User Management</a>
    <a href="{{url('shiftmanager')}}"><i class="fas fa-key"></i>Shift Management</a>
    <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Wrapper for content and navbar -->

<div class="wrapper">
    <!-- Content -->
    <div class="content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-white" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#notifications"><i class="fas fa-bell"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings"><i class="fas fa-cogs"></i> Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
          <div class="card">
            <div class="card-header">
              <h2>BootCamp  Table</h2>
              <div class="card-body">
        
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Firstname</th>
                      <th scope="col">Lastname</th>
                      <th scope="col">Class</th>
                      <th scope="col">Level</th>
                      <th scope="col">Start_Date</th>
                      <th scope="col">End_Date</th>
                      <th scope="col">Created_at</th>
                      <th scope="col">Updated_at</th>
                      <th scope="col">Operations</th>
                    </tr>
                  </thead>
                  <tbody>
      
      
                    @foreach($bootcamps as $bootcampss)
                      <tr>
                        <td>{{$bootcampss->id}}</td>
                        <td>{{$bootcampss->firstname}}</td>
                        <td>{{$bootcampss ->lastname}}</td>
                        <td>{{$bootcampss->class}}</td>
                        <td>{{$bootcampss ->level}}</td>
                        <td>{{$bootcampss ->start_date}}</td>
                        <td>{{$bootcampss->end_date}}</td>
                        <td>{{$bootcampss->created_at}}</td>
                        <td>{{$bootcampss ->updated_at}}</td>
      
                        <td style="display: flex;">
                          <button type="button" style="color:#fff;text-decoration:none;" class="btn btn-success">
                            <a href="{{'updatebootcamp/'.$bootcampss->id}}">Edit</a>
                          </button>
                          <button type="button" style="color:#fff;text-decoration:none;" class="btn btn-danger">
                          <a href="{{'deleteStudent/'.$bootcampss ->id}}">Delete</a>
                          
                        </button>
                        </td>
      
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

<style>
  a{
    color: #fff;
    text-decoration: none;
  }
</style>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
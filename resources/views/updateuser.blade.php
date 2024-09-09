
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
    <a href="#"><i class="fas fa-clipboard-list"></i> Attandance</a>
    <a href="{{url('users')}}" ><i class="fas fa-user-edit"></i> User Management</a>
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
                    <div class="card-body">
                                <!-- Main content area -->
        <div class="container-fluid mt-4">
            <h2>Update User</h2>
            <form action="/updateuser/{{$data->id}}" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <input type="hidden"  name="_method" value="put" required>
                    </div>
                </div>
                @csrf
                <div class="form-group">
                    <label for="device_name">Names:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                        </div>
                        <input type="text"  name="name" value="{{$data->name}}"class="form-control icon" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="device_name">UserType:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                        </div>
                        <input type="text"  name="usertype" value="{{$data->usertype}}"class="form-control icon" required>
                    </div>
                </div>


                
                <div class="form-group">
                    <label for="device_type">Email:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-cogs"></i></span>
                        </div>
                        <input type="email"  name="email" value="{{$data->email}}"class="form-control icon" required>
                    </div>
                </div>       
                <button type="submit">Update User</button>
            </form>
        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    button:hover {
    background-color: #0056b3;
}
button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    max-width: 200px;
    margin-top: 10px;
}
</style>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
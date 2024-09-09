
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{url('CSS/style.css')}}">

	<title>DynaSoft</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<img class="mx-auto h-10 w-auto" style="height:40px" src="{{url('CSS/dynasoft.jpg')}}" alt="Your Company">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{url('employee')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Employee</span>
				</a>
			</li>
			<li>
				<a href="{{url('interner')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Internership</span>
				</a>
			</li>
			<li>
				<a href="{{url('bootcamp')}}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Bootcamp</span>
				</a>
			</li>
			<li>
				<a href="{{url('shiftmanager')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Shift</span>
				</a>
			</li>

            <li>
				<a href="{{url('usermanagement')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Users</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			
				<div class="todo">
					<div class="head">
						<center>
							<h3 style="color: rgb(72, 35, 202)">BootCamp Form</h3>
						</center>
						
					</div>
                    <form action="/bootcamp" method="POST">
                        @csrf
					<div class="head">
						<label>Firstname:</label>
						<input type="text" name="firstname" ><br><br>
					</div>
                    <div class="head">
						<label>Secondname</label>
						<input type="text" name="lastname" ><br><br>
					</div>

                    <div class="head">
						<label>Class:</label>
						<input type="text" name="class"><br><br>
					</div>
                    <div class="head">
						<label>Level:</label>
						<input type="text" name="level"><br><br>
					</div>
                    <div class="head">
						<label>Start date:</label>
						<input type="date" name="start_date"><br><br>
					</div>
                    <div class="head">
						<label>End date</label>
						<input type="date" name="end_date"><br><br>
					</div>
					<div>
						<button type="submit">Add Student</button>
					</div>
				</div>
			</center>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Bootcamp Table</h3>
					</div>
					<table style="font-size:10px">
						<thead>
							<tr>
								<th>Id</th>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Class</th>
                                <th>Level</th>
                                <th>Start_Date</th>
                                <th>End_Date</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
								<th>Operations</th>
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
                                    <a style="color:#fff" href="{{'updatebootcamp/'.$bootcampss->id}}">Edit</a>
                                  </button>
                                  <button type="button" style="color:#fff;text-decoration:none;background:red;" class="btn btn-danger">
                                  <a style="color:#fff" href="{{'deleteStudent/'.$bootcampss ->id}}">Delete</a>
                                  
                                </button>
                                </td>
              
                              </tr>
                            @endforeach
                          </tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script>
		const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})
	</script>
</body>
</html>











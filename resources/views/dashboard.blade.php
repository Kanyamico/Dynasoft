<x-app-layout>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DynaSoft User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h2>View Shift</h2>
          <div class="card-body">
            <form style="display:flex;" action="" method="post">
              <input class="form-control" style="width: 50%;" type="text" placeholder="Search name">
              <button type="submit" class="btn btn-success">Search</button>
            </form><br><br>
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Names</th>
                  <th scope="col">Shift_Start_Time</th>
                  <th scope="col">Shift_End_Time</th>
                  <th scope="col">Created_at</th>
                  <th scope="col">Updated_at</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              
                  @foreach ($Shift as $item)
                      <tr>
                        <td>{{$item ->id}}</td>
                        <td>{{$item ->employee_id->names}}</td>
                        <td>{{$item ->start_time}}</td>
                        <td>{{$item ->end_time}}</td>
                        <td>{{$item ->created_at}}</td>
                        <td>{{$item ->updated_at}}</td>
                        <td>
                          <button type="button" style="color:#fff;text-decoration:none;" class="btn btn-success">
                            <a style="color:#fff" >Attend</a> 
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>







  
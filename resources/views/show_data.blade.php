<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

 <title>Larvel 8 Crud</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Larvel 8 Crud</h1>
    <a href="{{ url('/add-data')}}" class="btn btn-primary my-3">Add Data</a>
    @if(Session::has('msg'))
    <p class="alert alert-success">{{ Session::get('msg')}}</p>
    @endif

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            
              </tr>
            </thead>
            <tbody>
                @foreach($showData as $key=>$data)
              <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $data->name}}</td>
                <td>{{ $data->email}}</td>
                <td>
                  <a href="{{ url('/edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
                  <a href="{{ url('/delete-data/'.$data->id)}}" onclick="return confirm('Are you sure to Delete')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $showData->links() }}
    
       </div>
    
    
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
           .m-b-10{
               margin bottom: 5px;
           }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h2 style="text-align:center;" >List Of Employees</h2>
            <table class="table table-striped table-bordered">
                <a class="btn btn-primary" href="{{ URL::to('create-employee')}}">Create Profile</a>
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Salary</th>
                    <th>Details</th>
                    <th>Action</th>
                </thead>

                <tbody>
                     @foreach($employees as $e)
                     <tr> 
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->email }}</td>
                        <td>{{ $e->age }}</td>
                        <td>{{ $e->salary }}</td>
                        <td>{{ $e->details }}</td>
                        <td>
                        <a href="{{URL::to('edit-employee/' .$e->id) }}">Edit</a>
                        <a data-toggle="modal" data-target="#myModal{{$e->id}}" href="#">Delete</a>
                            <div class="modal" id="myModal{{$e->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <div class="modal-header">
                                        <h4 class="modal-title">Confirmation of Deletion</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        Are You Sure to delete the data of Mr/Mrs. <b>{{$e->name}}</b>??
                                    </div>

                                    <div class="modal-footer">
                                        <a class = "btn btn-danger" href="{{URL::to('delete-employee/' .$e->id) }}">Yes</a>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </td>
                     </tr>
                     @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>
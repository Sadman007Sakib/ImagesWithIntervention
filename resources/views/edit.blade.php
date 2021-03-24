<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-8 mt-3 offset-md-2">
            <div class="card">
                <div class="card-header">
                 <h2 style="text-align:center;">Edit Employee Profile</h2>
                </div>
                    <div class="card-body">
                        <form method="post" action="{{ URL:: to('update-employee/' .$employee->id)}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" value="{{$employee->name}}" class="form-control" name="name">

                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" value="{{$employee->email}}" class="form-control" name="email">

                            </div>
                        
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" value="{{$employee->age}}" class="form-control" name="age">

                            </div>

                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="text" value="{{$employee->salary}}" class="form-control" name="salary">

                            </div>

                            <div class="form-grou
                                <label for="">Details</label>
                                <textarea name="details" class="form-control"rows="3">{{$employee->details}}</textarea>

                            </div>

                            <div style="text-align:center;" class="form-group">
                                <label for=""></label>
                                <button  class="btn btn-success" type="submit">Submit</button>
                                <a class="btn btn-secondary" href="{{ URL::to('employees')}}">Employee List</a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>  
</body>
</html>
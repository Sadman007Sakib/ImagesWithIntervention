<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
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
                 <h2 style="text-align:center;">Create Employee Profile</h2>
                </div>
                    <div class="card-body">
                        <form method="post" action="{{ URL:: to('store-employee')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">

                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">

                            </div>
                        
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" class="form-control" name="age">

                            </div>

                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="text" class="form-control" name="salary">

                            </div>

                            <div class="form-group">
                                <label for="">Details</label>
                                <textarea name="details" class="form-control"rows="3"></textarea>

                            </div>

                            <div style="text-align:center;" class="form-group">
                                <label for=""></label>
                                <button data-toggle="modal" data-target="#myModal"  class="btn btn-success" type="submit">Submit</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Profile Creation Modal</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            Data inserted Successfully.
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                                <a class="btn btn-secondary" href="{{ URL::to('employees')}}">Employee List</a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>  
</body>
</html>
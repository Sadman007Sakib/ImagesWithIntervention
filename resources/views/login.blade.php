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
</head>
<body>
    <div class = "container">
        <div class="col-md-6 mt-5 offset-md-3">

            @if(Session:: has('mssg'))
            <div class="alert alert-danger">
                <strong>{{ Session:: get('mssg') }}</strong>
            </div>
            @endif

            <div class="card">
                <div class="card-header">Login page</div>
                    <div class="card-body">
                        <form method= "post" action="{{ URL::to('storelogin') }}">
                            {{ csrf_field()}}
                            
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class ="form-control" name="email" id="">
                            </div>
                            
                             <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class ="form-control" name="password" id="">
                            </div>

                            <div class="form-group">
                                <button type="submit" class ="btn btn-primary">Login</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>
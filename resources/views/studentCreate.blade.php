<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .error{
            color: red;    
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-6 mt-3 offset-md-3">
        @if(Session:: has('smssg'))
            <div class="alert alert-success text-center">
            <strong >{{ Session:: get('smssg') }}</strong>
            </div>
        @endif
            <div class="card">
                <div class="card-header">
                    <h2 style="text-align:center;">Create Student Profile</h2>
                </div>
                <div class="card-body">
                    <form method ="post" action="{{ URL::to('store-student') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text"  value="{{ old('name')}}" class="form-control" name="name" id=" ">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email"  value="{{ old('email')}}" class="form-control" name="email" id=" ">
                            <span class="error">{{$errors->first('email')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="Age">Age</label>
                            <input type="number"  value="{{ old('age')}}" class="form-control" name="age" id=" ">
                            <span class="error">{{$errors->first('age')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="credits">Total credits</label>
                            <input type="number"  value="{{ old('credits')}}" class="form-control" name="credits" id=" ">
                            <span class="error">{{$errors->first('credits')}}</span>
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date"  value="{{ old('dob')}}" class="form-control" name="dob" id=" ">
                            <span class="error">{{$errors->first('dob')}}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
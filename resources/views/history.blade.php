<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>History</h2>
    <p>This is a page of History</p>
    <p>Category::{{$c}}</p>
    <p>Description:{{$desc}}</p>
    <h3>Employees--></h3>
     <ul>
        @foreach($emps as $e)
           <li>{{$e}}</li>

        @endforeach
     </ul>
    </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <h3>Home Page</h3>
        @if(Session::has('userrole') && Session::get('userrole') == 'Admin')
        <p>Landing Page in Dashboard 1 for <b>Admin</b></p>
        @endif

        @if(Session::has('userrole') && Session::get('userrole') == 'User')
        <p>Landing Page in Dashboard 2 for Users</p>
        @endif

        <a href="{{ URL::to('logout')}}">Logout</a>
    </div>
</body>
</html>
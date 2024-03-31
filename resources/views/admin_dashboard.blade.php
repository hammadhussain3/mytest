@include('include.head')
@include('include.header')
@include('include.asidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <div style="margin: 10% 35%">

        <h1>Admin Dashboard</h1>
        <h3>Welcome, {{ session('name') }}!</h3>
    </div>
</body>
</html>

  @include('include.script')
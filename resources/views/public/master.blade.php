<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purnea Bazaar</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand text-dark"><strong>Purnea Bazaar</strong></a>

            <form action="" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control " size="70">
                <input type="submit" name="find" class="btn btn-dark">
            </form>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route("homepage")}}" class="nav-link text-dark"><strong>Home</strong></a></li>
                <li class="nav-item"><a href="{{route("register")}}" class="nav-link text-dark"><strong>Signup</strong></a></li>
                <li class="nav-item"><a href="{{route("login")}}" class="nav-link text-dark"><strong>Login</strong></a></li>
                <li class="nav-item"><a href="{{route("cart")}}" class="nav-link text-dark"><strong>Cart</strong></a></li>
            </ul>
        </div>
    </nav>
    @section('content')
        
    @show
</body>
</html>
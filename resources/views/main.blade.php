<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add.css">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
        <a class="navbar-brand" style="font-weight: bold; color:#51557E;" href="/list">Restoran Luthfi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <!-- <a class="nav-item nav-link" style="color: white" href="/list">Menu</a> -->
            <a class="nav-item nav-link" style="color: white" href="/add">Add Menu</a>
          </div>
        </div>
        </div>

        <form action="/list" class="input-group mb-3 mt-4">
          <input class="form-control" type="text" name="search" placeholder="Search" >
          <input type="submit" name="" id="" value="search">
        </form>
      </nav>
</header>
<body style="background-color: rgb(23, 7, 94)">
    <div>@yield('container')</div>
</body>
</html>

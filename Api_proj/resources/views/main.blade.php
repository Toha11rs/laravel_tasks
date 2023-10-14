<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>






  <div class="centered-div">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav flex-column">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('user.index') }}">Поиск пользователей API</a>
        </li>
        <br>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('user.store') }}">Создание пользователей</a>
          <br>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('user.AllUsers') }}">Удаление пользователей</a>
          <br>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('user.usersDB') }}">Все пользователи</a>
          
        </li>
      </ul>
    </div>
  </nav>
</div>


<style>
  .centered-div {
    text-align: center;
    position: absolute;
    
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

  
}
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
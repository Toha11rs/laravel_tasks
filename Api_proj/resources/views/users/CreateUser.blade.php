

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание пользователя</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('user.main')}}">Главная страница</a>
  <button class="navbar-toggler" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  
</nav>



<div class="centered-div">

    <form class="form-inline" action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label  class="sr-only">Создать пользователя</label>
            <input type="text" placeholder="Введите имя" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Создать</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

<style>
.centered-div {
    text-align: center;
    position: absolute;
    
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 200px;
    width: 300px;
    border: 1px solid #000;
}
</style>
</html>
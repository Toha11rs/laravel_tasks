
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Поиск пользователя</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('user.main')}}">Главная страница</a>
  <button class="navbar-toggler" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

    </div>
  </div>
</nav>
<hr>
<div class="centered-div">

        <nav class="navbar navbar-light ">
        <form class="form-inline">
            <div class="input-group entered-div">
           
            
            <input type="text" name="search" class="form-control" placeholder="Введите имя">
            <button class="btn btn-sm btn-outline-secondary" type="sumbit">Найти</button>
            </div>
        </form>
        </nav>




      
      @if ($usersArray != null)
        <table class="table table-bordered table-striped custom-table">
    <thead>
      <tr>
        <th>Имя</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach ($usersArray as $user)
        <td>{{ $user }}</td>
    
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @else
 <p> такого пользователя не найдено
  @endif
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


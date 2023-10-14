<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Все пользователи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="{{route('user.main')}}">Главная страница</a>
<button class="navbar-toggler" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

  </div>
</div>
</nav>
<br>
<div class>

  <table class="table table-bordered table-striped custom-table">
    <thead>
      <tr>
        <th>id</th>
        <th>Имя</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user['id'] }}</td>
        <td>{{ $user['name'] }}</td>
        <td>
          <form method="POST" action="{{ route('user.delete', ['id' => $user['id']]) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Удалить</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
  
  <style>
    table.custom-table {
      width: 600px; 
      height: 100px; 
      margin: 0 auto; 
    }
    table.custom-table th {
        background-color: #333;
        color: #fff;
    }

  
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
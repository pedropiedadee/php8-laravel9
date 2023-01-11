<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Meu Titulo')</title>
</head>
<body>
  <h1>Meu Layout</h1>
  @section('sidebar')
    <div>
      <nav>
        <h1>Sidebar</h1>
      </nav>
    </div>
  @show

  @yield('content')
</body>
</html>
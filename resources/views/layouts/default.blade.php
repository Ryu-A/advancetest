<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-size:16px;
      margin: 0;
    }
    h1 {
      font-size:30px;
      text-align:center
    }
    input {
      box-shadow: none;
      border: solid;
      border-width: 1px;
      border-radius: 5px;
    }
    .content {
      width:700px;
      border-radius: 5px;
      padding: 5px;
      margin: 10px;
      background-color: white;
    }
  </style>
</head>
<body>
  @section('sidebar')
  @show
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vacation Rentals</title>
</head>
<body>
  <h1 class="bg-red-200">Vacation Rentals</h1>
  {{-- VIEW OUTPUT --}}
  @yield('content')
</body>
</html>
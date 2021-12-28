<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprende Laravel</title>
</head>

<body>
    {{-- @dump($errors); //para ver los mensajes de validation rules --}}
    @if (session()->has('error'))
         <div class="alert alert-danger">
               {{ session()->get('error') }}
         </div>
      @endif
    @yield('content')
</body>

</html>
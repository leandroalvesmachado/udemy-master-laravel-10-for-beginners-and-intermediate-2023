<!DOCTYPE html>
<html>

<head>
  <title>Laravel 10 Task List App</title>
  <style>
    .error-message {
      color: red;
      font-size: 0.8rem;
    }
  </style>
</head>

<body>
  <h1>@yield('title')</h1>
  <div>
    @if (session()->has('success'))
      <div>{{ session('success') }}</div>
    @endif
    @yield('content')
  </div>
</body>

</html>

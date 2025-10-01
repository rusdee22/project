<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Laravel Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Project</a>
    <div>
      @auth
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">ออกจากระบบ</button>
      </form>
      @else
      <a href="{{ route('login') }}" class="btn btn-outline-light">เข้าสู่ระบบ</a>
      <a href="{{ route('register') }}" class="btn btn-warning">สมัครสมาชิก</a>
      @endauth
    </div>
  </div>
</nav>
<div class="container mt-4">@yield('content')</div>
</body>
</html>

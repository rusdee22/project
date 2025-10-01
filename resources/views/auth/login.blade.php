@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('login') }}">
  @csrf
  <input type="email" name="email" placeholder="อีเมล" required><br>
  <input type="password" name="password" placeholder="รหัสผ่าน" required><br>
  <button type="submit">เข้าสู่ระบบ</button>
</form>
<a href="{{ route('password.request') }}">ลืมรหัสผ่าน?</a>
@endsection

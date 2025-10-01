@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('register') }}">
  @csrf
  <input type="text" name="name" placeholder="ชื่อ" required><br>
  <input type="email" name="email" placeholder="อีเมล" required><br>
  <input type="password" name="password" placeholder="รหัสผ่าน" required><br>
  <input type="password" name="password_confirmation" placeholder="ยืนยันรหัส" required><br>
  <button type="submit">สมัครสมาชิก</button>
</form>
@endsection

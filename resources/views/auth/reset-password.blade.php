@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('password.store') }}">
  @csrf
  <input type="hidden" name="token" value="{{ $request->route('token') }}">
  <input type="email" name="email" placeholder="อีเมล" required><br>
  <input type="password" name="password" placeholder="รหัสผ่านใหม่" required><br>
  <input type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่านใหม่" required><br>
  <button type="submit">รีเซ็ตรหัสผ่าน</button>
</form>
@endsection

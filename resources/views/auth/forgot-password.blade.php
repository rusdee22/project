@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('password.email') }}">
  @csrf
  <input type="email" name="email" placeholder="อีเมล" required><br>
  <button type="submit">ส่งลิงก์รีเซ็ต</button>
</form>
@endsection

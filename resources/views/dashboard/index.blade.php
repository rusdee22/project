@extends('layouts.app')
@section('content')
<h3>ยินดีต้อนรับ {{ Auth::user()->name }} 🎉</h3>
<p>คุณเข้าสู่ระบบเรียบร้อยแล้ว</p>
@endsection

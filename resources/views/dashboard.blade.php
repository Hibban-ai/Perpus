@extends('layout.master')
     
@section('content')
<img style="border-radius:40px; align-item:center; display:flex;" width="250"  src="https://i.pinimg.com/736x/fa/fc/ba/fafcbac2692f1294337e5716935a0a5d.jpg"><h1>Selamat datang {{Auth::user()->name}}</h1>
@endsection
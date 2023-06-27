@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- ec=xtend itu tulisan atau perintah agar kita dapat menggunakan
semua kode yang ada di dalam file yang di extend -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
<h2 style="text-align: center">Hallo {{Auth::user()->name}}</h2>
<h2 style="text-align: center">Ini adalah halaman dashboard</h2>
@endsection


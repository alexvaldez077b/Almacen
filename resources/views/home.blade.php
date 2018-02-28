@extends('adminlte::page') @section('title', 'AdminLTE') @section('content_header')
<h1>Dashboard</h1>
@stop @section('content') @role('Admin')
<p>
    I am a Admin!
</p>
@else
<p>
    I am not a Admin...
</p>
@endrole @role('Maquinista')
<p>
    I am a Maquinista!
</p>
@else
<p>
    I am not a Maquinista...
</p>
@endrole @role('Almacen')
<p>
    I am a Almacenista!
</p>
@else
<p>
    I am not a Almacenista...
</p>
@endrole @stop
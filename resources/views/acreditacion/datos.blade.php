@extends('layouts.main')
@section('contenido')

@if ( $datos )
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>departamento</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
            <tr>
                
                <td>{{$item['provicia']}}</td>
                <td>{{$item['cantidad']}}</td>
            @endforeach
        </tbody>
    
  </table>
   
@endif

@endsection
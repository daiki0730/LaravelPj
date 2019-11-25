@extends('layouts.helloapp')
<style>
    .pagination { font-size:12pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
  <tr><th>name</th><th>mail</th><th>age</th></tr>
  @foreach ($items as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->mail}}</td>
      <td>{{$item->age}}</td>
    </tr>
  @endforeach
  </table>
  {{ $items->links() }}
@endsection

@section('footer')
copyright 2019 daiki.
@endsection

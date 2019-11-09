@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <p>本文のコンテンツ</p>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

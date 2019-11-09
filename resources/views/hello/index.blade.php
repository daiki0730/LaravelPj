@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <p>本文のコンテンツ</p>

  @include('components.message',['msg_title'=>'OK','msg_content'=>'サブビューです'])

@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

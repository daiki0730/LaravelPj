@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <p>本文のコンテンツ</p>

  @component('components.message')
    @slot('msg_title')
    CAUTION
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。
    @endslot
  @endcomponent
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection

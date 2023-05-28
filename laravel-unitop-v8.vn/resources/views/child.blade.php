@extends('layouts.app')

@section('title', 'Application')

@section('content')
  <p>Nội dung trang con</p>
@endsection

@section('sidebar')
  @parent
  <p>Nội dung Sidebar</p>
@endsection


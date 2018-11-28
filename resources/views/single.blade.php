@extends('layouts.master')

<h1> Selamat datang di KwiZ ! </h1>
@section('title', 'Home')

@section('content')
  <p> KwiZ adalah blablabla </p>
  <p> KwiZ dibuat oleh kami </p>
  <p> {{ $num }} </p>
  @foreach ($users as $element)
    <li> {{ $element -> username. ' '. $element -> password }} </li>
  @endforeach
@endsection

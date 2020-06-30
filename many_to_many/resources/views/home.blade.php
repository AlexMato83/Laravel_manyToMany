@extends('layouts.main_layout')

@section('main')
  <h1>IMPIEGATI:</h1>
  <div class="home">
  @foreach ($employees as $employee)

      <a href="{{route('show', $employee['id'])}}">{{$employee['firstname']}} {{$employee['lastname']}} </a>


  @endforeach
  </div>
@endsection

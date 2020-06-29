@extends('layouts.main_layout')

@section('main')
  <h1>IMPIEGATI:</h1>
  @foreach ($employees as $employee)
    <div class="">
      <a href="{{route('show', $employee['id'])}}">{{$employee['firstname']}} {{$employee['lastname']}} </a>
      
    </div>
  @endforeach

@endsection

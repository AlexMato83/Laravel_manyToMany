@extends('layouts.main_layout')

@section('main')
  <div class="">
    <h1>IMPIEGATO: </h1>
    <span>Nome: {{$employee['firstname']}}{{$employee['lastname']}}</span><br>
    <span>Data di nascita: {{$employee['dateOfBirth']}}</span><br>
    <span>Ruolo: {{$employee['role']}}</span><br>
    <a href="{{route('edit', $employee['id'])}}">MODIFICA IMPIEGATO</a>
    <a href="{{route('delete', $employee['id'])}}">CANCELLA IMPIEGATO</a>
    <h1>TASKS:</h1>
    <ul>
      @foreach ($employee -> tasks as $task)
        <li>{{$task['name']}}</li>
        <li>{{$task['description']}}</li>
        <li>{{$task['deadline']}}</li><br>
      @endforeach
    </ul>

  </div>

@endsection

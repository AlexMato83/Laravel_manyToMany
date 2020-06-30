@extends('layouts.main_layout')

@section('main')
  <div class="show">
    <h2>IMPIEGATO: </h2><br>
    <div class="show_impiegato">
      <span>Nome: <h3>{{$employee['firstname']}} {{$employee['lastname']}}</h3></span><br>
      <span>Data di nascita: <b>{{$employee['dateOfBirth']}}</b></span><br>
      <span>Ruolo: <b>{{$employee['role']}}</b></span><br>
      <a href="{{route('edit', $employee['id'])}}">MODIFICA IMPIEGATO</a><br>
      <a href="{{route('delete', $employee['id'])}}">CANCELLA IMPIEGATO</a><br>
    </div>

    <h3>ATTIVITA':</h3>
    <ul>
      @foreach ($employee -> tasks as $key => $task)
        <h4>Attività {{$key + 1}}:</h4>
        <li>Nome: {{$task['name']}}</li>
        <li>Descrizione: {{$task['description']}}</li>
        <li>Scadenza: {{$task['deadline']}}</li><br>
        <hr>
      @endforeach
    </ul>

    <h3>Luoghi:</h3>
    <ul>
      @foreach ($employee -> locations as $location)
        <li>{{$location['city']}}</li>
      @endforeach
    </ul>


  </div>

@endsection

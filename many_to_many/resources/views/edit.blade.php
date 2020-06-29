@extends('layouts.main_layout')

@section('main')
  <form class="" action="{{route('update', $employee['id'])}}" method="post">
     @csrf
     @method('POST')
    <label for="firstname">FIRSTNAME</label>
    <input type="text" name="firstname" value="{{$employee['firstname']}}">

    <label for="lastname">LASTNAME</label>
    <input type="text" name="lastname" value="{{$employee['lastname']}}">

    <label for="dateOfBirth">DATEOFBIRTH</label>
    <input type="text" name="dateOfBirth" value="{{$employee['dateOfBirth']}}">

    <label for="role">ROLE</label>
    <input type="text" name="role" value="{{$employee['role']}}">

    <input type="submit" name="submit" value="UPDATE">
  </form>
@endsection

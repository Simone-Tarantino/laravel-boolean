@extends('layouts.layout')

@section('main')
    <img src="{{$student['img']}}" alt="{{$student['name']}}">
    <h2>{{$student['name']}} ({{$student['age']}} anni)</h2>
    <h3>Assunt{{($student['gender'] == 'm') ? 'o' : 'a' }} da {{$student['where']}} come {{$student['role']}}</h3>
    <p>{{$student['description']}}</p>
@endsection
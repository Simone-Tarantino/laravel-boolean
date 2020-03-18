@extends('layouts.layout')
@section('main')
    @foreach ($students as $k => $student)
        <div class="student-info">
            <img src="{{$student['img']}}" alt="{{$student['name']}}">
            <a href="{{route('show', ['id' => $k])}}"><h2>{{$student['name']}} ({{$student['age']}} anni)</h2></a>
            <h3>Assunt{{($student['gender'] == 'm') ? 'o' : 'a' }} da {{$student['where']}} come {{$student['role']}}</h3>
            <p>{{$student['description']}}</p>
        </div>
    @endforeach
@endsection

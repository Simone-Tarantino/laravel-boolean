@extends('layouts.layout')
@section('main')
    @foreach ($students as $k => $student)
        <div class="student-info">
            <span class="info-top">
                <span class="info-t-l"><img src="{{$student['img']}}" alt="{{$student['name']}}"></span>
                <span class="info-t-r"><a href="{{route('show', ['id' => $k])}}"><h2>{{$student['name']}} ({{$student['age']}} anni)</h2></a>
                    <h3>Assunt{{($student['gender'] == 'm') ? 'o' : 'a' }} da {{$student['where']}} come {{$student['role']}}</h3></span>
            </span>
            <span class="info-bot">
                <p>{{$student['description']}}</p>
            </span>
        </div>
    @endforeach
@endsection

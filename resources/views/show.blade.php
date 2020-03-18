@extends('layouts.layout')

@section('main')
    <div class="student-info-big">
        <span class="info-top">
            <span class="info-t-l"><img src="{{$student['img']}}" alt="{{$student['name']}}"></span>
            <span class="info-t-r"><h2>{{$student['name']}} ({{$student['age']}} anni)</h2>
                <h3>Assunt{{($student['gender'] == 'm') ? 'o' : 'a' }} da {{$student['where']}} come {{$student['role']}}</h3></span>
        </span>
        <span class="info-bot">
            <p>{{$student['description']}}</p>
        </span>
    </div>
@endsection
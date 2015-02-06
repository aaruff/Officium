@extends('app')

@section('content')
    <span>Survey Questions</span>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open() !!}
    {{--  QUESTION 1 --}}
    <div class="control-group">
        <label class="control-label">How Many courses are you taking?</label>
        <div class="controls">
            <input type="text" id="course_load" value = "{{old('course_load')}}">
        </div>
    </div>
    {{--  QUESTION 2 --}}
    <div class="control-group">
        <label class="control-label">What is your major?</label>
        <div class="controls">
            <input type="text" id="major" value = "{{old('major')}}">
        </div>
    </div>
    {{--  QUESTION 3 --}}
    <div class="control-group">
        <label class="control-label">What is your GPA?</label>
        <div class="controls">
            <input type="text" id="gpa" value = "{{old('gpa')}}">
        </div>
    </div>

    {!! Form::close() !!}
@stop

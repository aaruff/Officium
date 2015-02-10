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

    {{--  QUESTION 4 --}}
    <div class="control-group">
        <label class="control-label">Over the course of the next week how many of each of the following do you have:</label>

        {{--  QUESTION 4.1: Entry --}}
        <label class="control-label">Minor Assignments?</label>
        <div class="controls">
            <input type="text" id="minor_assignments" value = "{{old('minor_assignments')}}">
        </div>
        {{--  QUESTION 4.1: Dates --}}
        <label class="control-label">Enter the deadlines for the above minor assignments</label>
        <div class="controls">
            <input type="text" id="minor_assignment_dates" value = "{{old('minor_assignment_dates')}}">
        </div>

        {{--  QUESTION 4.2: Entry --}}
        <label class="control-label">Major assignments / term papers?</label>
        <div class="controls">
            <input type="text" id="major_assignments" value = "{{old('major_assignments')}}">
        </div>
        {{--  QUESTION 4.2: Dates --}}
        <label class="control-label">Enter the deadlines for the above major assignments</label>
        <div class="controls">
            <input type="text" id="major_assignment_dates" value = "{{old('minor_assignment_dates')}}">
        </div>

        {{--  QUESTION 4.3: Entry --}}
        <label class="control-label">Exams?</label>
        <div class="controls">
            <input type="text" id="exams" value = "{{old('exams')}}">
        </div>
        {{--  QUESTION 4.2: Dates --}}
        <label class="control-label">Enter the deadlines for the above major assignments</label>
        <div class="controls">
            <input type="text" id="exams" value = "{{old('exams')}}">
        </div>
    </div>

    {!! Form::close() !!}
@stop

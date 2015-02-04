@extends('app')

@section('content')
    <span>Survey Questions</span>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop

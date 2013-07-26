@extends('layouts.scaffold')

@section('main')

<h1>Create Municipio</h1>

{{ Form::open(array('route' => 'municipios.store')) }}
    <ul>
        <li>
            {{ Form::label('codmun', 'Codmun:') }}
            {{ Form::text('codmun') }}
        </li>

        <li>
            {{ Form::label('coddep', 'Coddep:') }}
            {{ Form::text('coddep') }}
        </li>

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop



@extends('layouts.scaffold')

@section('main')

<h1>Create Departamento</h1>

{{ Form::open(array('route' => 'departamentos.store')) }}
    <ul>
        <li>
            {{ Form::label('coddep', 'Coddep:') }}
            {{ Form::text('coddep') }}
        </li>

        <li>
            {{ Form::label('nomdep', 'Nomdep:') }}
            {{ Form::text('nomdep') }}
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



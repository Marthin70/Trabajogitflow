@extends('layouts.scaffold')

@section('main')

<h1>Edit Departamento</h1>
{{ Form::model($departamento, array('method' => 'PATCH', 'route' => array('departamentos.update', $departamento->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('departamentos.show', 'Cancel', $departamento->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
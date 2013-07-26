@extends('layouts.scaffold')

@section('main')

<h1>Edit Municipio</h1>
{{ Form::model($municipio, array('method' => 'PATCH', 'route' => array('municipios.update', $municipio->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('municipios.show', 'Cancel', $municipio->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop
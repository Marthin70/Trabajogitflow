@extends('layouts.scaffold')

@section('main')

<h1>All Municipios</h1>

<p>{{ link_to_route('municipios.create', 'Add new municipio') }}</p>

@if ($municipios->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Codmun</th>
				<th>Coddep</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($municipios as $municipio)
                <tr>
                    <td>{{{ $municipio->codmun }}}</td>
					<td>{{{ $municipio->coddep }}}</td>
                    <td>{{ link_to_route('municipios.edit', 'Edit', array($municipio->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('municipios.destroy', $municipio->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no municipios
@endif

@stop
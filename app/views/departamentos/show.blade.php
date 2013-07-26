@extends('layouts.scaffold')

@section('main')

<h1>Show Departamento</h1>

<p>{{ link_to_route('departamentos.index', 'Return to all departamentos') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Coddep</th>
				<th>Nomdep</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{{ $departamento->coddep }}}</td>
					<td>{{{ $departamento->nomdep }}}</td>
                    <td>{{ link_to_route('departamentos.edit', 'Edit', array($departamento->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('departamentos.destroy', $departamento->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
        </tr>
    </tbody>
</table>

@stop
@extends('app')

@section('conteudo')



<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Reciclador</th>
			<th>Data</th>
			<th>Endereço</th>
		</tr>
	</thead>
	@foreach ($coletas as $c)
	<tr>
		<td>
			<a href="/coletas/novo/">
				<span class="glyphicon glyphicon-search"></span>
			</a>
		</td>
		<td> {{$c->reciclador}} </td>
		<td> {{$c->data}} </td>
		<td> {{$c->endereco}} </td>
	</tr>
	@endforeach
</table>



@stop
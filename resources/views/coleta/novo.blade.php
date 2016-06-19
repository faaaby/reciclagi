@extends('app')

@section('conteudo')

	<form role="form" action="/coletas/adicionar">
	<div class="row">
	  <div class="form-group col-md-6 col-md-offset-3">
	    <label for="nome">Nome:</label>
	    <input name="nome" type="text" class="form-control" id="nome">
	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-6 col-md-offset-3">
	    <label for="email">E-mail:</label>
	    <div class="input-group">
	    <span class="input-group-addon">@</span>
	    	<input name="email" type="email" class="form-control" placeholder="email@email.com">
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-6 col-md-offset-3">
	    <label for="endereco">Endereço:</label>
	    <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua Dez de Onze Doze, 13">
	  </div>
	</div>
	<div class="row">
	  <div class="form-group col-md-6 col-md-offset-3">
	    <label for="data">Data da Coleta:</label>
	    <div class="input-group">
	    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	    	<input name="data" type="date" class="form-control" placeholder="00/00/0000">
	    </div>
	  </div>
	</div>
	<div class="row">
		<div class="col-md-offset-5">
			<button type="submit" class="btn btn-default">Agendar</button>		
		</div>	 
	</div>
	</form>

@stop
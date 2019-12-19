@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
		<div class="card-body">
			<h5 class="card-title"> Cadastro de Produtos</h5>
	
			@if(count($prods)>0)
			<table class="table table-ordered table-hover">
				<thead>
					<tr>
						<th>Código</th>
						<th>Nome do Produto</th>
						<th>ID da Categoria</th>
						<th>Ações</th>
					</tr>	
				</thead>
				<body>
					@foreach ($prods as $prod)
					
					<tr>
					<td>{{$prod->id}}</td>
						<td>{{$prod->nome}}</td>
						<td>{{$prod->categoria_id}}</td>
						<td>
							<a href="/produtos/editar/{{$prod->id}}" class="btn btn-sn-primary">Editar</a>
							<a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sn-danger">Apagar</a>
						</td>
					</tr>	
						
					@endforeach
				</body>		
			</table>
			@endif	
		</div>	
		<div class="card-footer">
			<a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
		</div>	
	</div>
@endsection
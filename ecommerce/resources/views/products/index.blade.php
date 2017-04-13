@extends('layouts.app')

@section('content')


</body>
</html>
<div class="big-padding text-center blue-grey white-text">
<h1>Productos</h1>
</div>
	<div class="container white">
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Título</td>
				<td>Descripcción</td>
				<td>Precio</td>
				<td>Acciones</td>
			</tr>
		</thead>
		<body>
			@foreach ($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->title}}</td>
				<td>{{ $product->descriptions }}</td>
				<td>{{ $product->pricing}}</td>
				<td>Acciones</td>
			</tr>
			@endforeach
		</body>
	</table>
		
	</div>
	<div class="floating">
		<a href="{{url('/products/create')}}" class="btn btn-primary btn-fab"><i class="material-icons">add</i></a>
		
	</div>
@endsection

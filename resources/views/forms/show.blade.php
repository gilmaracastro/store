@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<!-- <div class="card-header">{{ __('Store') }}</div> -->

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					<div class="row justify-content-center">
						<div class="col-sm-6">
							<!-- <div class="card"> -->
								<img class="card-img-top" src="/img/{{$product->photo}}" alt="Card image cap">
								<div class="card-body">
									<!-- <p class="card-text">id: {{$product->id}}</p> -->
									<p class="card-text"><strong> Nome: </strong> {{$product->name}}</p>
									<p class="card-text"><strong> Descrição: </strong> {{$product->description}}</p>
									<td>
										<a class="btn btn-success"  href="{{ route('products.edit', $product->id) }}">Editar</a>
									</td>
									<td>
										<form action="{{ route('products.destroy', $product->id) }}" class="form-horizontal" method="post" style="display: inline-block">
											{!! csrf_field() !!}
											<input type="hidden" name="_method" value="DELETE">
											<input type="submit" value="Excluir" class="btn btn-danger">
										</form>
									</td>
								</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

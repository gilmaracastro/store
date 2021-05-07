@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Store') }}</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					<div class="row">
						@forelse ($products as $product)
							<div class="col-sm-6">
								<div class="card">
									<img class="card-img-top" src="img/{{$product->photo}}" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"> {{$product->name}}</p>
										<p class="card-text"> {{$product->description}}</p>
									</div>
								</div>
							</div>
						@empty
							<p>Nenhum produto cadastrado</p>
						@endforelse
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

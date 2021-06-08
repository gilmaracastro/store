@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ __('Formulário de Edição de Cadastro') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<div class="row">
							<div class="col-md-3">
								<img class="card-img-top" src="/img/{{$product->photo}}" alt="Card image cap">

								<div class="col-md-5">
									<input id="photo" type="file" name="photo" required src="img/{{$product->photo}}">
									@error('photo')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="col">

								<label for="name" class="col-sm col-form-label text-md">{{ __('Nome') }}</label>
								<div class="col">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>

								<label for="description" class="col-sm col-form-label text-md">{{ __('Descrição') }}</label>
								<div class="col">
									<input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $product->description }}" required autocomplete="description">

									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

						</div>

						<div class="col-sm col-form-label text-md-right">
							<button type="submit" class="btn btn-primary">
								{{ __('Salvar') }}
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

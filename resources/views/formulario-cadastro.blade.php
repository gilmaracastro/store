@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulário de Cadastro') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url'=>'cadastro/salvar', 'files'=> true]) !!}

                    {!! Form::label('name','Nome:') !!}
                    {!! Form:: input('text','name',null,['class'=>'form-control','autofocus','placeholder'=>'Nome']) !!}

                    {!!Form::label('description', 'Descrição:') !!}
                    {!!Form::input('text','description',null,['class'=>'form-control','autofocus','placeholder'=>'Descrição']) !!}

                    <br>
                    {!!Form::label('photo', 'Foto:') !!}
                    {!!Form::file('photo') !!}

                    <br>
                    <br>

                    {!!Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

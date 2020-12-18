@extends('monkeys.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Detalhes sobre {{ $monkey->especie }}</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-dark" href="{{ route('monkeys.index') }}"> Voltar</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Espécie:</strong>

                {{ $monkey->especie }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Descrição:</strong>

                {{ $monkey->descricao }}

            </div>

        </div>

    </div>

@endsection
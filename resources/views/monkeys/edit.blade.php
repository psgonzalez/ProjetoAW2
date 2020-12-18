@extends('monkeys.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Editar {{ $monkey->especie }}</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-dark" href="{{ route('monkeys.index') }}"> Voltar</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> Existem alguns erros durante a edição.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('monkeys.update',$monkey->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Espécie:</strong>

                    <input type="text" name="especie" value="{{ $monkey->especie }}" class="form-control" placeholder="Espécie">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Descrição:</strong>

                    <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição">{{ $monkey->descricao }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-dark">Alterar</button>

            </div>

        </div>

   

    </form>

@endsection
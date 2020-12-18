@extends('monkeys.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2 class='text-center'>Enciclopédia</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-dark" href="{{ route('monkeys.create') }}"> Adicionar espécie</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered mt-2">

        <tr>

            <th>No</th>

            <th>Espécie</th>

            <th>Descrição</th>

            <th width="280px">Ação</th>

        </tr>

        @foreach ($monkeys as $monkey)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $monkey->especie }}</td>

            <td>{{ $monkey->descricao }}</td>

            <td>

                <form action="{{ route('monkeys.destroy',$monkey->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('monkeys.show',$monkey->id) }}">Detalhes</a>

    

                    <a class="btn btn-primary" href="{{ route('monkeys.edit',$monkey->id) }}">Editar</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Deletar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $monkeys->links() !!}

      

@endsection
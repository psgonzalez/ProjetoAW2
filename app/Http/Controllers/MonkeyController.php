<?php

namespace App\Http\Controllers;

use App\Models\Monkey;
use Illuminate\Http\Request;

class MonkeyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monkeys = Monkey::latest()->paginate(5);

  

        return view('monkeys.index',compact('monkeys'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monkeys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'especie' => 'required',

            'descricao' => 'required',

        ]);

  

        Monkey::create($request->all());

   

        return redirect()->route('monkeys.index')

                        ->with('success','Espécie adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monkey  $monkey
     * @return \Illuminate\Http\Response
     */
    public function show(Monkey $monkey)
    {
        return view('monkeys.show',compact('monkey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monkey  $monkey
     * @return \Illuminate\Http\Response
     */
    public function edit(Monkey $monkey)
    {
        return view('monkeys.edit',compact('monkey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monkey  $monkey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monkey $monkey)
    {
        $request->validate([

            'especie' => 'required',

            'descricao' => 'required',

        ]);

  

        $monkey->update($request->all());

  

        return redirect()->route('monkeys.index')

                        ->with('success','Registro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monkey  $monkey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monkey $monkey)
    {
        $monkey->delete();

  

        return redirect()->route('monkeys.index')

                        ->with('success','Registro deletado com sucesso.');
    }
}

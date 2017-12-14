<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;


class ExpensesController extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth');
    }

     public function index()
    {
        $gastos = Expense::all();

        return view('gasto.index',compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       Expense::create([
        'observacion' => request('observacion'),
        'monto' => request('monto'),
        'user_id' => '1'
        ]);

       /* $gasto = Expense::create($request->all());

        $gasto->user_id='1';
        $gasto->save();
        */


        //Expense::create($request->all());
        

        return redirect()->route('gasto.create')->with('info','Gasto almacenado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gasto=Expense::findOrFail($id);
        return view('gasto.show',compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $gasto=Expense::findOrFail($id);
        return view('gasto.edit',compact('gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Expense::findOrFail($id)->update($request->all());
            return redirect()->route('gasto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::findOrFail($id)->delete();
            return redirect()->route('gasto.index');
    }
}

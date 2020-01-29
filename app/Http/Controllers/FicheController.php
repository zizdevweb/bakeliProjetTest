<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiche;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $liste= Fiche::simplePaginate(5);
        return view('fiche.index',compact('liste'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fiche.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name'=>'required',
            'phone'=>'required|numeric',
            'email' => 'required',
            'address' => 'required'
        ]);
        $fiche= new Fiche();
        $fiche->name=$request->input('name');
        $fiche->phone=$request->input('phone');
        $fiche->email=$request->input('email');
        $fiche->address=$request->input('address');
        $fiche->save();
        return redirect()->route('fiche_index')->with(['success'=>'ajout effectue!!']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $modif= Fiche::find($id);
        return view('fiche.edit',compact('modif'));
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
        //
        $data = $request->validate([
            'name'=>'required',
            'phone'=>'required|numeric',
            'email' => 'required',
            'address' => 'required'
        ]);
        $liste= Fiche::find($id);
        if($liste){
            $liste->update([
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
                'email'=>$request->input('email'),
                'address'=>$request->input('address')
            ]);
        }
        return redirect()->back()->with(['success'=>'modifie avec succes!!']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $liste = Fiche::find($id);
        if($liste)
            $liste->delete();
        return redirect()->route('fiche_index');
    }
}

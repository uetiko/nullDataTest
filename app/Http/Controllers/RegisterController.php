<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest();
        return view('register.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'birthday' => 'required|date_format:d/m/Y',
            'email' => 'required',
            'calle' => 'required',
            'estado' => 'required',
            'delegacion_municipio' => 'required',
            'numero_ext' => 'required',
            'cp' => 'required'
        ]);

        $address = Address::create($request->all());
        $user = User::firstOrCreate($request->all());
        $user->address()->save($address);
        return redirect()->route('register.index')->with(
            'success', 'register'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('register.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('register.edit', compact('user'));
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
        
        request()->validate([
            'calle' => 'required',
            'estado' => 'required',
            'delegacion_municipio' => 'required',
            'numero_ext' => 'required',
            'cp' => 'required'
        ]);

        $address = Address::create($request->all());
        $user = User::find($id);
        $user->address()->save($address);

        return redirect()->route('register.index')->with(
            'success', 'register'
        );
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
    }
}

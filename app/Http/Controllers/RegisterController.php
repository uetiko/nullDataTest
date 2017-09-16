<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;
use \DateTime;


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
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = DateTime::createFromFormat('d/m/Y', $request->birthday);
        $user->save();

        $address = new Address();
        $address->calle = $request->calle;
        $address->estado = $request-> estado;
        $address->delegacion_municipio = $request->delegacion_municipio;
        $address->numero_ext = $request->numero_ext;
        $address->cp = $request->cp;
        $address->user_id = $user->id;
        $address->save();

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

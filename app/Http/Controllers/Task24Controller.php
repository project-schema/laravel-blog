<?php

namespace App\Http\Controllers;

use App\Models\Task24;
use Illuminate\Http\Request;

class Task24Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $all_data = Task24::all();
        return view( 'task24.index', compact( 'all_data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'name'    => 'required',
            'age'     => 'required',
            'address' => 'required',
        ] );

        Task24::create( $request->all() );
        return redirect()->route( 'task24.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $data = Task24::find( $id );

        return view( 'task24.edit', compact( 'data' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $request->validate( [
            "name"    => "required",
            "age"     => "required",
            "address" => "required",
        ] );

        $data = Task24::find( $id );
        $data->update( $request->all() );
        return redirect()->route( 'task24.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Task24::find( $id );
        $data->delete();
        return redirect()->route( 'task24.index' );
    }

    public function create() {
        return view( 'task24.create' );
    }
}

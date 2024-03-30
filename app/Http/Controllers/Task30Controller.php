<?php

namespace App\Http\Controllers;

use App\Models\Task30;
use Illuminate\Http\Request;

class Task30Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Task30::all();
        return view( 'task30.index', compact( 'data' ) );
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {

        $request->validate( [
            "name" => "required",
            "age"  => "required",
        ] );

        Task30::create( $request->all() );

        return redirect()->route( 'task30.index' );
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $request->validate( [
            "name" => 'required',
            "age"  => 'required',
        ] );

        $data = Task30::find( $id );
        $data->update( $request->all() );

        return redirect()->route( 'task30.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Task30::find( $id );
        $data->delete( $data );
        return redirect()->route( 'task30.index' );
        //
    }
    public function create() {
        return view( 'task30.create' );
        //
    }
    public function edit( $id ) {
        $data = Task30::find( $id );

        return view( 'task30.edit', compact( 'data' ) );
        //
    }
}

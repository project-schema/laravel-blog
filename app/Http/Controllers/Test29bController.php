<?php

namespace App\Http\Controllers;

use App\Models\Test29b;
use Illuminate\Http\Request;

class Test29bController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Test29b::all();
        return view( 'test29b.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required',
            'age'  => 'required',
            'city' => 'required',
        ] );

        Test29b::create( $request->all() );
        return redirect()->route( 'test29b.index' );
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
            'name' => 'required',
            'age'  => 'required',
            'city' => 'required',
        ] );

        $data = Test29b::find( $id );
        $data->update( $request->all() );
        return redirect()->route( 'test29b.index' );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Test29b::find( $id );
        $data->delete();
        return redirect()->route( 'test29b.index' );
    }
    public function create() {
        return view( 'test29b.create' );
    }
    public function edit( $id ) {
        $data = Test29b::find( $id );

        return view( 'test29b.edit', compact( 'data' ) );
    }
}

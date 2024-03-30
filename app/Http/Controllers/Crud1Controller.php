<?php

namespace App\Http\Controllers;

use App\Models\Crud1;
use Illuminate\Http\Request;

class Crud1Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Crud1::all();
        return view( 'crud1.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required',
            'age'  => 'required',
        ] );

        Crud1::create( $request->all() );
        return redirect()->route( 'crud1.index' );
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
            'name' => 'validate',
            'age'  => 'validate',
        ] );
        $data = Crud1::find( $id );
        $data->update( $request->all() );
        return view( 'crud1.index' );

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Crud1::find( $id );
        $data->delete();
        return redirect()->route( 'crud1.index' );
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function create() {
        return view( 'crud1.create' );
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function edit( $id ) {
        $data = Crud1::find( $id );
        return view( 'crud1.edit', compact( 'data' ) );
        //
    }
}

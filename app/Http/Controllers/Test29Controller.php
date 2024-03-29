<?php

namespace App\Http\Controllers;

use App\Models\Test29;
use Illuminate\Http\Request;

class Test29Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Test29::all();
        return view( 'test29.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'name'     => 'required',
            'age'      => 'required',
            'location' => 'required',
        ] );

        Test29::create( $request->all() );

        return redirect()->route( 'test29.index' )->with( 'success', 'Test Success' );

    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $data = Test29::find( $id );
        return view( 'test29.show', compact( 'data' ) );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $request->validate( [
            'name'     => 'required',
            'age'      => 'required',
            'location' => 'required',
        ] );

        $data = Test29::find( $id );
        $data->update( $request->all() );
        return redirect()->route( 'test29.index' )->with( 'success', 'update success' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Test29::find( $id );
        $data->delete();
        return redirect()->route( 'test29.index' )->with( 'Success', 'Delete Success' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function create() {
        return view( 'test29.create' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function edit( $id ) {
        $data = Test29::find( $id );
        return view( 'test29.edit', compact( 'data' ) );
    }
}

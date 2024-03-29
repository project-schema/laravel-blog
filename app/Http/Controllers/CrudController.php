<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Crud::all();
        return view( 'crud.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {

        $request->validate( [
            'name' => 'required',
            'age'  => 'required',
        ] );

        Crud::create( $request->all() );

        return redirect()->route( 'crud.index' );
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
        ] );

        $data = Crud::find( $id );
        $data->update( $request->all() );
        return redirect()->route( 'crud.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Crud::find( $id );
        $data->delete();
        return redirect()->route( 'crud.index' );

        //
    }

    public function create() {
        return view( 'crud.create' );
    }
    public function edit( $id ) {
        $data = Crud::find( $id );
        return view( 'crud.edit', compact( 'data' ) );
    }
}

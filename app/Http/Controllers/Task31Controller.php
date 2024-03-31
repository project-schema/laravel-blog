<?php

namespace App\Http\Controllers;

use App\Models\Task31;
use Illuminate\Http\Request;

class Task31Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Task31::all();
        return view( 'task31.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            "name" => "required",
            "age"  => "required",
        ] );

        Task31::create( $request->all() );
        return redirect()->route( 'task31.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $data = Task31::find( $id );
        return view( 'task31.edit', compact( 'data' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $request->validate( [
            "name" => "required",
            "age"  => "required",
        ] );
        $data = Task31::find( $id );
        $data->update( $request->all() );
        return redirect()->route( 'task31.index' );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Task31::find( $id );
        $data->delete();
        return redirect()->route( 'task31.index' );
    }

    public function create() {
        return view( 'task31.create' );
    }
}

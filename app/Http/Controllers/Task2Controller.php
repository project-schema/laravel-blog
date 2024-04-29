<?php

namespace App\Http\Controllers;

use App\Models\Task2;
use Illuminate\Http\Request;

class Task2Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $all_data = Task2::all();
        return view( 'task2.index', compact( 'all_data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            "name"     => "required",
            "age"      => "required",
            "address"  => "required",
            "location" => "required",
        ] );

        Task2::create( $request->all() );
        return redirect()->route( 'task2.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $data = Task2::find( $id );
        return view( 'task2.edit', compact( 'data' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $data = Task2::find( $id );
        $request->validate( [
            "name"     => "required",
            "age"      => "required",
            "address"  => "required",
            "location" => "required",
        ] );

        $data->update( $request->all() );
        return redirect()->route( 'task2.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Task2::find( $id );
        $data->delete();
        return redirect()->route( 'task2.index' );
    }

    public function create() {
        return view( 'task2.create' );
    }
}

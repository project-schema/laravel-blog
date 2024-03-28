<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;

class TestingController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Testing::all();
        return view( 'testing.create', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required',
            'age'  => 'required',
        ] );

        Testing::create( $request->all() );
        return redirect()->route( 'testing.create' )->with( 'success' );
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        //
    }
}

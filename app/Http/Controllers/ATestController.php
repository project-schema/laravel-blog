<?php

namespace App\Http\Controllers;

use App\Models\ATest;
use Illuminate\Http\Request;

class ATestController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = ATest::all();
        return view( 'aTest.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        //
    }
}

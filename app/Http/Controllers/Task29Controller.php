<?php

namespace App\Http\Controllers;

use App\Models\Task29;
use Illuminate\Http\Request;

class Task29Controller extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Task29::all();
        return view( 'task29.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        $request->validate( [
            'name'  => 'required',
            'age'   => 'required',
            'place' => 'required',
        ] );

        Task29::create( $request->all() );
        return redirect()->view( 'task29.index' );
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

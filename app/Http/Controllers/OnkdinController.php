<?php

namespace App\Http\Controllers;

use App\Models\Onkdin;
use Illuminate\Http\Request;

class OnkdinController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Onkdin::all();
        return view( 'onkdin.index', compact( 'data' ) );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {

        $request->validate( [
            'body' => 'required',
            'text' => 'required',
        ] );

        Onkdin::create( $request->all() );
        return redirect()->route( 'onkdin.index' );
    }

    /**
     * Display the specified resource.
     */
    public function show( string $id ) {
        $data = Onkdin::find( $id );
        return view( 'onkdin.edit', compact( 'data' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, string $id ) {
        $request->validate( [
            'body' => "required",
            'text' => "required",
        ] );

        $data = Onkdin::find( $id );
        $data->update( $request->all() );
        return redirect()->route( 'onkdin.index' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id ) {
        $data = Onkdin::find( $id );
        $data->delete();
        return redirect()->route( 'onkdin.index' );
    }

    public function create() {
        return view( 'onkdin.create' );
    }
}

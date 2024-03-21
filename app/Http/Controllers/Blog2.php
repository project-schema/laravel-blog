<?php

namespace App\Http\Controllers;

use App\Models\Blog2 as ModelsBlog2;
use Illuminate\Http\Request;

class Blog2 extends Controller {
    public function store( Request $request ) {
        $data = $request->validate( [
            'title'       => 'required|string',
            'description' => 'required|string',
        ] );

        $newBlog = ModelsBlog2::create( $data );
        return redirect( route( 'blogs' ) );

    }
}

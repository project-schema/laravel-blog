<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Request;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index() {
        return view( 'admin.blogs' );
    }

    public function create() {
        return view( 'admin.blog_create' );
    }

    public function store( Request $request ) {
        dd( $request );
        $data = $request->validate( [
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'required|image',
        ] );

        if ( $request->hasFile( 'image' ) ) {
            $image     = $request->file( 'image' );
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move( public_path( 'uploads' ), $imageName );
            $data['image'] = $imageName;
        }

        $newBlog = Blog::create( $data );
        return redirect( route( 'blogs' ) );

    }
}

@extends('admin.layouts.adminLayout')
@section('admin_content')
    <section class="py-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="POST" action="{{ route('blog-store') }}" class="shadow p-4">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="Description" cols="30" rows="5"></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="image">Upload</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

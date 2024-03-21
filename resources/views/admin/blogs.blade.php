@extends('admin.layouts.adminLayout')
@section('admin_content')
    <section class="py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-5">Check my latest blogposts</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ URL('img/about-01.jpg') }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-3">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">Rover raised $65 million</a>
                            </h5>
                            <p>
                                Finding temporary housing for your dog should be as easy as
                                renting an Airbnb. That’s the idea behind Rover ...
                            </p>
                            <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="../img/about-01.jpg" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-3">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                            </h5>
                            <p>
                                If you’ve ever wanted to train a machine learning model
                                and integrate it with IFTTT, you now can with ...
                            </p>
                            <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ URL('img/about-01.jpg') }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-3">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                            </h5>
                            <p>
                                If you’ve ever wanted to train a machine learning model
                                and integrate it with IFTTT, you now can with ...
                            </p>
                            <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ URL('img/about-01.jpg') }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-3">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                            </h5>
                            <p>
                                If you’ve ever wanted to train a machine learning model
                                and integrate it with IFTTT, you now can with ...
                            </p>
                            <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image">
                                <img src="{{ URL('img/about-01.jpg') }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-3">
                            <h5>
                                <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                            </h5>
                            <p>
                                If you’ve ever wanted to train a machine learning model
                                and integrate it with IFTTT, you now can with ...
                            </p>
                            <a href="javascript:;" class="text-info text-sm icon-move-right">Edit
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

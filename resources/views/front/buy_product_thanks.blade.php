@extends('front.master')
@section('title', 'Homepage | ' . env('APP_NAME'))
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-header-content">
                        <h1>Checkout</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Checkout
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="site-main woocommerce single single-product page-wrapper">
        <!--shop category start-->
<h3>Thanks</h3>
        <!--shop category end-->
    </main>


@stop

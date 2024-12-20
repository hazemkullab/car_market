@extends('front.master')
@section('title','Homepage | '.env('APP_NAME'))
@section('content')

<section class="page-header">
     {{-- <div class="page-header">
        <img src="{{ asset('webasset/assets/images/front.png') }}" alt="" class="img-fluid">
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>{{ __('web.Dealers') }}</h1>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('website.index') }}">{{ __('web.Home') }}</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            {{ __('web.Dealers') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding course">

   <div class="container">
        <div class="row">
            @foreach ($dealers as $dealer)
            <div class="col-lg-4 col-md-6 mb-4">
                @include('front.sections.dealer')
            </div>
            @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12 blog-pagination text-center">
            <nav class="blog-pagination text-center">
                {{-- <ul>
                    <li class="page-num active"><a href="#">1</a></li>
                    <li class="page-num"><a href="#">2</a></li>
                    <li class="page-num"><a href="#">3</a></li>
                </ul>
            </nav> --}}
            {{ $dealers->links() }}
        </div>
    </div>
   </div>
</section>

@stop

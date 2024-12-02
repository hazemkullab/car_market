@extends('front.master')
@section('title','Homepage | '.env('APP_NAME'))
@section('content')



<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="page-header-content">
                    <h1>{{ $dealer->trans_name }}</h1>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('website.index') }}">{{ __('web.Home') }}</a>
                        </li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            {{ $dealer->trans_name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="page-wrapper edutim-course-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="course-single-header">
                    <div class="rating">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <span>(5.00)</span>
                    </div>

                    <h3 class="single-course-title">{{ $dealer->trans_name }}</h3>
                    <p>{{ $dealer->trans_excerpt }}</p>

                    <div class="single-course-meta ">
                        <ul>
                            <li>
                                <span><i class="fa fa-calendar"></i>{{ __('web.Last Update') }} :</span>
                                <a href="#" class="d-inline-block">{{ $dealer->updated_at->format('F d, Y') }} </a>
                            </li>

                            <li>
                                <span><i class="fa fa-bookmark"></i>{{ __('web.Category') }} :</span>
                                <a href="#" class="d-inline-block">{{ $dealer->category->trans_name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-course-details ">
                    <h4 class="course-title">{{ __('web.Description') }}</h4>
                    {!! $dealer->trans_content !!}
                    </div>
            </div>

        </div>
    </div>
</section>
<section class="section-padding course">
    <div class="course-top-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p> {{ __('web.All products') }} </p>
                </div>
{{-- 
                <div class="col-lg-4">
                    <div class="topbar-search">
                        <form method="get" action="#">
                            <input type="text" placeholder="{{ __('web.Search our products') }}" class="form-control">
                            <label><i class="fa fa-search"></i></label>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                @include('front.sections.product')
            </div>
            @endforeach
        </div>


        <div class="row">
            <div class="col-lg-12 blog-pagination text-center">
                {{-- <nav class="blog-pagination text-center">
                    <ul>
                        <li class="page-num active"><a href="#">1</a></li>
                        <li class="page-num"><a href="#">2</a></li>
                        <li class="page-num"><a href="#">3</a></li>
                    </ul>
                </nav> --}}
                {{ $products->links() }}
            </div>
        </div>
    </div>
</section>


<section class="section-padding related-course">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h4>{{ __('web.Related Dealers You may Like') }}</h4>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($related_dealers as $dealer)
            <div class="col-lg-4 col-md-6">
                @include('front.sections.dealer')
            </div>
            @endforeach
        </div>
    </div>
</section>

@stop

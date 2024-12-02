@extends('front.master')
@section('title','Homepage | '.env('APP_NAME'))
@section('content')

<!DOCTYPE html>
<html lang="zxx">

    <!--search overlay end-->
    <section class="banner banner-2">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8" >
                    <div class="banner-content center-heading">

                        <span class="subheading">{{ __('web.Expert Cars') }}</span>
                        <h1>{{ __('web.Our products are the best on the market') }}</h1>
                        <p>{{ __('web.We invest in Car parts, technological innovations and infrastructure and have established regional and international offices') }}.</p>
                        <a href="{{ route('website.dealers') }}" class="btn btn-main"><i class="fa fa-list-ul mr-2"></i>{{ __('web.Our Dealers') }} </a>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <section class="category-section2">
        <div class="container">
            <div class="row no-gutters">
                <div class="course-categories">
                    @foreach ($categories as $item)
                    <div class="category-item category-bg-{{ $loop->iteration }}">
                        <a href="{{ route('website.category', $item->slug) }}">
                            {{-- <div class="category-icon">
                                <i class="bi bi-laptop"></i>
                            </div> --}}
                            <h4>{{ $item->trans_name }}</h4>
                            <p>{{ $item->dealers->count() }} {{ __('web.Dealers') }}</p>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="section-padding popular-course pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <span class="subheading">{{ __('web.Top Trending Dealers') }}</span>
                        <h3>{{ __('web.Our Popular Online Dealers') }}</h3>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="course-btn text-lg-right"><a href="{{ route('website.dealers') }}" class="btn btn-main"><i
                                class="fa fa-store mr-2"></i>{{ __('web.All Dealers') }}</a></div>
                </div>
            </div>

            <div class="row">
                @foreach ($latest_dealers as $dealer)
                <div class="col-lg-4 col-md-6">
                    @include('front.sections.dealer')
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-padding course-grid">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        {{-- <span class="subheading"></span> --}}
                        <h3>{{ __('web.Top Trending categories') }}</h3>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <ul class="course-filter">
                    <li class="active"><a href="#" data-filter="*"> {{ __('web.All') }}</a></li>
                    @foreach ($categories as $item)
                    <li><a href="#" data-filter=".cat{{ $item->id }}">{{ $item->trans_name }}</a></li>
                    @endforeach
                    {{-- <li><a href="#" data-filter=".cat1">printing</a></li> --}}
                </ul>
            </div>

            <div class="row course-gallery ">
                @foreach ($dealers as $dealer)
                <div class="course-item cat{{ $dealer->category_id }} col-lg-4 col-md-6">
                    @include('front.sections.dealer')
                </div>
                @endforeach


            </div>
        </div>

    </section>



</body>

</html>

@stop

@extends('home._layouts._app')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg8">
        <div class="container-fluid">
            <div class="container-max">
                <div class="inner-title">
                    <span>@lang('site.categories')</span>
                    <h2>@lang('site.all_categories')</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Property Section Two -->
    <section class="property-section-two pt-100 pb-70">
        <div class="container-fluid">
            <div class="container-max">
                <div class="property-section-title-two">
                    <div class="section-title-two text-center">
                        <h2>
                            تصفح تصنيفات المشاريع المنفذة <b class="section-color2">والتي قيد الإنشاء</b>
                        </h2>
                    </div>
                </div>

                <div class="row pt-45">

                    @if ($categories->count() > 0)
                        @foreach ($categories as $item)
                            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                <div class="property-card">
                                    <a href="{{ route('category', $item->id) }}">
                                        <img src="{{ asset('home/assets/img/property/pr-3.jpg') }}" alt="Images">
                                    </a>
                                    <div class="content">
                                        <span>عدد المشاريع {{ $item->projects->count() }}</span>
                                        <a href="{{ route('category', $item->id) }}">
                                            <h3>{{ $item->name }}</h3>
                                        </a>
                                        <p>{{ $item->description }}</p>
                                        <a href="{{ route('category', $item->id) }}" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            تصفح المشاريع
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4>لم يتم إضافة تصنيفات بعد</h4>
                    @endif



                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                            {{ $categories->links() }}


                            {{-- link --}}
                        </div>
                    </div>
                </div>
            </
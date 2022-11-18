@extends('home._layouts._app')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg8">
        <div class="container-fluid">
            <div class="container-max">
                <div class="inner-title">
                    <span>{{ $category->name }}</span>
                    <h2>@lang('site.all_projects')</h2>
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
                            تصفح المشاريع الخاصة بـ <b class="section-color2">{{ $category->name }}</b>
                        </h2>
                    </div>
                </div>

                <div class="row pt-45">

                    @if ($projects->count() > 0)
                        @foreach ($projects as $item)
                            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                <div class="property-card">
                                    <a href="{{ route('project', $item->id) }}">
                                        <img src="{{$item->poster_path }}" alt="Images">
                                    </a>
                                    <div class="content">
                                        <span>@if ($item->status =='complete')
                                            مكتمل
                                        @else
                                            قيد التنفيذ
                                        @endif</span>
                                        <a href="{{ route('project', $item->id) }}">
                                            <h3>{{ $item->name }}</h3>
                                        </a>
                                        <p>{{ $item->category->name }}</p>
                                        <a href="{{ route('project', $item->id) }}" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            تصفح المشروع
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <h4>لايوجد مشاريع في هذا القسم</h4>
                    @endif



                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                            {{ $projects->links() }}


                            {{-- link --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section Two End -->
@endsection

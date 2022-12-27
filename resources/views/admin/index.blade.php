@extends('admin._layouts._app')


@section('content')
    <div class="row" style="text-align: right; direction: rtl">
        <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-180">
                    <h5 class="text-muted success  p-1">@lang('site.categories') {{ $categories }} <i
                            class="fa fa-building-o success font-large-1 float-right pl-1"></i></h5>

                    <h5 class="text-muted info  p-1">@lang('site.projects') {{ $projects }}
                        <i class="fa fa-institution info font-large-1 float-right pl-1"></i>
                    </h5>
                    <h5 class="text-muted danger p-1"> مرات تحميل البروفايل {{ $counter }}
                        <i class="fa fa-save danger font-large-1 float-right pl-1"></i></h5>

                </div>
            </div>
        </div>
        {{-- <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-180">
                    <h5 class="text-muted info position-absolute p-1">@lang('site.projects')</h5>
                    <div>
                        <i class="fa fa-institution info font-large-1 float-right p-1"></i>
                    </div>
                    <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                        <div id="">
                            <h3 style="padding: 40px 15px;">{{ $projects }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="card pull-up ecom-card-1 bg-white">
                <div class="card-content ecom-card2 height-180">
                    <h5 class="text-muted danger position-absolute p-1"> مرات تحميل البروفايل</h5>
                    <div>
                        <i class="fa fa-save danger font-large-1 float-right p-1"></i>
                    </div>
                    <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                        <div id="">
                            <h3 style="padding: 40px 15px;">{{ $counter }}</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">سجل العمليات</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">


                    @if ($logs->count() == 0)
                        <div class="table-responsive">
                            <h3 class="mr-3 mb-3" dir="rtl" style="text-align: right">@lang('site.no_data_found')</h3>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped table-scrollable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">@lang('site.category')</th>
                                        <th scope="col">@lang('site.description')</th>
                                        <th scope="col">التاريخ والوقت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logs as $index => $log)
                                        <tr dir="rtl" style=" text-align: right;">
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td dir="rtl">{{ $log->type }}</td>
                                            <td>{{ $log->content }}</td>
                                            <td>{{ $log->created_at->diffforhumans() }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
@endsection

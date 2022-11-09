@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.add') @lang('site.project')</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-12">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.projects.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    @include('admin._layouts._error')
                                    <div class="col-lg-6">

                                        <h5 class="mt-2">@lang('site.category')</h5>
                                        <select name="category" id="" class="form-control">
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <h5 class="mt-2">@lang('site.name')</h5>
                                        <input value="{{ old('name') }}" name="name" type="text"
                                            class="form-control" id="basicInput" required>
                                        <h5 class="mt-2">@lang('site.scheme_name')</h5>
                                        <input value="{{ old('scheme_name') }}" name="scheme_name" type="text"
                                            class="form-control" id="basicInput" required>
                                        <h5 class="mt-2">@lang('site.address')</h5>
                                        <textarea name="address" class="form-control" id="basicTextarea" rows="3" required>{{ old('address') }}</textarea>
                                        <h5 class="mt-2">@lang('site.image')</h5>
                                        <input name="img" type="file" class="form-control" id="basicInput" required>

                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="mt-2">@lang('site.floors_count')</h5>
                                        <input value="{{ old('floors_count',5) }}" name="floors_count" type="number" min="1"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">@lang('site.front_apartments_count')</h5>
                                        <input value="{{ old('front_apartments_count',4) }}" name="front_apartments_count" type="number" min="1"
                                            class="form-control" id="basicInput" required>
                                            <h5 class="mt-2">@lang('site.back_apartments_count')</h5>
                                        <input value="{{ old('back_apartments_count',4) }}" name="back_apartments_count" type="number" min="1"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">@lang('site.appendix_count')</h5>
                                        <input value="{{ old('appendix_count',0) }}" min="0" name="appendix_count" type="number"
                                            class="form-control" id="basicInput" required>


                                        <h5 class="mt-2">@lang('site.description')</h5>
                                        <textarea name="details" class="form-control" id="basicTextarea" rows="3">{{ old('details') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <hr>
                                        <h4>معلومات الشقق الأمامية</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <hr>
                                        <h4>
                                            معلومات الشقق الخلفية
                                        </h4>
                                    </div>

                                    <div class="col-lg-12"><hr>
                                        <h4>معلومات الملاحق</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-icon btn-info mr-1 mt-3">@lang('site.create') <i
                                                class="fa fa-save" style="position: relative"></i></button>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic Inputs end -->
@endsection

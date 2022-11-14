@extends('admin._layouts._app')

@section('content')
    <form action="{{ route('admin.projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.edit') @lang('site.project')</h4>
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
                    <div class="card-content collapse show" dir="rtl" style="text-align: right">
                        <div class="card-body " style="text-align: right">
                            <fieldset class="form-group">


                                @include('admin._layouts._error')
                                <div class="col-lg-6">

                                    <h5 class="mt-2">@lang('site.category')</h5>
                                    <select name="category" id="" class="form-control">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($item->id == $project->category_id) selected @endif>{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <h5 class="mt-2">@lang('site.name')</h5>
                                    <input value="{{ old('name', $project->name) }}" name="name" type="text"
                                        class="form-control" id="basicInput" required>
                                    <h5 class="mt-2">@lang('site.scheme_name')</h5>
                                    <input value="{{ old('scheme_name', $project->scheme_name) }}" name="scheme_name"
                                        type="text" class="form-control" id="basicInput" required>
                                    <h5 class="mt-2">@lang('site.address')</h5>
                                    <textarea id="summernote"  name="address" class="form-control" id="basicTextarea" rows="3" required>{{ old('address', $project->address) }}</textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('img[]') }}" name="img[]" multiple type="file"
                                        class="form-control" id="basicInput">
                                    @if ($project->projectImages->count() > 0)
                                        <div class="row mt-1">
                                            @foreach ($project->images_path as $item)
                                                <img class="col-lg-3" src="{{ $item }}" alt="Images">
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="mt-2">@lang('site.floors_count')</h5>
                                    <input value="{{ old('floors_count', $project->floors_count) }}" name="floors_count"
                                        type="number" min="1" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">@lang('site.front_apartments_count')</h5>
                                    <input value="{{ old('front_apartments_count', $project->front_apartments_count) }}"
                                        name="front_apartments_count" type="number" min="1" class="form-control"
                                        id="basicInput" required>
                                    <h5 class="mt-2">@lang('site.back_apartments_count')</h5>
                                    <input value="{{ old('back_apartments_count', $project->back_apartments_count) }}"
                                        name="back_apartments_count" type="number" min="1" class="form-control"
                                        id="basicInput" required>

                                    <h5 class="mt-2">@lang('site.appendix_count')</h5>
                                    <input value="{{ old('appendix_count', $project->appendix_count) }}" min="0"
                                        name="appendix_count" type="number" class="form-control" id="basicInput" required>


                                    <h5 class="mt-2">@lang('site.description')</h5>
                                    <textarea id="summernote2"  name="details" class="form-control" id="basicTextarea" rows="3">{{ old('details', $project->details) }}</textarea>
                                </div>




                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">معلومات الشقق الأمامية</h4>
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
                        <div class="card-body " style="text-align: right">


                            <fieldset class="form-group">
                                <div class="col-lg-6  mt-3">
                                    <h5 class="mt-2">المساحة</h5>
                                    <input value="{{ old('farea', $project->front_apartment->area) }}" name="farea"
                                        type="number" min="0" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">السعر</h5>
                                    <input value="{{ old('fprice', $project->front_apartment->price) }}" name="fprice"
                                        type="number" min="0" class="form-control" id="basicInput" required>
                                </div>
                                <div class="col-lg-6 mt-3">

                                    <h5 class="mt-2"> التفاصيل</h5>
                                    <textarea id="summernote3"  name="fdetails" class="form-control" id="">
                                    {{ old('fdetails', $project->front_apartment->details) }}
                                </textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('fimg') }}" name="fimg" type="file"
                                        class="form-control" id="basicInput">
                                    <img class="col-lg-3 mt-1" src="{{ $project->front_apartment->image_path }}"
                                        alt="Images">

                                </div>
                        </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">معلومات الشقق الخلفية</h4>
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
                        <div class="card-body " style="text-align: right">

                            <fieldset class="form-group">
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2">المساحة</h5>
                                    <input value="{{ old('barea', $project->back_apartment->area) }}" name="barea"
                                        type="number" min="0" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">السعر</h5>
                                    <input value="{{ old('bprice', $project->back_apartment->price) }}" name="bprice"
                                        type="number" min="0" class="form-control" id="basicInput" required>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2"> التفاصيل</h5>
                                    <textarea id="summernote4"  name="bdetails" class="form-control" id="">
                                    {{ old('bdetails', $project->back_apartment->details) }}
                                </textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('bimg') }}" name="bimg" type="file"
                                        class="form-control" id="basicInput">
                                    <img class="col-lg-3 mt-1" src="{{ $project->back_apartment->image_path }}"
                                        alt="Images">

                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">معلومات الملاحق</h4>
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
                        <div class="card-body " style="text-align: right">

                            <fieldset class="form-group">
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2">المساحة</h5>
                                    <input value="{{ old('aarea', $project->appendix_apartment->area ?? '') }}"
                                        name="aarea" type="number" min="0" class="form-control"
                                        id="basicInput">

                                    <h5 class="mt-2">السعر</h5>
                                    <input value="{{ old('aprice', $project->appendix_apartment->price ?? '') }}"
                                        name="aprice" type="number" min="0" class="form-control"
                                        id="basicInput">
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2"> التفاصيل</h5>
                                    <textarea id="summernote5"  name="adetails" class="form-control" id="">
                                    {{ old('adetails', $project->appendix_apartment->details ?? '') }}
                                </textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('aimg') }}" name="aimg" type="file"
                                        class="form-control" id="basicInput">
                                    @if ($project->appendix_apartment)
                                        <img class="col-lg-3 mt-1" src="{{ $project->appendix_apartment->image_path }}"
                                            alt="Images">
                                    @endif
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ميزات المشاريع</h4>
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
                        <div class="card-body " style="text-align: right">
                            <fieldset class="form-group">
                                <div class="col-lg-6 mt-3">
                                    <textarea id="summernote6"  name="pdetails" class="form-control" id="">
                                    {{ old('pdetails', $project->propertie->details) }}
                                </textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">الضمانات</h4>
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
                        <div class="card-body " style="text-align: right">

                            <fieldset class="form-group">
                                <div class="col-lg-6 mt-3">

                                    <h5 class="mt-2">على الهيكل الانشائي</h5>
                                    <input value="{{ old('f1', $project->facility->f1) }}" name="f1" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">على القواطع والأفياش</h5>
                                    <input value="{{ old('f2', $project->facility->f2) }}" name="f2" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">على الكهرباء والسباكة</h5>
                                    <input value="{{ old('f3', $project->facility->f3) }}" name="f3" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">اتحاد الملاك مجاناَ</h5>
                                    <input value="{{ old('f4', $project->facility->f4) }}" name="f4" type="text"
                                        class="form-control" id="basicInput" required>
                                    <h5 class="mt-2">ضمانات إضافية</h5>
                                    <input value="{{ old('f5', $project->facility->f5) }}" name="f5" type="text"
                                        class="form-control" id="basicInput">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content collapse show">
                        <div class="card-body " style="float: right">
                            <div class="col-lg-12">
                                <button class="btn btn-icon btn-info mr-1 mt-3">@lang('site.update') <i class="fa fa-save"
                                        style="position: relative"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection

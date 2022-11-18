@extends('admin._layouts._app')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.add') @lang('site.project')</h4>
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
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <h5 class="mt-2">@lang('site.name')</h5>
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control"
                                        id="basicInput" required>
                                    <h5 class="mt-2">@lang('site.scheme_name')</h5>
                                    <input value="{{ old('scheme_name') }}" name="scheme_name" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">@lang('site.address')</h5>
                                    <textarea id="summernote" name="address" class="form-control" id="basicTextarea" rows="3" required>{{ old('address') }}</textarea>


                                        <h5 class="mt-2">حالة المشروع</h5>
                                        <select name="status" id="" class="form-control">
                                            <option value="complete">مكتمل</option>
                                            <option value="pending">قيد التنفيذ</option>
                                        </select>
                                        <h5 class="mt-2">نسبة التنفيذ</h5>
                                        <input value="{{ old('status_percent', 0) }}" name="status_percent" type="number" min="0" max="100"
                                            class="form-control" id="basicInput" required>


                                </div>
                                <div class="col-lg-6">
                                    <h5 class="mt-2">@lang('site.floors_count')</h5>
                                    <input value="{{ old('floors_count', 5) }}" name="floors_count" type="number"
                                        min="1" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">@lang('site.apartments_count')</h5>
                                    <input value="{{ old('apartments_count', 10) }}" name="apartments_count" type="number"
                                        min="1" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">@lang('site.appendix_count')</h5>
                                    <input value="{{ old('appendix_count', 2) }}" min="0" name="appendix_count"
                                        type="number" class="form-control" id="basicInput" required>


                                    <h5 class="mt-2">@lang('site.description')</h5>
                                    <textarea id="summernote2" name="details" class="form-control" id="basicTextarea" rows="3">{{ old('details') }}</textarea>
                                    <h5 class="mt-2">@lang('site.image') رئيسية</h5>
                                    <input value="{{ old('poster') }}" name="poster" type="file" class="form-control"
                                        id="basicInput" required>

                                    <h5 class="mt-2">صور المشروع</h5>
                                    <input value="{{ old('img[]') }}" name="img[]" multiple type="file"
                                        class="form-control" id="basicInput">
                                </div>




                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--
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
                            </ul>
                        </div>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body " style="text-align: right">


                            <fieldset class="form-group">
                                <div class="col-lg-6  mt-3">
                                    <h5 class="mt-2">المساحة</h5>
                                    <input value="{{ old('farea') }}" name="farea" type="number" min="0"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">السعر</h5>
                                    <input value="{{ old('fprice') }}" name="fprice" type="number" min="0"
                                        class="form-control" id="basicInput" required>
                                </div>
                                <div class="col-lg-6 mt-3">

                                    <h5 class="mt-2"> التفاصيل</h5>
                                    <textarea id="summernote3" name="fdetails" class="form-control" id="">
                                    {{ old('fdetails') }}
                                </textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('fimg') }}" name="fimg" type="file"
                                        class="form-control" id="basicInput" required>

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
                            </ul>
                        </div>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body " style="text-align: right">

                            <fieldset class="form-group">
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2">المساحة</h5>
                                    <input value="{{ old('barea') }}" name="barea" type="number" min="0"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">السعر</h5>
                                    <input value="{{ old('bprice') }}" name="bprice" type="number" min="0"
                                        class="form-control" id="basicInput" required>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2"> التفاصيل</h5>
                                    <textarea id="summernote4" name="bdetails" class="form-control" id="">
                                    {{ old('bdetails') }}
                                </textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('bimg') }}" name="bimg" type="file"
                                        class="form-control" id="basicInput" required>

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
                            </ul>
                        </div>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body " style="text-align: right">

                            <fieldset class="form-group">
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2">المساحة</h5>
                                    <input value="{{ old('aarea') }}" name="aarea" type="number" min="0"
                                        class="form-control" id="basicInput">

                                    <h5 class="mt-2">السعر</h5>
                                    <input value="{{ old('aprice') }}" name="aprice" type="number" min="0"
                                        class="form-control" id="basicInput">
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <h5 class="mt-2"> التفاصيل</h5>
                                    <textarea id="summernote5" name="adetails" class="form-control" id="">
                                    {{ old('adetails') }}
                                </textarea>
                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input value="{{ old('aimg') }}" name="aimg" type="file"
                                        class="form-control" id="basicInput">

                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

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
                                    <textarea id="summernote6" name="pdetails" class="form-control" id="">
                                    {{ old('pdetails') }}
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
                                    <input value="{{ old('f1') }}" name="f1" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">على القواطع والأفياش</h5>
                                    <input value="{{ old('f2') }}" name="f2" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">على الكهرباء والسباكة</h5>
                                    <input value="{{ old('f3') }}" name="f3" type="text"
                                        class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">اتحاد الملاك مجاناَ</h5>
                                    <input value="{{ old('f4') }}" name="f4" type="text"
                                        class="form-control" id="basicInput" required>
                                    <h5 class="mt-2">ضمانات إضافية</h5>
                                    <input value="{{ old('f5') }}" name="f5" type="text"
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
                                <button class="btn btn-icon btn-info mr-1 mt-3">@lang('site.create') <i class="fa fa-save"
                                        style="position: relative"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection

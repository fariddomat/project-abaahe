@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.add') شقة</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-12">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.apartments.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    @include('admin._layouts._error')
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <div class="col-lg-6">
                                        <h5 class="mt-2">نوع الشقة</h5>
                                        <select name="type" id="" class="form-control">
                                            <option value="1">شقة أمامية</option>
                                            <option value="2">شقة خلفية</option>
                                            <option value="3">ملحق</option>
                                        </select>
                                        <h5 class="mt-2">المساحة</h5>
                                        <input value="{{ old('area') }}" name="area" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">السعر</h5>
                                        <input value="{{ old('price') }}" name="price" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">غرف المعيشة</h5>
                                        <input value="{{ old('living_rooms') }}" name="living_rooms" type="number"
                                            min="0" class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">غرف النوم</h5>
                                        <input value="{{ old('bed_rooms') }}" name="bed_rooms" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">غرف الطعام</h5>
                                        <input value="{{ old('dining_rooms') }}" name="dining_rooms" type="number"
                                            min="0" class="form-control" id="basicInput" required>

                                    </div>
                                    <div class="col-lg-6">
                                        <h5 class="mt-2">المطابخ</h5>
                                        <input value="{{ old('kitchens') }}" name="kitchens" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">غرف الخدم</h5>
                                        <input value="{{ old('servant_rooms') }}" name="servant_rooms" type="number"
                                            min="0" class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">دورات مياه</h5>
                                        <input value="{{ old('bathrooms') }}" name="bathrooms" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">موقف خاص</h5>
                                        <input value="{{ old('parking') }}" name="parking" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">@lang('site.image')</h5>
                                        <input name="img" type="file" class="form-control" id="basicInput" required>
                                    </div>
                                    <div class="col-lg-12">

                                        <button class="btn btn-icon btn-info mr-1 mt-2">@lang('site.create') <i
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
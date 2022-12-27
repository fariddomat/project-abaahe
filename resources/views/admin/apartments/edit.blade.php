@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.edit') شقة</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-12">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.apartments.update', $apartment->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @include('admin._layouts._error')
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <div class="col-lg-6">
                                        <h5 class="mt-2">نوع الشقة </h5>
                                        <select name="type" id="" class="form-control">
                                            <option value="أمامية" @if ($apartment->type == 'أمامية')
selectedselected
                                            @endif>أمامية</option>
                                            <option value="خلفية" @if ($apartment->type =='خلفية')
                                                selected
                                            @endif >خلفية</option>

                                            <option value="ملحق" @if ($apartment->type =='ملحق')
                                                selected
                                            @endif >ملحق</option>
                                        </select>
                                        <h5 class="mt-2">رمز الشقة</h5>
                                        <input value="{{ old('code', $apartment->code) }}" name="code" type="text"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">عدد الغرف</h5>
                                        <input value="{{ old('room_count',$apartment->room_count) }}" name="room_count" type="number" min="0"
                                            class="form-control" id="basicInput" required>
                                        {{-- <h5 class="mt-2">عدد هذا النوع في الطابق الواحد</h5>
                                        <input value="{{ old('count', $apartment->count) }}" name="count" type="number" min="0"
                                            class="form-control" id="basicInput" disabled required> --}}
                                        <h5 class="mt-2">المساحة</h5>
                                        <input value="{{ old('area', $apartment->area) }}" name="area" type="number" min="0"
                                            class="form-control" id="basicInput" required>

                                        <h5 class="mt-2">السعر (اختياري)</h5>
                                        <input value="{{ old('price', $apartment->price) }}" name="price" type="number" min="0"
                                            class="form-control" id="basicInput" >

                                        <h5 class="mt-2"> التفاصيل</h5>
                                        <textarea id="summernote" name="details" class="form-control" id="" cols="30" rows="10">
                                                {{ old('details', $apartment->details) }}
                                            </textarea>
                                        <h5 class="mt-2">@lang('site.image')</h5>
                                        <input name="img" type="file" class="form-control" id="basicInput" >

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="mt-2">
                                            <img src="{{ $apartment->image_path }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">

                                        <button class="btn btn-icon btn-info mr-1 mt-2">@lang('site.update') <i
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

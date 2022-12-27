@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.edit') معلومات وسيط</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-6">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.promoters.update', $promoter->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @include('admin._layouts._error')
                                    <h5 class="mt-2">@lang('site.name')</h5>
                                    <input value="{{old('name', $promoter->name)}}" name="name" type="text" class="form-control" id="basicInput" required><h5 class="mt-2">@lang('site.email')</h5>
                                    <input value="{{old('email', $promoter->email)}}" name="email" type="email" class="form-control" id="basicInput" required>
                                    <h5 class="mt-2">@lang('site.phone')</h5>
                                    <input value="{{old('phone', $promoter->phone)}}" name="phone" type="text" class="form-control" id="basicInput" >
                                    <h5 class="mt-2">التفاصيل</h5>
                                    <textarea name="details" class="form-control" id="basicTextarea" rows="3" >{{old('details', $promoter->details)}}</textarea>

                                    <button
                                        class="btn btn-icon btn-info mr-1 mt-2">@lang('site.edit') <i class="fa fa-save"
                                            style="position: relative"></i></button>
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

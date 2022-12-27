@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">إشعار الوسطاء</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-6">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.send_mail') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    @include('admin._layouts._error')
                                    <h5 class="mt-2">@lang('site.project')</h5>
                                    <select name="project" id="" class="form-control">
                                        @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                    <h5 class="mt-2">التفاصيل</h5>
                                    <textarea name="details" class="form-control" id="basicTextarea" rows="3" >{{old('details','لقد تم تحديث مشاريع أباهي يرجى الاطلاع ، وشكرا.')}}</textarea>

                                    <button
                                        class="btn btn-icon btn-info mr-1 mt-2"> إرسال<i class="fa fa-mail"
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

@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('site.add') ضمان</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-6">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.facilities.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    @include('admin._layouts._error')
                                    <input type="hidden" name="project_id" value="{{ $project->id }}">
                                    <h5 class="mt-2">@lang('site.name')</h5>
                                    <input value="{{old('title')}}" name="title" type="text" class="form-control" id="basicInput" required>
                                    <h5 class="mt-2">@lang('site.description')</h5>
                                    <input value="{{old('details')}}" name="details" type="text" class="form-control" id="basicInput" required>

                                    <h5 class="mt-2">@lang('site.image')</h5>
                                    <input name="img" type="file" class="form-control" id="basicInput" required>
                                    <button
                                        class="btn btn-icon btn-info mr-1 mt-2">@lang('site.create') <i class="fa fa-save"
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

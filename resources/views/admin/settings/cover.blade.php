@extends('admin._layouts._app')

@section('content')
    <div class="tile mb-4">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">الغلاف</h4>
                    <p class="card-category">تعديل صور الصفحة الرئيسية</p>
                </div>
                <div class="card-body " style="text-align: right;
                direction: rtl;">
                    <form action="{{ route('admin.setting.change_cover') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        @include('admin._layouts._error')

                        <div class="row">


                            <div class="col-md-4">
                                <label>غلاف 1</label>
                                <input type="file" name="cover1" class="form-control-file">
                                <img src="{{ asset('home/images/1.jpg') }}"
                                    style=" margin-top: 10px; max-width: 250px;" alt="">
                            </div>
                            <div class="col-md-4">
                                <label>غلاف 2</label>
                                <input type="file" name="cover2" class="form-control-file">
                                <img src="{{ asset('home/images/2.jpg') }}"
                                    style=" margin-top: 10px; max-width: 250px;" alt="">
                            </div>
                            <div class="col-md-4">
                                <label>غلاف 3</label>
                                <input type="file" name="cover3" class="form-control-file">
                                <img src="{{ asset('home/images/3.jpg') }}"
                                    style=" margin-top: 10px;max-width: 250px;" alt="">
                            </div>


                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i>
                                تعديل</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

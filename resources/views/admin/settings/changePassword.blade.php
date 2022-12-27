@extends('admin._layouts._app')

@section('content')
    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">تغيير كلمة السر</h4>
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
                <div class="card-content collapse show" style="direction: rtl; text-align: right">

                    <form action="{{ route('admin.setting.changePass') }}" method="POST">
                        @csrf
                        @method('post')
                        @include('admin._layouts._error')

                        <div class="row pr-2 pl-2">
                               <div class="form-group col-md-6">
                                 <label for="" class="text-capitalize">كلمة السر الحالية </label>
                                 <input type="password" class="form-control" name="current_password"
                                   value="" aria-describedby="helpId" >
                               </div>
                        </div>
                        <div class="row pr-2 pl-2">
                            <div class="form-group col-md-6">
                              <label for="" class="text-capitalize">كلمة السر الجديدة </label>
                              <input type="password" class="form-control" name="new_password"
                                value="" aria-describedby="helpId" >
                            </div>
                     </div>
                     <div class="row pr-2 pl-2">
                        <div class="form-group col-md-6">
                          <label for="" class="text-capitalize">تأكيد كلمة السر </label>
                          <input type="password" class="form-control" name="new_confirm_password"
                            value="" aria-describedby="helpId" >
                        </div>
                 </div>

                        <div class="form-group mr-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>حفظ</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
@endsection

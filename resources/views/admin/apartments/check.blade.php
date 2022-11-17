@extends('admin._layouts._app')

@section('content')
    <section class="basic-inputs">
        <div class="row match-height">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">تعديل حالة الشقق</h4>
                    </div>
                    <div class="card-block" dir="rtl" style="text-align: right">
                        <div class="card-body col-lg-12">
                            <fieldset class="form-group">
                                <form action="{{ route('admin.apartments.check', $apartment->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    @include('admin._layouts._error')

                                    <div class="col-lg-6">
                                        @if ($apartment->appendix != 'on')
                                            <h5 class="mt">الطابق</h5>
                                            <select name="floor" class="form-control" id="">
                                                @for ($i = 0; $i < $apartment->project->floors_count; $i++)
                                                    <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                                @endfor
                                            </select>
                                        @else
                                        <h5 class="mt">الملحق</h5>
                                        <select name="floor" class="form-control" id="">
                                            @for ($i = 0; $i < $apartment->project->appendix_count; $i++)
                                                <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                            @endfor
                                        </select>
                                        @endif


                                        <h5 class="mt-2">الشقة</h5>

                                        <select name="apartment" class="form-control" id="">
                                            @foreach (json_decode($apartment->reservation) as $index => $item)
                                                <option value="{{ $index + 1 }}">{{ $index + 1 }}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input value="{{ old('apartment') }}" name="apartment" type="number" min="1"
                                            class="form-control" id="basicInput" required> --}}
                                        <h5 class="mt-2">الحالة</h5>
                                        <select name="status" class="form-control" id="">
                                            <option value="0">متاح</option>
                                            <option value="1">محجوز</option>
                                            <option value="2">مباع</option>
                                        </select>

                                        <button class="btn btn-icon btn-info mr-1 mt-2">@lang('site.update') <i
                                                class="fa fa-save" style="position: relative"></i></button>
                                    </div>

                                    <div class="col-lg-6">
                                        <table class="table table-striped table-scrollable mt-2">
                                            <tr>
                                                <td
                                                    style="text-align: center;
                                       color: white;
                                       font-weight: bolder;
                                       font-size: 16px; background-color: gold">
                                                    متاح</td>
                                                <td
                                                    style="text-align: center;
                                       color: white;
                                       font-weight: bolder;
                                       font-size: 16px; background-color: rgb(51, 233, 111)">
                                                    محجوز</td>
                                                <td
                                                    style="text-align: center;
                                       color: white;
                                       font-weight: bolder;
                                       font-size: 16px; background-color: #004848">
                                                    مباع</td>
                                            </tr>

                                        </table>
                                        <table class="table table-striped table-scrollable mt-2">

                                            @if ($apartment->appendix != 'on')
                                                @for ($i = $apartment->project->floors_count - 1; $i >= 0; $i--)
                                                    <tr>
                                                        <td>الدور {{ $i + 1 }}</td>
                                                        
                                                        @foreach (json_decode($apartment->reservation) as $index => $item)
                                                            @if ($item[$i] == 0)
                                                                <td
                                                                    style="text-align: center;
                                                  color: white;
                                                  font-weight: bolder;
                                                  font-size: 16px; background-color: gold">
                                                                @elseif ($item[$i] == '1')
                                                                <td
                                                                    style="text-align: center;
                                                  color: white;
                                                  font-weight: bolder;
                                                  font-size: 16px; background-color: rgb(51, 233, 111)">
                                                                @else
                                                                <td
                                                                    style="text-align: center;
                                                  color: white;
                                                  font-weight: bolder;
                                                  font-size: 16px; background-color: #004848">
                                                            @endif

                                                            {{ $index + 1 }}
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                @endfor
                                            @else
                                                @for ($i = $apartment->project->appendix_count - 1; $i >= 0; $i--)
                                                    <tr>
                                                        <td>ملحق {{ $i + 1 }}</td>
                                                        @foreach (json_decode($apartment->reservation) as $index => $item)
                                                            @if ($item[$i] == 0)
                                                                <td
                                                                    style="text-align: center;
                                          color: white;
                                          font-weight: bolder;
                                          font-size: 16px; background-color: gold">
                                                                @elseif ($item[$i] == '1')
                                                                <td
                                                                    style="text-align: center;
                                          color: white;
                                          font-weight: bolder;
                                          font-size: 16px; background-color: rgb(51, 233, 111)">
                                                                @else
                                                                <td
                                                                    style="text-align: center;
                                          color: white;
                                          font-weight: bolder;
                                          font-size: 16px; background-color: #004848">
                                                            @endif

                                                            {{ $index + 1 }}
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                @endfor
                                            @endif
                                        </table>
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

@extends('home._layouts._app')

@section('content')
 <!-- Start 404 Error -->
 <div class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="error-content">
                <h1>4 <span>0</span> 4</h1>
                <h3>الصفحة غير موجودة</h3>
                <p>الصفحة المطلوبة قد يكون تم حذفها أو غير موجودة في الأصل</p>
                <a href="{{ route('home') }}" class="default-btn default-hot-toddy">
                    العودة إلى الصفحة الرئيسية
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End 404 Error -->

@endsection

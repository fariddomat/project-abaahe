@extends('home._layouts._app')

@section('content')
 <!-- Start 404 Error -->
 <div class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="error-content">
                <h1>4 <span>0</span> 3</h1>
                <h3>لاتملك صلاحيات كافية</h3>
                <p>يجب أن تحصل على سماحيات للوصول إلى هذه الصفحة</p>
                <a href="{{ route('home') }}" class="default-btn default-hot-toddy">
                    العودة إلى الصفحة الرئيسية
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End 404 Error -->

@endsection

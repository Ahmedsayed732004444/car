@extends('dashboard.layouts.app')
@section('title', 'إيميلات الإشعارات')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                إيميلات الإشعارات
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card card-primary card-outline mb-4 mt-1">
                    <div class="card-header py-2">
                        <div class="card-title">إضافة إيميل جديد</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.settings.notification-emails.store') }}" method="POST">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" placeholder="أدخل البريد الإلكتروني هنا (مثال: admin@example.com)" required>
                                </div>
                                <div class="col-md-4 mt-2 mt-md-0">
                                    <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-plus me-1"></i> إضافة البريد</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-primary card-outline mb-4">
                    <div class="card-header py-2">
                        <div class="card-title">قائمة الإيميلات المسجلة لاستلام إشعارات الشحن</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="table table-hover nowrap dataTable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th class="text-start">#</th>
                                        <th class="text-start">البريد الإلكتروني</th>
                                        <th class="text-center">تاريخ الإضافة</th>
                                        <th class="text-center">إجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($emails as $email)
                                        <tr>
                                            <td class="text-start">{{ $loop->iteration }}</td>
                                            <td class="text-start">{{ $email->email }}</td>
                                            <td class="text-center">{{ $email->created_at->format('Y-m-d H:i') }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('dashboard.settings.notification-emails.destroy', $email->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا البريد؟');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="حذف">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">لا يوجد إيميلات مسجلة حالياً.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

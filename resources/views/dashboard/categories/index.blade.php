@extends('dashboard.layouts.app')
@section('title', 'الأقسام')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                الأقسام
                            </li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus me-1"></i>
                                إضافة قسم</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">

                <div class="card card-primary card-outline mb-4 mt-1">
                    <div class="card-header py-2">
                        <div class="card-title">الأقسام</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="table table-hover nowrap dataTable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th class="text-start">#</th>
                                        <th class="text-center">إسم القسم</th>
                                        <th class="text-center">صورة القسم</th>
                                        <th class="text-center">نوع العمولة</th>
                                        <th class="text-center">العمولة</th>
                                        <th class="text-center">الحالة</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td class="text-center align-middle">{{ $item->cat_name_ar }}</td>
                                            <td class="text-center"><img
                                                    src="{{ url('/uploads/categories-icon/' . $item->cat_icon_path) }}"
                                                    width="60px" height="50px"></td>
                                            <td class="text-center align-middle">
                                                {{ $item->commission_type == App\Enums\CommissionTypeEnum::Amount->value ? 'قيمة' : 'نسبة' }}
                                            </td>

                                            <td class="text-center align-middle">{{ $item->commission }}</td>
                                            <td class="text-center align-middle">
                                                <div class="dropdown">
                                                    <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown"
                                                        href="javascript:void(0)" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">

                                                        @if ($item->active == App\Enums\CategoryStatusEnum::Active->value)
                                                            <i class="fa-regular fa-circle-dot text-success me-1"></i><span
                                                                class="mx-2">مفعل</span>
                                                        @elseif($item->active == App\Enums\CategoryStatusEnum::Inactive->value)
                                                            <i class="fa-regular fa-circle-dot text-danger me-1"></i><span
                                                                class="mx-2">معطل</span>
                                                        @elseif($item->active == App\Enums\CategoryStatusEnum::Soon->value)
                                                            <i class="fa-regular fa-circle-dot text-primary me-1"></i><span
                                                                class="mx-2">قريباً</span>
                                                        @endif

                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item activeDropdownId"
                                                                href="javascript:void(0)" data-id="{{ $item->id }}"
                                                                data-status="Active">
                                                                <i class="fa-regular fa-circle-dot text-success mx-2"></i>
                                                                <span class="mx-2">نشيط</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item activeDropdownId"
                                                                href="javascript:void(0)" data-id="{{ $item->id }}"
                                                                data-status="Inactive">
                                                                <i class="fa-regular fa-circle-dot text-danger mx-2"></i>
                                                                <span class="mx-2">معطل</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item activeDropdownId"
                                                                href="javascript:void(0)" data-id="{{ $item->id }}"
                                                                data-status="Soon">
                                                                <i class="fa-regular fa-circle-dot text-primary mx-2"></i>
                                                                <span class="mx-2">قريباً</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="dropdown dropdown-action mx-3">
                                                    <a class="dropdown dropdown-toggle action-icon"
                                                        style="text-decoration: none;" data-bs-toggle="dropdown"
                                                        href="javascript:void(0)" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i>
                                                    </a>

                                                    <div class="dropdown-menu">
                                                        {{-- <a href="{{ url('dashboard/categories/edit/' . $item->id) }}"
                                                            class="dropdown-item">
                                                            <i class="fa-solid fa-eye me-2 color-hint"></i>
                                                            مشاهدة
                                                        </a> --}}
                                                        <a href="{{ url('dashboard/categories/edit/' . $item->id) }}"
                                                            class="dropdown-item mt-1">
                                                            <i class="fa-solid fa-pen me-2 color-hint"></i>
                                                            تعديل
                                                        </a>
                                                        <a id="deleteActionDropdownId" href="javascript:void(0)"
                                                            data-id="{{ $item->id }}"
                                                            data-action="{{ url('dashboard/categories/delete/' . $item->id) }}"
                                                            class="dropdown-item mt-1">
                                                            <i class="fa-solid fa-trash-can me-2 color-hint"></i>
                                                            حذف
                                                        </a>
                                                        <a href="{{ url('dashboard/custom-fields-category/' . $item->id) }}"
                                                            class="dropdown-item mt-1">
                                                            <i class="fa-solid fa-add me-2 color-hint"></i>
                                                            إضافة حقول مخصصة
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@push('my-java-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('dashboard.included.toast-message')
    @include('shared.show-alert-validation-error')
    <script>
        $(document).ready(function() {
            $(document).on('click', 'a#deleteActionDropdownId', function(e) {
                e.preventDefault();
                var dataDelete = $(this).data('id');
                var myUrl = $(this).data('action');
                swalAlertDeleteConfirm({
                    isConfirmed: function() {
                        deleteDataAjax({
                            url: myUrl,
                            success: function(res) {
                                if (res.success) {
                                    window.location.reload();
                                } else {
                                    swalToast({
                                        title: res.message,
                                        icon: 'error'
                                    });
                                }
                            }
                        });
                    }
                });
            });

            $(document).on('click', 'a.activeDropdownId', function(e) {
                let id = $(this).data('id');
                let status = $(this).data('status');
                let formData = new FormData();
                formData.append('id', id);
                formData.append('status', status);
                ajax_setup();
                postDataAjax({
                    url: baseUrl + `dashboard/categories/update-status`,
                    formData: formData,
                    beforeSend: function() {
                        $('#loadingModalId').modal('show');
                    },
                    complete: function() {
                        $('#loadingModalId').modal('hide');
                    },
                    success: function(res) {
                        if (res.success == true) {
                            swalToast({
                                title: res.message
                            });
                            window.location.reload();
                        } else {
                            swalToast({
                                title: res.message,
                                icon: 'error'
                            });
                        }
                    }
                });
            });
        })
    </script>
@endpush

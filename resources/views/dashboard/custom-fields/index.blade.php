@extends('dashboard.layouts.app')
@section('title', 'الحقول المخصصة')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                الحقول المخصصة لقسم : {{ $categoryName ?? '' }}
                            </li>
                        </ol>
                    </div>
                    {{-- <div class="col-sm-6">
                        <div class="float-sm-end">
                            <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-plus me-1"></i>
                                إضافة قسم</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">

                <div class="card card-primary card-outline mb-5 mt-1">
                    <div class="card-header py-2">
                        <div class="card-title">إضافة قسم</div>
                    </div>
                    <form method="POST" id="formDataID" action="{{ route('dashboard.custom-fields.save-custom-field') }}"
                        enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="categoryId" value="{{ request()->route('categoryId') }}">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <x-custom.label :label="'عنوان الحقل'" :labelRequired="true" :name="'labelAr'" />
                                    <input type="text" name="labelAr" id="labelAr" value="{{ old('labelAr') }}"
                                        class="form-control">
                                    <span class="error" id="labelAr_err">{{ $errors->first('labelAr') }}</span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <x-custom.label :label="'إسم الحقل (إنجليزي بدون مسافات)'" :labelRequired="true" :name="'fieldName'" />
                                    <input type="text" name="fieldName" id="fieldName" value="{{ old('fieldName') }}"
                                        class="form-control">
                                    <span class="error" id="fieldName_err">{{ $errors->first('fieldName') }}</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <x-custom.label :label="'نوع الحقل'" :labelRequired="true" :name="'fieldType'" />
                                    <select class="form-control form-select form-control-sm" name="fieldType">
                                        <option value="{{ \App\Enums\CustomFieldTypeEnum::Text->value }}" selected>
                                            {{ \App\Enums\CustomFieldTypeEnum::Text->value }}
                                        </option>
                                        <option value="{{ \App\Enums\CustomFieldTypeEnum::TextArea->value }}">
                                            {{ \App\Enums\CustomFieldTypeEnum::TextArea->value }}
                                        </option>
                                        <option value="{{ \App\Enums\CustomFieldTypeEnum::Number->value }}">
                                            {{ \App\Enums\CustomFieldTypeEnum::Number->value }}
                                        </option>
                                        <option value="{{ \App\Enums\CustomFieldTypeEnum::Date->value }}">
                                            {{ \App\Enums\CustomFieldTypeEnum::Date->value }}
                                        </option>
                                        <option value="{{ \App\Enums\CustomFieldTypeEnum::File->value }}">
                                            {{ \App\Enums\CustomFieldTypeEnum::File->value }}
                                        </option>
                                    </select>
                                    <span class="error" id="fieldType_err"> </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 form-group ">
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="isRequired" value="0">
                                        <input type="checkbox" class="form-check-input" name="isRequired" id="isRequired"
                                            value="1" checked>
                                        <label class="form-check-label" for="isRequired">الحقل مطلوب (إجبار المستخدم
                                            على إدخال هذا الحقل)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-3"> <button type="submit" id="btnSave" class="btn btn-primary">
                                حفظ</button> </div>
                    </form>
                </div>

                <div class="card card-primary card-outline mb-4 mt-5">
                    <div class="card-header py-2">
                        <div class="card-title">الحقول المخصصة لقسم : {{ $categoryName ?? '' }}</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="table table-hover nowrap dataTable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th class="text-start">#</th>
                                        <th class="text-center">عنوان الحقل</th>
                                        <th class="text-center">إسم الحقل</th>
                                        <th class="text-center">نوع الحقل</th>
                                        <th class="text-center">مطلوب</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customFields as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td class="text-center align-middle">{{ $item->label_ar }}</td>
                                            <td class="text-center align-middle">{{ $item->field_name }}</td>
                                            <td class="text-center align-middle">{{ $item->field_type }}</td>
                                            <td class="text-center align-middle">
                                                {{ $item->is_required ? 'نعم' : 'إختياري' }}
                                            </td>

                                            {{-- <td class="text-center"><img
                                                    src="{{ url('/uploads/categories-icon/' . $item->cat_icon_path) }}"
                                                    width="60px" height="50px"></td>
                                            <td class="text-center align-middle">
                                                {{ $item->commission_type == App\Enums\CommissionTypeEnum::Amount->value ? 'قيمة' : 'نسبة' }}
                                            </td> --}}


                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center">

                                                    <a id="editActionDropdownId" href="javascript:void(0)"
                                                        data-label_ar="{{ $item->label_ar }}"
                                                        data-field_name="{{ $item->field_name }}"
                                                        data-field_type="{{ $item->field_type }}"
                                                        data-is_required="{{ $item->is_required }}"
                                                        class="btn btn-primary py-2 me-2 btn-sm"><i
                                                            class="fas fa-pencil-alt text-white"></i></a>
                                                    <a id="deleteActionDropdownId" href="javascript:void(0)"
                                                        data-action="{{ url('dashboard/custom-fields-category/delete/' . $item->id) }}"
                                                        data-id="{{ $item->id }}"
                                                        class="btn btn-danger py-2 btn-sm"><i
                                                            class="fas fa-trash"></i></a>
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

            $(document).on('click', 'a#editActionDropdownId', function(e) {

                $('#labelAr').val($(this).data('label_ar'));
                $('#fieldName').val($(this).data('field_name'));
                $('select[name="fieldType"]').val($(this).data('field_type'));
                $('#isRequired').prop('checked', $(this).data('is_required') == 1);

            });

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
        })
    </script>
@endpush

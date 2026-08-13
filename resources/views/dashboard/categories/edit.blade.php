@extends('dashboard.layouts.app')
@section('title', 'تعديل قسم')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                تعديل قسم
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">

                <div class="card card-primary card-outline mb-4 mt-1">
                    <div class="card-header py-2">
                        <div class="card-title">تعديل قسم</div>
                    </div>
                    <form method="POST" id="formDataID"
                        action="{{ route('dashboard.categories.update', ['id' => $category->id]) }}"
                        enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6 form-group ">
                                    <x-custom.label :label="'إسم القسم'" :labelRequired="true" :name="'catNameAr'" />
                                    <input type="text" name="catNameAr" id="catNameAr"
                                        value="{{ old('catNameAr', $category->cat_name_ar ?? '') }}" class="form-control">
                                    <span class="error" id="catNameAr_err">{{ $errors->first('catNameAr') }}</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <x-custom.label :label="'نوع العمولة'" :labelRequired="true" :name="'commissionType'" />
                                    <select class="form-control form-select form-control-sm" name="commissionType">
                                        @foreach (\App\Enums\CommissionTypeEnum::cases() as $case)
                                            <option value="{{ $case->value }}"
                                                {{ $case->value == old('commissionType', $category->commission_type ?? '') ? 'selected' : '' }}>
                                                {{ __('messages.' . $case->value . '') }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span class="error" id="commissionType_err"> </span>
                                </div>
                                <div class="col-md-6 form-group ">
                                    <x-custom.label :label="'العمولة'" :labelRequired="true" :name="'commission'" />
                                    <input type="number" name="commission" id="commission"
                                        value="{{ old('commission', $category->commission_type == \App\Enums\CommissionTypeEnum::Rate->value ? $category->commission * 100 : $category->commission ?? '') }}"
                                        class="form-control text-start">
                                    <span class="error" id="commission_err">{{ $errors->first('commission') }}</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 form-group ">
                                    <div class="form-check form-switch">
                                        <input type="hidden" name="categoryHasBrand" value="0">
                                        <input type="checkbox" class="form-check-input" name="categoryHasBrand"
                                            id="categoryHasBrand" value="1"
                                            {{ old('categoryHasBrand', $category->is_category_has_brand_field ?? false) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="categoryHasBrand">حقل ماركة ( موديل )
                                            السيارات</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-12 form-group">
                                    <div class="mb-2 d-flex justify-content-center">
                                        <div class="text-center">
                                            <img id="previewSelectedImageId" class="img-border"
                                                style="width: 100%; height: 100px"
                                                src="{{ empty($category->cat_icon_path) ? asset('assets/dashboard/images/empty_image.png') : url('uploads/categories-icon/' . $category->cat_icon_path) ?? asset('assets/dashboard/images/empty_image.png') }}"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div data-mdb-ripple-init class="btn btn-primary btn-rounded py-0">
                                            <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
                                            <label class="form-label text-white m-1" for="file">إختر
                                                صورة الدورة</label>
                                            <input type="file" class="form-control d-none" name="file" id="file"
                                                accept=".png,.jpg,.jpeg,.webp"
                                                onchange="previewSelectedImage(event, 'previewSelectedImageId')" />
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <span class="error fs-4" id="file_err">{{ $errors->first('file') }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer mt-4 py-3"> <button type="submit" id="btnSave" class="btn btn-primary"><i
                                    class="fa-solid fa-plus me-2"></i>تعديل</button> </div>
                    </form>
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
            $('#formDataID #btnSave').click(function(e) {
                e.preventDefault();
                if (requiredValidation("#catNameAr") && requiredValidation("#commission")) {
                    $('#btnSave').addClass("disabled").html(spinnerBorderLight()).attr('disabled', true);
                    $("#formDataID").submit()
                }
            });
        })
    </script>
@endpush

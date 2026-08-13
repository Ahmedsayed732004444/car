@extends('dashboard.layouts.app')
@section('title', 'عرض بيانات الشركة')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                طلبات إنظمام الجديدة
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
                        <div class="card-title">طلب إنظمام شركة : {{ $vendor->company_name_ar ?? '' }}</div>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ $vendor->logo ? url('uploads/' . $vendor->logo ?? '') : url('assets/dashboard/images/img_user.gif') }}"
                                alt="{{ $vendor->company_name_ar ?? '' }}" class="img-fluid" style="width: 100px;">
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1">معرف (ID)
                                            الشركة</td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            {{ $vendor->user_id ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1">تاريخ الإنظمام
                                        </td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            {{ $vendor->member_since ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1">اسم الشركة
                                        </td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            {{ $vendor->company_name_ar ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1">رقم جوال
                                            التسجيل</td>
                                        <td class="text-center align-middle" style="width: 70%;">

                                            <a href="tel:{{ $vendor->phone ?? '' }}">{{ $vendor->phone ?? '' }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1"> السجل التجاري
                                        </td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            {{ $vendor->commercial_record ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1"> تاريخ إنتهاء
                                            السجل التجاري</td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            {{ $vendor->date_expire_commercial_record ?? '' }}</td>
                                    </tr>
                                    @if ($vendor->phone_contact)
                                        <tr>
                                            <td class="text-center" style="width: 30%; background-color: #f1f1f1"> رقم
                                                التواصل </td>
                                            <td class="text-center align-middle" style="width: 70%;">
                                                <a
                                                    href="tel:{{ $vendor->phone_contact ?? '' }}">{{ $vendor->phone_contact ?? '' }}</a>
                                            </td>
                                        </tr>
                                    @endif
                                    @if ($vendor->description)
                                        <tr>
                                            <td class="text-center" style="width: 30%; background-color: #f1f1f1"> نبذة عن
                                                الشركة </td>
                                            <td class="text-center align-middle" style="width: 70%;">
                                                {{ $vendor->description ?? '' }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1"> المدن</td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            @foreach ($vendorCities as $city)
                                                <span class="badge text-white px-3 py-2 mx-1"
                                                    style="background-color: #2a4d73; font-weight: 500;">{{ $city->city_name_ar ?? '' }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الخدمات</td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            @foreach ($vendorCategories as $cat)
                                                <span class="badge text-white px-3 py-2 mx-1"
                                                    style="background-color: #2a4d73; font-weight: 500;">{{ $cat->cat_name_ar ?? '' }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 30%; background-color: #f1f1f1"> صورة السجل
                                            التجاري</td>
                                        <td class="text-center align-middle" style="width: 70%;">
                                            <div class="mt-2">
                                                <a href="{{ route('uploads-private', ['filename' => $vendorDocument]) }}"
                                                    target="_blank" style="font-weight: 500; text-decoration: none;">
                                                    <i class="fa-solid fa-eye me-2"></i>إستعراض
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <form id="activeStatusVendorForm"
                                action="{{ route('dashboard.vendors-management.join-requests.active-status') }}"
                                method="POST" class="mx-2">
                                @csrf
                                <input type="hidden" name="userId" value="{{ $vendor->user_id ?? 0 }}">
                                <button id="btnActive" type="submit" class="btn btn-success px-4 py-2">قبول
                                    الطلب</button>
                            </form>
                            <button type="button" id="btnRejectOpenModal" class="btn btn-danger px-4 py-2"
                                data-action="{{ route('dashboard.vendors-management.join-requests.rejected-status', ['userId' => $vendor->user_id ?? 0]) }}"
                                data-id="{{ $vendor->user_id ?? 0 }}">رفض
                                الطلب</button>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <div class="modal fade" id="myModalId" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="myModelLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-modal-header">
                    <h5 class="modal-title" id="titleModelLabel">رفض طلب الإنظمام</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formDataRejectStatus">
                        @csrf
                        <div class="form-group">
                            <x-custom.label-input :label="'سبب الرفض'" :labelRequired="true" :name="'rejectReason'" />
                        </div>
                        <div class="modal-footer mt-5 pb-0 d-flex  align-items-start">
                            <button type="submit" id="btnReject" class="btn btn-primary px-3">موافق</button>
                            <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">إغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('my-java-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('dashboard.included.toast-message')
    @include('shared.show-alert-validation-error')
    <script>
        $(document).ready(function() {
            $('#activeStatusVendorForm #btnActive').click(function(e) {
                e.preventDefault();
                swalAlertConfirm({
                    text: 'هل انت متاكد من قبول طلب الانظمام لهذه الشركة؟',
                    isConfirmed: function() {
                        $('#btnActive').addClass("disabled").html(spinnerBorderLight()).attr(
                            'disabled', true);
                        $("#activeStatusVendorForm").submit()
                    }
                });
            });

            $('button#btnRejectOpenModal').click(function() {
                const url = $(this).data('action');
                $('span.error').html('');
                $('#formDataRejectStatus').trigger("reset");
                $('#myModalId').modal('show');
                $('#formDataRejectStatus').attr('action', url);
            });

            $('#formDataRejectStatus #btnReject').click(function(e) {
                e.preventDefault();
                if (requiredValidation("#rejectReason")) {
                    $('#btnReject').addClass("disabled").html(spinnerBorderLight()).attr(
                        'disabled', true);
                    $("#formDataRejectStatus").submit();
                }
            });
        })
    </script>
@endpush

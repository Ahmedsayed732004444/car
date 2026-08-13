@extends('dashboard.layouts.app')
@section('title', 'تفاصيل الطلب')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                تفاصيل الطلب
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="col-md-8">
                        @include('dashboard.requests-management.partials.request-details-section')
                    </div>
                    <div class="col-md-4">
                        @include('dashboard.requests-management.partials.user-details-request-section')
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

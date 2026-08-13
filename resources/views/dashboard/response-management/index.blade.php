@extends('dashboard.layouts.app')
@section('title', 'ردود الطلب')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                ردود الطلب
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
                        <div class="card-title"> ردود الطلب</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2" style="padding-bottom: 120px;">
                            <table class="table table-hover nowrap " id="datatableID"
                                style="width:100%; padding-bottom: 100px;">
                                <thead>
                                    <tr>
                                        <th class="text-center">رقم الرد</th>
                                        <th class="text-center">إسم الشركة</th>
                                        <th class="text-center">حالة الرد</th>
                                        <th class="text-center">السعر</th>
                                        <th class="text-center">مدة الضمان</th>
                                        <th class="text-center">تاريخ الرد</th>
                                        <th class="text-center">ملاحظات الرد</th>
                                    </tr>
                                </thead>
                                <tbody>
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
            var _columns = eval(
                '[{"columns" : [{"data": "response_id", "className": "text-center align-middle"}]}]'
            );

            _columns[0].columns.push({
                "data": null,
                "orderable": false,
                "className": "text-center",
                "render": function(data, type, row, meta) {
                    return '<a href="' + baseUrl + 'dashboard/vendors-management/vendors/show/' + data
                        .user_id +
                        '">' + data.company_name_ar + '</a>';
                }
            });

            _columns[0].columns.push({
                "data": "response_status",
                "className": "text-center",
            });

            _columns[0].columns.push({
                "data": "price_response",
                "className": "text-center",
            });

            _columns[0].columns.push({
                "data": "warranty_response",
                "className": "text-center",
            });
            _columns[0].columns.push({
                "data": "response_date",
                "className": "text-center",
            });
            _columns[0].columns.push({
                "data": "note_response",
                "className": "text-center",
            });

            let myDatatable = customDatatable({
                url: '{{ 'dashboard/response-management/responses/' . request()->route('requestId') }}',
                columns: _columns
            });

            $(document).on('click', 'a.statusUpdateDropdownId', function(e) {
                let id = $(this).data('id');
                let status = $(this).data('status');
                let formData = new FormData();
                formData.append('id', id);
                formData.append('status', status);
                ajax_setup();
                postDataAjax({
                    url: baseUrl + `dashboard/requests-management/update-status`,
                    formData: formData,
                    success: function(res) {
                        if (res.success == true) {
                            $('#datatableID').DataTable().ajax.reload();
                            swalToast({
                                title: res.message
                            });
                        } else {
                            swalToast({
                                title: res.message,
                                icon: 'error'
                            });
                        }
                    }
                });
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
                                    $('#datatableID').DataTable().ajax.reload();
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

@extends('dashboard.layouts.app')
@section('title', 'إدارة الطلبات')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                إدارة الطلبات
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
                        <div class="card-title">إدارة الطلبات</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2" style="padding-bottom: 120px;">
                            <table class="table table-hover nowrap " id="datatableID"
                                style="width:100%; padding-bottom: 100px;">
                                <thead>
                                    <tr>
                                        <th class="text-center">رقم الطلب</th>
                                        <th class="text-center">القسم</th>
                                        <th class="text-center">مدينة الطلب</th>
                                        <th class="text-center">تاريخ الطلب</th>
                                        <th class="text-center">عدد الردود</th>
                                        <th class="text-center">الحالة</th>
                                        <th class="text-center"></th>
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
                '[{"columns" : [{"data": "request_id", "className": "text-center align-middle"}, {"data": "cat_name_ar", "className": "text-center align-middle"}, {"data": "city_customer_name_ar", "className": "text-center align-middle"}, {"data": "request_date", "className": "text-center align-middle"}]}]'
            );

            _columns[0].columns.push({
                "data": null,
                "orderable": false,
                "className": "text-center",
                "render": function(data, type, row, meta) {
                    return '<div class="cell-counter-link"><a href="' + baseUrl +
                        'dashboard/response-management/responses/' + data.request_id +
                        '" ><span><i class="fa-solid fa-plus me-1"></i>' + data
                        .count_response +
                        '</span></a></div>';
                }
            });

            _columns[0].columns.push({
                "data": null,
                "orderable": false,
                "className": "text-center align-middle",
                "render": function(data, type, row, meta) {
                    var text =
                        '<div class="dropdown"> <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                    if (data.request_status == '{{ 'open' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot text-success me-1"></i><span class="mx-2">مفتوح</span></a>';
                    } else if (data.request_status == '{{ 'closed' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot text-danger me-1"></i><span class="mx-2">مغلق</span></a>';
                    } else if (data.request_status == '{{ 'canceled' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot text-warning me-1"></i><span class="mx-2">ملغي</span></a>';
                    } else {
                        text +=
                            '<i class="fa-regular fa-circle-dot text-primary me-1"></i><span class="mx-2">مكتمل</span></a>';
                    }

                    text += '<ul class="dropdown-menu">' +
                        '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
                        data.request_id +
                        '" data-status="open"><i class="fa-regular fa-circle-dot text-success mx-2"></i><span class="mx-2">مفتوح</span></a></li>' +

                        '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
                        data.request_id +
                        '" data-status="closed"><i class="fa-regular fa-circle-dot text-danger mx-2"></i><span class="mx-2">مغلق</span></a></li>' +

                        '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
                        data.request_id +
                        '" data-status="canceled"><i class="fa-regular fa-circle-dot text-warning mx-2"></i><span class="mx-2">ملغي</span></a></li>' +

                        '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
                        data.request_id +
                        '" data-status="completed"><i class="fa-regular fa-circle-dot text-primary mx-2"></i><span class="mx-2">مكتمل</span></a></li>' +

                        '</ul>';
                    return text += '</div>';
                }
            });

            _columns[0].columns.push({
                "data": null,
                "orderable": false,
                "className": "text-center align-middle",
                "render": function(data, type, row, meta) {
                    var text =
                        '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';

                    text += '<a href="' +
                        baseUrl + 'dashboard/requests-management/show/' + data.request_id +
                        '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>مشاهدة</a>';

                    text += '<a id="deleteActionDropdownId" data-id="' + data.request_id +
                        '" data-action="' +
                        baseUrl + 'dashboard/requests-management/delete/' + data
                        .request_id +
                        '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';

                    return text += '</div></div>';
                }
            });
            let myDatatable = customDatatable({
                url: '{{ 'dashboard/requests-management' }}',
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

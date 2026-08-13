@extends('dashboard.layouts.app')
@section('title', 'إدارة الشركات')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                إدارة الشركات
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
                        <div class="card-title">إدارة الشركات</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2" style="padding-bottom: 120px;">
                            <table class="table table-hover nowrap " id="datatableID"
                                style="width:100%; padding-bottom: 100px;">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">رقم الشركة</th>
                                        <th class="text-center">إسم الشركة</th>
                                        <th class="text-center">رقم السجل</th>
                                        <th class="text-center">صورة الشعار</th>
                                        <th class="text-center">تاريخ الطلب</th>
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
                '[{"columns" : [{"data": "id", "className": "text-center align-middle"}, {"data": "phone", "className": "text-center align-middle"}, {"data": "company_name_ar", "className": "text-center align-middle"}, {"data": "commercial_record", "className": "text-center align-middle"}]}]'
            );
            _columns[0].columns.push({
                "data": null,
                "name": "logo",
                "className": "text-center align-middle",
                "render": function(data, type, row, meta) {
                    return data.logo ? '<img src="' + baseUrl + 'uploads/' + data.logo +
                        '" style="width: 55px; height: 50px;" class="rounded-circle">' : '<img src="' +
                        baseUrl +
                        'assets/dashboard/images/img_user.gif" style="width: 55px; height: 50px;" class="rounded-circle">';
                }
            });
            _columns[0].columns.push({
                "data": null,
                "name": "created_at",
                "className": "text-center align-middle",
                "render": function(data, type, row, meta) {
                    return data.member_since;
                }
            });

            _columns[0].columns.push({
                "data": null,
                "orderable": false,
                "className": "text-center align-middle",
                "render": function(data, type, row, meta) {
                    var text =
                        '<div class="dropdown"> <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                    if (data.status == '{{ 'Active' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot text-success me-1"></i><span class="mx-2">نشيط</span></a>';
                    } else if (data.status == '{{ 'Inactive' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot me-1" style="color: #9CA3AF"></i><span class="mx-2">غير نشيط</span></a>';
                    } else if (data.status == '{{ 'Suspended' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot me-1" style="color: #F97316"></i><span class="mx-2">معلق</span></a>';
                    } else if (data.status == '{{ 'Rejected' }}') {
                        text +=
                            '<i class="fa-regular fa-circle-dot text-danger me-1"></i><span class="mx-2">مرفوض</span></a>';
                    }
                    text += '<ul class="dropdown-menu">' +
                        '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
                        data.id +
                        '" data-status="Active"><i class="fa-regular fa-circle-dot text-success mx-2"></i><span class="mx-2">نشيط</span></a></li>' +
                        '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
                        data.id +
                        '" data-status="Inactive"><i class="fa-regular fa-circle-dot mx-2" style="color: #9CA3AF"></i><span class="mx-2">غير نشيط</span></a></li>' +
                        '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
                        data.id +
                        '" data-status="Suspended"><i class="fa-regular fa-circle-dot mx-2" style="color: #F97316"></i><span class="mx-2">معلق</span></a></li>' +
                        '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
                        data.id +
                        '" data-status="Rejected"><i class="fa-regular fa-circle-dot text-danger mx-2"></i><span class="mx-2">مرفوض</span></a></li>' +
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
                        baseUrl + 'dashboard/vendors-management/vendors/show/' + data.id +
                        '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>مشاهدة</a>';

                    text += '<a id="deleteActionDropdownId" data-id="' + data.id + '" data-action="' +
                        baseUrl + 'dashboard/vendors-management/vendors/delete/' + data.id +
                        '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';

                    return text += '</div></div>';
                }
            });
            let myDatatable = customDatatable({
                url: '{{ 'dashboard/vendors-management/vendors' }}',
                columns: _columns
            });

            $(document).on('click', 'a.activeUserDropdownId', function(e) {
                let formData = new FormData();
                formData.append('id', $(this).data('id'));
                formData.append('status', $(this).data('status'));
                ajax_setup();
                postDataAjax({
                    url: baseUrl + `dashboard/vendors-management/vendors/update-status`,
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

@extends('dashboard.layouts.app')
@section('title', 'الشكاوي')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                الشكاوي
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
                        <div class="card-title"> الشكاوي</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mt-2" style="padding-bottom: 120px;">
                            <table class="table table-hover nowrap " id="datatableID"
                                style="width:100%; padding-bottom: 100px;">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">إسم المشتكي</th>
                                        <th class="text-center">رقم الجوال</th>
                                        <th class="text-center">نوع الشكوى</th>
                                        <th class="text-center">عنوان الشكوى</th>
                                        <th class="text-center">الشكوى</th>
                                        <th class="text-center">تاريخ الشكوى</th>
                                        {{-- <th class="text-center">الحالة</th> --}}

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
                '[{"columns" : [{"data": "id", "className": "text-center align-middle"}]}]'
            );

            _columns[0].columns.push({
                "data": "name",
                "className": "text-center",
            });

            _columns[0].columns.push({
                "data": null,
                "orderable": false,
                "className": "text-center",
                "render": function(data, type, row, meta) {
                    return '<a href="tel:' + data.phone + '" class="text-decoration-none">' + data
                        .phone + '</a>';
                }
            });

            _columns[0].columns.push({
                "data": "subject",
                "className": "text-center",
            });

            _columns[0].columns.push({
                "data": "title",
                "className": "text-center",
            });
            _columns[0].columns.push({
                "data": "description",
                "className": "text-center",
            });
            _columns[0].columns.push({
                "data": "date_complaint",
                "className": "text-center",
            });
            // _columns[0].columns.push({
            //     "data": "status",
            //     "className": "text-center",
            // });

            let myDatatable = customDatatable({
                url: '{{ 'dashboard/complaint-management/complaints' }}',
                columns: _columns
            });
        })
    </script>
@endpush

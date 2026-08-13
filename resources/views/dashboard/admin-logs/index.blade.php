@extends('dashboard.layouts.app')
@section('title', 'Logs')
@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item active" aria-current="page">
                                Logs
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <form id="clearLogsForm" method="POST" action="{{ route('dashboard.logs.clear-logs') }}">
                                @csrf
                                <button type="submit" id="btnClearLogs" class="btn btn-danger">Clear Logs</button>
                            </form>
                        </div>
                        <div class="float-sm-end me-2">
                            <a href="{{ route('dashboard.logs.download-logs') }}" class="btn btn-primary">Download
                                Logs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div dir="ltr" class="text-end"
                    style="
    background:#0d1117;
    color:#c9d1d9;
    padding:15px;
    height:600px;
    font-size:14px;
    font-weight:500;
    overflow:auto;
    font-family: monospace;
    white-space: pre-wrap;
">
                    {{ $logs }}
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
            $('#btnClearLogs').on('click', function(e) {
                e.preventDefault();
                // arabic
                Swal.fire({
                    title: 'هل انت متاكد؟',
                    text: "لن يمكنك التراجع عن هذا",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'تأكيد',
                    cancelButtonText: 'الغاء'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#clearLogsForm').submit();
                    }
                })
            });
        });
    </script>
@endpush

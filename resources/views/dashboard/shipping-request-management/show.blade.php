@extends('dashboard.layouts.app')
@section('title', 'عرض طلب الشحن')
@section('content')
    <main class="app-main">
        <div class="app-content-header py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-start">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                عرض طلب الشحن
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @include('dashboard.shipping-request-management.partails.details-shipping-section')
                    </div>
                    <div class="col-md-6">
                        @include('dashboard.shipping-request-management.partails.shipping-section')
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

        })
    </script>
@endpush

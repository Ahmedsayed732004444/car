function showAlertDangerTopValidationError(err) {
    // for show error validation
    let response = err.responseJSON;
    $('.alert-danger-top #top-message').find("ul").empty();
    $.each(response, function (key, error) {
        for (let i = 0; i < error.length; i++) {
            $('.alert-danger-top #top-message').find("ul").append('<li>' + error[i] + '</li>');
        }
    });
    $('.alert-danger-top #top-message').css('display', 'block');
}
function spinnerBorderLight() {
    return '<span class="spinner-border spinner-border-sm text-light" role="status" aria-hidden="true"></span> الرجاء الإنتظار ...'
}
function mySummernoteSelector({ selector = '.summernote', placeholder, height = 300 } = {}) {
    $(selector).summernote({
        placeholder: placeholder,
        height: height,

    });
}

function previewSelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;
    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            selectedImage.src = e.target.result;
        };
        reader.readAsDataURL(fileInput.files[0]);
    }
}

//------------------------ ajax ----------------------------
function getDataAjax({ url, beforeSend, complete, success } = {}) {
    $.ajax({
        type: 'GET',
        url: url,
        dataType: "json",
        beforeSend: beforeSend,
        complete: complete,
        success: success,
        error: function (err) {
            $('#loadingModalId').modal('hide');
            if (err.status == 422) {
                showAlertDangerTopValidationError(err);
            }
        }
    });
}
function postDataAjax({ url, formData,
    beforeSend = function () { $('#btnSave').addClass("disabled").html(spinnerBorderLight()).attr('disabled', true); },
    complete = function () { $('#btnSave').removeClass("disabled").html("حفظ").attr('disabled', false); },
    success, contentType = false, processData = false } = {}) {
    $.ajax({
        type: 'POST',
        data: formData,
        dataType: 'JSON',
        contentType: contentType,
        processData: processData,
        url: url,
        beforeSend: beforeSend,
        complete: complete,
        success: success,
        error: function (err) {
            $('#loadingModalId').modal('hide');
            if (err.status == 422) {
                showAlertDangerTopValidationError(err);
            }
        }
    })
}

function ajax_setup() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
}

function deleteDataAjax({ url,
    beforeSend = function () { },
    complete = function () { },
    success } = {}) {
    ajax_setup();
    $.ajax({
        type: 'DELETE',
        dataType: 'JSON',
        url: url,
        beforeSend: beforeSend,
        complete: complete,
        success: success,
        error: function (err) {
            if (err.status == 422) {
                showAlertDangerTopValidationError(err);
            }
        }
    })
}
function deleteButtonActionDatatable({ selector } = {}) {
    $(document).on('click', selector, function (e) {
        e.preventDefault();
        var dataDelete = $(this).data('id');
        var myUrl = $(this).data('action');
        swalAlertDeleteConfirm({
            isConfirmed: function () {
                deleteDataAjax({
                    url: myUrl,
                    success: function (res) {
                        if (res.success) {
                            $('#datatableID').DataTable().rows().every(
                                function (rowIdx, tableLoop, rowLoop) {
                                    if (this.data().id == dataDelete) {
                                        $('#datatableID').DataTable().row(rowIdx).remove().draw();
                                    }
                                });
                        } else {
                            swalToast({ title: res.message, icon: 'error' });
                        }
                    }
                });
            }
        });
    });
}
function select2Modal({ selector, dropdownParentSelector = null, url, allowClear = false } = {}) {
    $(selector).select2({
        dropdownParent: dropdownParentSelector != null ? $(dropdownParentSelector) : null,
        allowClear: allowClear,
        ajax: {
            url: baseUrl + url,
            dataType: 'json',
            language: "ar",
            delay: 250,
            data: function (params) {
                return {
                    term: params.term || '',
                    page: params.page || 1
                }
            },
            processResults: function (response) {
                return {
                    results: response.results,
                    pagination: response.pagination,
                };
            },
            cache: false
        }
    });
}
//------------------------ custom Datatable ----------------------------
function customDatatable({ id = '#datatableID', url, columns, pageLength = 10, dataFilter, bInfo = true, paging = true, ordering = true, searching = true, destroy = false, order = [[0, 'asc']] } = {}) {
    return new DataTable(id, {
        processing: true, serverSide: true, responsive: true,
        destroy: destroy,
        pageLength: pageLength,
        bInfo: bInfo,// hide showing entries
        paging: paging,//hide pagination
        ordering: ordering,
        searching: searching,
        order: order,
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/ar.json',
        },
        ajax: {
            url: baseUrl + url,
            type: "get",
            dataType: "json",
            data: dataFilter,
        },
        columns: columns[0].columns,
    });
}

$('button#btnSearchFilterDataTableId').click(function () {
    $('#datatableID').DataTable().ajax.reload();
});

function dropdownActionDataTable({
    dataId,
    showId = null,
    hrefShow = "javascript:void(0)",
    showDataAction = null,
    editId,
    hrefEdit = "javascript:void(0)",
    editDataAction,
    hasPermUpdate = true,
    deleteId,
    hrefDelete = "javascript:void(0)",
    deleteDataAction,
    hasPermDelete = true,
} = {}) {
    var text = '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';
    if (showId != null) {
        text += '<a id="' + showId + '" href="' + hrefShow + '" data-action="' + baseUrl +
            showDataAction +
            '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>مشاهدة</a>';
    }
    if (hasPermUpdate)
        text += '<a id="' +
            editId + '" href="' + hrefEdit + '" data-action="' +
            baseUrl + editDataAction +
            '" data-id="' + dataId +
            '" class="dropdown-item mt-1"><i class="fa-solid fa-pen me-2 color-hint"></i>تعديل</a>';
    if (hasPermDelete)
        text += '<a id="' + deleteId + '" data-id="' + dataId + '" data-action="' +
            baseUrl +
            deleteDataAction +
            '" class="dropdown-item mt-1" href="' + hrefDelete +
            '"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';

    return text += '</div></div>';
}

//------------------------ swal alert ----------------------------
function swalToast({ title, icon = "success" } = {}) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({ icon: icon, title: title });
}

function swalAlertDeleteConfirm({ isConfirmed } = {}) {
    Swal.fire({
        text: 'تأكيد عملية الحذف ؟',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'نعم',
        cancelButtonText: 'خروج'
    }).then((result) => {
        if (result.isConfirmed)
            isConfirmed();
    })
}

function swalAlertConfirm({ text, isConfirmed } = {}) {
    Swal.fire({
        text: text,
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'نعم',
        cancelButtonText: 'خروج'
    }).then((result) => {
        if (result.isConfirmed)
            isConfirmed();
    })
}
//------------------------ validation ----------------------------
function requiredValidation(selector) {
    var myVal = $(selector).val();
    if (myVal == "") {
        $(selector + '_err').html('الحقل مطلوب');
        return false;
    } else {
        $(selector + '_err').html('');
        return true;
    }
}
function requiredValidationSelectorError(selector, selectorError) {
    var myVal = $(selector).val();
    if (myVal == "") {
        $(selectorError).html('الحقل مطلوب');
        return false;
    } else {
        $(selectorError).html('');
        return true;
    }
}
function requiredMaxValidation({ selector, max = 255, note = 'حرفاً' } = {}) {
    var myVal = $(selector).val();
    if (myVal == "") {
        $(selector + '_err').html('الحقل مطلوب');
        return false;
    } else if (myVal.length > max) {
        $(selector + '_err').html('يجب أن يكون طول الحقل الأقصى ' + max + ' ' + note);
        return false;
    } else {
        $(selector + '_err').html('');
        return true;
    }
}
function maxValidation({ selector, max, note = 'حرفاً' } = {}) {
    var myVal = $(selector).val();
    if (myVal.length > max) {
        $(selector + '_err').html('يجب أن يكون طول الحقل الأقصى ' + max + ' ' + note);
        return false;
    } else {
        $(selector + '_err').html('');
        return true;
    }
}
function requiredMinValidation({ selector, min, note = 'حرفاً' } = {}) {
    var myVal = $(selector).val();
    if (myVal == "") {
        $(selector + '_err').html('الحقل مطلوب');
        return false;
    } else if (myVal.length < min) {
        $(selector + '_err').html('يجب أن يكون طول الحقل على الأقل ' + min + ' ' + note);
        return false;
    } else {
        $(selector + '_err').html('');
        return true;
    }
}
function emailValidation(selector) {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $(selector).val();
    var validemail = pattern1.test(email);
    if (!validemail) {
        $(selector + '_err').html('البريد الإلكتروني غير صالح');
        return false;
    } else if (email == "") {
        $(selector + '_err').html('الحقل مطلوب');
        return false;
    } else {
        $(selector + '_err').html('');
        return true;
    }
}
function generateRandomString({ length = 8 } = {}) {
    const characters = "abcdewxyz@0123456789#";
    let result = "";
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
}
//------------------------custom-------------------------------
$(document).ready(function () {
    // PAGE LOADING
    $(window).on("load", function (e) {
        $("#global-loader").fadeOut("slow");
    });
    $('.my-btn-close-alert').click(function () {
        $('.alert-danger-top #top-message').css('display', 'none');
    })

    //datetimepicker
    if ($('.custom-datetime-picker').length > 0) {
        $('.custom-datetime-picker').datetimepicker({
            format: 'YYYY-MM-DD',
            icons: {
                up: "fa fa-angle-up",
                down: "fa-solid fa-angle-down",
                next: 'fa-solid fa-angle-right',
                previous: 'fa-solid fa-angle-left'
            }
        });
    }
    if ($('.custom-year-datetime-picker').length > 0) {
        $('.custom-year-datetime-picker').datetimepicker({
            format: 'YYYY',
            viewMode: "years",
            icons: {
                up: "fa fa-angle-up",
                down: "fa-solid fa-angle-down",
                next: 'fa-solid fa-angle-right',
                previous: 'fa-solid fa-angle-left'
            }
        });
    }
    if ($('.custom-month-datetime-picker').length > 0) {
        $('.custom-month-datetime-picker').datetimepicker({
            format: 'MM',
            viewMode: 'months',
        });
    }
    if ($('.custom-time-picker').length > 0) {
        $('.custom-time-picker').datetimepicker({
            format: "HH:mm",
            icons: {
                up: "fa fa-angle-up",
                down: "fa-solid fa-angle-down",
                next: 'fa-solid fa-angle-right',
                previous: 'fa-solid fa-angle-left'
            }
        });
    }

    // --------------- users----------------------
    $('#formDataLogout #submitLogout').click(function (e) {
        e.preventDefault();
        $("#formDataLogout").submit()
    });

});
//-------------------------function ajax---------------------



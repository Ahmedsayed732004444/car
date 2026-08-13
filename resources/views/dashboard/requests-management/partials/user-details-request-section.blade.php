 <div class="card card-primary card-outline mb-4 mt-1">
     <div class="card-header py-2">
         <div class="card-title">بيانات العميل (المرسل)</div>
     </div>
     <div class="card-body">
         <div class="text-center mb-4">
             <img src="{{ $requestDetails->user_logo ? url('uploads/' . $requestDetails->user_name ?? '') : url('assets/dashboard/images/img_user.gif') }}"
                 alt="{{ $requestDetails->user_name ?? '' }}" class="img-fluid" style="width: 100px;">
         </div>
         <div class="table-responsive mt-2">
             <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
                 <tbody>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">معرف العميل ID</td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->user_id ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الاسم
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->user_name ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> رقم الجوال
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             <a
                                 href="tel:{{ $requestDetails->user_phone ?? '' }}">{{ $requestDetails->user_phone ?? '' }}</a>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>
 </div>

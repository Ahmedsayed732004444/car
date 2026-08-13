 <div class="card card-primary card-outline mb-4 mt-1">
     <div class="card-header py-2">
         <div class="card-title">تفاصيل الطلب : {{ $requestDetails->request_id ?? '' }}</div>
     </div>
     <div class="card-body">
         <div class="table-responsive mt-2">
             <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
                 <tbody>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">رقم الطلب
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->request_id ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">القسم</td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->cat_name_ar ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">تاريخ الطلب
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->request_date ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> مدينة العميل
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->city_customer_name_ar ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> نطاق المدن
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             @foreach ($requestDetails->cities as $city)
                                 <span class="badge text-white px-3 py-2 mx-1"
                                     style="background-color: #2a4d73; font-weight: 500;">{{ $city ?? '' }}</span>
                             @endforeach
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الماركة
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             @foreach ($requestDetails->brandsNames as $brand)
                                 <span class="badge text-white px-3 py-2 mx-1"
                                     style="background-color: #2a4d73; font-weight: 500;">{{ $brand ?? '' }}</span>
                             @endforeach
                         </td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">تفاصيل الطلب
                         </td>
                         <td class="text-center align-middle" style="width: 70%;">
                             {{ $requestDetails->description ?? '' }}</td>
                     </tr>
                     <tr>
                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> حالة الطلب
                         </td>
                         <td class="text-center align-middle" style="width: 70%; font-weight: bold;">
                             {{ App\Enums\RequestCustomerStatusEnum::trans($requestDetails->request_status ?? '') }}
                         </td>
                     </tr>

                     @foreach ($requestDetails->customFields as $item)
                         <tr>
                             <td class="text-center" style="width: 30%; background-color: #f1f1f1">
                                 {{ $item['key'] }}</td>
                             <td class="text-center align-middle" style="width: 70%;">
                                 {{ $item['value'] }}
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>

         <div class="mt-5">
             @foreach ($requestDetails->requestImages as $item)
                 <img src="{{ route('uploads-private', ['filename' => $item->image_name]) }}" class="img-fluid"
                     alt="الصورة" style="width: 400px;">
             @endforeach
         </div>

         {{-- <div class="d-flex justify-content-center mt-5">
                            <form id="activeStatusVendorForm"
                                action="{{ route('dashboard.vendors-management.join-requests.active-status') }}"
                                method="POST" class="mx-2">
                                @csrf
                                <input type="hidden" name="userId" value="{{ $requestDetails->user_id ?? 0 }}">
                                <button id="btnActive" type="submit" class="btn btn-success px-4 py-2">قبول
                                    الطلب</button>
                            </form>
                            <button type="button" id="btnRejectOpenModal" class="btn btn-danger px-4 py-2"
                                data-action="{{ route('dashboard.vendors-management.join-requests.rejected-status', ['userId' => $requestDetails->user_id ?? 0]) }}"
                                data-id="{{ $requestDetails->user_id ?? 0 }}">رفض
                                الطلب</button>
                        </div> --}}
     </div>
 </div>

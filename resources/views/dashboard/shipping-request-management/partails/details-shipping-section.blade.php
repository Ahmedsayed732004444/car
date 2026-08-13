<div class="card card-primary card-outline mb-4 mt-1">
    <div class="card-header py-2">
        <div class="card-title">تفاصيل طلب الشحن</div>
    </div>
    <div class="card-body">
        <table class="table table-borderless" style="width:100%">
            <tbody>
                <tr>
                    <th style="width:30%">رقم تتبع الشحن</th>
                    <td><b>{{ $shippingRequest->oto_id ?? '-' }}</b></td>
                </tr>
                <tr>
                    <th style="width:30%">الرقم</th>
                    <td>{{ $shippingRequest->id ?? '-' }}</td>
                </tr>
                <tr>
                    <th style="width:30%">رقم طلب الشحن</th>
                    <td>{{ $shippingRequest->order_number ?? '-' }}</td>
                </tr>
                <tr>
                    <th style="width:30%">رقم الطلب</th>
                    <td>{{ $shippingRequest->request_id ?? '-' }}</td>
                </tr>
                <tr>
                    <th style="width:30%">رقم الرد</th>
                    <td>{{ $shippingRequest->response_id ?? '-' }}</td>
                </tr>
                <tr>
                    <th>رقم المستلم</th>
                    <td>{{ $shippingRequest->phone_origin_dimensions ?? '-' }}</td>
                </tr>
                <tr>
                    <th>رقم هوية المستلم</th>
                    <td>{{ $shippingRequest->id_number_user ?? '-' }}</td>
                </tr>
                <tr>
                    <th>مدينة المستلم</th>
                    <td>{{ $shippingRequest->city_origin_dimensions ?? '-' }}</td>
                </tr>
                <tr>
                    <th>عنوان المستلم</th>
                    <td>{{ $shippingRequest->address_origin_dimensions ?? '-' }}</td>
                </tr>
                <tr>
                    <th>رقم الشركة</th>
                    <td>{{ $shippingRequest->phone_origin_vendor ?? '-' }}</td>
                </tr>
                <tr>
                    <th>مدينة المستلم</th>
                    <td>{{ $shippingRequest->city_origin_vendor ?? '-' }}</td>
                </tr>
                <tr>
                    <th>عنوان المستلم</th>
                    <td>{{ $shippingRequest->address_origin_vendor ?? '-' }}</td>
                </tr>

                <tr>
                    <th>الطول</th>
                    <td>{{ $shippingRequest->length . ' سم' }}</td>
                </tr>
                <tr>
                    <th>العرض</th>
                    <td>{{ $shippingRequest->width . ' سم' }}</td>
                </tr>
                <tr>
                    <th>الارتفاع</th>
                    <td>{{ $shippingRequest->height . ' سم' }}</td>
                </tr>
                <tr>
                    <th>الوزن</th>
                    <td>{{ $shippingRequest->weight . ' كغم' }}</td>
                </tr>

                <tr>
                    <th>الحالة</th>
                    <td>
                        {{ App\Enums\StatusShippingRequestEnum::trans($shippingRequest->status->value) }}
                    </td>
                </tr>
                <tr>
                    <th>سعر الشحن</th>
                    <td>{{ $shippingRequest->fee_cheapest_shipping ?? '-' }}</td>
                </tr>
                <tr>
                    <th>عمولة التطبيق</th>
                    <td>{{ $shippingRequest->amount_rate_app ?? '-' }}</td>
                </tr>
                <tr>
                    <th>موافقة الشحن</th>
                    <td>{{ $shippingRequest->is_user_confirmed ? 'نعم' : 'لا' }}</td>
                </tr>
                <tr>
                    <th> تاريخ الشحن</th>
                    <td>{{ optional($shippingRequest->created_at)->format('Y-m-d H:i') ?? '-' }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

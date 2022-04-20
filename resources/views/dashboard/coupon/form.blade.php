<div class="card-body">
    <div class="row">
        <div class="form-group  col-12">
            <label>كود الكوبون<span
                    class="text-danger">*</span></label>
            <input name="code" id="code"  placeholder="مثال : mykom50"
                   value="{{ old('code', $data->code ?? '') }}"
                   class="form-control  {{ $errors->has('code') ? 'border-danger' : '' }}" type="text"
                   maxlength="255"/>
        </div>
        <div class="form-group col-6">
            <label>نوع الخصم<span class="text-danger">*</span></label>
            <select name="type" class="form-control {{ $errors->has('type') ? 'border-danger' : '' }}"
                 >
                <option
                    @if(Request::segment(1)== 'coupons' && Request::segment(2)== 'edit')
                    {{ 'fixed' == old('type',  $data->type)  ? 'selected' : '' }}
                    @else
                    {{ 'fixed' == old('type') ? 'selected' : '' }}
                    @endif
                    value="fixed">ثابت
                </option>
                <option
                    @if(Request::segment(1)== 'coupons' && Request::segment(2)== 'edit')
                    {{ 'percent' == old('type',  $data->type)  ? 'selected' : '' }}
                    @else
                    {{ 'percent' == old('type') ? 'selected' : '' }}
                    @endif
                    value="percent">نسبة مئوية
                </option>
            </select>
        </div>
        <div class="form-group  col-6">
            <label>قيمة الخصم<span
                    class="text-danger">*</span></label>
            <input name="amount" placeholder="مثال : 50" value="{{ old('amount', $data->amount ?? '') }}"
                   class="form-control  {{ $errors->has('amount') ? 'border-danger' : '' }}" min="0" step="any" type="number" />
        </div>
        <div class="form-group  col-6">
            <label>اقل قيمة للفاتورة<span
                    class="text-danger">*</span></label>
            <input name="min_order_total" placeholder="مثال : 1500" value="{{ old('min_order_total', $data->min_order_total ?? '') }}"
                   class="form-control  {{ $errors->has('min_order_total') ? 'border-danger' : '' }}" min="0" step="any" type="number" />
        </div>
        <div class="form-group  col-6">
            <label>ينتهي في<span
                    class="text-danger">*</span></label>
            <input name="expired_at" value="{{ old('expired_at', $data->expired_at ?? '') }}"
                   class="form-control  {{ $errors->has('expired_at') ? 'border-danger' : '' }}" type="date" />
        </div>

    </div>
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>


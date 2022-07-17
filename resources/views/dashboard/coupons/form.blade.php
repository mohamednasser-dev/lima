<div class="card-body row">
    <div class="form-group  col-12">
        <label>كود الكوبون<span
                class="text-danger">*</span></label>
        <input required name="code" placeholder="كود الكوبون" value="{{ old('code', $data->code ?? '') }}"
               class="form-control  {{ $errors->has('code') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
    </div>
    <div class="form-group  col-6">
        <label>من تاريخ<span
                class="text-danger">*</span></label>
        <input required name="from_date" value="{{ old('from_date', $data->from_date ?? '') }}"
               class="form-control  {{ $errors->has('from_date') ? 'border-danger' : '' }}" type="date"
        />
    </div>
    <div class="form-group  col-6">
        <label>الى تاريخ<span
                class="text-danger">*</span></label>
        <input required name="to_date" value="{{ old('to_date', $data->to_date ?? '') }}"
               class="form-control  {{ $errors->has('to_date') ? 'border-danger' : '' }}" type="date"
        />
    </div>
    <div class="form-group  col-6">
        <label>نسبة الخصم (%)<span
                class="text-danger">*</span></label>
        <input required name="amount" min="0" max="100" value="{{ old('amount', $data->amount ?? '') }}"
               class="form-control  {{ $errors->has('amount') ? 'border-danger' : '' }}" type="number" step="any"
        />
    </div>
</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-success btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>


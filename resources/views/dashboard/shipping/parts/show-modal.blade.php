
<!-- Modal-->
<div class="modal fade" id="shippingDetailsModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('lang.details') @lang('lang.shipment')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" style="height: 300px;">
                <div class="row" id="item-data">
                    <div class="col-sm-4">
                        <label for="order_uicode">@lang('lang.order')</label>
                        <h6 id="order_uicode"></h6>
                    </div>
                    <!-- /.col-sm-4 -->
                    
                    <div class="col-sm-4">
                        <label for="order_total">@lang('lang.total')</label>
                        <h6 id="order_total"></h6>
                    </div>
                    <!-- /.col-sm-4 -->
                    
                    <div class="col-sm-4">
                        <label for="order_shipping_count">@lang('lang.shipping_count')</label>
                        <h6 id="order_shipping_count"></h6>
                    </div>
                    <!-- /.col-sm-4 -->
                    
                    <div class="col-sm-4">
                        <label for="order_start_date">@lang('lang.start_date')</label>
                        <h6 id="order_start_date"></h6>
                    </div>
                    <!-- /.col-sm-4 -->
                    
                    <div class="col-sm-4">
                        <label for="order_end_date">@lang('lang.end_date')</label>
                        <h6 id="order_end_date"></h6>
                    </div>
                    <!-- /.col-sm-4 -->
                    
                    <div class="col-sm-4">
                        <label for="order_address">@lang('lang.address')</label>
                        <h6 id="order_address"></h6>
                    </div>
                    <!-- /.col-sm-4 -->

                </div>
                <!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('lang.cancel')</button>
            </div>
        </div>
    </div>
</div>
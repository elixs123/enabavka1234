{!! Form::model($item, ['url' => $form_url, 'method' => $method, 'files' => false, 'autocomplete' => 'false', 'class' => ($form_class = 'ajax-form-'.$item->getTable()), 'data-callback' => 'updateStockQty']) !!}
    @include('partials.alert_box')
    <div class="modal-body">
        <p><strong class="text-uppercase">{{ $form_title }}</strong></p>
        <hr>
        <div class="row"> 
            <div class="col-6">
                {!! VuexyAdmin::selectTwo('stock_id', $stocks->pluck('name', 'id')->prepend('Choose', '')->toArray(), $item->stock_id, ['required', 'data-plugin-options' => '{"minimumResultsForSearch": -1}', 'id' => 'form-control-category-'.$item->getTable()], trans('product.data.stock')) !!}
            </div>  
            <div class="col-6">
                {!! VuexyAdmin::number('qty', $item->qty, ['maxlength' => 8, 'required'], trans('product.data.qty')) !!}
            </div>                    
            <div class="col-12">
                {!! VuexyAdmin::textarea('note', $item->note, ['maxlength' => 5000], trans('product.data.note')) !!}
            </div>
        <input type="hidden" name="product_id" value="{{ $product_id }}">                                                                
        </div>         
    </div>
    <div class="modal-footer">
        <button class="btn btn-default" type="button" data-dismiss="modal">{{ trans('skeleton.actions.cancel') }}</button>
        <button class="btn btn-success" type="submit">{{ trans('skeleton.actions.submit') }}</button>
    </div>
{!! Form::close() !!}

<script>
    $(document).ready(function () {

        App.validate('.{{ $form_class }}', {
            submitHandler: function(form) {
                AjaxForm.init('.{{ $form_class }}');
            }
        });
        select2init($('.{{ $form_class }}'), {
            dropdownParent: $('.{{ $form_class }}').parent(),
        });
    });
</script>
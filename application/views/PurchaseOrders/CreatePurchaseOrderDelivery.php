<div class="card">
    <div class="card-header bg-stockism">
        <h5 class="card-title mb-0 text-light">Delivery</h5>
    </div>
    <div class="card-body m-3">
        <div class="mb-3 form-group required">
            <label class="control-label">Status</label>
            <select class="form-select flex-grow-1" name="delivery_status">
                <?php if (isset($incpurchaseorder)) { ?>
                    <option selected value="<?= $incpurchaseorder->delivery_status ?>"><?= $incpurchaseorder->delivery_status ?></option>
                <?php } else { ?>
                    <option selected value="Done">Done</option>
                    <option value="On Going">On Going</option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label class="control-label required">Shipping Cost</label>
            <input type="text" class="form-control number-only" name="shipping_cost" value="<?php if (isset($incpurchaseorder)) { echo $incpurchaseorder->shipping_cost; } else { echo 0; }?>" required <?php if (isset($incpurchaseorder)) { echo "readonly"; } ?>> 
        </div>
    </div>
</div>
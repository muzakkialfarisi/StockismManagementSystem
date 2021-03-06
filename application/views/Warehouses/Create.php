<div class="modal fade" id="ModalCreate" tabindex="-1" style="display: none;" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <form action="<?= site_url('Warehouses/CreatePost') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Warehouse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-modal-create-close"></button>
                </div>
                <div class="modal-body m-3">
                    <?php echo validation_errors(); ?>
                    <div class="mb-3 form-group required">
                        <label class="control-label">Code</label>
                        <input type="text" class="form-control" name="id_warehouse" value="AutoGenerated" disabled required>
                    </div>
                    <div class="mb-3 form-group required">
                        <label class="control-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3 form-group required">
                        <label class="control-label">Address</label>
                        <textarea class="form-control" rows="3" name="address" value="asas" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-3 form-group">
                                <label class="control-label">Picture</label>
                                <input accept="image/*" type="file" class="form-control" name="picture">
                                <span class="font-13 text-muted">Max 1 MB</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 text-center">
                            <img src="<?= base_url(); ?>assets/img/warehouses/default-warehouse.png" class="img-thumbnail picture_preview" height="60" width="60" asp-append-version="true"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-stockism text-light btn-pill">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
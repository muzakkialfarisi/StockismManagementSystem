<div class="modal fade" id="Modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New User Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('UserRoles/AddUserRoleProcess') ?>" method="post">
                <?php echo validation_errors(); ?>

                <div class="modal-body m-3">
                    <div class="mb-3 form-group required">
                        <label class="control-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3 form-group required">
                        <label class="control-label">Description</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <button class="btn bg-stockism text-white btn-lg btn-pill" type="submit">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
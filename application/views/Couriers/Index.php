<div class="card">
    <div class="card-header bg-stockism">
        <div class="d-flex align-items-center py-1">
            <div class="flex-grow-1 ps-3">
                <h5 class="card-title mb-0 text-light">Couriers</h5>
            </div>
            <button type="button" class="btn btn-light btn-pill" id="btn-modal-create" data-bs-toggle="modal" data-bs-target="#ModalCreate">Create New</button>
        </div>
    </div>
    <div class="card-body m-3">
        
        <div class="table-responsive" style="width:100%">
            <table class="table table-striped" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i = 1;
                    foreach($mascourier as $item) { ?>
                        <tr>
                            <td><?= $item['id_courier'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-light dropdown-toggle" type="button" id="dropdownactions" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownactions">
                                        <li><button type="button" class="dropdown-item btn-edit" data-bs-toggle="modal" data-id="<?= $item['id_courier'] ?>" data-bs-target="#ModalEdit">Edit</button></li>
                                        <li><button type="button" class="dropdown-item btn-delete" data-id="<?= $item['id_courier'] ?>">Delete</button></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php
                    $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<form action="<?= site_url('Couriers/DeletePost') ?>" method="post" id="DeletePost">
    <input type="text" class="form-control" name="id_productunit" required hidden>
</form>

<?php $this->load->view("Couriers/Create.php") ?>
<?php $this->load->view("Couriers/Edit.php") ?>
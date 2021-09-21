<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid mt-3">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">
                <i class="fas fa-plus"></i>
                TAMBAH DATA
            </button>
            <table class="table table-bordered table-md">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">ID PUSTAKAWAN</th>
                        <th scope="col">NAMA PUSTAKAWAN</th>
                        <th scope="col">LEVEL PUSTAKAWAN</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $l) : ?>
                            <th scope="row" class="text-center"><?= $i; ?></th>
                            <td><?= $l['id_pustakawan'] ?></td>
                            <td><?= $l['nama_pustakawan'] ?></td>
                            <td><?= $l['level'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Kepala_Pustakawan/ubah/' . $l['id_pustakawan']) ?>" class="btn btn-primary"><i class="far fa-edit"></i> UBAH</a>
                                <a href="<?= base_url('Kepala_Pustakawan/hapus/' . $l['id_pustakawan']) ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> HAPUS</a>
                            </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">TAMBAH PUSTAKAWAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Kepala_Pustakawan/tambah') ?>" method="post">
                        <div class="form-group row mb-1">
                            <label for="inputPassword" class="col-sm-5 col-form-label">ID PUSTAKAWAN</label>
                            <div class="col-sm-7">
                                <?php $i = 1; ?>
                                <input type="text" class="form-control" id="inputPassword" required name="id_pustakawan" value="<?= $i, date('dmy'); ?>">
                                <?php $i++; ?>
                            </div>
                        </div>
                        <div class="form-group row  mb-1">
                            <label for="inputPassword" class="col-sm-5 col-form-label">NAMA PUSTAKAWAN</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" required name="nama_pustakawan">
                            </div>
                        </div>
                        <div class="form-group row  mb-1">
                            <label for="inputPassword" class="col-sm-5 col-form-label">LEVEL</label>
                            <div class="col-sm-7">
                                <select class="form-select" id="inputState" name="level">
                                    <?php
                                    $level = $this->db->get('m_level')->result_array();
                                    foreach ($level as $l) :
                                    ?>
                                        <option selected><?= $l['level'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row  mb-1">
                            <label for="inputPassword" class="col-sm-5 col-form-label">SANDI</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword" required name="sandi">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">TAMBAH</button>
                </div>
                </form>
            </div>
        </div>
    </div>
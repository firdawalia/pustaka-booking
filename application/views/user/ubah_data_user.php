<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <?php foreach ($anggota as $u) { ?>
                <form action="<?= base_url('user/ubahUser'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $u['id']; ?>">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan nama user" value="<?= $u['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan alamat email" value="<?= $u['email']; ?>">
                    </div>
                    <div class="form-group">
                        <?php
                        if (isset($u['image'])) { ?>
                            <input type="hidden" name="old_pict" id="old_pict" value="<?= $u['image']; ?>">
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" class="rounded mx-auto mb-3 d-blok" alt="...">
                            </picture>
                        <?php } ?>
                        <input type="file" class="form-control form-control-user" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
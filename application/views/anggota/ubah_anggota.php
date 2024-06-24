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

            <?php foreach ($anggota as $a) { ?>

                <form action="<?= base_url('anggota/ubahAnggota'); ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">

                        <input type="text" class="form-control form-control-user" id="nama_anggota" name="nama__anggota" placeholder="Masukkan nama anggota" value="<?= $a['nama_anggota']; ?>">

                    </div>

                    <!-- <div class="form-group">

                        <select name="id_anggota" class="form-control form-control-user">

                            <option value="<?= $id; ?>" selected="selected"><?= $a; ?></option>

                            <?php

                            foreach ($kategori as $k) { ?>

                                <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>

                            <?php } ?>

                        </select>

                    </div> -->

                    <div class="form-group">

                        <input type="text" class="form-control form-control-user" id="email_anggota" name="email_anggota" placeholder="Masukkan alamat email" value="<?= $b['email_anggota']; ?>">

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="Masukkan no telepon" value="<?= $a['no_telp']; ?>">

                    </div>

                    <div class="form-group">

                        <select name="tahun" class="form-control form-control-user">

                            <option value="<?= $b['tahun_terbit']; ?>"><?= $b['tahun_terbit']; ?></option>

                            <?php

                            for ($i = date('Y'); $i > 1500; $i--) { ?>

                                <option value="<?= $i; ?>"><?= $i; ?></option>

                            <?php } ?>

                        </select>

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $b['isbn']; ?>">

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value="<?= $b['stok']; ?>">

                    </div>

                    <div class="form-group">

                        <?php

                        if (isset($b['image'])) { ?>

 

                            <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['image']; ?>">

 

                            <picture>

                                <source srcset="" type="image/svg+xml">

                                <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="rounded mx-auto mb-3 d-blok" alt="...">

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
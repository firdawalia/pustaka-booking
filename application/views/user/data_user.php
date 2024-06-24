<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
                <?php }?>
                <?= $this->session->flashdata('pesan'); ?>
                <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#anggotaBaruModal"><i class="fas fa-file-alt"></i> Anggota Baru</a> -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">gambar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $a = 1;
                        foreach ($user as $u) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $u['nama']; ?></td>
                            <td><?= $u['email']; ?></td>
                                                       
                            <td>
                                <picture>
                                    <source srcset=""type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/profile/') . $u['image'];?>" class="img-fluid img-thumbnail" alt="...">
                                </picture></td> 
                                <td>
                                    <a href="<?=
base_url('user/ubahUser/').$u['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?=
base_url('user/hapusUser/').$u['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.''.$u['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Modal Tambah buku baru-->
    <!-- <div class="modal fade" id="userBaruModal" tabindex="-1"
role="dialog" aria-labelledby="userBaruModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
id="userBaruModalLabel">Tambah user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('anggota'); ?>" method="post"
enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama" name="nama"
placeholder="Masukkan nama anggota">
                        </div>
                        <div class="form-group"> 
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-user" id="image" name="image">
                        </div>
                    </div> 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i
class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div> -->
<!-- End of Modal Tambah Mneu -->
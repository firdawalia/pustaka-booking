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
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#anggotaBaruModal"><i class="fas fa-file-alt"></i> Anggota Baru</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $a = 1;
                        foreach ($anggota1 as $b) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $b['nama_anggota']; ?></td>
                            <td><?= $b['email_anggota']; ?></td>
                            <td><?= $b['no_telp']; ?></td>
                           
                            <td>
                                <!-- <picture>
                                    <source srcset=""type="image/svg+xml">
                                    <img src="<?= base_url('assets/img/upload/') . $b['image'];?>" class="img-fluid img-thumbnail" alt="...">
                                </picture></td>
                                <td>
                                    <a href="<?=
base_url('buku/ubahBuku/').$b['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                    <a href="<?=
base_url('buku/hapusbuku/').$b['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.''.$b['judul_buku'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php } ?> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Modal Tambah buku baru-->
    <div class="modal fade" id="anggotaBaruModal" tabindex="-1"
role="dialog" aria-labelledby="anggotaBaruModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
id="bukuBaruModalLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('anggota'); ?>" method="post"
enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama_anggota" name="nama_anggota"
placeholder="Masukkan nama anggota">
                        </div>
                        <!-- <div class="form-group">
                            <select name="id_anggota" class="form-control form-control-user">
                                <option value="">Pilih Kategori</option>
                                <?php
                                foreach ($Anggota as $a) { ?>
                                    <option value="<?= $k['id_anggota'];?>"><?=
$k['nama_anggota'];?></option>
                                <?php } ?>
                            </select>
                        </div> -->
                        <!-- <div class="form-group">
                            <select name="kategori" class="form-control form-control-user">
                                <option value="">Pilih Kategori</option>
                                <?php
                                $k = ['Sains','Hobby','Komputer','Komunikasi','Hukum','Agama','Populer','Bahasa','Komik'];
                                for ($i=0;$i<9;$i++) { ?>
                                    <option value="<?= $k[$i];?>"><?= $k[$i];?></option>
                                <?php } ?>
                            </select>
                        </div>  -->
                        <div class="form-group"> 
                            <input type="text" class="form-control form-control-user" id="email_anggota" name="email_anggota" placeholder="Masukkan email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="Masukkan nama no telp">
                        </div>
                        <div class="form-group">
                            <!-- <select name="tahun" class="form-control form-control-user">
                                <option value="">Pilih Tahun</option>
                                <?php
                                for ($i=date('Y'); $i > 1000 ; $i--) {
?>
                                    <option value="<?= $i;?>"><?=
$i;?></option>
                                <?php } ?>
                            </select> -->
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-user" id="image" name="image">
                        </div>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
data-dismiss="modal"><i class="fas fa-ban"></i> Close</button>
                        <button type="submit" class="btn btn-primary"><i
class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
<!-- End of Modal Tambah Mneu -->
<div class="col-12">
    <!--ALERT-->
    <?php if ($this->session->flashdata('alert')) {
        $dataalert = explode("|", $this->session->flashdata('alert'));
        $status = $dataalert[0];
        $message = $dataalert[1];
    ?>
        <div class="alert alert-<?php echo $status; ?>">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <?php if ($this->session->flashdata('alert2')) {
        $dataalert = explode("|", $this->session->flashdata('alert2'));
        $status = $dataalert[0];
        $message = $dataalert[1];
    ?>
        <div class="alert alert-<?php echo $status; ?>">
            <?php echo $message; ?>
        </div>
    <?php } ?>
    <!--END ALERT-->

    <div class="card" style="border-radius: 10px;">
        <div class="card-body">
            <h2>Data Perkara <button class="btn btn-warning btn-round" data-toggle="modal" data-target="#modal-add">Tambah Perkara</button></h2>
            <hr class="my-2">

            <div class="m-10">
                <table data-provide="datatables" class="table table-responsive table-sm">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nomor</td>
                            <td>Perkara</td>
                            <td>Tersangka</td>
                            <td>Tanggal Pengajuan</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><small>R - 01 /M.5.13/Dek/01/2021</small></td>
                            <td><small>Perkara tindak pidana korupsi kredit macet di PD BPR Kota Kediri</small></td>
                            <td><small><ul>
                                <li>Didin Tri Anggoro</li>
                                <li>Erwin Syahrudin</li>
                            </ul></small></td>
                            <td><small>20/12/2019</small></td>
                            <td><button class="btn btn-success btn-sm btn-round dropdown-toggle" href="#" data-toggle="modal" data-target="#modal-pilih-status">SPDP</a></td>
                            <td>
                                <div class="btn-group ">
                                    <button class="btn btn-info btn-sm btn-round dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-edit" onclick="getview('1')"><i class="fa fa-edit"></i> Edit Data</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-delete" onclick="deletenow('1')"><i class="fa fa-trash"></i> Delete Data</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal modal-center fade" id="modal-add" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 10px;">
            <form action="<?php echo base_url(); ?>admin/Perkara/add" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama samaran/panggilan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tempat/Tgl.Lahir/Umur</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis kelamin</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Jenis</option>
                                <option value="">Laki - Laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Bangsa / Suku</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama / Kepercayaan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Status Perkawinan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea type="text" class="form-control" id="nama" name="nama" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-bold btn-pure btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-center fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 10px;">
            <form action="<?php echo base_url(); ?>admin/Perkara/update" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama samaran/panggilan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tempat/Tgl.Lahir/Umur</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis kelamin</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Jenis</option>
                                <option value="">Laki - Laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Bangsa / Suku</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Agama / Kepercayaan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Status Perkawinan</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea type="text" class="form-control" id="nama" name="nama" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-bold btn-pure btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal modal-center fade" id="modal-delete" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px;">
            <form action="<?php echo base_url(); ?>admin/Perkara/delete" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id_delete" name="id">
                    <h3>Apakah anda yakin ingin menghapus data <b id="id_delete_display">-</b></h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-bold btn-pure btn-primary">Delete Now</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-center fade" id="modal-pilih-status" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px;">
            <form action="<?php echo base_url(); ?>admin/Perkara/add" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Data Status Perkara</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <table class="table table-bordered table-sm">
                   <tr>
                       <td>Data Status</td>
                       <td>Tanggal Pembuatan</td>
                       <td>Lihat Data</td>
                   </tr>
                   <tr>
                       <td>RP 6</td>
                       <td>12/07/2020</td>
                       <td><a href="<?php echo base_url();?>admin/rp6/?create=RP - 08 /M.5.13/Euh/01/2021" class="btn btn-info btn-sm">Lihat Data</a></td>
                   </tr>
                   <tr>
                       <td>RP 7</td>
                       <td>-</td>
                       <td><a href="<?php echo base_url();?>admin/rp6/?create=RP - 08 /M.5.13/Euh/01/2021" class="btn btn-success btn-sm">Buat Data</a></td>
                   </tr>
                   <tr>
                       <td>RP 8</td>
                       <td>-</td>
                       <td><a href="<?php echo base_url();?>admin/rp8/?create=RP - 08 /M.5.13/Euh/01/2021" class="btn btn-success btn-sm">Buat Data</a></td>
                   </tr>
                   <tr>
                       <td>RP 9</td>
                       <td>-</td>
                       <td><a href="<?php echo base_url();?>admin/rp9/?create=RP - 09 /M.5.13/Euh/01/2021" class="btn btn-success btn-sm">Buat Data</a></td>
                   </tr>
                   <tr>
                       <td>RP 10</td>
                       <td>-</td>
                       <td><a href="<?php echo base_url();?>admin/rp10/?create=RP - 09 /M.5.13/Euh/01/2021" class="btn btn-success btn-sm">Buat Data</a></td>
                   </tr>
                   <tr>
                       <td>RP 11</td>
                       <td>-</td>
                       <td><a href="<?php echo base_url();?>admin/rp11/?create=RP - 09 /M.5.13/Euh/01/2021" class="btn btn-success btn-sm">Buat Data</a></td>
                   </tr>
                   <tr>
                       <td>RP 12</td>
                       <td>-</td>
                       <td><a href="<?php echo base_url();?>admin/rp12/?create=RP - 09 /M.5.13/Euh/01/2021" class="btn btn-success btn-sm">Buat Data</a></td>
                   </tr>
                   </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function getview(id) {
        $.getJSON("<?php echo base_url(); ?>admin/Perkara/view/" + id, function(data) {
            // console.log(data);
            $("#id_update").val(data.id);
            $("#nama_update").val(data.nama);
        });
    }

    function deletenow(id) {
        $("#id_delete").val(id);
        $("#id_delete_display").html(id);
    }
</script>
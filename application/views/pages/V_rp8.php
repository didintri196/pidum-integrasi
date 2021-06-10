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
            <h2>Data RP8 </h2>
            <hr class="my-2">

            <div class="m-10">
            <table data-provide="datatables" class="table table-responsive table-sm">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nomor</td>
                            <td>Perkara</td>
                            <td>Tersangka</td>
                            <td>Tanggal Pembuatan</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><small>RP - 8 /M.5.13/Euh/01/2021</small></td>
                            <td><small>Perkara tindak pidana korupsi kredit macet di PD BPR Kota Kediri</small></td>
                            <td><small><ul>
                                <li>Didin Tri Anggoro</li>
                                <li>Erwin Syahrudin</li>
                            </ul></small></td>
                            <td><small>20/12/2019</small></td>
                            <td>
                                <div class="btn-group ">
                                    <button class="btn btn-info btn-sm btn-round dropdown-toggle" data-toggle="dropdown">Action</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-edit" onclick="getview('1')"><i class="fa fa-download"></i> Download Data</a>
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
            <form action="<?php echo base_url(); ?>admin/RP8/add" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-8">
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
                    <div class="col-md-8">
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
            <form action="<?php echo base_url(); ?>admin/RP8/update" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                <div class="col-md-8">
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
                    <div class="col-md-8">
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
            <form action="<?php echo base_url(); ?>admin/RP8/delete" method="POST">
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

<script>
    function getview(id) {
        $.getJSON("<?php echo base_url(); ?>admin/RP8/view/" + id, function(data) {
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
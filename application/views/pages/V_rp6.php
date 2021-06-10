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
            <h2>Data RP6</h2>
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
                            <td><small>RP - 6 /M.5.13/Euh/01/2021</small></td>
                            <td><small>Perkara tindak pidana korupsi kredit macet di PD BPR Kota Kediri</small></td>
                            <td><small>
                                    <ul>
                                        <li>Didin Tri Anggoro</li>
                                        <li>Erwin Syahrudin</li>
                                    </ul>
                                </small></td>
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
<div class="modal modal-fill fade" id="modal-add" tabindex="-1">
    <div class="modal-dialog modal-lg" style="background-color: white;">
        <div class="modal-content" style="border-radius: 10px;max-width: 100%;">
            <form action="<?php echo base_url(); ?>admin/RP6/add" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Pembuatan RP6</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified nav-tabs-info">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1">Informasi Perkara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Identitas Tersangka</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Pemberitahuan Dimulainya Penyidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">Kejadian dan Pasal Disangkakan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5">Jaksa Peneliti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-6">Penahanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-7">Penghentian Penyidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-8">Penerimaan Berkas Tahap Pertama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-9">Keterangan</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-1">
                            <div class="form-group">
                                <label for="nama">Nomor SPDP</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="R - 01 /M.5.13/Dek/01/2021">
                            </div>
                            <div class="form-group">
                                <label for="nama">Deskripsi Singkat</label>
                                <textarea type="text" class="form-control" id="nama" name="nama" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nama">Latar Belakang</label>
                                <textarea type="text" class="form-control" id="nama" name="nama" required></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <table class="table table-bordered table-sm" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>NIK</td>
                                        <td>Nama Lengkap</td>
                                        <td>Nama Samaran</td>
                                        <td>Jenis kelamin</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>351550787555</td>
                                        <td>INDRA HARIANTO, SE</td>
                                        <td>-</td>
                                        <td>Laki-Laki</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>351552324121</td>
                                        <td>IDA RIYANI</td>
                                        <td>-</td>
                                        <td>Perempuan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <div class="form-group">
                                <label for="nama">Nomor Urut</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Tanggal</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Instansi Penyidik</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Tgl.Diterima Dikejaksaan/Penuntut Umum</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-4">
                            <div class="form-group">
                                <label for="nama">Tanggal & Waktu Kejadian</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Tempatnya</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Pasal yang disangkakan</label>
                                <textarea type="text" class="form-control" id="nama" name="nama" required></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-5">
                            <table class="table table-bordered table-sm" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>NRP</td>
                                        <td>Nama Lengkap</td>
                                        <td>Pangkat</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>351550787555</td>
                                        <td>INDRA HARIANTO, SE</td>
                                        <td>Jaksa Muda</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>351552324121</td>
                                        <td>IDA RIYANI</td>
                                        <td>Jaksa Muda</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="tab-6">
                            <div class="form-group">
                                <label for="nama">Tgl./Nomor Penangkapan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Tgl./Nomor Penahanan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Jenis Penahanan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Perpanjangan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Penangguhan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-7">
                            <div class="form-group">
                                <label for="nama">Tanggal/Nomor</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Pendapat jaksa peneliti</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">[PRA] Yang mengajukan</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">[PRA] Putusan PN</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">[PRA] Putusan PT</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-8">
                            <div class="form-group">
                                <label for="nama">Tanggal Di Terima</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Didahului dengan SPDP</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">SPDP bersama berkas</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-9">
                            <div class="form-group">
                                <label for="nama">Keterangan</label>
                                <textarea type="text" class="form-control" id="nama" name="nama" required></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-bold btn-pure btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal modal-center fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 10px;">
            <form action="<?php echo base_url(); ?>admin/RP6/update" method="POST">
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
            <form action="<?php echo base_url(); ?>admin/RP6/delete" method="POST">
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
    <?php if ($this->input->get('create')) { ?>
        $(document).ready(function() {
            $("#modal-add").modal();
        });
    <?php } ?>


    function getview(id) {
        $.getJSON("<?php echo base_url(); ?>admin/RP6/view/" + id, function(data) {
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
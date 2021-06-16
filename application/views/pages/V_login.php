<div class="min-h-fullscreen bg-img center-vh p-20" style="background-image: url(<?= base_url() ?>assets/img/bg-login.jpg);" data-overlay="7">
    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%">
        <img src="<?= base_url() ?>assets/img/logo.png" alt="logo">

        <h5 class="text-uppercase text-center mt-3">Login</h5>
        <h6 class="text-center mb-3">Sistem Informasi Kartu TIK</h6>

        <form class="form-type-material" method="POST" action="<?= base_url('auth/login') ?>">
            <!-- username -->
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" autocomplete="off">
                <label for="username">Username</label>
            </div>
            <?= form_error('username', '<small class="text-danger">', '</small>') ?>

            <!-- password -->
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password">
                <label for="password">Password</label>
            </div>
            <?= form_error('password', '<small class="text-danger">', '</small>') ?>

            <!-- <?= $this->session->flashdata('login_message') ?> -->
            <?php if ($this->session->flashdata('login_message')) {
                $dataalert = explode("|", $this->session->flashdata('login_message'));
                $status = $dataalert[0];
                $message = $dataalert[1];

                echo '<div class="alert alert-' . $status . ' alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>' . $message . '</div>';
            }
            ?>

            <div class="form-group">
                <button class="btn btn-bold btn-block btn-brown" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
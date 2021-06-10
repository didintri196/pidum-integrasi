<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg sidebar-light">
    <header class="sidebar-header bg-light">
        <span class="logo">
            <a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" style="height:70px;"></a>
        </span>
    </header>
    <nav class="sidebar-navigation">
        <ul class="menu">
            <li class="menu-category">Utama</li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == 'dashboard') { echo 'active';} ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/dashboard">
                    <span class="icon pe-7s-home"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="menu-category">Pintasan</li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "perkara") {echo 'active';} ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/perkara">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title">Data Perkara</span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "tahanan") {echo 'active';} ?>">
            <a class="menu-link" href="<?php echo base_url(); ?>admin/tahanan">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title">Data Tahanan</span>
                </a>
            </li>
            <li class="menu-category">Buku Register </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp6") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp6">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Dimulai / Dihentikan Perkara (RP 6)</small></span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp7") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp7">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Penerimaan Berkas Tahap 1 (RP 7)</small></span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp8") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp8">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Pemeriksaan Tambahan (RP 8)</small></span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp9") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp9">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Perkara Tahap Penuntutan (RP 9)</small></span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp10") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp10">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Penghentian Penuntutan (RP 10)</small></span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp11") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp11">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Upaya Hukum Dan Grasi (RP 11)</small></span>
                </a>
            </li>
            <li class="menu-item <?php if ($this->uri->segment(2, 0) == "rp12") { echo 'active';  } ?>">
                <a class="menu-link" href="<?php echo base_url(); ?>admin/rp12">
                    <span class="icon pe-7s-ribbon"></span>
                    <span class="title"><small>Putusan Pidana (RP 12)</small></span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
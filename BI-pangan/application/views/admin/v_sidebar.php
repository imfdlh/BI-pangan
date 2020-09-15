<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?=base_url('assets/adminbsb/images/admin.png')?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user['jabatan']; ?></div>
                <div class="email"><?php echo $user['nama']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right" style="top: 3em;">
                        <li><a><i class="material-icons">person</i><?php echo $user['username']; ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?=base_url('akses/logout');?>" class=" waves-effect waves-block"><i class="material-icons">input</i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <div class="menu">
            <ul class="list">
                <li class="header">MAIN MENU</li>
                <!-- if unconfirmed -->

                <?php if ($page == 'dashboard'): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                    <a href="<?=base_url('admin')?>">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- if unconfirmed -->

                <?php if ($page == 'analisis' || $page == 'aproduktivitas' || $page == 'alahan' || $page == 'aiklim' || $page == 'apupuk' || $page == 'aalsin' || $page == 'actanam' || $page == 'acpanen' || $page == 'acproduksi'): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">description</i>
                            <span>Analisis</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($page == 'aproduktivitas'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisisproduktivitas')?>">Produktivitas</a>
                                </li>
                            <?php if ($page == 'alahan'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisislahan')?>">Penggunaan Lahan</a>
                                </li>
                            <?php if ($page == 'aiklim'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisisiklim')?>">Kondisi Iklim</a>
                                </li>
                            <?php if ($page == 'apupuk'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisispupuk')?>">Penyaluran Pupuk</a>
                                </li>
                            <?php if ($page == 'aalsin'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisisalsin')?>">Penyaluran Alsin</a>
                                </li>
                            <?php if ($page == 'actanam'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisisctanam')?>">Ketercapaian Luas Tanam</a>
                                </li>
                            <?php if ($page == 'acpanen'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisiscpanen')?>">Ketercapaian Luas Panen</a>
                                </li>
                            <?php if ($page == 'acproduksi'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/analisiscproduksi')?>">Ketercapaian Jumlah Produksi</a>
                                </li>
                        </ul>
                </li>

                <!-- if unconfirmed -->

                <?php if ($page == 'grafik' || $page == 'gproduktivitas' || $page == 'glahan' || $page == 'giklim' || $page == 'gpupuk' || $page == 'galsin' || $page == 'gctanam' || $page == 'gcpanen' || $page == 'gcproduksi'): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assessment</i>
                            <span>Grafik</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($page == 'gproduktivitas'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikproduktivitas')?>">Produktivitas</a>
                                </li>
                            <?php if ($page == 'glahan'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafiklahan')?>">Penggunaan Lahan</a>
                                </li>
                            <?php if ($page == 'giklim'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikiklim')?>">Kondisi Iklim</a>
                                </li>
                            <?php if ($page == 'gpupuk'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikpupuk')?>">Penyaluran Pupuk</a>
                                </li>
                            <?php if ($page == 'galsin'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikalsin')?>">Penyaluran Alsin</a>
                                </li>
                            <?php if ($page == 'gctanam'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikctanam')?>">Ketercapaian Luas Tanam</a>
                                </li>
                            <?php if ($page == 'gcpanen'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikcpanen')?>">Ketercapaian Luas Panen</a>
                                </li>
                            <?php if ($page == 'gcproduksi'): ?>
                                <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/grafikcproduksi')?>">Ketercapaian Jumlah Produksi</a>
                                </li>
                        </ul>
                </li>

                <!-- if unconfirmed -->

                <?php if ($page == 'datamining' || $page == 'dmtabel' || $page == 'dmgrafik'): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_module</i>
                            <span>Data Mining</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($page == 'dmtabel'): ?>
                              <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/dminingtabel')?>">Tabel</a>
                                </li>
                            <?php if ($page == 'dmgrafik'): ?>
                              <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/dmininggrafik')?>">Grafik</a>
                            </li>
                        </ul>
                </li>
               
                <!-- if unconfirmed -->

                <?php if ($page == 'manage' || $page == 'add' || $page == 'edit' || $page == 'detail'): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings_applications</i>
                            <span>Manage User Data</span>
                        </a>
                        <ul class="ml-menu">
                            <?php if ($page == 'manage' || $page == 'edit' || $page == 'detail'): ?>
                              <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/manage')?>">Manage User</a>
                                </li>
                            <?php if ($page == 'add'): ?>
                              <li class="active">
                            <?php else: ?>
                                <li>
                            <?php endif; ?>
                                <a href="<?=base_url('admin/add')?>">Add New User</a>
                            </li>
                        </ul>
                </li>
                
                
                <?php if ($page == 'log'): ?>
                  <li class="active">
                <?php else: ?>
                  <li>
                <?php endif; ?>
                    <a href="<?=base_url('admin/log')?>">
                        <i class="material-icons">history</i>
                        <span>User Log History</span>
                    </a>
                </li>

            </ul>
        </div>
            </ul> 
                
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                <a href="javascript:void(0);">© 2019 Copyright: </a>
            </div>
            <div class="version">
                <b>Dinas TPHP Kab. Musi Banyuasin</b>
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

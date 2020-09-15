<section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MANAGE USER DATA
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <?php echo $this->session->flashdata('berhasildiperbarui');?>
                            <?php echo $this->session->flashdata('hapus');?>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1; ?>
                                        <?php foreach($all_user as $row): ?>
                                        <tr>
                                            <th><?php echo $i; ?></th>
                                            <td>
                                                <a href="<?=base_url('admin/detail/'.$row->username)?>" class="detail">
                                                    <?php echo $row->username; ?>
                                                </a>
                                            </td>
                                            <td><?php echo $row->nama; ?></td>
                                            <td><?php echo $row->role; ?></td>
                                            <td><?php echo $row->jabatan; ?></td>
                                            <td>
                                                <div>
                                                    <a href="<?=base_url('admin/edit/'.$row->id_user)?>" class="btn btn-primary waves-effect">
                                                        <i class="material-icons">mode_edit</i>
                                                    </a>
                                                    <a href="<?=base_url('admin/delete/'.$row->id_user)?>" class="btn btn-danger waves-effect">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <?php $i++;?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

        </div>
    </section>

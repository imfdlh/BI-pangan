<section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CLUSTER KECAMATAN BERDASARKAN PRODUKTIVITAS PANGAN
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kecamatan</th>
                                            <th>Padi (Kw/Ha)</th>
                                            <th>Jagung (Kw/Ha)</th>
                                            <th>Kedelai (Kw/Ha)</th>
                                            <th>Kacang Tanah (Kw/Ha)</th>
                                            <th>Kacang Hijau (Kw/Ha)</th>
                                            <th>Ubi Kayu (Kw/Ha)</th>
                                            <th>Ubi Jalar (Kw/Ha)</th>
                                            <th>Cluster</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kecamatan</th>
                                            <th>Padi (Kw/Ha)</th>
                                            <th>Jagung (Kw/Ha)</th>
                                            <th>Kedelai (Kw/Ha)</th>
                                            <th>Kacang Tanah (Kw/Ha)</th>
                                            <th>Kacang Hijau (Kw/Ha)</th>
                                            <th>Ubi Kayu (Kw/Ha)</th>
                                            <th>Ubi Jalar (Kw/Ha)</th>
                                            <th>Cluster</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i=1; ?>
                                        <?php foreach($data_cluster as $row): ?>
                                        <tr>
                                            <th><?php echo $i; ?></th>
                                            <td><?php echo $row->kecamatan; ?></td>
                                            <td><?php echo $row->produktivitas_padi; ?></td>
                                            <td><?php echo $row->produktivitas_jagung; ?></td>
                                            <td><?php echo $row->produktivitas_kedelai; ?></td>
                                            <td><?php echo $row->produktivitas_kacang_tanah; ?></td>
                                            <td><?php echo $row->produktivitas_kacang_hijau; ?></td>
                                            <td><?php echo $row->produktivitas_ubi_kayu; ?></td>
                                            <td><?php echo $row->produktivitas_ubi_jalar; ?></td>
                                            <td><?php echo $row->cluster; ?></td>

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

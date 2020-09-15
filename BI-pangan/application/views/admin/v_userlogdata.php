<section class="content">
        <div class="container-fluid">

            <!-- Widgets -->
            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <?php foreach($user_data as $row): ?>
                        <div class="header bg-teal">
                            <h2>
                                User Information <span class="pull-right label bg-amber"><?php echo $row->username; ?></span><small>Detail User Information...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table dashboard-task-infos">
                                    
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <td><span class="pull-right"><?php echo $row->username; ?></span></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Role</th>
                                            <td><span class="pull-right"><?php echo $row->role; ?></span></td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td><span class="pull-right"><?php echo $row->nama; ?></span></td>
                                        </tr>
                                        <tr>
                                            <th>Jabatan</th>
                                            <td><span class="pull-right"><?php echo $row->jabatan; ?></span></td>
                                        </tr>
                                        <tr>
                                            <th>Divisi</th>
                                            <td><span class="pull-right"><?php echo $row->divisi; ?></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue-grey">
                            <h2>
                                User Log History <span class="pull-right label bg-light-green"><?php echo $row->username; ?></span><small>User Log History...</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dataTable js-small dashboard-task-infos">
                                    
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Activity</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; ?>
                                        <?php foreach($user_log as $row): ?>
                                        <tr>
                                            <th><?php echo $i; ?></th>
                                            <td><?php echo $row->username; ?></td>
                                            <td><?php echo $row->role; ?></td>
                                            <td><?php echo $row->activity; ?></td>
                                            <td><?php echo date('d/m/Y', strtotime($row->date_time_activity));?></td>
                                            <td><?php echo date('H:i:s', strtotime($row->date_time_activity));?></td>
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
            <!-- #END# Widgets -->
            
        </div>
    </section>
<section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                USER LOG HISTORY
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            	<table class="table table-bordered table-striped table-hover dataTable js-exportable">
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
                            		<tfoot>
                            			<tr>
                            				<th>No.</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Activity</th>
                                            <th>Date</th>
                                            <th>Time</th>
                            			</tr>
                            		</tfoot>
                            		<tbody>
                                        <?php $i=1; ?>
                            			<?php foreach($log_history as $row): ?>
                            				<tr>
                            					<td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="<?=base_url('admin/detail/'.$row->username)?>" class="detail">
                                                        <?php echo $row->username; ?>
                                                    </a>
                                                </td>
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
        </div>
            <!-- #END# Exportable Table -->

    </section>


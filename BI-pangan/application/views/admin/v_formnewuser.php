<section class="content">
        <div class="container-fluid">

            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADD NEW USER
                            </h2>
                            
                        </div>
                        <div class="body">
                            <?php echo form_open('admin/addto'); ?>
                                <div class="form-group form-float">
                                	<label class="form-label">Username</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                	<label class="form-label">Nama</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                	<label class="form-label">Password</label>
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                	<label class="form-label">Role</label>
                                	<select class="form-control show-tick" name="role">
                                		<option selected disabled></option>
                                		<?php foreach($role as $rolenya): ?>
                                			<option value="<?php echo $rolenya->id_role; ?>"><?php echo $rolenya->role; ?></option>
                                		<?php endforeach; ?>
	                                </select>
                                </div>
                                <div class="form-group form-float">
                                	<label class="form-label">Jabatan</label>
                                	<select class="form-control show-tick" name="jabatan">
                                		<option selected disabled></option>
                                		<?php foreach($jabatan as $jabatannya): ?>
                                			<option value="<?php echo $jabatannya->id_jabatan; ?>"><?php echo $jabatannya->jabatan; ?></option>
                                		<?php endforeach; ?>
	                                </select>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Divisi</label>
                                    <select class="form-control show-tick" name="divisi">
                                        <option selected disabled></option>
                                        <?php foreach($divisi as $divisinya): ?>
                                            <option value="<?php echo $divisinya->id_divisi; ?>"><?php echo $divisinya->divisi; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">ADD</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            
        </div>
    </section>

<?php 
echo form_open(base_url('admin/menu/edit_sub/'.$sub_menu->id_sub_menu)); 
echo csrf_field(); 
?>				
				<div class="form-group row">
					<label class="col-3">Parent Menu</label>
					<div class="col-9">
						<select name="id_menu" class="form-control" required>
							<option value="">Pilih Parent Menu</option>
							<?php foreach($menu2 as $menu2) { ?>
							<option value="<?php echo $menu2->id_menu ?>" <?php if($sub_menu->id_menu==$menu2->id_menu) { echo 'selected'; } ?>>
								<?php echo $menu2->nama_menu ?>
							</option>
						<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Nama Menu</label>
					<div class="col-9">
						<input type="text" name="nama_menu" class="form-control" placeholder="Nama menu" value="<?php echo $sub_menu->nama_sub_menu ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Alamat/Link</label>
					<div class="col-9">
						
							<input type="text" name="link" class="form-control" placeholder="Alamat/link menu" value="<?php echo $sub_menu->link ?>" required>
						<small>Format: <strong><?php echo base_url() ?></strong></small>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Status Sub Menu</label>
					<div class="col-9">
						<select name="status_sub_menu" class="form-control">
							<option value="Draft">Draft</option>
							<option value="Publish" <?php if($sub_menu->status_sub_menu=='Publish') { echo 'selected'; } ?>>Publish</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Icon</label>
					<div class="col-9">
						<input type="text" name="icon" class="form-control" placeholder="Icon menu" value="<?php echo $sub_menu->icon ?>">
						<small>Icon menggunakan referensi: <a href="https://fontawesome.com/v5/search" target="_blank">https://fontawesome.com/v5/search</a></small>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Nomor urut</label>
					<div class="col-9">
						<input type="number" name="urutan" class="form-control" placeholder="Nomor urut" value="<?php echo $sub_menu->urutan ?>">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3">Keterangan lain</label>
					<div class="col-9">
						<textarea class="form-control" name="keterangan" placeholder="Keterangan"><?php echo $sub_menu->keterangan ?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-3"></label>
					<div class="col-9">
						<a href="<?php echo base_url('admin/menu') ?>" class="btn btn-outline-info">
							<i class="fa fa-arrow-left"></i>
						</a>
						<button type="submit" class="btn btn-success">Simpan&nbsp;<i class="fa fa-arrow-right"></i> </button>
					</div>
				</div>

<?php echo form_close(); ?>
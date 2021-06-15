<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/mhs/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/mhs/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nrp">NRP*</label>
								<input class="form-control <?php echo form_error('nrp') ? 'is-invalid':'' ?>"
								 type="text" name="nrp" placeholder="Nrp mahasiswa" />
								<div class="invalid-feedback">
									<?php echo form_error('nrp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" min="0" placeholder="Nama mahasiswa" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" placeholder="Alamat mahasiswa" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="no_hp">No hp*</label>
								<input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>"
								 type="text" name="no_hp" min="0" placeholder="No hp mahasiswa" />
								<div class="invalid-feedback">
									<?php echo form_error('no_hp') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jurusan">Jurusan*</label>
								<input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" min="0" placeholder="Jurusan mahasiswa" />
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
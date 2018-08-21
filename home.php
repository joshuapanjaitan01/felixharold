<div class="container">
	<?php if ($this->session->userdata('user_priv')=="Admin") { ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			Add post
		</button>
	<?php } ?>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open_multipart('home/upload'); ?>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New post</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-label-group">
						<label for="tittles">Nama Barang</label>
						<input id="tittles" class="form-control" placeholder="Enter tittle"  autofocus="" type="text"
							   name="tittle">
					</div>
					<br>

					<div class="form-label-group">
						<label for="contents">Deskripsi dan Aturan</label>
						<textarea name="content" id="contents" cols="30" rows="10" class="form-control" placeholder="Enter Aturan gadai"></textarea>
					</div>
					<br>

					<div class="form-label-group">
						<label for="images">File</label>
						<input id="images" class="form-control-file" required="" type="file"
							   name="image" value="Image">
					</div>

					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<?php foreach ($posts as $row) { ?>
			<div class="col-md-4">
				<div class="card mb-4 box-shadow">
					<h5 style="font-family: verdana;"><?= $row->tittle; ?></h5>
					<img class="card-img-top"
						 src="<?php echo base_url('assets/images/uploads/posts/'); ?><?php echo $row->image?>"
						 data-holder-rendered="true">
					<div class="card-body">
						<p class="card-text"><?php echo $row->content ?></p>
						<div class="d-flex justify-content-between align-items-center">
							<?php if ($this->session->userdata('user_priv')=="Admin") { ?>
							<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
							<?php } ?>
							<small class="text-muted"><?php echo $row->creation ?></small>
						</div>
					</div>
				</div>
			</div>

		<?php } ?>
	</div>
</div>

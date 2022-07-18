<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="searchModalLabel">Search This Site:</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="get" id="searchform" action="<?php echo home_url() ; ?>/" autocomplete="off">
					<div class="input-group">
						<input class="form-control form-control-lg search-form" type="text" autocomplete="off" placeholder="Search this site" value="<?php echo esc_html($s, 1); ?>" name="s" id="searchMAPE" maxlength="33" required />
						<div class="input-group-append">
							<button class="btn btn-outline-primary my-sm-0" type="submit">
								<i class="fas fa-search fa-lg fa-fw"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
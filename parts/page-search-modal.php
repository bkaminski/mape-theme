<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="searchModalLabel">Search This Site:</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="get" id="searchModal" action="<?php echo home_url() ; ?>/" autocomplete="off">
					<div class="input-group">
						 <input id="searchMape" type="text" class="form-control form-control-lg" placeholder="Enter search term" aria-label="Recipient's username" aria-describedby="button-addon2" value="<?php echo esc_html($s, 1); ?>" name="s" maxlength="33" required>
  						 <button class="btn btn-outline-primary" type="button" id="button-addon2">
  						 	<i class="fas fa-search fa-lg fa-fw"></i>
  						 </button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button onclick=
            "document.getElementById(
             'searchMape').value = ''"  type="button" class="btn btn-secondary">Clear</button>
				<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

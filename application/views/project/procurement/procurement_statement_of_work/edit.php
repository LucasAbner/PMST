<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="pageheader"> <?= $this->lang->line('procurement-registration')  ?></h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>

	<?php if ($this->session->flashdata('success')) : ?>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<strong><?php echo $this->session->flashdata('success'); ?></strong>
		</div>
	<?php elseif ($this->session->flashdata('error')) : ?>
		<div class="alert alert-warning">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<strong><?php echo $this->session->flashdata('error'); ?></strong>
		</div>
	<?php endif; ?>
	<!-- /.row -->
	<!-- acessa o objeto do array -->

	<?php extract($procurement_statement_of_work); ?>
	<div class="row">
		<div class="col-lg-12">

			<form action="<?= base_url() ?>ProcurementStatementOfWork/update/<?php echo $id; ?>" method="post">

				<input type="hidden" id="project_id" name="project_id" value="<?php echo $project_id; ?>">
				<!-- Textarea -->

				<div class=" col-lg-4 form-group">
					<label for="description"><?= $this->lang->line('description') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('description-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="description" name="description" maxlength="1000"><?php echo $description; ?></textarea>

				</div>

				<div class=" col-lg-4 form-group">
					<label for="types"><?= $this->lang->line('types') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('types-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="types" name="types" maxlength="1000"><?php echo $types; ?></textarea>

				</div>

				<div class=" col-lg-4 form-group">
					<label for="selection_criterias"><?= $this->lang->line('selection_criterias') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('selection_criterias-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="selection_criterias" name="selection_criterias" maxlength="1000"><?php echo $selection_criterias; ?></textarea>

				</div>

				<div class=" col-lg-12 form-group">
					<label for="restrictions"><?= $this->lang->line('restrictions') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('restrictions-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="restrictions" name="restrictions" maxlength="1000"><?php echo $restrictions; ?></textarea>
				</div>

				<div class=" col-lg-12 form-group">
					<label for="premises"><?= $this->lang->line('premises') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('premises-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="premises" name="premises" maxlength="1000"><?php echo $premises; ?></textarea>
				</div>

				<div class=" col-lg-12 form-group">
					<label for="schedule"><?= $this->lang->line('schedule') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('schedule-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="schedule" name="schedule" maxlength="1000"><?php echo $schedule; ?></textarea>
				</div>

				<div class=" col-lg-12 form-group">
					<label for="informations"><?= $this->lang->line('informations') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('informations-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="informations" name="informations" maxlength="1000"><?php echo $informations; ?></textarea>
				</div>

				<div class=" col-lg-12 form-group">
					<label for="procurement_management"><?= $this->lang->line('procurement_management') ?> </label>
					<a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?= $this->lang->line('procurement_management-tp') ?>"><i class="glyphicon glyphicon-comment"></i></a>

					<textarea oninput="eylem(this, this.value)" class="form-control elasticteste" type="text" id="procurement_management" name="procurement_management" maxlength="1000"><?php echo $procurement_management; ?></textarea>
				</div>

				<div class="col-lg-12">
					<button id="stakeholder-submit" type="submit" value="Save" class="btn btn-lg btn-success pull-right">
						<i class="glyphicon glyphicon-ok"></i> <?= $this->lang->line('btn-save') ?>
					</button>
			</form>

			<form action="<?php echo base_url('ProcurementStatementOfWork/listp/'); ?><?php echo $project_id; ?>">
				<button class="btn btn-lg btn-info pull-left"> <i class="glyphicon glyphicon-chevron-left"></i> <?= $this->lang->line('btn-back') ?></button>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	//////////////////////////////////
	// Start Date & End Date
	//////////////////////////////////
	var currentDate = new Date();
	var today = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), 0, 0, 0, 0);
	var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";

	var startDate = $("#date").datepicker({
		autoclose: true,
		format: 'yyyy/mm/dd',
		//language: 'pt-BR', //Idioma do Calendario
		container: container,
		keyboardNavigation: true,
		orientation: "bottom",
		todayHighlight: true,
		startDate: today,
	}).on('changeDate', function(ev) {
		var newDate = new Date(ev.date.setDate(ev.date.getDate() + 1));
		endDate.datepicker("setStartDate", newDate);
	});

	//Start Date Ends Here
</script>
<?php $this->load->view('frame/footer_view') ?>
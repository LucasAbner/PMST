<div id="page-wrapper">
	<div class="row" position="absolute">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$this->lang->line('delivery_acceptance_term-title')?></h1>
		</div>
		<!-- /.col-lg-12 -->

		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong><?php echo $this->session->flashdata('success'); ?></strong>
			</div>
			<?php elseif ($this->session->flashdata('error')): ?>
				<div class="alert alert-warning">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong><?php echo $this->session->flashdata('error'); ?></strong>
				</div>
			<?php endif; ?>
			<!-- /.row -->

			<div class="row">
				<div class="col-lg-10">

					<button class="btn btn-info btn-lg glyphicon-plus" onclick="window.location.href='<?php echo base_url() ?>DeliveryAcceptanceTerm/newp/<?php echo $project_id ?>'"> <?=$this->lang->line('btn-new')?> <?=$this->lang->line('project_performance_report-title')?></button>

				</div>
			</div>

			<br><br>
			<div class="row">
				<div class="col-lg-12">

					<table class="table table-bordered table-striped" id="tableNB">
						<thead>
							<tr>
								<th><?=$this->lang->line('validator_name')?></th>
								<th><?=$this->lang->line('validation_date')?></th>
								<th><?=$this->lang->line('comments')?></th>

								<th><?=$this->lang->line('btn-actions')?></th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($delivery_acceptance_term as $delivery) {
								?>
								<tr dados='<?= json_encode($delivery); ?>'>
									<td><?php echo $delivery->validator_name;?></td>
									<td><?php echo $delivery->validation_date;?></td>
									<td><?php echo $delivery->comments;?></td>

									<td style="max-width: 20px">
										<div class="row center">
											<div class="col-sm-3">
												<form action="<?php echo base_url() ?>DeliveryAcceptanceTerm/edit/<?php echo $delivery->id; ?>" method="post">
													<input type="hidden" name="project_id" value="<?=$delivery->project_id; ?>">
													<button type="submit" class="btn btn-default"><em class="fa fa-pencil"></em><span class="hidden-xs"></span></button>
												</form>
											</div>

											<div class="col-sm-3">
												<!--<form action="<?php echo base_url() ?>Team_Performance_Evaluation/delete/<?php echo $delivery->id; ?>" method="post">
												<input type="hidden" name="project_id" value="<?=$delivery->project_id?>"> -->
												<button type="submit" class="btn btn-danger" onclick="deletar(<?=$delivery->project_id?>, <?= $delivery->id; ?>)"><em class="fa fa-trash"></em><span class="hidden-xs"></span></button>
												<!-- </form> -->
											</div>

											<div class="col-sm-3">
												<form target="_blank" action="<?php echo base_url() ?>DeliveryAcceptanceTerm_PDF/pdfGenerator/<?php echo $delivery->id; ?>" method="post">
													<input type="hidden" name="project_id" value="<?=$project_id?>">
													<button type="submit" class="btn btn-success" ><em class="glyphicon glyphicon-file"></em> to PDF<span class="hidden-xs"></span></button>
												</form>
											</div>
										</div>
									</td>
								</tr>
								<?php
							}
							?>

						</tbody>
					</table>


					<form action="<?php echo base_url('project/'); ?><?php echo $project_id; ?>" >
				   <button class="btn btn-lg btn-info pull-left" >  <i class="glyphicon glyphicon-chevron-left"></i> <?=$this->lang->line('btn-back')?></button>
				 </form>
				 <!-- /.row -->
				 <div class="col-sm-12" position= "absolute">
					 <div class="container">

															 <!--1º preencher o nome da view-->
															 <?php $view = array(
																 "name" => "delivery_acceptance_term",
															 ); ?>

															 <!--Carrega o form de envio e envia para ele o nome da view que tu setou -->
															 <?php $this->load->view('upload/index', $view) ?>
															 <br>
															 <div>
															 <!--Carrega as imagens do projeto de acordo com a view, utiliza id ou project_id pra pegar o id do projeto e criar a query-->
															 <?php $this->load->view('upload/retrieve', $view) ?>

															 <?php $this->load->view('frame/footer_view')?>
					 </div>
				 </div>
			 </div>

			 <script src="<?=base_url()?>assets/js/jquery-2.1.3.min.js"></script>
			 <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
			 <script src="<?=base_url()?>assets/js/dataTables.bootstrap.js"></script>
			 <script src="<?=base_url()?>assets/js/dataTables.responsive.js"></script>
			 <!-- JavaScript -->
			 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
			 <!-- CSS -->
			 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>

				 <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
				 -->
				 <script type="text/javascript">
					 'use strict'
					 let table;

					 $(document).ready( function () {
						 table = $('#tableNB').DataTable({
							 "columns": [
							 { "data": "validator_name" },
							 { "data": "validation_date" },
							 { "data": "comments" },

							 { "data": "btn-actions", "orderable": false}
							 ],
							 "order": [[1, 'attr']]
						 });
					 } );


				 </script>

				 <script type="text/javascript">

					 function deletar(idProjeto, id){
						 //e.preventDefault();
						 alertify.confirm('Do you agree?').setting({
							 'labels':{
								 ok: 'Agree',
								 cancel: 'Cancel'
							 },
							 'reverseButtons': false,
							 'onok': function(){

								 console.log(`Passei o ${idProjeto} e ${id}`);

						 $.post("<?php echo base_url() ?>DeliveryAcceptanceTerm/delete/" + id,
						 {
							 project_id: idProjeto,
						 });

										 alertify.success('You agree.');
										 location.reload();
						 //location.reload();
									 },
									 'oncancel': function(){
										 alertify.error('You did not agree.');
									 }
								 }).show();
					 }

				 </script>
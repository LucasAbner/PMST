<div id="page-wrapper">
	<div class="row" position="absolute">
		<div class="col-lg-12">
			<h1 class="page-header"><?=$this->lang->line('stakeholder_mp')?></h1>
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
				<div class="col-lg-12">
					<button type="button" class="btn btn-info btn-lg glyphicon-plus" onclick="window.location.href='<?php echo base_url() ?>Stakeholder_mp/new/<?php echo $project_id ?>'"><?=$this->lang->line('btn-new')?> <?=$this->lang->line('stakeholder_mp')?> </button>

					<div class="col-sm-12">
						<br><br>
						<div>
							<table class="table table-bordered table-striped" id="tableS">
								<thead>
									<tr>
										<th class="text-center">#</th>
										<th><?=$this->lang->line('stakeholder')?></th>
										<th><?=$this->lang->line('observation')?></th>
										<th><?=$this->lang->line('current_engagement')?></th>
										<th><?=$this->lang->line('expected_engagement')?></th>
										<th><?=$this->lang->line('btn-actions')?></th>
									</tr>
								</thead>
								<tbody>
									<?php

									foreach ($stakeholder_mp as $stakeholder_mp) {
										?>
										<tr dados='<?= json_encode($stakeholder_mp);?>'>
											<td class="moreInformationTable"></td>
											<td><?php echo $stakeholder_mp->name;?></td>
											<td><?php echo $stakeholder_mp->observation;?></td>
											<td><?php echo $stakeholder_mp->current_engagement;?></td>
											<td><?php echo $stakeholder_mp->expected_engagement;?></td>
											<td>
												<div class="row">
													<div class="col-sm-4">
														<form action="<?php echo base_url() ?>Stakeholder_mp/edit/<?php echo $stakeholder_mp->stakeholder_mp_id; ?>" method="post">
															<input type="hidden" name="project_id" value="<?=$stakeholder_mp->project_id?>">
															<button type="submit" class="btn btn-default"><em class="fa fa-pencil"></em><span class="hidden-xs"></span></button>
														</form>
													</div>
													<div class="col-sm-3">
													</div>
													<div class="col-sm-2">
														<form action="<?php echo base_url() ?>Stakeholder_mp/delete/<?php echo $stakeholder_mp->stakeholder_mp_id; ?>" method="post">
															<input type="hidden" name="project_id" value="<?=$project_id?>">
															<button type="submit" class="btn btn-danger" ><em class="fa fa-trash"></em><span class="hidden-xs"></span></button>
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
						</div> 

						<!-- /.row --> </div> 
						<div class="col-sm-12" position= "absolute">
							<div class="container">
								<?php $this->load->view('frame/footer_view') ?>            
							</div>
						</div>
					</div>

					<script src="<?=base_url()?>assets/js/jquery-2.1.3.min.js"></script>
					<script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>
					<script src="<?=base_url()?>assets/js/dataTables.bootstrap.js"></script>
					<script src="<?=base_url()?>assets/js/dataTables.responsive.js"></script>

					<!--<script type="text/javascript">
						$(document).ready( function () {
							$('#tableNB').DataTable();
						} );
					</script> -->

					<script type="text/javascript">
						'use strict'
						let table;
						$(document).ready( function () {
							table = $('#tableS').DataTable({
								"columns": [
								{ "data": "#", "orderable": false},
								{ "data": "stakeholder" },
								{ "data": "observation" },
								{ "data": "current_engagement" },
								{ "data": "expected_engagement" },
								{ "data": "btn-actions", "orderable": false}
								],
								"order": [[1, 'attr']]
							});
						} );
						$("#tableS tbody td.moreInformationTable").on("click", function() {
							let element = jQuery($(this)[0].parentNode);
							let tr = element.closest('tr');
							let row = table.row(tr);
							console.log(element)
							let dados = JSON.parse(element.attr("dados"));
							if ( row.child.isShown() ) {
								row.child.hide();
								tr.removeClass('shown');
							}
							else {
								row.child( format(dados) ).show();
								tr.addClass('shown');
							}
						});
						function format (dados) {
							return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
							'<tr><td><b><?=$this->lang->line('strategy')?>: </b>' + dados.strategy + '%</td></tr>'+
							'<tr><td><b><?=$this->lang->line('scope')?>: </b>' + dados.scope + '%</td></tr>'+
							'<tr><td><b><?=$this->lang->line('average')?>: </b>' + dados.average + '%</td></tr>'+
							'<tr><td><b><?=$this->lang->line('interest')?>: </b>' + dados.interest + '%</td></tr>'+
							'<tr><td><b><?=$this->lang->line('power')?>: </b>' + dados.power + '%</td></tr>'+
							'<tr><td><b><?=$this->lang->line('influence')?>: </b>' + dados.influence + '%</td></tr>'+
							'<tr><td><b><?=$this->lang->line('impact')?>: </b>' + dados.impact + '%</td></tr>'+
							'</table>';
						}
					</script>
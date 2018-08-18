<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <?php if($this->session->flashdata('success')):?>
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php elseif($this->session->flashdata('error')):?>
        <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
        </div>
    <?php endif;?>
    <div class="row">
        <div class="col-lg-12">      
	<h3>
            <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
         </h3>
      <div class="container-fluid">
            <p class="text-center text-muted h5">Preencha os campos</p>
      </div>   
      <form method="POST" action="<?php echo base_url('GerenciarCustos/insert/'); ?><?php echo $id; ?>">
            <?php
            if($cost_mp==null){
               //$verific = true;
               ?> 
            <div class="form-group">
               <label>Processos para gerenciamento dos custos do projeto:</label>
               <input type="text" class="form-control" name="project_costs_m">
            </div>
            <div class="form-group">
               <label>Nível de precisão necessário, limites e unidades de medida que serão utilizadas:</label>
               <input type="text" class="form-control" name="accuracy_level">
            </div>
            <div class="form-group">
               <label>Procedimentos organizacionais relacionados:</label>
               <input type="text" class="form-control" name="organizational_procedures">
            </div>
            <div class="form-group">
               <label>Regras para medição de desempenho:</label>
               <input type="text" class="form-control" name="measurement_rules">
            </div>
            <div class="form-group">
               <label>Formato de relatórios:</label>
               <input type="text" class="form-control" name="format_report">
            </div>
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
            </form>
            <?php
         }else{
            //$verific = false;
         ?>

                  <?php extract($cost_mp); ?>
         <form method="POST" action="<?php echo base_url('GerenciarCustos/insert/'); ?><?php echo $id; ?>">
            <div class="form-group">
               <label>Processos para gerenciamento dos custos do projeto:</label>
               <input type="text" class="form-control" value="<?php echo $project_costs_m; ?>" name="project_costs_m">
            </div>
            <div class="form-group">
               <label>Nível de precisão necessário, limites e unidades de medida que serão utilizadas:</label>
               <input type="text" class="form-control" value="<?php echo $accuracy_level; ?>" name="accuracy_level">
            </div>
            <div class="form-group">
               <label>Procedimentos organizacionais relacionados:</label>
               <input type="text" class="form-control" value="<?php echo $organizational_procedures; ?>" name="organizational_procedures">
            </div>
            <div class="form-group">
               <label>Regras para medição de desempenho:</label>
               <input type="text" class="form-control" value="<?php echo $measurement_rules; ?>" name="measurement_rules">
            </div>
            <div class="form-group">
               <label>Formato de relatórios:</label>
               <input type="text" class="form-control" value="<?php echo $format_report; ?>" name="format_report">
            </div>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Update</button>
          </form> 
         <?php 
      }
      ?>
</section>
</div>
</div>
<?php $this->load->view('frame/footer_view')?>
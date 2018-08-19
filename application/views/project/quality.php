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
      <form method="POST" action="<?php echo base_url('Charter_Quality/insert/'); ?><?php echo $id; ?>">
            <?php
            if($quality_mp==null){
               //$verific = true;
               ?> 

            <div class="form-group">
               <label>Methodology</label>
               <input type="text" class="form-control" name="methodology">
            </div>

            <div class="form-group">
               <label>Processes Related To Project Quality Management</label>
               <input type="text" class="form-control" name="related_processes">
            </div>

            <div class="form-group">
               <label>Revised Expectations and Tolerances of Stakeholders</label>
               <input type="text" class="form-control" name="expectations_tolerances">
            </div>

            <div class="form-group">
               <label>Audit and Traceability</label>
               <input type="text" class="form-control" name="traceability">
            </div>

            <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
            </form>
            <?php
         }else{
            //$verific = false;
         foreach($quality_mp as $quality){
         ?>

                  
         <form method="POST" action="<?php echo base_url('Charter_Quality/insert/'); ?><?php echo $id; ?>">

            <div class="form-group">
               <label>Methodology</label>
               <input type="text" class="form-control" value="<?php echo $quality->methodology; ?>" name="methodology">
            </div>

            <div class="form-group">
               <label>Processes Related To Project Quality Management</label>
               <input type="text" class="form-control" value="<?php echo $quality->related_processes; ?>" name="related_processes">
            </div>

            <div class="form-group">
               <label>Revised Expectations and Tolerances of Stakeholders</label>
               <input type="text" class="form-control" value="<?php echo $quality->expectations_tolerances; ?>" name="expectations_tolerances">
            </div>

            <div class="form-group">
               <label>Audit and Traceability</label>
               <input type="text" class="form-control" value="<?php echo $quality->traceability; ?>" name="traceability">
            </div>

            <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-check"></span>Update</button>
          </form> 
         <?php
         } 
      }
      ?>
</section>
</div>
</div>
<?php $this->load->view('frame/footer_view')?>

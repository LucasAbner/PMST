<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><?=$this->lang->line('stakeholder_mp-title')?></h1>
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
    <?php endif;
    ?>
    <div class="row">
      <div class="col-lg-12">      
       <form method="post" action="<?php echo base_url()?>/Stakeholder_mp/update/<?php echo $stakeholder_mp[0]->stakeholder_mp_id; ?>">

        <div class="col-lg-6 form-group">
          <label for="stakeholder"><?=$this->lang->line('stakeholder')?></label>
          <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('stakeholder-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
          <input type="text" name="stakeholder_name" class="form-control" id="stakeholder_name" value="<?php echo $stakeholder_mp[0]->name?>" readonly required>
        </div>
        <input type="hidden" name="stakeholder_id"  value="<?php echo $stakeholder_mp[0]->stakeholder_id; ?>">
        <input type="hidden" name="project_id"  value="<?php echo $stakeholder_mp[0]->project_id; ?>">

        <div class="col-lg-3 form-group">
          <label for="current_engagement "><?=$this->lang->line('current_engagement')?></label>
          <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('current_engagement-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
          <select name="current_engagement" class="form-control">
           <?php if ($stakeholder_mp[0]->current_engagement == "Unaware") {?>
            <option value="Unaware" selected><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->current_engagement == "Supportive") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive" selected><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->current_engagement == "Leading") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading" selected><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->current_engagement == "Neutral") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral" selected><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->current_engagement == "Resistant") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant" selected><?=$this->lang->line('resistant')?></option>
          <?php }?>
         </select>
       </div>

       <div class="col-lg-3 form-group">
        <label for="expected_engagement "><?=$this->lang->line('expected_engagement')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('expected_engagement-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <select name="expected_engagement" class="form-control">
          <?php if ($stakeholder_mp[0]->expected_engagement == "Unaware") {?>
            <option value="Unaware" selected><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->expected_engagement == "Supportive") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive" selected><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->expected_engagement == "Leading") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading" selected><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->expected_engagement == "Neutral") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral" selected><?=$this->lang->line('neutral')?></option>
            <option value="Resistant"><?=$this->lang->line('resistant')?></option>
          <?php }elseif ($stakeholder_mp[0]->expected_engagement == "Resistant") {?>
            <option value="Unaware"><?=$this->lang->line('unaware')?></option>
            <option value="Supportive"><?=$this->lang->line('supportive')?></option>
            <option value="Leading"><?=$this->lang->line('leading')?></option>
            <option value="Neutral"><?=$this->lang->line('neutral')?></option>
            <option value="Resistant" selected><?=$this->lang->line('resistant')?></option>
          <?php }?>
        </select>
      </div>

      <div class="col-lg-2 form-group">
        <label for="interest"><?=$this->lang->line('interest')?></label>
        <a class="btn-sm b2tn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('interest-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <select name="interest" class="form-control average" id="interest" onchange="changed(this)">
          <?php if($stakeholder_mp[0]->interest == 0){?>
            <option value="0" selected>0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->interest == 10) {?>
            <option value="0">0%</option>
            <option value="10" selected>10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->interest == 30) { ?>
            <option value="0">0%</option>
            <option value="10">10%</option>
            <option value="30" selected>30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->interest == 50) {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50" selected>50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->interest == 70)  {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70" selected>70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->interest == 90) { ?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90" selected>90%</option>
          <?php } ?>
        </select>
      </div>

      <div class="col-lg-2 form-group">
        <label for="power"><?=$this->lang->line('power')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('power-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <select name="power" class="form-control average" id="power" onchange="changed(this)">
          <?php if($stakeholder_mp[0]->power == 0){?>
            <option value="0" selected>0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->power == 10) {?>
            <option value="0">0%</option>
            <option value="10" selected>10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->power == 30) { ?>
            <option value="0">0%</option>
            <option value="10">10%</option>
            <option value="30" selected>30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->power == 50) {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50" selected>50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->power == 70)  {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70" selected>70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->power == 90) { ?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90" selected>90%</option>
          <?php } ?>
        </select>
      </div>

      <div class="col-lg-2 form-group">
        <label for="influence"><?=$this->lang->line('influence')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('influence-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <select name="influence" class="form-control average" id="influence" onchange="changed(this)">
          <?php if($stakeholder_mp[0]->influence == 0){?>
            <option value="0" selected>0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->influence == 10) {?>
            <option value="0">0%</option>
            <option value="10" selected>10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->influence == 30) { ?>
            <option value="0">0%</option>
            <option value="10">10%</option>
            <option value="30" selected>30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->influence == 50) {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50" selected>50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->influence == 70)  {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70" selected>70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->influence == 90) { ?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90" selected>90%</option>
          <?php } ?>
        </select>
      </div>

      <div class="col-lg-2 form-group">
        <label for="impact"><?=$this->lang->line('impact')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('impact-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <select name="impact" class="form-control average" id="impact" onchange="changed(this)">
          <?php if($stakeholder_mp[0]->impact == 0){?>
            <option value="0" selected>0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->impact == 10) {?>
            <option value="0">0%</option>
            <option value="10" selected>10%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->impact == 30) { ?>
            <option value="0">0%</option>
            <option value="10">10%</option>
            <option value="30" selected>30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->impact == 50) {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30">30%</option>
            <option value="50" selected>50%</option>
            <option value="70">70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->impact == 70)  {?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70" selected>70%</option>
            <option value="90">90%</option>
          <?php }elseif ($stakeholder_mp[0]->impact == 90) { ?>
            <option value="0" >0%</option>
            <option value="10">10%</option>
            <option value="30" >30%</option>
            <option value="50">50%</option>
            <option value="70">70%</option>
            <option value="90" selected>90%</option>
          <?php } ?>
        </select>
      </div>

      <div class="col-lg-2 form-group">
        <label><?=$this->lang->line('average')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('average-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <input type="text" class="form-control" name="average" id="average" onchange="changed(this)" value="<?php echo $stakeholder_mp[0]->average?>" readonly required>
      </div>

      <div class="col-lg-12 form-group">
        <label for="strategy"><?=$this->lang->line('strategy')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('strategy-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <div >                     
          <textarea class="form-control elasticteste" oninput="eylem(this, this.value)"  id="strategy" name="strategy"><?php echo $stakeholder_mp[0]->strategy?></textarea>
        </div>
      </div>

      <div class="col-lg-12 form-group">
        <label for="scope"><?=$this->lang->line('scope')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('scope-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <div >                     
          <textarea class="form-control elasticteste" oninput="eylem(this, this.value)" id="scope" name="scope"><?php echo $stakeholder_mp[0]->scope?></textarea>
        </div>
      </div>

      <div class="col-lg-12 form-group">
        <label for="observation"><?=$this->lang->line('observation')?></label>
        <a class="btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="<?=$this->lang->line('observation-tp')?>"><i class="glyphicon glyphicon-comment"></i></a>
        <div >                     
          <textarea class="col-lg-6 form-control elasticteste" oninput="eylem(this, this.value)" id="observation" name="observation"><?php echo $stakeholder_mp[0]->observation?></textarea>
        </div>
      </div>

      <div class="col-lg-12">
        <button id="new_human_resource-submit" type="submit" value="Save" class="btn btn-lg btn-success pull-right">
          <i class="glyphicon glyphicon-ok"></i> <?=$this->lang->line('btn-save')?>
        </button> 
      </form>

      <form action="<?php echo base_url()?>/Stakeholder_mp/list/<?=$stakeholder_mp[0]->project_id?>" >
        <button class="btn btn-lg btn-info pull-left" >  <i class="glyphicon glyphicon-chevron-left"></i> <?=$this->lang->line('btn-back')?></button>
      </form>

    </div>
  </div>

  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>

<script type="text/javascript">

  function changed(){
   var interest = document.getElementById('interest').value;
   var power = document.getElementById('power').value;
   var influence = document.getElementById('influence').value;
   var impact = document.getElementById('impact').value;
   var aux  = (((interest * 10) + (power * 10) + (influence * 10) + (impact * 10)) / 4) / 10;
   document.getElementById('average').value = parseFloat(aux.toFixed(2));
 }

</script>

<?php $this->load->view('frame/footer_view')?>
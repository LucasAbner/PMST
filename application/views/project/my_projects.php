<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Projects</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('success'); ?></strong>
        </div>
    <?php elseif ($this->session->flashdata('faildeleteproject')): ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('faildeleteproject'); ?></strong>
        </div>
    <?php elseif ($this->session->flashdata('error2')): ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('error2'); ?></strong>
        </div>
    <?php elseif ($this->session->flashdata('error3')): ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong><?php echo $this->session->flashdata('error3'); ?></strong>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <!-- Inicio dos meus projetos -->
            <div class="panel panel-default panel-table" >
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">  
                            <a type="button" href="<?= base_url("new/") ?>" class="btn btn-normal btn-info btn-create"><i class="glyphicon glyphicon-plus"></i> Create New Project</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body" style="background-color: #fff">
                    <table align="left" style="word-break: break-word;" class="table table-striped table-bordered table-list">
                        <thead>
                            <?php
                            //$arrayMerge = array_merge($convidado, $project); 
                            //$arrayFinal = array_unique($project, $convidado);                     
                            //print_r($arrayMerge); 
                            ?>
                            <tr> 
                                <th> Title</th>
                                <th>Created By</th>
                                <th><em class="fa fa-cog"></em> Actions</th>
                            </tr>
                            <?php foreach ($convidado as $pro) { ?>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?= $pro->title; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select('name');
                                        $this->db->where('user_id', $pro->created_by);
                                        $resultado = $this->db->get('user')->result();


                                        // Busca do user_id por email
                                        $this->db->where('email', $this->session->userdata('email'));
                                        $userdata = $this->db->get('user');
                                        foreach ($resultado2 = $userdata->result() as $row) {
                                            $id = $row->user_id;
                                            $name = $row->name;
                                        }
                                        $retorna = array(
                                            '$user_id' => $id
                                        );

                                        //Busca do id_project pelo nome do projeto
                                        $this->db->where('title', $pro->title);
                                        $prodata = $this->db->get('project');
                                        foreach ($resultado1 = $prodata->result() as $row) {
                                            $id = $row->project_id;
                                        }
                                        $return = array(
                                            'project_id' => $id
                                        );

                                        // Busca do access_level por project e pelo user
                                        $this->db->where('user_id', $retorna['$user_id']);
                                        $this->db->where('project_id', $return['project_id']);
                                        $resultados = $this->db->get('project_user')->result();
                                        $level = $resultados[0]->access_level;

                                        foreach ($resultado as $key => $row) {
                                            echo $row->name;
                                        }

                                        // Logica para liberar os camposasdas
                                        $disabled = "disabled";
                                        $view = "";
                                        $execute = "";
                                        $adm = "";
                                        if ($level == 0) {
                                            $view = $disabled;
                                            //echo $view;
                                        } elseif ($level == 1) {
                                            $execute = $disabled;
                                        } elseif ($level == 2) {
                                            $adm = "";
                                        }
                                        ?>
                                    </td>
                                    
                                    <td align="left">
                                        <!-- Modo novo dos botões -->
                                        <form action="<?= base_url("project/initial") ?>" method="post">
                                            <button name="openButton"  class="btn btn-default" value="<?= $pro->project_id ?>"><em class="fa fa-folder-open-o"></em><span class="hidden-xs"> Open</span></button>
                                        </form>

                                        <!-- Modo antigo do botão 
                                            <a href="<?= base_url("project/" . $pro->project_id) ?>" class="btn btn-default"><em class="fa fa-folder-open-o"></em><span class="hidden-xs"> Open</span></a>
                                        -->

                                        <a href="<?= base_url("edit/" . $pro->project_id) ?>" class="btn btn-default <?php echo $view . $execute; ?>"><em class="fa fa-pencil"></em><span class="hidden-xs"> Edit</span></a>

                                        <a href="<?= base_url("researcher/" . $pro->project_id) ?>" class="btn btn-default <?php echo $view . $execute; ?>"><em class="fa fa-users"></em><span class="hidden-xs"> Add Researcher</span></a>
                                        
                                        <a href="<?= base_url("delete/" . $pro->project_id) ?>" onclick="return confirm('Are you sure you want to delete <?= $pro->title; ?>?');" class="btn btn-danger <?php echo $view . $execute; ?>"><em class="fa fa-trash"></em><span class="hidden-xs"> Delete</span></a>
                                    </td>
                                </tr>
                            <?php } //print_r($teste)  ?>  
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Page 1 of 1
                        </div>
                        <div class="col col-xs-8">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim dos meus projetos -->
        </div>
    </div>
</div>
<!-- /.row -->
</div>
<?php
$this->load->view('frame/footer_view')?>
<?php echo $this->ui->breadcrumb(); ?>
<div id="content-wrapper">

    <?php if($this->uri->segment(4) == 'error'):
    
        $output = $this->ui->system_messages();
        
        if(! empty($output))
        {
            echo $output;
        }
        else
        {
            redirect($this->module->active_module.'/index/'.$this->module->active_service);
        }
    
    else: ?>
    
        <?php $this->load->view($this->module->active_module.'/descriptions/dsc_'.$this->module->active_service); ?>

        <?php echo $this->ui->system_messages(); ?>

        <?php $this->load->view('core/payment_module'); ?>
    
    <?php endif; ?>
    
</div>


<?php if($this->uri->segment(4) != 'error'): ?>

    <!-- Occupied servers list -->
    <div id="content-toplist" class="hide">

        <h4 class="heading"><?php echo $this->config->item($this->module->active_service, 'submenu_names'); ?></h4>

        <?php 

        // If there is param like toplist and that param is set to TRUE
        if(isset($this->module->services[$this->module->active_service]['toplist']) && $this->module->services[$this->module->active_service]['toplist'] == TRUE):


            $data['servers'] = $this->cwservers_model->get_occupied_servers();
            $this->load->view('top/top_servers', $data);


        endif;
        ?>

    </div>
    
<?php endif; ?>
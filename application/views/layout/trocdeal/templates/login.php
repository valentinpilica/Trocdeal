<?php
$this->load->view('layout/' . $this->config->item('default_theme_name') . '/include/header');
?>

<?php echo $output;?>    
                       
<?php
$this->load->view('layout/' . $this->config->item('default_theme_name') . '/include/footer');
?>
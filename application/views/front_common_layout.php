<!DOCTYPE html>
<html lang="en">
<base href="<?= base_url();?>">
<head>
    <!-- <link rel="icon" type="image/png" href="assets/images/spda.jpg" style="height: 100px; width: 100px;" />
       <?php //$this->load->view('front_include/meta');?> 
       -->
        
        <?php $this->load->view('template/header');?>
   

</head>

<body>
   
     <?php $this->load->view($content); ?> 

</body>
<?php $this->load->view('template/footer');?>
</html>
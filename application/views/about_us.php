<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rossaeq Properties</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/flat-ui/bootstrap/css/bootstrap-responsive.css">
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/flat-ui/images/favicon.ico">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/style.css">
        <!-- end -->

<style type="text/css">
  
  .header-10{
    background-color: white;
  }
</style>
    </head>

    <body>
      <header class="header-10">
          <div class="container">
              <div class="row">
                  <div class="navbar col-sm-12" role="navigation">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle"></button>
                          <a class="brand" href="#" style="color:black">Rossaeq</a>
                      </div>
                      <div class="collapse navbar-collapse pull-right">
                          <ul class="nav pull-left">
                            <li><a href="<?php echo base_url()?>" style="color:orange">Home</a></li>
                            <li><a href="<?php echo base_url()?>real_estate" style="color:black">Real estate</a></li>
                            <li><a href="<?php echo base_url() ?>maid_center" style="color:black">Maid center</a></li>
                          </ul>
                         
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <!--style="background-image: url(uploads/front_page/pic2.jpg)"-->
      <section class="header-10-sub v-center bg-midnight-blue" >
          <div class="background">&nbsp;</div>
    
      </section>
<?php $this->load->view('footer') ?>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/common-files/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/flat-ui/js/bootstrap.min.js"></script>







    </body>
</html>

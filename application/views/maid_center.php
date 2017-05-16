<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Maid Center</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
          <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/hipster_cards.css">

            <link rel="stylesheet" href="<?php echo base_url() ?>assets/flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/style.css">
        <!-- end -->



        <link rel="shortcut icon" href="<?php echo base_url()?>assets/flat-ui/images/favicon.ico">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/flat-ui/css/list_view.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/vendor/bootstrap/fonts/glyphicons-halflings-regular.woff" />

        <!-- Using only with Flat-UI (free)-->

        <!-- end
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/css/bootstrap.css">
    -->

<style type="text/css">
  
  .header-10{
    background-color: white;

  }
  .navbar-header  a{
    color: black;
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
                    <a class="brand" href="#" style="color:black">Maid Center</a>
                </div>
                <div class="collapse navbar-collapse pull-right">
                    <ul class="nav pull-left">
                      <li ><a href="<?php echo base_url()?>" style="color:black">Home</a></li>
                      <li><a href="<?php echo base_url()?>real_estate" style="color:black">Real Estate</a></li>
                      <li><a href="<?php echo base_url() ?>maid_center" style="color:orange">Maid Center</a></li>
                    </ul>
                    <form class="navbar-form pull-left">
                        <a class="btn btn-info" href="#">Contact Us</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="">
  <br>
<div class="container">
<div class="row">

<!-- Collection of maid images to be clicked -->

<style media="screen">
  .maid_view {
    background-color: grey;
  }
</style>
    <?php if (isset($maids) && isset($maids) !=null): ?>
<?php foreach ($maids as $maid): ?>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
          <div class="maid_view">
            <a class="thumbnail" href="<?php echo base_url() ?>maid_center_controller/hire_maid/<?php echo $maid->m_id ?>">
                <img class="img-responsive" src="<?php echo base_url()?>uploads/<?php echo $maid->image_url_path ?>" alt="">
            </a>
            <a class="btn btn-success" href="<?php echo base_url() ?>maid_center_controller/hire_maid/<?php echo $maid->m_id ?>"  name="button">Hire</a>
            </div>
        </div>
<?php endforeach; ?>

<?php endif; ?>

          </div>

    </div>


</div>
</section>
<section>
    <?php $this->load->view('footer') ?>
</section>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/common-files/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/flat-ui/js/bootstrap.min.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rossaeq</title>
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


    </head>

<body>
  <header class="header-10">
<div class="container">
    <div class="row">
        <div class="navbar col-sm-12" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle"></button>
                <a class="brand" href="#">Rossaeq</a>
            </div>
            <div class="collapse navbar-collapse pull-right">
                <ul class="nav pull-left">
                  <li><a href="<?php echo base_url()?>">home</a></li>
                  <li><a href="<?php echo base_url()?>real_estate">real estate</a></li>
                  <li><a href="<?php echo base_url() ?>maid_center">maid center</a></li>
                </ul>
                <form class="navbar-form pull-left">
                    <a class="btn btn-info" href="#">Contact Us</a>
                </form>
            </div>
        </div>
    </div>
</div>
</header>

<div class="wrapper">
    <div class="container">
<br>
        <div class="row search">
          <div class="col-sm-8 col-sm-offset-4">
            <form role="form" action="real_estate" method="POST">
                    <div class="input-group">
                      <input  type="text" class="form-control input-lg" name="search_term">
                      <span class="input-group-btn">

                      </span>
                         &nbsp;<button type="submit" class="btn btn-primary">Search <span class="glyphicon glyphicon-search"></span></button>



                    </div>
            </form>

          </div>
        </div>
        <br>

    <div class="row">

<?php if (isset($results)): ?>
  <div class="alert alert-info" role="alert">
<strong><h4>Results for :</strong> <?php echo isset($results) ? $termToSearch : "enter a location to find properties." ?></h4>
</div>
<?php endif; ?>

<?php if (isset($results) && isset($results) !=null): ?>

  <table class="table table-striped table-hover table-users">
    <thead>
      <tr>

        <th class="hidden-phone"><h3>Location</h3></th>
        <th><h3>Price</h3></th>
        <th><h3>Bedrooms</h3></th>
        <th class=""><h3>Description</h3></th>


        <th></th>
        <th></th>
      </tr>
    </thead>
  <tbody>
 <?php foreach ($results as $result): ?>
               <tr>
                 <td class="hidden-phone"><?php echo $result->location ?></td>
                 <td><?php echo $result->price ?></td>
                 <td></td>
                 <td class="hidden-phone"><?php echo $result->description ?></td>
                 <td><a class="btn btn-success mini blue-stripe" href="<?php echo base_url()?>Real_estate_Controller/find/<?php echo $result->id?>">View Now</a></td>

                <td><a href="#" class="confirm-delete btn mini red-stripe" role="button" data-title="johnny" data-id="1">Delete</a></td>
                       </tr>
   <?php endforeach;?>


                    </tbody>

           </table>

      <?php else: ?>
<div class="row">


  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">QUICK RENT</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">PLOTS</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Open</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
    <div class="card-block">
      <h3 class="card-title">FOR SALE</h3>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Open</a>
    </div>
  </div>
  </div>
  </div>

    <?php endif; ?>

    </div>
            </div>
        </div>
    </div>
</div>



        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/common-files/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/flat-ui/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/flat-ui/js/bootstrap-table.js"></script>
<?php $this->load->view('footer') ?>

    </body>
</html>

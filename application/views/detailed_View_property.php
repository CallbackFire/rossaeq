<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Search Results</title>
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
                    <a class="brand" href="#">Rossaeq Properties</a>
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

<section class="detailed_view">
    <div class="background">&nbsp;</div>
    <div class="container">
        <div class="row">
            <br>
<div class="col-sm-6">
    <?php if (isset($results) && isset($results) !=null): ?>
      <?php foreach ($results as $result): ?>
        <?php $dir_name =  $result->photo_dir; ?>

        <?php $description = $result->description ?>
      <?php endforeach; ?>

      <div class="row">
        <?php if ($dir_name != ""): ?>
        <?php $map = directory_map('uploads/'.$dir_name) ?>
        <?php foreach ($map as $image_name): ?>
          <div class="col-md-5">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="<?php echo base_url() ?>uploads/<?php echo $dir_name ?>/<?php echo $image_name ?>" alt="image" />

              </div>
              <div class="caption">
                <p>Snow and Ice Incoming for the South</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        <?php else: ?>
            <h3>Images not available</h3>
        <?php endif; ?>

      </div>

</div>

<div class="col-sm-6">
  <h4><?php echo $description ?></h4>

</div>


<?php endif; ?>

        </div>
    </div>
</section>

<?php $this->load->view('footer') ?>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/common-files/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/flat-ui/js/bootstrap.min.js"></script>

        <script type="text/javascript">



        //Code for list and grid view

        $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
//end code for list and grid view
            var $table = $('#fresh-table'),
                $alertBtn = $('#alertBtn'),
                full_screen = false;

            $(document).ready(function(){
                $table.bootstrapTable({
                    toolbar: ".toolbar",

                    showRefresh: true,
                    search: true,
                    showToggle: true,
                    showColumns: true,
                    pagination: true,
                    striped: false,
                    pageSize: 8,
                    pageList: [8,10,25,50,100],

                    formatShowingRows: function(pageFrom, pageTo, totalRows){
                        //do nothing here, we don't want to show the text "showing x of y from..."
                    },
                    formatRecordsPerPage: function(pageNumber){
                        return pageNumber + " rows visible";
                    },
                    icons: {
                        refresh: 'fa fa-refresh',
                        toggle: 'fa fa-th-list',
                        columns: 'fa fa-columns',
                        detailOpen: 'fa fa-plus-circle',
                        detailClose: 'fa fa-minus-circle'
                    }
                });



                $(window).resize(function () {
                    $table.bootstrapTable('resetView');
                });


                window.operateEvents = {
                    'click .like': function (e, value, row, index) {
                        alert('You click like icon, row: ' + JSON.stringify(row));
                        console.log(value, row, index);
                    },
                    'click .edit': function (e, value, row, index) {
                        alert('You click edit icon, row: ' + JSON.stringify(row));
                        console.log(value, row, index);
                    },
                    'click .remove': function (e, value, row, index) {
                        $table.bootstrapTable('remove', {
                            field: 'id',
                            values: [row.id]
                        });

                    }
                };

                $alertBtn.click(function () {
                    alert("You pressed on Alert");
                });

            });


            function operateFormatter(value, row, index) {
                return [
                    '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                        '<i class="fa fa-heart"></i>',
                    '</a>',
                    '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                        '<i class="fa fa-edit"></i>',
                    '</a>',
                    '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                        '<i class="fa fa-remove"></i>',
                    '</a>'
                ].join('');
            }


        </script>








    </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
        <?php include 'includes/welcome_profile.php' ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
        <?php include 'includes/sidebar.php'; ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
        <?php include 'includes/sidebar_menu_footer_button.php'; ?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include 'includes/top_nav.php'; ?>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Leave Application <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="" method="POST" novalidate>
                       <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_reason">Applicant Name</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h4>Mehedi Hasan</h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_reason">Department Name</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h4>Help Desk</h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_reason">Form</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h4>12/12/2012</h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_reason">To</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h4>12/12/2012</h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_reason">Total</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h4>02 Day(s)</h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_reason">Reason for Leave</h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <h4>Sickness</h4>
                        </div>
                      </div>
                      <div class="item form-group">
                        <h4 class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_number">Note<span class="required">*</span>
                        </h4>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>                                          
                      <div class="ln_solid"></div>
                      <div class="col-md-6 col-md-offset-3 text-center">
                          <button class="btn btn-app btn-danger" type="reset" style="background: gray; color: white;"> <i class="fa fa-refresh"></i> Reset</button>
                          <button class="btn btn-app btn-success" type="submit" id="send" style="background: green; color: white;"><i class="fa fa-thumbs-up"></i>Approve</button>
                          <a class="btn btn-app" style="background: yellowgreen;color: white;"> <i class="fa fa-edit"></i> Edit </a>
                          <a class="btn btn-app" style="background: red;color: white;"> <i class="fa fa-trash"></i> Delete </a>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
              <?php include 'includes/footer.php';?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="vendors/validator/validator.js"></script>
    
    <!-- Date picker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->

  <!-- /Datepicker -->    
    <script>
      $(document).ready(function() {
        $('#fromdate').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script> 
     <script>
      $(document).ready(function() {
        $('#todate').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
  </body>
</html>
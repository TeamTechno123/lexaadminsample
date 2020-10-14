<!-- Header -->
<?php include 'include/header.php'; ?>



<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

    <?php include 'include/sidebar.php'; ?>
      
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4>Package</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">profile</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Create profile</a></li>
                                        <li class="breadcrumb-item active">Form</li>
                                    </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Package</h4>
                                  
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Package Name</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="package_name" value="" placeholder="Package Name" id="package_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Package Amount</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="package_amount" value="" placeholder="Package Amount" id="package_amount">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Package Description</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="package_description" value="" placeholder="Package Description" id="package_description">
                                        </div>
                                    </div>

                                   <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Contact Profile</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="contact_profile" value="" placeholder="Contact Profile" id="contact_profile">
                                        </div>
                                    </div> 
                                 <div class="row">
                                    <div class="col-md-8 text-center">
                                      <button type="button" class="btn btn-dark waves-effect waves-light">Save Package</button>
                                    </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                   
                    <!-- Footer -->
                   <?php include 'include/footer.php'; ?>
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->
             
        
            
</body>

</html>
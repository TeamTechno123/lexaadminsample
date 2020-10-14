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
                                <h4>Credit contacts</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">profile</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Credit contacts</a></li>
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

                                    <h4 class="card-title">Credit Contacts</h4>
                                   <!--  <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>-->
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Id</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="profile_id" value="" placeholder="Profile Id" id="profile_id">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select Status</label>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option>Select Status</option>  
                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Amount</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="amount" value="" placeholder="Amount" id="amount">
                                        </div>
                                    </div>

                                     <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Credits</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="credits" value="" placeholder="Credits" id="credits">
                                        </div>
                                    </div>

                                    
                                

                                  <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Payment Id</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" name="payment_id" value="" placeholder="Payment Id" id="payment_id">
                                        </div>
                                    </div>


                                     <div class="row">
                                    <div class="col-md-8 text-center">
                                      <button type="button" class="btn btn-dark waves-effect waves-light">Create Profile</button>
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
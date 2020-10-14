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
     <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                    <h4 class="card-title">Pending Enquiries</h4>
                     <table  id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>123456</td>
                                                <td>John Doe</td>
                                                <td>9876543210</td>
                                                <td>Hello John</td>
                                                <td>2011/04/25</td>
                                                <td>Edit Delete</td>
                                            </tr>

                                            <tr>
                                                <td>123456</td>
                                                <td>John Doe</td>
                                                <td>9876543210</td>
                                                <td>Hello John</td>
                                                <td>2011/04/25</td>
                                                <td>Edit Delete</td>
                                            </tr>

                                            <tr>
                                                <td>123456</td>
                                                <td>John Doe</td>
                                                <td>9876543210</td>
                                                <td>Hello John</td>
                                                <td>2011/04/25</td>
                                                <td>Edit Delete</td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>

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
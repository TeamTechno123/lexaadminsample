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
                                <h4>Edit profile</h4>
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
                                    <h4 class="card-title">Basic Information</h4>
                                   <!--  <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>-->
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="name" value="" placeholder="Full Name" id="name">
                                        </div>

                                        <label class="col-sm-2 col-form-label pl-5">Gender</label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Gender</option>  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">DOB</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="date" name="dob" value="" placeholder="DOB" id="dob">
                                        </div>

                                        <label class="col-sm-2 col-form-label pl-5">Marital Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Marital Status</option>  
                                            </select>
                                        </div>
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Children </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Children </option>  
                                            </select>
                                        </div>

                                        <label class="col-sm-2 col-form-label pl-5">Living with</label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Living with</option>  
                                            </select>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>



                             <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Religion Information</h4>
                                   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Select Religion * </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Select Religion * </option>  
                                            </select>
                                        </div>

                                        <label class="col-sm-2 col-form-label pl-5">Select cast </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Select cast </option>  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Select Sub Cast </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Select Sub Cast </option>  
                                            </select>
                                        </div>

                                          <label class="col-sm-2 col-form-label pl-5">Zodiac sign (Rashi) </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Zodiac sign (Rashi) </option>  
                                            </select>
                                        </div>

                                       
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Mangalik </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Yes </option> 
                                                <option>No </option>  
                                            </select>
                                        </div>
  
                                    </div>

                                    
                                </div>
                            </div>

                            <!-- end Card -->






                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Contact Information</h4>
                                   <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Mobile number</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="mobile" value="" placeholder="Mobile number" id="mobile">
                                        </div>

                                        <label for="example-text-input" class="col-sm-2 col-form-label pl-5">Alt Mobile number</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="alt_mobile" value="" placeholder="Alt Mobile number" id="alt_mobile">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">What's Up number</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="whats_no" value="" placeholder="What's Up number" id="whats_no">
                                        </div>

                                        <label for="example-text-input" class="col-sm-2 col-form-label pl-5">Email (optional)</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="email" name="email" value="" placeholder="Email (optional)" id="email">
                                        </div>
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Select district  </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Select district  </option>  
                                            </select>
                                        </div>

                                         <label for="example-text-input" class="col-sm-2 col-form-label">Working location</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="work_location" value="" placeholder="Working location" id="work_location">
                                        </div>
                                       
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Address</label>
                                       <textarea id="textarea" class="form-control col-sm-10" maxlength="225" rows="3" placeholder="Address"></textarea>

                                                                              
                                    </div>


                                    
                                </div>
                            </div>

                            <!-- end Card -->


                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Personal Details</h4>
                                   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Select Education * </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Select Education * </option>  
                                            </select>
                                        </div>

                                        <label class="col-sm-2 col-form-label pl-5">Select Occupation </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Select Occupation </option>  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Annual income (Rs.) </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Annual income (Rs.) </option>  
                                            </select>
                                        </div>

                                          <label class="col-sm-2 col-form-label pl-5">Height  </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Height  </option>  
                                            </select>
                                        </div>

                                       
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Weight  </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Weight  </option> 
                                                <option>No </option>  
                                            </select>
                                        </div>


                                          <label class="col-sm-2 col-form-label pl-5">Blood Group (optional)  </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Blood Group (optional)  </option>  
                                            </select>
                                        </div>
  
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Complexion   </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Complexion   </option>                                               
                                            </select>
                                        </div>
                                        
                                          <label class="col-sm-2 col-form-label pl-5">Body Type  </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Body Type  </option>  
                                            </select>
                                        </div>
  
                                    </div>


                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Diet   </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Diet   </option>                                               
                                            </select>
                                        </div>
                                        
                                          <label class="col-sm-2 col-form-label pl-5">hysicaly challenged ( Handicapped )  </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>hysicaly challenged ( Handicapped )  </option>  
                                            </select>
                                        </div>
  
                                    </div>

                                      <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Smoking   </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Smoking   </option>                                               
                                            </select>
                                        </div>
                                        
                                          <label class="col-sm-2 col-form-label pl-5">Drinking </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option>Drinking </option>  
                                            </select>
                                        </div>
  
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Want to do intercast marriage?   </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option> Yes </option>
                                                <option> No </option> 
                                            </select>
                                        </div>
                                        
                                          <label class="col-sm-2 col-form-label pl-5">Want / want to be ghar jamai ? </label>
                                        <div class="col-sm-4">
                                            <select class="form-control">
                                                <option> Yes </option>
                                                <option> No </option> 
                                            </select>
                                        </div>
  
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Write short About you , your family (optional)</label>
                                       <textarea id="textarea" class="form-control col-sm-10" maxlength="225" rows="3" placeholder="About Your Family"></textarea>                                      
                                    </div>

                                      <div class="form-group row">
                                        <label class="col-sm-2 col-form-label ">Expectations from life partner(optional)</label>
                                       <textarea id="textarea" class="form-control col-sm-10" maxlength="225" rows="3" placeholder="Expectations"></textarea>                                      
                                    </div>

                                    
                                </div>
                            </div>

                            <!-- end Card -->


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
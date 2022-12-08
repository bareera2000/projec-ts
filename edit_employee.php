<?php
include('../config.php');

$admin=new Admin();
// if(!isset($_SESSION['pid']))
// echo "<script>window.location='../../index.html';</script>";
?>
<!DOCTYPE html>
<html lang="en">

<?php 
include('header.html');
?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php 
include('sidebar.php');        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include('nav.php');
            ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                     <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <!-- <h6 class="mb-4">Horizontal Form</h6> -->
                             <?php 
                              $id=$_GET['eid'];
                                    $stmt2=$admin->ret("SELECT * FROM `employee` WHERE id='".$id."'");
                                    while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
                                    {
                                     ?>
                            <form action="../controller/edit_employee.php" method="POST">
     
                                
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
<input type="hidden" name="id"  value="<?php  echo $row2['id'];?>" class="form-control" id="inputEmail3" >
<input type="text" name="name"  value="<?php  echo $row2['name'];?>" class="form-control" id="inputEmail3" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Designtion &nbsp</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="designation">       
                                    
                        <option value="<?php echo $row2['designation'];?>"><?php echo $row2['designation'];?></option>
                     
                        </select>
                                    </div>
                                </div>


                                 <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Speciality &nbsp</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="speciality">       
                                    
    <option value="<?php echo $row2['speciality'];?>"><?php echo $row2['speciality'];?></option>
                     
                        </select>
                                    </div>
                                </div>


                              
                                <div class="row mb-3">  
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="<?php  echo $row2['email'];?>" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" value="<?php  echo $row2['password'];?>" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
       <?php }?> 
                                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                             </form>
                          
                        </div>
                    </div>     
                     </div></div>             <!--  -->
            <!-- Form End -->

</div></div>
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
include('../config.php');
//include('header.html');



$admin=new Admin();
// if(!isset($_SESSION['aid']))
// echo "<script>window.location='../index.html';</script>";
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
            include('sidebar.php');
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           <?php include('nav.php');?>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Si.No</th>
                                            <th scope="col">Speciality</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <?php 
                                    $stmt=$admin->ret("SELECT * FROM `speciality` where speciality<>'select one'");
                                    $count=1;
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $count++ ?></th>
                                            <td><?php echo $row['speciality']; ?></td>
    <td><a href="edit_speciality.php?sid=<?php echo $row['id']?>">
    <button type="button" class="btn btn-success">edit</button></a></td>
    
    <td> <a href="../controller/delete_speciality.php?sid=<?php echo $row['id'];?>"> <button type="button" class="btn btn-danger">delete</button></a></td>
                                                                                
                                        </tr>
                                       
                                    </tbody><?php } ?>
                                </table>
                                <a href="addspecialityform.php"> <button type="button" class="btn btn-primary">add</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
</div></div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">&nbsp &nbsp &nbsp &nbsp Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                             All Right Reserved <a href="https://htmlcodex.com">HTML Codex</a>
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
<?php include('../config/config.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/style.css">

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <h2>ADMIN</h2>
            </li>
            <li>
                <a href="index.php">Dashboard</a>
            </li>
            <li>
                <a href="#">Teacher</a>
            </li>
            <li>
                <a href="#">BTVN</a>
            </li>
            <li>
                <a href="#">Subject</a>
            </li>
            <li>
                <a href="#">BTVN</a>
            </li>
            <li>
                <a href="#">BTL</a>
            </li>
            <li>
                <a href="#">Result</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fas fa-bars"></i></a>
                            
                            <form class="d-flex">
                                <a href="" class="navbar-brand">HOME</a>
                                <a href="" class="navbar-brand">ACCOUNT</a>
                                <a href="" class="navbar-brand">LOGOUT</a>
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">idGV</th>
                                <th scope="col">nameGV</th>
                                <th scope="col">genderGV</th>
                                <th scope="col">emailGV</th>
                                <th scope="col">sdtGV</th>
                                <th scope="col">addressGV</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * from giaovien";
                                $res = mysqli_query($conn,$sql);
                                if($res == true){
                                    $row = mysqli_fetch_assoc($res);
                                    $idGV = $row['idGV'];
                                    $nameGV = $row['nameGV'];
                                    $genderGV = $row['genderGV'];
                                    $emailGV = $row['emailGV'];
                                    $sdtGV = $row['sdtGV'];
                                    $addressGV = $row['addressGV'];
                                }
                            ?>
                            <tr>
                               
                                <td><?php echo $idGV; ?></td>
                                <td><?php echo $nameGV; ?></td>
                                <td><?php echo $genderGV; ?></td>
                                <td><?php echo $emailGV; ?></td>
                                <td><?php echo $sdtGV; ?></td>
                                <td><?php echo $addressGV; ?></td>
                            </tr>
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</div>
<!-- /#wrapper -->
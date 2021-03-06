<title>DETAILS HOMEWORK</title>
<?php include('../config/config.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../css/details-btvn-admin.css">
<?php
if (isset($_GET['idMH'], $_GET['idBTVN'])) {
    $idMH = $_GET['idMH'];
    $idBTVN = $_GET['idBTVN'];
    $sql1 = "SELECT * FROM monhoc where idMH = $idMH";
    $res1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($res1);
    $nameMH = $row1['nameMH'];

    $sql2 = "SELECT * FROM btvn where idBTVN= '$idBTVN'";
    $res2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($res2);
    $nameBTVN = $row2['nameBTVN'];
    $openedBTVN = $row2['openedBTVN'];
    $deadlineBTVN = $row2['deadlineBTVN'];
    $note = $row2['note'];
}
?>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <h2>ADMIN</h2>
            </li>
            <li>
                <a href="index.php"><i class="fas fa-chart-line"></i> Dashboard</a>
            </li>
            <li>
                <a href="teacher.php"><i class="fas fa-chalkboard-teacher"></i> Teacher</a>
            </li>
            <li>
                <a href="student.php"><i class="fas fa-user-graduate"></i> Student</a>
            </li>
            <li>
                <a href="subject.php"><i class="fas fa-book"></i> Subject</a>
            </li>
            <li>
                <a href=".teach.php"><i class="fas fa-school"></i> Teach</a>
            </li>
            <li>
                <a href="btvn.php"><i class="fas fa-book-reader"></i> BTVN</a>
            </li>
            <li>
                <a href="listbtvn.php"><i class="fas fa-list"></i> List BTVN</a>
            </li>
            <li>
                <a href="btl.php"><i class="fas fa-users"></i> BTL</a>
            </li>
            <li>
                <a href="listbtl.php"><i class="fas fa-list"></i> List BTL</a>
            </li>

            <li>
                <a href="result.php"><i class="fas fa-poll"></i> Result</a>
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
                    <div class="container">
                        <br>
                        <div class="tittle-mh">
                            <h2><?php echo $nameMH ?></h2>
                        </div>

                        <div class="title-btvn">
                            <div class="name-btvn">
                                <h6><?php echo $nameBTVN ?></h6>
                                <p><span style="font-weight: 500;">Opened: </span><?php echo $openedBTVN ?></p>
                                <p style="border-bottom: 1px solid;"><span style="font-weight: 500;">Deadline: </span><?php echo $deadlineBTVN ?></p>
                                <p class="note"><?php echo $note ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p class="ftr text-center">
                QTV - Do your best, the rest will come!
            </p>
        </footer>
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
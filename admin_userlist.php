<?php

    include('config.php');
    session_start();
    $email = "";
    $name = "";
    $errors = array();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $select = mysqli_query($koneksi, "SELECT * FROM user_form WHERE id='$id'") or die(mysqli_error($koneksi));
        if(mysqli_num_rows($select) == 0){
            echo '<script>alert("Id tidak ditemukan dalam database."); document.location="admin_userlist.php";</script>';
            exit();
        }
        else{
            $data = mysqli_fetch_assoc($select);
        }
    };

    if(isset($_POST['edit'])){
        $name = mysqli_real_escape_string($koneksi, $_POST['name']);
        $email = mysqli_real_escape_string($koneksi, $_POST['email']);
        $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
    
        $sql = mysqli_query($koneksi, "UPDATE user_form SET name='$name', email='$email', password='$pass' WHERE id='$id'") or die(mysqli_error($koneksi));
        if($sql){
            echo '<script>alert("Berhasil mengubah data."); document.location="admin_userlist.php";</script>';
        }
        else{
            echo '<script>alert("Gagal mengubah data."); document.location="admin_userlist.php";</script>';
        }
    };

    if(isset($_POST['delete'])){
        $cek = mysqli_query($koneksi, "SELECT * FROM user_form WHERE id='$id'") or die(mysqli_error($koneksi));

        if(mysqli_num_rows($cek) > 0){
            $del = mysqli_query($koneksi, "DELETE FROM user_form WHERE id='$id'") or die(mysqli_error($koneksi));
            if($del){
                echo '<script>alert("Berhasil menghapus data."); document.location="admin_userlist.php";</script>';
            }else{
                echo '<script>alert("Gagal menghapus data."); document.location="admin_userlist.php";</script>';
            }
        }else{
            echo '<script>alert("ID tidak ditemukan di database."); document.location="admin_userlist.php";</script>';
        }
    }

    if(!isset($_SESSION['admin_name'])){
        header('location:login.php');
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Userlist - Berkibar</title>
</head>
<body>
    <div class="wrapper">

        <!--navbar starts -->
        <nav class="navbar navbar-expand-lg navbar-light bg-custom text-white px-4">
            <div class="container-fluid d-flex justify-content-beetween">
                <div class="logo">
                    <h1 class="text-uppercase mb-0">Berkibar</h1>
                    <span>Bersama Kita Belajar</span>
                </div>
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/profile-pic.png" class="profile-img" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><?php echo($_SESSION["admin_name"]) ?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php">Log-Out</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">-Segera-</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--navbar ends -->

        <main class="d-flex">
            <!-- Sidebar starts -->
            <div class="sidebar-container collapse" id="sidebar-container">
                <div class="sidebar-heading text-center text-uppercase">
                    <div class="list-group list-group-flush text-start">
                        <a href="admin.php" class="list-group-item list-group-item-action">
                            <i class="bi bi-house-door-fill"></i> Dashboard
                        </a>
                        <a href="admin_userlist.php" class="list-group-item list-group-item-action active">
                            <i class="bi bi-person-lines-fill"></i> User List
                        </a>
                        <hr>
                        <a href="logout.php" class="list-group-item list-group-item-action text-danger">
                            <i class="bi bi-person-x-fill"></i> Log-Out
                        </a>
                    </div>
                </div>
            </div>
            <!-- Sidebar ends-->
    
            <!-- page content starts -->
            <div class="page-content-container">
                <div class="container-fluid px-4">
                    <div class="row left py-3">
                        <div class="col head-page d-flex mb-3">
                            <button class="navbar-toggler p-0" id="sidebar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-container" aria-controls="sidebar-container">
                                <i class="bi bi-list"></i>
                            </button>
                            <h3 class="fs-4 fw-bold mb-0 px-2">User List</h3>
                        </div>
                    </div>

                    <div class="row content-right pb-5">
                        <div class="col table-responsive">
                            <table id="userlist" class="table rounded shadow-sm table-hover">
                                <thead class="align-middle">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Password</th>
                                        <th>User Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($koneksi, "SELECT * FROM user_form ORDER BY id DESC") or die(mysqli_error($koneksi));
                                    if(mysqli_num_rows($sql) > 0){
                                        $no = 1;
                                        while($data = mysqli_fetch_assoc($sql)){
                                            echo '
                                            <tr>
                                                <td>'.$no.'</td>
                                                <td>'.$data['name'].'</td>
                                                <td>'.$data['email'].'</td>
                                                <td>'.$data['password'].'</td>
                                                <td>'.$data['user_type'].'</td>
                                                <td>'.$data['status'].'</td>
                                                <td>
                                                    <button onclick="editdata('.$data['id'].')" type="button" class="btn btn-secondary btn-sm" 
                                                        data-bs-toggle="modal" data-bs-target="#edituserdata">Edit
                                                    </button>
                                                    <button onclick="editdata('.$data['id'].')" type="button" class="btn btn-danger btn-sm" 
                                                        data-bs-toggle="modal" data-bs-target="#deletedata">Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            ';
                                            $no++;
                                        }
                                    }
                                    else{
                                        echo'
                                        <tr>
                                            <td colspan="6">Tidak ada data.</td>
                                        </tr>
                                        ';
                                    }
                                    ?>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page content ends -->
        </main>

        <!-- Modal starts -->
        <div class="modal fade" id="edituserdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edituserdataLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edituserdataLabel">Edit User Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" autocomplete="" class="edit-form">
                            <div class="input-div">
                                <div class="i">
                                    <i class='bx bxs-user'></i>
                                </div> 
                                <div class="div">
                                    <h5>Full Name</h5>
                                    <input type="text" name="name" required placeholder="" class="input">
                                </div>
                            </div>
                            <div class="input-div">
                                <div class="i">
                                    <i class='bx bx-envelope' ></i>
                                </div> 
                                <div class="div">
                                    <h5>Email</h5>
                                    <input type="email" name="email" required placeholder="" class="input">
                                </div>
                            </div>
                            <div class="input-div">
                                <div class="i">
                                    <i class='bx bxs-lock' ></i>
                                </div> 
                                <div class="div">
                                    <h5>Password</h5>
                                    <input type="password" name="password" required placeholder="" class="input">
                                </div>
                            </div>
                            <input type="submit" name="edit" value="Save Changes" class="form-btn"> 
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal ends -->

        <!-- Modal -->
        <div class="modal fade" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="deletedataLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletedataLabel">Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin menghapus data yang anda pilih?
                </div>
                <div class="modal-footer">
                    <form action="" method="post" autocomplete="" class="delete-form">
                        <input type="submit" name="delete" value="Delete Data" class="btn btn-danger"> 
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal ends -->
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        //data tables
        $(document).ready(function(){
            $('#userlist').dataTable();
        });
        //end data tables

        //input form
        const inputs = document.querySelectorAll(".input");

        inputs.forEach(input => {
            input.addEventListener("focus", function (){
                let parent = this.parentNode.parentNode;
                parent.classList.add("focus");
            });
            
            input.addEventListener("blur", function (){
                let parent = this.parentNode.parentNode;
                if(this.value == ""){
                    parent.classList.remove("focus");
                }
            });
        });
        //end input form

        //media query
        function mediaquery(media) {
            if (media.matches) {
                $("#sidebar-container").addClass("hide");
                $("#sidebar-container").removeClass("show");
                $("#sidebar-toggler").removeAttr("aria-expanded");
                $("#sidebar-toggler").attr("aria-expanded", "false");
            } else {
                $("#sidebar-container").addClass("show");
                $("#sidebar-container").removeClass("hide");
                $("#sidebar-toggler").removeAttr("aria-expanded");
                $("#sidebar-toggler").attr("aria-expanded", "true");
            }
        }

        const media = window.matchMedia("(max-width: 1080px)")
        mediaquery(media)
        media.addListener(mediaquery)
        // end media query

        function editdata(index){
            history.pushState({id : index}, '', "admin_userlist.php?id=" + index);
        }



    </script>


</body>
</html>

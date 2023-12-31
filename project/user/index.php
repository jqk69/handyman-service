<?php
session_start();
if(isset($_SESSION['user']))
{
    
}
else
{
header("Location:../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style1.css" />
    <title>Welcome user</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-solid fa-hammer me-2"></i>Handyman.com</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-solid fa-user me-2"></i>Change info
                </a>
                <a href="../about.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-solid fa-question me-2"></i>&nbsp;About us
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-solid fa-power-off me-2"></i>    Logout
                </a>
            </div>
        </div>
        <!-- Sidebar -->

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">User Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="../logout.php" name="logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3 hover-1">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded ">
                            <a href="plumber.php" >
                                <div >
                                <h3 class="fs-2">Plumber</h3>
                                <p class="fs-5">Click to see</p>
                                </div>
                            </a>    
                            <i class="fas fa-solid fa-faucet fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3 hover-1">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded ">
                            <a href="electrician.php" >
                                <div >
                                <h3 class="fs-2">Electrician</h3>
                                <p class="fs-5">Click to see</p>
                                </div>
                            </a> 
                            <i
                                class="fas fa-solid fa-screwdriver fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3 hover-1">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <a href="mechanic.php" >
                                <div >
                                <h3 class="fs-2">Mechanic</h3>
                                <p class="fs-5">Click to see</p>
                                </div>
                            </a> 
                            <i class="fas fa-solid fa-car fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3 hover-1">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <a href="carpenter.php" >
                                <div >
                                <h3 class="fs-2">Carpenter</h3>
                                <p class="fs-5">Click to see</p>
                                </div>
                            </a> 
                            <i class="fas fa-solid fa-chair fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Results</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>contact</th>
                                    <th>Wage</th>
                                    <th>Image</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
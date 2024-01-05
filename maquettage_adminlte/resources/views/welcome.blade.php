
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquette Prototype</title>
    <!-- Google Font: Source Sans Pro -->
<!-- AdminLTE Styles -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- head -->
</head>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- nav -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- aside -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <i class="fas fa-project-diagram brand-icon"></i>
                <span class="brand-text font-weight-light text-center">Projects Management</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="./index.html" class="nav-link ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Projects
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="././tache/index.html" class="nav-link ">
                                <i class="fas fa-users pl-1 pr-1"></i>
                                <p>
                                    Tasks
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../member/index.html" class="nav-link ">
                                <i class="fas fa-users pl-1 pr-1"></i>
                                <p>
                                    Members
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



        <div class="content-wrapper" style="min-height: 1302.4px;">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>List of projects</h1>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="./ajouter.html" class="btn btnAdd">Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header col-md-12">
                                    <div class=" p-0">
                                        <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                            <input type="text" name="table_search" class="form-control float-right"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Projet 1</td>
                                                <td>
                                                    Description de projet 1.
                                                </td>
                                                <td>11-7-2014</td>
                                                <td>11-7-2014</td>
                                                <td>
                                                    <a href="./edit.html" class="btn btn-sm btn-default"><i
                                                            class="fas fa-edit"></i></a> <!-- Changed the icon class to "fas fa-edit" -->
                                                    <a href="././tache/index.html"
                                                        class="btn btn-sm btn-default mx-2">View Tasks</a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Projet 2</td>
                                                <td>
                                                    Description de projet 2.
                                                </td>
                                                <td>11-7-2014</td>
                                                <td>11-7-2014</td>
                                                <td>
                                                    <a href="./edit.html" class="btn btn-sm btn-default"><i
                                                            class="fas fa-edit"></i></a> <!-- Changed the icon class to "fas fa-edit" -->
                                                    <a href="././tache/index.html"
                                                        class="btn btn-sm btn-default mx-2">View Tasks</a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Projet 3</td>
                                                <td>
                                                    Description de projet 3.
                                                </td>
                                                <td>11-7-2014</td>
                                                <td>11-7-2014</td>
                                                <td>
                                                    <a href="./edit.html" class="btn btn-sm btn-default"><i
                                                            class="fas fa-edit"></i></a> <!-- Changed the icon class to "fas fa-edit" -->
                                                    <a href="././tache/index.html"
                                                        class="btn btn-sm btn-default mx-2">View Tasks</a>
                                                    <button type="button" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <button type="button" class="btn  btn-default btn-sm">
                                            <i class="fas fa-file-arrow-down"></i>
                                            IMPORT</button>
                                        <button type="button" class="btn  btn-default btn-sm mt-0 mx-2">
                                            <i class="fas fa-file-export"></i>
                                            EXPORT</button>
                                    </div>
                                    <div class="mr-5">
                                        <ul class="pagination  m-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

       




        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright © 2014-2021 <a href="https://adminlte.io">Projects Managment</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <!-- scripts -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

</body>

</html>
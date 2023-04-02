<!-- Top Navigation -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="responsive-logo">
            <a href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <span class="ti-menu" id="sidebarCollapse"></span>
            </li>
            <li class="nav-item">
                <span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
            </li>
                                
            <li class="nav-item">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="ti-user"></span>
                </a>
                <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                    <h5><?php  echo $_SESSION['name']; ?></h5>
                    
                    <a class="dropdown-item" href="logout.php">
                        <span class="ti-power-off"></span> Logout</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
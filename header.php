<header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                           
                            <li><a href="?page=1">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth dropdown">
                       
                        <?php if(isset($_SESSION["id"])){?>
                            <a href="#"><?php echo $_SESSION["username"];?></a>
                                <div class="dropdown-content" style="right:0;">
                                    <a href="?page=4">Meu Perfil</a>
                                    <a href="?page=3">Meus Produtos</a>
                                    <a href="?page=2">Adicionar Produtos</a>
                                    <?php
                                    if($_SESSION["tipo"] == "Admin"){?>
                                        <a href="admin/index.php">Dashboard</a>
                                        <?php } ?>
                                    <a href="admin/logout.php">Logout</a>
                                    
                                </div>
                            
                           
                                <?php
                            
                        
                        } else {?>

                            <a href="admin/login.php">Login</a>
                            <a href="admin/login.php">Register</a>

                            <?php } ?>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
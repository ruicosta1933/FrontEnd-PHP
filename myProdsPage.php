<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>My Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                    <?php 
                        $sql_frase=$mysqli->query("SELECT * FROM produtos WHERE userid='" . $_SESSION["id"] . "'") or die ("Erro ao selecionar o home.");
                        if (mysqli_num_rows($sql_frase) < 1) {
                           ?>

                        <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="breadcrumb__links">
                                                 <span>Não tem Produtos !</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                           
                           
                           <?php
                    }
                                while($row = $sql_frase->fetch_assoc()){
                                   
                                ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product__item">
                                            
                                                <div class="product__item__pic set-bg" <?php echo 'data-setbg="data:'.$row['imageType'].';base64,'.base64_encode($row['imageData']).'"' ;?>>
                                               
                                                    <ul class="product__hover">
                                                        <li><a href="img/shop/shop-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                        <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product__item__text">
                                                    <h6><a href="#"><?php echo $row["nome"];?></a></h6>
                                                    <div class="product__price"><?php echo $row["preco"];?> €</div>
                                                </div>
                                            </div>
                                        </div>
                        <?php 
                    } ?>
                    </div>
                </div>
            </div>
        </div>
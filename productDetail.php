

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Products </a>
                        <span>Product Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
            <?php 
                            $sql_frase=$mysqli->query("SELECT * FROM produtos WHERE ref='" . $_GET["prodid"] . "'") or die ("Erro ao selecionar o home.");
                            while($row = $sql_frase->fetch_assoc()){
                            ?>
                                
                <div class="col-lg-6"> 
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                        <?php
                            $sql_image=$mysqli->query("SELECT * FROM image WHERE prodRef='" . $row["ref"] . "'") or die ("Erro ao selecionar o home.");
                                                $count = mysqli_num_rows($sql_image);

                                                $value = floor($count/2);
                                                $md=12/$count;
                                                $dm = round($md);
                                                $i=0;
                                                while($image = $sql_image->fetch_assoc()){ $i++;?>
                            <a class="pt active" href="#product-<?php echo $i;?>">
                            <?php
                                                        echo '<img class="imagem" style="border-radius:10px;" src="data:'.$image['imageType'].';base64,'.base64_encode($image['imageData']).'"/></a>';
                                                 } ?>

                            
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                            <?php
                            $sql_image=$mysqli->query("SELECT * FROM image WHERE prodRef='" . $row["ref"] . "'") or die ("Erro ao selecionar o home.");
                                                $count = mysqli_num_rows($sql_image);

                                                $value = floor($count/2);
                                                $md=12/$count;
                                                $dm = round($md);
                                                $i=0;
                                                while($image = $sql_image->fetch_assoc()){ $i++;?>
                                <img data-hash="product-<?php echo $i;?>" class="product__big__img" <?php echo 'src="data:'.$image['imageType'].';base64,'.base64_encode($image['imageData']).'"'; ?> alt=""></a>
                               <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                   
                    <div class="product__details__text">
                        <h3><?php echo $row["nome"];?></span></h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div>
                        <div class="product__details__price"><?php echo $row["preco"];?> €</div>
                        <div class="product__details__button">
                            
                            <div class="quantity">
                            <span>Quantity: <?php echo $row["quantidade"];?></span>
                            <span>Country: <?php echo $row["pais"];?></span>
                            </div>
                            <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
                            <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <?php if($row["nota"] != NULL){?>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                           
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <h6>Description</h6>
                                <p><?php echo $row["nota"]; ?></p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <?php  }}?>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Instagram Begin -->
    <!-- Instagram End -->

    <!-- Footer Section Begin -->
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

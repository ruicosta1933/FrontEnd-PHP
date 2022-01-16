<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>All Products</h4>
                </div>
            </div>
        </div>
        <div class="row property__gallery"><?php
         $sql_frase=$mysqli->query("SELECT * FROM produtos") or die ("Erro ao selecionar o home.");
         if (mysqli_num_rows($sql_frase) > 1) {
        while($row = $sql_frase->fetch_assoc()){


$sql_image=$mysqli->query("SELECT * FROM image WHERE prodRef='" . $row["ref"] . "'") or die ("Erro ao selecionar o home.");
if($image = $sql_image->fetch_assoc()){

?>
    <div class="col-lg-4 col-md-6">
        <div class="product__item">
        
            <div class="product__item__pic set-bg" <?php echo 'data-setbg="data:'.$image['imageType'].';base64,'.base64_encode($image['imageData']).'"' ;?>>
           
                <ul class="product__hover">
                    <li><a href="<?php echo 'data:'.$image['imageType'].';base64,'.base64_encode($image['imageData']).''; ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a ><span class="icon_heart_alt"></span></a></li>
                    <li><a ><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#"><?php echo $row["nome"];?></a></h6>
                <div class="product__price"><?php echo $row["preco"];?> €</div>
            </div>
        </div>
    </div><?php }}} ?>
        </div>
    </div>
</section>
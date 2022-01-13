<?php 

if(isset($_GET["prodid"])){

    $sql = "DELETE FROM produtos WHERE ref='" . $_GET["prodid"] . "'";

     if ($mysqli->query($sql) === TRUE) {
        $sql = "DELETE FROM image WHERE prodRef='" . $_GET["prodid"] . "'";

        if ($mysqli->query($sql) === TRUE) {
            echo "<meta http-equiv=refresh content='0; url=index.php?page=3&message=8'>";exit;	
           } else {
               echo "<meta http-equiv=refresh content='0; url=index.php?page=3&message=7'>";exit;	
           }
        } else {
            echo "<meta http-equiv=refresh content='0; url=index.php?page=3&message=7'>";exit;	
        }

}

?>


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
                    }else {
                                while($row = $sql_frase->fetch_assoc()){


                                    $sql_image=$mysqli->query("SELECT * FROM image WHERE prodRef='" . $row["ref"] . "'") or die ("Erro ao selecionar o home.");
                                    if($image = $sql_image->fetch_assoc()){
                                   
                                ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product__item">
                                            
                                                <div class="product__item__pic set-bg" <?php echo 'data-setbg="data:'.$image['imageType'].';base64,'.base64_encode($image['imageData']).'"' ;?>>
                                               
                                                    <ul class="product__hover">
                                                        <li><a href="<?php echo 'data:'.$image['imageType'].';base64,'.base64_encode($image['imageData']).''; ?>" class="image-popup"><span class="arrow_expand"></span></a></li>
                                                        <li><a href="?page=4&prodid=<?php echo $row["id"]; ?>""><span class="icon_adjust-horiz"></span></a></li>
                                                        <li><a href="?page=3&prodid=<?php echo $row["ref"]; ?>"><button  data-toggle="tooltip" data-placement="top" title="Delete" style="background-color: transparent; border-color: transparent;" onclick="return confirm('Are you sure you want to Delete?');"><span class="icon_trash_alt"></span></button></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product__item__text">
                                                    <h6><a href="#"><?php echo $row["nome"];?></a></h6>
                                                    <div class="product__price"><?php echo $row["preco"];?> €</div>
                                                </div>
                                            </div>
                                        </div><?php }}}?>
            </div>
        </div>
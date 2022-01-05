<?php

    
 require("../admin/bd.php");
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $country = $_POST["country"];
    $price = $_POST["price"];
    $nota = $_POST["note"];
    $userid = $_POST["userid"];
    if (count($_FILES) > 0) {
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $imageData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
            $imageProperties = getimageSize($_FILES['file']['tmp_name']);
        }
        else {
            echo "<meta http-equiv=refresh content='0; url=index.php?page=2&message=7'>";exit;
        }
    }
    else {
        echo "<meta http-equiv=refresh content='0; url=register.php?page=2&message=10'>";exit;
    }


    $sql = "INSERT INTO produtos (nome, preco, quantidade, pais, nota, userid, imageType, imageData ) VALUES ('".$name."', '".$price."', '".$quantity."', '".$country."','".$nota."', '".$userid."', '".$imageProperties['mime']."', '".$imageData."')";
            
            if ($mysqli->query($sql) === TRUE) {
                echo "<meta http-equiv=refresh content='0; url=index.php?page=2&message=6'>";exit;	
            } else {
                echo "<meta http-equiv=refresh content='0; url=index.php?page=2&message=7'>";exit;	
            }
            
            $mysqli->close();

}

?>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Add Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <form action="addProdPage.php" enctype="multipart/form-data" method="post" class="checkout__form">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Product Detail</h5>
                        <div class="row">
                        <input type="hidden" name="userid" value="<?php echo $_SESSION["id"];?>">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Name <span>*</span></p>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Quantity <span>*</span></p>
                                    <input type="number" name="quantity" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Country <span>*</span></p>
                                    <input type="text" name="country" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                    <p>Price <span>*</span></p>
                                    <input type="number" name="price" step="0.01" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="checkout__form__input">
                                    <p>Image <span>*</span></p>
                                    <input type="file" name="file" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="checkout__form__input">
                                    <p>Nota:</p>
                                    <textarea style="height: 100%; width: 100%" rows="5" name="note"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Vender" name="submit"class="site-btn" style="float:right">
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

        <!-- Instagram Begin -->
        <!-- Instagram End -->

        <!-- Footer Section Begin -->
        <!-- Footer Section End -->
        <!-- Search End -->

    </body>

    </html>
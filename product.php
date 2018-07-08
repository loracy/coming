<?php 
	include ('header.php');
?>

<?php 
    $productItem = 'product-1';
    $name = array('高一等', '晶盈明亮口含錠', '滴丸', '強康', '松樹皮3', '蘑菇D2');
    $intro = '純天然植物提煉、紐西蘭進口';
    $productLength = count($name);
?>

<div class="container content pt-5 pb-5">
    <div class="row">
        <?php for ( $i=1 ; $i<=$productLength ; $i++ ){ ?>
        <div class="col-12 col-sm-5 mb-5 p-0 row bgWhite cardStyle productCard">
            <div id="cardDec"></div>
            <div class="col-12 col-sm-6 p-0 productCardLeft">
                <div class="productName d-flex d-sm-none">
                    <img src="./icons/coming.svg"/>
                    <h4><?php echo $name[$i-1] ?></h4>
                </div>
                <div class="productImage">
                    <img src="<?php echo "./assets/product-".$i.".png" ?>">
                </div>
            </div>
            <div class="col-12 col-sm-6 productCardRight">
                <div class="productName d-none d-sm-flex">
                    <h4><?php echo $name[$i-1] ?></h4>
                </div>
                <ul class="productList">
                    <li class="listItem">
                        <img class="mr-2" src="./icons/check.svg">
                        <p>純天然植物提煉</p>
                    </li>
                    <li class="listItem">
                        <img class="mr-2" src="./icons/check.svg">
                        <p>紐西蘭進口</p>
                    </li>
                    <li class="listItem">
                        <img class="mr-2" src="./icons/check.svg">
                        <p>營養製劑化</p>
                    </li>
                    <li class="listItem">
                        <img class="mr-2" src="./icons/check.svg">
                        <p>獲得多項世界專利</p>
                    </li>
                </ul>
            </div>
            <a class="btn btn-info" href="<?php echo "./detail.php?product=product-".$i."&name=".$name[$i-1]."&intro=".$intro ?>" role="button" aria-pressed="true">
                <p class="d-none d-sm-block">瞭解更多</p>
                <img src="./icons/arrow-right.svg"/>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
  </body>
</html>
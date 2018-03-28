<?php 
	include ('header.php');
?>

<div class="container content pt-3 pb-5">
<div class="row">
    <div class="col-12 col-sm-5 mb-5 p-0 row bgWhite cardStyle productCard">
        <?php 
            $productItem = 'product-1';
            $name = '永保康';
            $intro = '純天然植物提煉、紐西蘭進口';
        ?>    
        <div id="cardDec"></div>
        <div class="col-12 col-sm-6 p-0 productCardLeft">
            <div class="productName">
                <img src="./icons/coming.svg"/>
                <h4><?php echo $name ?></h4>
            </div>
            <div class="productImage">
                <img src="<?php echo "./assets/".$productItem.".png" ?>" alt="永保康">
            </div>
        </div>
        <div class="col-12 col-sm-6 productCardRight">
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
        <a class="btn btn-info" href="<?php echo "./detail.php?product=".$productItem."&name=".$name."&intro=".$intro ?>" role="button" aria-pressed="true">
            <p class="d-none d-sm-block">瞭解更多</p>
            <img src="./icons/arrow-right.svg"/>
        </a>
    </div>
    <!-- 產品一 -->
    <div class="col-12 col-sm-5 mb-5 p-0 row bgWhite cardStyle productCard">
        <?php 
            $productItem = 'product-2';
            $name = '高一等';
            $intro = '純天然植物提煉、紐西蘭進口';
        ?>    
        <div id="cardDec"></div>
        <div class="col-12 col-sm-6 p-0 productCardLeft">
            <div class="productName">
                <img src="./icons/coming.svg"/>
                <h4><?php echo $name ?></h4>
            </div>
            <div class="productImage">
                <img src="<?php echo "./assets/".$productItem.".png" ?>" alt="永保康">
            </div>
        </div>
        <div class="col-12 col-sm-6 productCardRight">
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
        <a class="btn btn-info" href="<?php echo "./detail.php?product=".$productItem."&name=".$name."&intro=".$intro ?>" role="button" aria-pressed="true">
            <p class="d-none d-sm-block">瞭解更多</p>
            <img src="./icons/arrow-right.svg"/>
        </a>
    </div>
    <!-- 產品一 -->
</div>
</div>
  </body>
</html>
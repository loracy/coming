<?php 
	include ('header.php');
?>

<div class="container content pt-3 pb-5 pt-sm-5 d-flex">
    <div class="col-12 col-md-5 mb-3 p-0 row bgWhite cardStyle productCard">
        <div id="cardDec"></div>
        <div class="col-6 p-0 productCardLeft">
            <div class="productName">
                <img src="./icons/coming.svg"/>
                <h4>永保康</h4>
            </div>
            <div class="productImage">
                <img src="./assets/product-1.png" alt="產品-1">
            </div>
        </div>
        <div class="col-6 productCardRight">
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
        <!-- <a class="btn btn-info" href="./detail.php" role="button" aria-pressed="true"> -->
        <?php 
            $productItem = 'product-1';
            $name = '永保康';
            $intro = '純天然植物提煉、紐西蘭進口';
        ?>
        <a class="btn btn-info" href="<?php echo "./detail.php?product=".$productItem."&name=".$name."&intro=".$intro ?>" role="button" aria-pressed="true">
            <p>瞭解更多</p>
            <img src="./icons/arrow-right.svg"/>
        </a>
    </div>
    <!-- 產品一 -->
    <div class="col-12 col-md-5 mb-3 p-0 row bgWhite cardStyle productCard">
        <div id="cardDec"></div>
        <div class="col-6 p-0 productCardLeft">
            <div class="productName">
                <img src="./icons/coming.svg"/>
                <h4>高一等</h4>
            </div>
            <div class="productImage">
                <img src="./assets/product-1.png" alt="產品-1">
            </div>
        </div>
        <div class="col-6 productCardRight">
            <ul class="productList">
                <li class="listItem">
                    <img class="mr-2" src="./icons/check.svg">
                    <p>名字很好聽</p>
                </li>
                <li class="listItem">
                    <img class="mr-2" src="./icons/check.svg">
                    <p>符合ABC檢驗</p>
                </li>
                <li class="listItem">
                    <img class="mr-2" src="./icons/check.svg">
                    <p>讓你更有信心</p>
                </li>
                <li class="listItem">
                    <img class="mr-2" src="./icons/check.svg">
                    <p>我弟本身有在吃</p>
                </li>
            </ul>
        </div>
        <!-- <a class="btn btn-info" href="./detail.php" role="button" aria-pressed="true"> -->
        <?php 
            $productItem = 'product-2';
            $name = '高一等';
            $intro = '所有矮冬瓜的救星';
        ?>
        <a class="btn btn-info" href="<?php echo "./detail.php?product=".$productItem."&name=".$name."&intro=".$intro ?>" role="button" aria-pressed="true">
            <p>瞭解更多</p>
            <img src="./icons/arrow-right.svg"/>
        </a>
    </div>
    <!-- 產品一 -->

</div>
  </body>
</html>
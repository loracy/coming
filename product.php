<?php 
	include ('header.php');
?>

<script type="text/javascript">  
// 取得json資料
var requestURL = 'https://loracy.github.io/coming/assets/details.json';
var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() {
    var jsonObj = request.response;
    showData(jsonObj);
}

function showData(jsonObj) {
    // data is a array-object that includes all product page information
    data = jsonObj['products'];
    // render the product's name
    for( i=1; i <= data.length ; i++ ){
        document.getElementsByClassName('productName-' + i)[0].innerText = data[i-1]['name'];
        document.getElementsByClassName('productName-' + i)[1].innerText = data[i-1]['name'];
    }
    for( i=1; i <= data.length ; i++ ){
        console.log(data[i-1]);
        for( j=1; j <= 4 ; j++ ){
            document.getElementsByClassName('productFeature-' + i)[j-1].innerText = data[i-1]['feature'][j];
        }
    }
}

</script>
<?php 
    $productItem = 'product-1';
    $name = array('高一等', '晶盈明亮口含錠', '滴丸', '強康', '松樹皮3', '蘑菇D2');
    $intro = '純天然植物提煉、紐西蘭進口';
    $productLength = count($name);
?>

<div class="container content pt-5 pb-5">
    <div class="row px-3 p-sm-0">
    <!-- get all the products card -->
        <?php for ( $i=1 ; $i<=$productLength ; $i++ ){ ?>
        <div class="col-12 col-sm-6 col-lg-5 mb-5 p-0 bgWhite cardStyle productCard">
            <div class="row m-0">
                <div id="cardDec"></div>
                <div class="col-12 col-sm-6 p-0 productCardLeft">
                    <div class="productName d-flex d-sm-none">
                        <img src="./icons/coming.svg"/>
                        <h4 class="productName-<?php echo $i ?>"></h4>
                    </div>
                    <div class="productImage">
                        <img src="<?php echo "./assets/product-".$i.".png" ?>">
                    </div>
                </div>
                <div class="col-12 col-sm-6 productCardRight">
                    <div class="productName d-none d-sm-flex">
                        <h4 class="productName-<?php echo $i ?>"></h4>
                    </div>
                    <ul class="productList">
                        <!-- get 4 features of the product -->
                        <?php for ( $j=1 ; $j<=4 ; $j++ ){ ?>
                        <li class="listItem d-flex align-items-start my-1">
                            <img class="mr-2 mt-1" src="./icons/check.svg">
                            <p class="productFeature-<?php echo $i ?>"></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <a class="btn btn-info" href="<?php echo "./detail.php?product=".$i ?>" role="button" aria-pressed="true">
                    <p class="d-none d-sm-block">瞭解更多</p>
                    <img src="./icons/arrow-right.svg"/>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php 
	include ('footer.php');
?>
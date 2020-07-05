<?php 
	include ('header.php');
?>

<div class="container content pt-2 pb-1">
    <div class="row">
        <nav class="col-12 col-sm-10 offset-sm-1" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="product.php">產品中心</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品名稱</li>
            </ol>
        </nav>
    </div>
    <div class="row detailSection">
            <div class="col-12 col-sm-5 offset-sm-1">
                <div class="detailImage">
                    <img src="<?php echo "./assets/product-".$_GET['product'].".png"?>" alt="產品圖片">
                </div>
            </div>
            <div class="col-12 col-sm-5">
                <div class="detailInfo">
                    <div class="detailInfoName">
                        <h3>產品名稱</h3>
                    </div>
                    <div class="detailInfoFeatures">
                        <ul class="detailInfoFeaturesList"></ul>
                    </div>
                    <div class="detailInfoContact">
                        <p>
                            此為營養製劑食品，<br/> 
                            請撥 0800-081889 由專人為您服務。
                        </p>
                        <a class="btn btn-cta btn-lg btn-contact" href="tel:0800-081889">
                            <img src="./icons/contact.svg"/>聯繫我們
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>

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
        var productItem = "<?php echo $_GET['product']; ?>";
        var productData = jsonObj['products'][productItem - 1];
        var productFeature = productData.feature;
        var productFeatureLength = Object.keys(productFeature).length;
        
        $('.breadcrumb-item.active').text(productData.name);
        $('.detailInfoName > h3').text(productData.name);

        for( i = 1 ; i <= productFeatureLength ; i++ ){
            var feature = productFeature[i];
            var basicComponent = '<li class="detailInfoFeaturesListItem">' +
                                    '<img src="./icons/check.svg">' +
                                    '<p id="productFeature-' + i + '">' + feature + '</p>' +
                                '</li>';
            $('.detailInfoFeaturesList').append(basicComponent);
        }
    }

</script>

<?php 
	include ('footer.php');
?>
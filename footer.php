<div id="Footer" class="footer" style="padding:0px;">
    <div class="container-fluid pt-5">
        <div class="row pb-5">
            <div class="col-12 col-sm-4 d-flex align-items-center justify-content-center footerLogo">
                <img src="./assets/logo.jpg" width="auto" height="49px" alt="logo">
            </div>
            <div class="col-12 col-sm-3 mt-4 mt-sm-0 footerProduct">
                <h5 class="align-items-center align-items-sm-start">產品中心</h5>
                <div class="d-flex flex-column align-items-center align-items-sm-start footerProductContent">
                    <?php for ( $i=1 ; $i<=2 ; $i++ ){ ?>
                    <div class="d-flex flex-row footerProductContentRow">
                        <?php for ( $j=1 ; $j<=3 ; $j++ ){ ?>
                            <!-- <a href="<?php echo "./detail.php?product=".($j+($i-1)*3) ?>" class="footerProductContentRowLink-<?php echo $j+($i-1)*3 ?>"></a> -->
                            <a href="./product.php" class="footerProductContentRowLink-<?php echo $j+($i-1)*3 ?>"></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-sm-4 mt-4 mt-sm-0 footerContact">
                <h5 class="align-items-center align-items-sm-start">聯絡資訊</h5>
                <div class="d-flex flex-column align-items-center align-items-sm-start footerContactContent">
                    <p>聯絡地址：台中市西區華美西街一段82號</p>
                    <p>市話：04-23101377 /<br class="d-block d-sm-none">
                    免費電話：0800-089595 / <br class="d-block d-sm-none">
                    傳真：04-23101335</p>
                    <p>電子郵件：saray560505@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-4 d-flex align-items-center justify-content-center footerPolicy">
                <h5>版權所有 - © 2018 康盈生技有限公司</h5>
            </div>
        </div>
    </div>
</div>

<?php 
	include ('footer.php');
?>
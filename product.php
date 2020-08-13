<?php 
	include ('header.php');
?>
<?php 
    $name = array('晶盈明亮口含錠', '滴丸', '松樹皮3', '蘑菇D2');
    $productLength = count($name);
?>

<div class="container content pt-5 pb-5">
    <div class="row px-3 p-sm-0">
        <?php for ( $i=1 ; $i<=$productLength ; $i++ ){ ?>
            <div class="col-12 col-sm-4 mb-5">
                <div class="productCard">
                    <div class="productCardImage">
                        <img src="<?php echo "./assets/product-".$i.".png" ?>">
                    </div>
                    <div class="productCardName">
                        <h6><?php echo $name[$i-1] ?></h6>
                        <a class="btn btn-info" href="<?php echo "./detail.php?product=".$i ?>" role="button" aria-pressed="true">
                            瞭解更多 <img src="./icons/arrow-right.svg"/>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php 
	include ('footer.php');
?>
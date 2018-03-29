<?php 
	include ('header.php');
?>

<div class="container content pt-2 pb-1">
    <div class="row">
        <nav class="d-none d-sm-flex col-10 offset-1" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="product.php">產品中心</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['name'];?></li>
            </ol>
        </nav>
        <div class="col-12 col-sm-10 offset-sm-1 d-flex detailSection">
            <div class="col-12 col-sm-5">
                <img class="detailImage" src="<?php echo "./assets/".$_GET['product']."-lg.png"?>" alt="產品-1">
            </div>
            <div class="col-12 col-sm-7">
                <div class="d-flex mb-sm-4 detailName">
                    <h3><?php echo $_GET['name'];?></h3>
                    <p><?php echo $_GET['intro'];?></p>
                    <a class="d-none d-sm-flex btn btn-cta btn-lg btn-contact" href="./contact.php" role="button" aria-pressed="true" data-toggle="modal" data-target=".modal-lg">聯繫我們</a>
                    <a class="d-flex d-sm-none btn btn-cta btn-contact-sm" href="./contact.php" role="button" aria-pressed="true"><img src="./icons/contact.svg"/></a>
                </div>
                <div class="detailContent">
                    <h5 class="detailContentTitle" id="detailContentTitle-1">標題1</h4>
                    <div class="divider"></div>
                    <p class="detailContentIntro" id="detailContentIntro-1">內容1<p>

                    <h5 class="detailContentTitle" id="detailContentTitle-2">標題2</h4>
                    <div class="divider"></div>
                    <p class="detailContentIntro" id="detailContentIntro-2">內容2<p>

                    <h5 class="detailContentTitle" id="detailContentTitle-3">標題3</h4>
                    <div class="divider"></div>
                    <p class="detailContentIntro" id="detailContentIntro-3">內容3<p>
                </div>
            </div>
        </div>
        <!-- <div class="modal fade modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">聯絡方式</h4>
                </div>
                <div class="modal-body">
                            
                </div>
            </div>
          </div>  
        </div> -->
        <!-- modal部分 -->
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
        console.log('productItem = ' + productItem);
        switch ( productItem ) {
            case 'product-1':
                var data = jsonObj['detail-1'];
                break;
            case 'product-2':
                var data = jsonObj['detail-2'];
                break;
            case 'product-3':
                var data = jsonObj['detail-3'];
                break;
            case 'product-4':
                var data = jsonObj['detail-4'];
                break;
            default:
                break;
        }
        for(i=1;i<4;i++){
            document.getElementById("detailContentTitle-"+i).innerHTML=data[i-1]['title'];
            document.getElementById("detailContentIntro-"+i).innerHTML=data[i-1]['content'];
        }
        // document.getElementById("detailContentTitle").innerHTML=data[0]['title'];
        // document.getElementById("detailContentIntro").innerHTML=data[0]['content'];
    }

</script>
<script>
    console.log(document.body.offsetHeight);
    console.log(document.body.clientHeight);
    console.log(window.screen.height);
    console.log(window.screen.availHeight);
    $(document).ready(function(){

    });
    
</script>

</body>
</html>
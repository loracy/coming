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
    showProductData(jsonObj);
}

function showProductData(jsonObj) {
    // data is a array-object that includes all product page information
    data = jsonObj['products'];
    // render the product's name
    for( i=1; i <= data.length ; i++ ){
        document.getElementsByClassName('footerProductContentRowLink-' + i)[0].innerText = data[i-1]['name'];
    }
}

</script>

<div id="indexSection1">
  <div class="container content py-5">
      <div class="row">
        <img id="indexSection1Path" src="./assets/path1new.png"/>
        <div class="col-12 col-lg-7 col-md-6 p-lg-5 p-md-3 indexLeft">
          <div class="col-12 my-md-5 mt-sm-2 mb-sm-5 ml-md-3 indexSlogan">
            <h1>提供您<br>最優質的專業保健品</h1>
            <p class="d-none d-sm-block">秉持著真誠踏實的理念，滿足您的健康需求，是我們的責任</p>
            <a class="btn btnCta mt-2 mt-sm-3" href="product.php" role="button" aria-pressed="true">
              <p>瞭解產品</p>
              <img src="./icons/arrow-right.svg"/>
            </a>
          </div>
        </div>
        <div class="col-12 p-3 p-sm-0 col-lg-4 col-md-6 offset-md-0 indexRight">
          <div class="d-flex flex-column indexCard">
            <div class="d-flex flex-column align-items-center align-items-sm-start indexCardTitle">  
              <p>告訴我</p>
              <h3>您遇到的困擾</h3>
            </div>
            <div class="indexCardContent">
              <a class="btn btnWorry" href="#" role="button" aria-pressed="true">
                擔心小孩的成長不如別人？
                <img src="./icons/arrow-right.svg"/>                     
              </a>
              <a class="btn btnWorry" href="#" role="button" aria-pressed="true">
                總是覺得自己免疫力不夠好？
                <img src="./icons/arrow-right.svg"/>                     
              </a>
              <a class="btn btnWorry" href="#" role="button" aria-pressed="true">
                想要安穩度過每一次生理期？
                <img src="./icons/arrow-right.svg"/>                     
              </a>
              <a class="btn btnWorry" href="#" role="button" aria-pressed="true">
                視力模糊卻早已放棄？
                <img src="./icons/arrow-right.svg"/>     
              </a>
              <a class="btn btnWorry" href="#" role="button" aria-pressed="true">
                慢性問題總是令你擔憂？
                <img src="./icons/arrow-right.svg"/>     
              </a>
            </div>
          </div><!-- indexCard -->
        </div>          
      </div>
  </div>
</div>

<div id="indexSection2">
  <div id="indexCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container pt-5">
          <div class="row">
            <div class="col-6 col-md-4 col-sm-5 offset-3 offset-md-1 offset-sm-0 d-flex align-items-end indexRecommendImage">
              <img src="./assets/recommendPerson-1.png" width="100%"/>
            </div>
            <div class="col-10 col-md-6 col-sm-7 offset-1 offset-md-1 offset-sm-0 pt-lg-5 indexRecommendText">
              <h5>感謝康盈</h5>
              <h3>讓我不再害怕塵蟎</h3>
              <p class="pr-lg-5 mt-lg-4 mt-md-2 mt-1 mr-lg-5 content">我自從跟王小姐接洽之後，先試用了一個月的時期，感覺真的非常好！因為以前我起床都會打噴嚏，持續用了之後，現在的我終於省了不少衛生紙的費用，身體的免疫力真的比以前好很多！</p>
              <p class="text-right pr-lg-5 mt-lg-5 mt-md-3 mt-sm-1 mr-lg-5 bywho">－ 台中/林小姐</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container pt-5">
          <div class="row">
            <div class="col-6 col-md-4 col-sm-5 offset-3 offset-md-1 offset-sm-0 d-flex align-items-end indexRecommendImage">              
              <img src="./assets/recommendPerson-2.png" width="100%"/>
            </div>             
            <div class="col-10 col-md-6 col-sm-7 offset-1 offset-md-1 offset-sm-0 pt-lg-5 indexRecommendText">              
              <h5>感謝康盈</h5>
              <h3>幫助我家小孩的成長</h3>
              <p class="pr-lg-5 mt-lg-4 mt-md-2 mt-1 mr-lg-5 content">因為自己本身不高，一直很怕我的小孩會遺傳自己的基因，但幸好有選擇康盈的產品，我家的小孩現在還常常炫耀他已經長得比我有看頭了呢！</p>
              <p class="text-right pr-lg-5 mt-lg-5 mt-md-3 mt-sm-1 mr-lg-5 bywho">- 台北/劉先生</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container pt-5">
          <div class="row">
            <div class="col-6 col-md-4 col-sm-5 offset-3 offset-md-1 offset-sm-0 d-flex align-items-end indexRecommendImage">              
              <img src="./assets/recommendPerson-3.png" width="100%"/>
            </div>
            <div class="col-10 col-md-6 col-sm-7 offset-1 offset-md-1 offset-sm-0 pt-lg-5 indexRecommendText">              
              <h5>感謝康盈</h5>
              <h3>再次看清楚這美好的世界</h3>
              <!-- <p class="pr-lg-5 mt-lg-4 mt-md-2 mt-1 mr-lg-5 content">因為上了年紀，也早就不對自己的視力抱有太大的期望，幸好這次有遇到康盈，沒想到我又可以再次擁有清楚的視線，我也已經跟身邊的老朋友們推薦好久了</p> -->
              <p class="pr-lg-5 mt-lg-4 mt-md-2 mt-1 mr-lg-5 content">我一直擔心全家視力的問題，孩子喜歡玩手機，老公工作必需長時間盯著電腦，還好我研究了很久，終於找到符合我的理想的視力保健品，有臨床有專利的法國山桑子，而且口味酸酸甜甜的，全家人都愛吃，讓我從此不用再擔心全家的視力問題了！</p>
              <p class="text-right pr-lg-5 mt-lg-5 mt-md-3 mt-sm-1 mr-lg-5 bywho">－ 台北/趙先生</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev d-flex justify-content-center" href="#indexCarousel" role="button" data-slide="prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2DA1C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
        <polyline points="11 18 5 12 11 6"></polyline>
      </svg>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-flex justify-content-center" href="#indexCarousel" role="button" data-slide="next">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2DA1C2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
        <polyline points="13 18 19 12 13 6"></polyline>
      </svg>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- indexCarousel -->
</div>

<div id="indexSection3">
  <div class="container py-5">
    <div class="row">
      <img id="indexSection3Path" src="./assets/path3.png"/>              
      <div class="col-lg-8 col-md-10 offset-lg-2 offset-md-1 my-3 indexAbout">
          <h1>關於我們</h1>
          <p>康盈生技公司逐年不斷地進步、自我成長、永續經營的理念，近幾年有鑑於人們生活水平的提升，對健康的維持要求，除了尋求高品質的產品之外更需要有高品質的服務，我們結合最新穎的保健知識並與國內知名保健學專家共同研究，用心投入新品研發，推出最先進的配方，純天然植物萃取的心血管、泌尿系統、新陳代謝、青春活力的保健養身聖品，都秉持著真誠踏實的理念，展現產品的核心價值『 天然、健康、安全 』，最終目的就是要提供消費者最專業的產品。康盈生技公司秉持創立的宗旨：『提供最優質及最完整的專業保健品，滿足消費者的健康需求與生活品質，是你我共同的責任。』滿足國人的期待，用最熱忱的心，帶動更高品質的專業產品，迎接營養保健新紀元的來臨。</p>
      </div>
      <div class="col-12 col-md-6 offset-md-3 d-flex justify-content-center">
        <a class="btn btnCta" href="product.php" role="button" aria-pressed="true">
          <p>瞭解產品</p>
        </a>
      </div>
    </div>
  </div>
</div>

  <script>  
    $(document).ready(function(){

      $(".btnWorry").mouseenter(function(){
        $(this).children("img").show(5000);
      });
      $(".btnWorry").mouseleave(function(){
        $(this).children("img").hide();
      });

      $(".carousel-control-prev").mouseenter(function(){
        $(".feather-chevron-left").attr('stroke','#FFFFFF');
        $(".feather-chevron-left").attr('stroke-width','2');        
      });

      $(".carousel-control-prev").mouseleave(function(){
        $(".feather-chevron-left").attr('stroke','#2DA1C2');
        $(".feather-chevron-left").attr('stroke-width','1.5');
      });

      $(".carousel-control-next").mouseenter(function(){
        $(".feather-chevron-right").attr('stroke','#FFFFFF');
        $(".feather-chevron-right").attr('stroke-width','2');
      });

      $(".carousel-control-next").mouseleave(function(){
        $(".feather-chevron-right").attr('stroke','#2DA1C2');
        $(".feather-chevron-right").attr('stroke-width','1.5');        
      });

    });
  </script>

<?php 
	include ('footer.php');
?>

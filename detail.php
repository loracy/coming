<?php 
	include ('header.php');
?>

<div class="container content pt-2 pb-1">
    <div class="row">
        <nav class="col-10 offset-1" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./product.php">產品中心</a></li>
                <li class="breadcrumb-item active" aria-current="page">永保康</li>
            </ol>
        </nav>
        <div class="col-sm-10 offset-sm-1 d-flex detailSection">
            <!-- <a class="btn btn-cta btn-lg btn-contact" href="./contact.php" role="button" aria-pressed="true">
                聯繫我們
            </a> -->
            <div class="col-5">
                <img class="detailImage" src="./assets/product-1-lg.png" alt="產品-1">
            </div>
            <div class="col-7">
                <div class="mb-4 d-flex detailName">
                    <h3>永保康</h3>    
                    <p>純天然植物提煉、紐西蘭進口</p>
                </div>
                <div class="detailContent">
                        <h4 id="detailContentTitle">標題</h4>
                        <!-- <div class="divider-row"></div> -->
                        <p id="detailContentIntro">內容<p>
                </div>
            </div>
        </div>  
    </div>

</div>
<!-- <script type="text/javascript" src="./assets/test.json"></script> -->
<script type="text/javascript">  
    // var txt = '{"employees":[' +  
    // '{"firstName":"Bill","lastName":"Gates" },' +  
    // '{"firstName":"超級抗氧化植物 － 「紐西蘭松樹皮」","lastName":"Bush紐西蘭松樹皮是由Canterbury University 科學院院長Dr. Kelvin Duncan 博士帶領的專家經研究人體營養多年後在位受環境污染的紐西蘭大自然底下發現對人體健康有極大幫助的天然松樹皮。研究小組發現PinusRadiata是一種獨特又珍貴的樹種，當樹齡達25～30年才砍伐並只取成熟樹幹下的1/3處樹皮，經由獨特的萃取加工法只使用紐西蘭純淨水而非有機溶劑，順利提取出幫助人類延年益壽的最佳抗氧化劑～Enzogenol（松樹醇）。Enzogenol（松樹醇）含有高達2000多種化合物，包含眾所周知的黃酮類、兒茶素，其中原花青素是Enzogenol裡最豐富的複合多酚類物質。" },' +  
    // '{"firstName":"Thomas","lastName":"Carter" }]}';  

    // var txt = '/assets/detail-text';
    // $post.("./assets/test.json",function(data){
    //     console.log("TEST");
    //     var needData = date.variants[1].path;
    // });

    // var header = document.querySelector('header');
    var requestURL = 'https://loracy.github.io/coming/assets/test.json';
    var request = new XMLHttpRequest();

    request.open('GET', requestURL);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        var superHeroes = request.response;
        showHeroes(superHeroes);
    }
    function showHeroes(jsonObj) {
        var heroes = jsonObj['employees'];
        console.log('----------' + heroes[1]['firstName']);       
    }
    
    // var obj = eval ("(" + txt + ")");  
    // var obj = eval ("(" + txt + ")");  
    // obj = JSON.parse(txt);  
    
    // document.getElementById("detailContentTitle").innerHTML=obj.employees[1].firstName;   
    // document.getElementById("detailContentIntro").innerHTML=obj.employees[1].lastName;  
</script>
                    <!-- <script type="text/javascript" language="javascript">   
                        $(document).ready(function() {   
                        $.getJSON("./assets/detail-text.json",   
                            function(data) {   
                                alert(data.des.we);   
                        });     
                        });   
                    </script>   -->
<script>
    // console.log(document.body.offsetHeight);
    console.log(document.body.clientHeight);
    console.log(window.screen.height);
    console.log(window.screen.availHeight);
    $(document).ready(function(){
        // $('bg-card-2').css('height', window.screen.availHeight + 'px');
        $('bg-card-2').css('height', '729px');
        $('img_detail').css({"background-color": "yellow", "font-size": "200%"});
        
    });
    
</script>
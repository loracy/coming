
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
        document.getElementsByClassName('productName-' + i)[0].innerText = data[i-1]['name'];
        document.getElementsByClassName('productName-' + i)[1].innerText = data[i-1]['name'];
        document.getElementsByClassName('footerProductContentRowLink-' + i)[0].innerText = data[i-1]['name'];

    }
    for( i=1; i <= data.length ; i++ ){
        console.log(data[i-1]);
        for( j=1; j <= 4 ; j++ ){
            document.getElementsByClassName('productFeature-' + i)[j-1].innerText = data[i-1]['feature'][j];
        }
    }
}

</script>
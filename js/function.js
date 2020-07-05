function showActiveNavigation() {
}

function showFooterProduct(jsonObj) {
    var productData = jsonObj['products'];
    var productDataLength = Object.keys(productData).length;

    for( i = 1 ; i <= productDataLength ; i++ ){
        var footerProduct = '<div class="footerProductContentItem">' +
                                '<a href="./detail.php?product=' + i +'">' + productData[i-1].name + '</a>' +
                            '</div>';
        $('.footerProductContent').append(footerProduct);
    }
}

$(document).ready(function(){
    var requestURL = 'https://loracy.github.io/coming/assets/details.json';
    var request = new XMLHttpRequest();
    request.open('GET', requestURL);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        var jsonObj = request.response;
        showFooterProduct(jsonObj);
    }

    showActiveNavigation();
    
});
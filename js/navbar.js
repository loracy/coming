if( location.pathname == '/cict105/loracy/more.php'){
    $('.nav-item-more div').addClass('active');
    console.log( 'path = ' + location.pathname );
}else if( location.pathname == '/cict105/loracy/contact.php'){
    $('.nav-item-contact div').addClass('active');
    console.log( 'path = ' + location.pathname );
}else if( location.pathname == '/cict105/loracy/product.php'){
    $('.nav-item-product div').addClass('active');
    console.log( 'path = ' + location.pathname );
}else{
    console.log('there is wrong path');

}

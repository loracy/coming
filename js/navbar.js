if( location.pathname == '/coming/'){
    // $('.nav-item-more div').addClass('active');
    console.log( 'path = ' + location.pathname );
}else if( location.pathname == '/coming/contact.php'){
    // $('.nav-item-contact div').addClass('active');
    console.log( 'path = ' + location.pathname );
}else if( location.pathname == '/coming/product.php'){
    // $('.nav-item-product div').addClass('active');
    console.log( 'path = ' + location.pathname );
}else if(location.pathname == '/coming/detail.php'){
    console.log( 'path = ' + location.pathname );
}else if(location.pathname == '/coming/more.php'){
    console.log( 'path = ' + location.pathname );
}else{
    console.log('there is wrong path');
    console.log( 'path = ' + location.pathname );

}

var theToggle = document.getElementById('toggle');

// based on Todd Motto functions
// https://toddmotto.com/labs/reusable-js/

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

document.getElementById('toggle').onclick = function() {
    console.log('rrr');
   toggleClass(this, 'on');
   return false;
}

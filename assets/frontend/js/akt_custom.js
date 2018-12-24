function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}

function findIndexOfObj(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] === value) {
            return array.indexOf(array[i]);
        }
    }
    return false;
}


var cart_product = [];

if (getCookie('cookie_cart_product').length !== 0){
    cart_product = $.parseJSON(getCookie('cookie_cart_product'));
}

function addToCart(proId){ 
    var data = {
        product_id: proId,
        qty: 1 
    }


    var findObj = findIndexOfObj(cart_product, 'product_id', proId);

    if (findObj !== false){
        var oldqty = cart_product[findObj].qty;
        cart_product[findObj].qty = oldqty + 1;
        setCookie('cookie_cart_product', JSON.stringify(cart_product), 1);
    }else{
        cart_product.push(data);
        setCookie('cookie_cart_product', JSON.stringify(cart_product), 1 );
    }
}

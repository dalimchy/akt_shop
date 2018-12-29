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
        if (array[i][key] == value) {
            return array.indexOf(array[i]);
        }
    }
    return false;
}
function findvalOfObj(array, key, value) {
    for (var i = 0; i < array.length; i++) {
        if (array[i][key] == value) {
            return array[i];
        }
    }
    return false;
}

if((localStorage.getItem('myCart')) == null || ""){
    var cartProduct = [];
}else{
    var cartProduct = JSON.parse(localStorage.getItem('myCart'));
}
function addToCart(proId){ 
    var findObj = findvalOfObj(myAllProducts, 'product_id', proId);
    var findObjCart = findvalOfObj(cartProduct, 'product_id', proId);
    var findindexOf = findIndexOfObj(cartProduct, 'product_id', proId);

    if (findObj !== false){
        if(findObjCart !== false){
            cartProduct[findindexOf].qty = cartProduct[findindexOf].qty + 1;
            localStorage.setItem('myCart', JSON.stringify(cartProduct));
            cartProduct = JSON.parse(localStorage.getItem('myCart'));
            headcartOption();
        }else{
            findObj["qty"] = 1;
            cartProduct.push(findObj);
            localStorage.setItem('myCart', JSON.stringify(cartProduct));
            cartProduct = JSON.parse(localStorage.getItem('myCart'));
            headcartOption();
        }
        console.log(77, JSON.parse(localStorage.getItem('myCart')));
    }else{
        console.log(findObj);
    }
}


$(function(){
    headcartOption();
    
});

function headcartOption(){
    var totalPrice = 0;
    if(cartProduct.length > 0){

        $.each(cartProduct, function(k,v){
            if(v.product_new_price !== null){
                let price = v.product_new_price * v.qty
                totalPrice = totalPrice + price;
                document.getElementById("totalAmountOfcart").innerText = totalPrice ;
                document.getElementById("dropdownTotalmini").innerText = totalPrice ;
    
                $('.miniCartItem'+v.product_id+'').remove();
                $('#cartItemListmini').append(minicartItemhtml(v,price));
            }
    
    
        });
        $('.cartItemCount').text(cartProduct.length);
    }else{
        document.getElementById("totalAmountOfcart").innerText = 0 ;
        document.getElementById("dropdownTotalmini").innerText = 0 ;
        $('.cartItemCount').text(cartProduct.length);
    }
}


function minicartItemhtml(data,price){
    var html  = '<div class="row miniCartItem'+data.product_id+'">';
        html +=     '<div class="col-xs-4">';
        html +=             '<div class="image"> <a href="#"><img src="'+baseUrl+''+data.product_image+'" alt=""></a> </div>';
        html +=     '</div>';
        html +=     '<div class="col-xs-7">';
        html +=         '<h3 class="name"><a href="#">'+data.product_name+'</a></h3>';
        html +=         '<div class="price">৳'+price+'</div>';
        html +=      '</div>';
        html +=      '<div class="col-xs-1 action"> <a onclick="removeCart('+data.product_id+')"><i class="fa fa-trash"></i></a> </div>';
        html += '</div>';

        return html;
}

function removeCart(id){
    $('.miniCartItem'+id+'').html('');
    var findindexOf = findIndexOfObj(cartProduct, 'product_id', id);
    cartProduct.splice(findindexOf, 1);
    localStorage.setItem('myCart', JSON.stringify(cartProduct));
    cartProduct = JSON.parse(localStorage.getItem('myCart'));
    headcartOption();
}
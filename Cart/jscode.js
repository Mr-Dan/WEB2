var cart;
var config;
var wiNumInputPrefID;
/* WI-GLOBAL-VARS */
$(document).ready(function(){  
    cart = new WICard("cart");
    config = {'clearAfterSend':true, 'showAfterAdd':false};
    
    cart.init("basketwidjet", config);
    WICartNum('cart', 'wicartnum', 'winum_');
    /* WI-MODULES */
    
    
}); 
document.addEventListener('visibilitychange', function(e) {
cart.init("basketwidjet", config);
}, false);
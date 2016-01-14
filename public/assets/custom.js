function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie() {
    var user = getCookie("titus");
    if (user == "") {     
            $('#myModal').modal('show');
    }
}
function url(){
    if(window.location.href!="http://titusandco.com/denied.html"){
        checkCookie();
    }
}
            url();

            $("#accept").click(function(){
            setCookie("titus", "tandc", 30);
            });
               
            $("#denytc").click(function(){
                window.location.href = "/denied.html"
            });
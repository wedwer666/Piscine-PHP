 <?
 var ajax = function(url) {
        request = new(window.ActiveXObject || XMLHttpRequest)("Microsoft.XMLHTTP");
        request.open("GET", url, 0);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send();
        return request.responseText;
 ?>
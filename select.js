var xmlHttp;

function showUser(pp1,pm1,sj1,zh1,ddh1,dj1,sl1,zj1,gjdh1,zy1,zydh1,yf1,gndh1) {
    xmlHttp = GetXmlHttpObject();

    var url = "select.php";
//pp1,pm1,sj1,zh1,ddh1,dj1,sl1,zj1,gjdh1,zy1,zydh1,yf1,gndh1
    url = url + "?pp="+pp1;
    url = url + "&pm="+pm1;
    url = url + "&sj="+sj1;
    url = url + "&zh="+zh1;
    url = url + "&ddh="+ddh1;
    url = url + "&dj="+dj1;
    url = url + "&sl="+sl1;
    url = url + "&zj="+zj1;
    url = url + "&gjdh="+gjdh1;
    url = url + "&zy="+zy1;
    url = url + "&zydh="+zydh1;
    url = url + "&yf="+yf1;
    url = url + "&gndh="+gndh1;
    url = url + "&sid=" + Math.random()

    xmlHttp.onreadystatechange = stateChanged
    xmlHttp.open("GET", url, true)
    xmlHttp.send(null)
}

function stateChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
        document.getElementById("txtHint").innerHTML = xmlHttp.responseText
    }
}

function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        //Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

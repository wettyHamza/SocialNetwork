function getXhr() {
    var xhr = null;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) {
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    else {
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
        xhr = false;
    }
    return xhr;
}
function change() {
    var xhr = getXhr();
// On défini ce qu'on va faire quand on aura la réponse
    xhr.onreadystatechange = function () {
        alert(xhr.readyState);
// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
        if (xhr.readyState == 4 && xhr.status == 200) {
            di = document.getElementById('online_user');
            di.innerHTML = xhr.responseText;
        }
    }
   /* xhr.open("POST", "online.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send("idAuteur=" + idauteur);*/
}
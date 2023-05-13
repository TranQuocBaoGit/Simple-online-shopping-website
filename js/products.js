function showProduct(str,option){
    if(str==""){
        document.getElementById("txtHint").innerHTML = "";
        return;
    }else{
        var request = new XMLHttpRequest();
        request.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
    }
    if(option == 1){
        request.open("GET", "getProducts.php?name="+str,true);
    }
    else if(option == 2){
        request.open("GET", "getProducts.php?type="+str,true);
    }

    request.send();
}
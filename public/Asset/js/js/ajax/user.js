function show(id) {
    var myid = "" + id;
    let url = document.getElementById(myid).getAttribute("data-href");

    $.get(url,function(data,status){
        var user = JSON.parse(data);
        document.getElementById("nom").value = user.nom;
        document.getElementById("Email").value = user.email;
        nom.setAttribute("readonly","");
        Email.setAttribute("readonly","");
        $("#show").modal("show");
        
    })
}
function modif(id){
    var myid ="" + id;
    let url = document.getElementById(myid).getAttribute("data-href");

    $get(url, function (data,status){
        var article =JSON.parse(data);
        document.getElementById("")
    })
}


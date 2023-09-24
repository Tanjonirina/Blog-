$(document).ready(function(){

    $("#show").click(function(){
       $.get('http://127.0.0.1:8000/admin/article/show/1',function(data, status){
        var test = JSON.parse(data);
        alert(test.id);
       } )
    })
});
function show(id) {
    var myid=""+id;
    var url= document.getElementById(myid).getAttribute("data-href");
    $("#"+myid).click(function(){
        $.get(url,function(data, status){
            var
            test = JSON.parse(data);
            
            document.getElementById("name").value = test.titre;
            document.getElementById("desc").value = test.description;
            $("#voire").modal("show");
        } )
     })
    
}
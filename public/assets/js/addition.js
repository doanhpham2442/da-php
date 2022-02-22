$("#submit_search").on("click",function (e) {
    e.preventDefault();
});
$("#orderby").on("change",function (e) {
    e.preventDefault();
});
function getData() {

    var data = [];
     data[data.length] =  $("#searchForm").serialize();
     data[data.length] = $("#orderby").serialize();
     for (var i = 0;i<data.length;i++)
     {}

    var string = data.join("&");
    var arr = string.trim().split("&");
    var result = [];
    for(var  i = 0;i<arr.length;i++)
    {
        var a = arr[i].split("=");
        if(a[1] == "")
        {
            continue;
        }else
        {
            result[result.length] = arr[i];
        }
    }

     string = result.join("&");
    // alert(string);
    window.open("shop.php?"+string);


}
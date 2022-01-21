$(function(){
  
    $("#menu").click(function(e){
        e.preventDefault();
        $("#blok").load($(this).attr("href"));
        $("#modal").modal("show");
    });
    $("#xona").click(function(e){
        e.preventDefault();
        $("#blok").load($(this).attr("href"));
        $("#modal").modal("show");
    });
    $("#buyurtma").click(function(e){
        e.preventDefault();
        $("#blok").load($(this).attr("href"));
        $("#modal").modal("show");
    });
   
    $("#taom").change(function(){
        var d=$(this).val();
        $.get("index.php?r=zakaz/aniqlash",{id:d},
            function(data)
            {
                var d=$.parseJSON(data);
                $("#narx").val(d.narx);
            })
    })
    $("#son").blur(function(){
        var n=$("#son").val()*$("#narx").val();
        $("#summa").val(n);
    })
    
})
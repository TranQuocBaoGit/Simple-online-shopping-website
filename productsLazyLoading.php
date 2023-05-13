<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/product.css">
<link rel="stylesheet" href="style/product1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<!-- HTML part here -->
    <div class="container mt-4">
        <div class="item-list" id="load_data"></div>
        <div id="load_data_mes" class="load-mes"></div>
        <div style="display:block; height: 100px"></div>
    </div>

<!-- Jquery -->
<script>
    $(document).ready(function(){
        var limit = 12;
        var start = 0;
        var action = 'inactive';
        function load_data(limit,start){
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data:{limit:limit, start:start},
                cache:false,
                success:function(data){
                    $('#load_data').append(data);
                    if(data == ''){
                        $('#load_data_mes').html("");
                        action = 'active';
                    }
                    else {
                        $('#load_data_mes').html("<div></div> <div></div> <div></div> <div></div> <div></div>");
                        action = 'inactive';
                    }
                }
            })
        }
        if(action == 'inactive'){
            action = 'active';
            load_data(limit,start);
        }
        $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $('#load_data').height() && action == 'inactive'){
            action = "active";
            start = start + limit;
            setTimeout(function(){
                load_data(limit,start);
        }, 1000);
    }
});
    });
</script>
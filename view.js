$(document).ready(function(){
    getCarDetails();
    function getCarDetails(){
        $.ajax({
            type: "POST",
            url: "viewCars.php",
            data: {
            },
            success: function(data){
                // console.log("success");
                // console.log(data);
                $('tbody.data').html(data);
            },
            error: function(data){
                console.log("error");
            }
        })
    }
    $('.button1').click(function(){
        modelname = $(this).attr('id');
        count = $(this).attr('count');
        if(count == 1){
            $(this).parent().parent().remove();
        }else{
            value = $(this).parent().parent().find("td#modelname").html();
            $(this).parent().parent().find("td.count").html(count-1);
            $(this).attr('count',count-1);
        }
        $.ajax({
            type: "POST",
            url: "viewCars.php",
            data: {
                'carModel' : modelname,
            },
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log("error");
            }
        })
    })
    $('.AddManufacturer').click(function(){
        console.log("clicked");
    })
})
//star
$(document).ready(function(){
    var stepW = 24;

    var description = new Array("strongly not recommended","recommended","neutral","recommended","strongly recommended");
    var stars = $("#star > li");
    var descriptionTemp;
    $("#showb").css("width",0);
    stars.each(function(i){

        $(stars[i]).click(function(e){
            
            var n = i+1;
            
            window.location.href="project/updaterating.php?rate="+n;

            $("#showb").css({"width":stepW*n});
            
            descriptionTemp = description[i];
            $(this).find('a').blur();
            return stopDefault(e);
            return descriptionTemp;
            

        });
    });
    stars.each(function(i){
        $(stars[i]).hover(
            function(){
                $(".description").text(description[i]);
            },
            function(){
                if(descriptionTemp != null){
                    $(".description").text("Your Rate："+descriptionTemp);
                     }
                else 
                    $(".description").text(" ");
            }
        );
    });
});
function stopDefault(e){
    if(e && e.preventDefault)
           e.preventDefault();
    else
           window.event.returnValue = false;
    return false;
};

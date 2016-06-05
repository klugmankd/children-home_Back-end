
$(document).ready(function(){
    function correct(){
        $("p").replaceWith(function(index, oldHTML){
            return $("<textarea>").html(oldHTML);
        });

        $(document).ready( function () {
            $("textarea").css({ "background-color": "#090" });
        });

    };
});

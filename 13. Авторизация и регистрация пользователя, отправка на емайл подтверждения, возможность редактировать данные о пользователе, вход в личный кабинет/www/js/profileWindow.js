
$(function(){
    $("#btn_edit_profile").click(function(){
        // page_disabled
        //$(".page_disabled").hide();
        $("#window_edit_profile").fadeIn("slow");
        $(".page_disabled").fadeIn("slow");
        $("input[name=name]").focus();

    });

    $(".close_window_edit_profile").click(function(){
        // page_disabled
        //$(".page_disabled").hide();
        $("#window_edit_profile").fadeOut("slow");
        $(".page_disabled").fadeOut("slow");

    });
});

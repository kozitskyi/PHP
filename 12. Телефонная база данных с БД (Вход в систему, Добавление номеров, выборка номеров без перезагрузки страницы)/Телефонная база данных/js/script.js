
$(document).ready(function(){
    $("#search_results").slideUp();
    $("#search_button").click(function(e){
        e.preventDefault();
        ajax_search();

    });


    $("#search_term").keyup(function(e){
        e.preventDefault();
        ajax_search();
    });
    $("#exit").click(function(){
        document.location.replace("/?logout");
    });

});

function ajax_search(){

    $("#search_results1").hide();
    $("#search_results").show();
    var search_val=$("#search_term").val();
    $.post("../php/getPhone.php", {search_term : search_val}, function(data){
        if (data.length>0){
            $("#search_results").html(data);
        }

    })
}

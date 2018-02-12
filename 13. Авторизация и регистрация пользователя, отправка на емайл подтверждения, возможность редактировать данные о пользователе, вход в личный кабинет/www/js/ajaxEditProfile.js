
function loadingData(){
    $("#information").text("Ожидание данных...");
}
function successDone(data){
    if(data.length<15){
        $("#window_edit_profile").fadeIn("slow");
           $(".page_disabled").fadeIn("slow");
           $(".errors").text(data);
        $(".errors").fadeIn("slow");
    }
else{
        var user_info = jQuery.parseJSON(data);
        if(user_info["name"]) $(".user_name").text(user_info["name"]);
        if(user_info["login"]) $(".user_login").text(user_info["login"]);
        if(user_info["email"]) $(".user_email").text(user_info["email"]);

        //alert(user_info["name"]);
        $("#window_edit_profile").fadeOut("slow");
        $(".page_disabled").fadeOut("slow");
        $(".data_saved").fadeIn("slow");
        setTimeout(function () {
            $(".data_saved").fadeOut("slow");
        }, 3000);
    }
}
$(document).ready (function (){
    //Привязываем событие клик
    $(".save_edits_profile").bind("click", function (){
        var editName = $("input[name=name]").val();
        var editLogin = $("input[name=login]").val();
        var enterNewPass = $("input[name=password]").val();
        var confirmNewPass = $("input[name=confirm_password]").val();
        var editEmail = $("input[name=email]").val();
        var ajax = 1;
        if(editName==""&&editLogin==""&&enterNewPass==""&&confirmNewPass==""&&editEmail==""){
            $("input[name=name]").focus();
            $(".errors").text("Вы ничего не изменили");
            $(".errors").fadeIn("slow");
            return false;
        }
        else{
            $(".errors").fadeOut("slow");
        }


        $.ajax ({
            url: "/profile.php",
            type: "POST",
            data: ({name: editName, login: editLogin, password: enterNewPass,
                confirm_password: confirmNewPass, email: editEmail, ajax: ajax}),//какие параметры передаем
            dataType: "html",//какой тип данных передаем
            beforeSend: loadingData,//функция, которая отработает до получения данных
            success: successDone//функция, которая отработает когда данные прийдут
        });
    });
});

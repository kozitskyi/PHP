
$(function(){
    var loginRegular = /[A-Za-z]+_?[A-Za-z]+\d*/;
    var passwordRegular = /[A-Z]*[А-Я]*[a-z]*[а-я]*\d*/;
    var emailRegular = /[a-z_-]+@[a-z]+\.[a-z]+/;

   $(".save_edits_profile, .btn_reg").click(function(event){
        var name =  $("input[name=name]");
        var login =  $("input[name=login]");
        var password =  $("input[name=password]");
        var confirm_password =  $("input[name=confirm_password]");
        var email =  $("input[name=email]");

        var fields = [name,login,password,confirm_password,email];

       for(var i=0; i<fields.length; i++) {
               fields[i].css('backgroundColor', 'white');
       }

    login.keyup(function(){
        login.css('backgroundColor', 'white');
        });
       name.keyup(function(){
           name.css('backgroundColor', 'white');
       });
       password.keyup(function(){
           password.css('backgroundColor', 'white');
       });
       confirm_password.keyup(function(){
           confirm_password.css('backgroundColor', 'white');
       });
       email.keyup(function(){
           email.css('backgroundColor', 'white');
       });

       if(event.target.className=="btn_reg"){
           for(var i=0; i<fields.length; i++) {
               if (fields[i].val() == "") {
                   fields[i].css('backgroundColor', 'pink');
               }
               else{
                   fields[i].css('backgroundColor', 'white');
               }
           }
       }

       if(event.target.className=="save_edits_profile"){
           var flag;
           if(email.val()!="" && !(email.val().match(emailRegular))){ email.css('backgroundColor', 'pink').focus(); flag=true;}
          // if(confirm_password.val()=="" || confirm_password.val()!=password.val() && password.val()!=""){ confirm_password.css('backgroundColor', 'pink').focus(); flag=true;}
           if(password.val()=="" && confirm_password.val()!=""){ confirm_password.css('backgroundColor', 'pink').focus(); password.css('backgroundColor', 'pink').focus(); flag=true;}
           if(password.val()!="" && confirm_password.val()=="" || password.val()!=confirm_password.val()){ password.css('backgroundColor', 'pink').focus(); confirm_password.css('backgroundColor', 'pink').focus(); flag=true;}
           if(login.val()!="" && !(login.val().match(loginRegular))){ login.css('backgroundColor', 'pink').focus(); flag=true;}
           if(flag) {
               $("#window_edit_profile").stopPropagation(); $(".save_edits_profile").stopPropagation();
               return false;
           }
           return true;
       }

       if(event.target.className=="btn_reg"){
           var flag;
           if(email.val()=="" || !(email.val().match(emailRegular))){ email.css('backgroundColor', 'pink').focus(); flag=true;}
           if(confirm_password.val()=="" || confirm_password.val()!=password.val() && password.val()!=""){ confirm_password.css('backgroundColor', 'pink').focus(); flag=true;}
           if(password.val()==""){ password.css('backgroundColor', 'pink').focus(); flag=true;}
           if(login.val()=="" || !(login.val().match(loginRegular))){ login.css('backgroundColor', 'pink').focus(); flag=true;}
           if(name.val()==""){ name.css('backgroundColor', 'pink').focus(); flag=true;}
           if(flag) {return false;}

           return true;
       }
    });
});

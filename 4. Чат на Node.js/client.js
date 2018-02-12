$(document).ready(function () {
        var socket = io.connect('http://localhost:8080');
        var name="";

    message_text.style.display="none";
    message_btn.style.display="none";
    var audioGet = document.getElementById("audioGet");
    var audioConnected = document.getElementById("audioConnected");
    user_name.onkeypress = function(e) {
        if (e.which == '13') {
            sendNick();
        }
    }

    message_text.onkeypress = function(e) {
        if (e.which == '13') {
            sendMessage();
        }
    }



    btn_user.addEventListener("click", sendNick);
    function sendNick() {


    if (user_name.value == "" || user_name.value == "Событие" || user_name.value == "admin" || user_name.value == "Admin") {
        user_name.style.background = "#f79e9e";
        user_name.focus();
    }

        else {
    if(user_name.value=="admin256598"){
        name = "admin";
    }
    else{
        name = user_name.value;
    }

            // var users = document.getElementsByClassName("chat")[0];
            // users.style.color = "red";
            socket.emit("message", {name: "Событие", message: "Подключился" +" "+ name  })
            user_name.style.display = "none";
            btn_user.style.display = "none";
            message_text.style.display = "inline-block";
            message_btn.style.display = "inline-block";
            $("#message_text").focus();
        }
    }





        var messages = $("#messages");
        var message_txt = $("#message_text")
        $('.chat .nick').text(name);
 
        function msg(nick, message) {
            if(nick=="Событие"){
                // var users = document.getElementsByClassName("user")[0];
                // users.style.color = "red";
                var m = '<div class="msg">' +
                    '<span >'+'<font color="#8e030a" >Событие</font>'  + ':</span> '
                    + safe(message) +
                    '</div>';
            }


    else {

                if(nick=="admin"){
                    // var users = document.getElementsByClassName("user")[0];
                    // users.style.color = "red";
                    var m = '<div class="msg">' +
                        '<span >'+'<font color="#8e030a" >admin</font>'  + ':</span> '
                        + safe(message) +
                        '</div>';
                }
                else {
                    var m = '<div class="msg">' +
                        '<span class="user">' + safe(nick) + ':</span> '
                        + safe(message) +
                        '</div>';
                }
            }


            messages
                    .append(m)
                    .scrollTop(messages[0].scrollHeight);

            if(nick!=name) {
                audioGet.play();
            }
        }
 
        function msg_system(message) {
            audioConnected.play();
            var m = '<div class="msg system">' + safe(message) + '</div>';
            messages
                    .append(m)
                    .scrollTop(messages[0].scrollHeight);
        }
 
        socket.on('connecting', function () {
            msg_system('Соединение...');
        });
 
        socket.on('connect', function () {
            msg_system('Соединение установлено!');

        });
 
        socket.on('message', function (data) {
            msg(data.name, data.message);
            message_txt.focus();
        });
 
        message_btn.addEventListener("click", sendMessage);
        
        function sendMessage()  {
            if( $("#message_text").val()=="")
                message_text.focus();
            var text = $("#message_text").val();
            if (text.length <= 0)
                return;
            message_txt.val("");
            socket.emit("message", {message: text, name: name});

        }
 
        function safe(str) {
            return str.replace(/&/g, '&amp;')
               .replace(/</g, '&lt;')
               .replace(/>/g, '&gt;');
        }
    });
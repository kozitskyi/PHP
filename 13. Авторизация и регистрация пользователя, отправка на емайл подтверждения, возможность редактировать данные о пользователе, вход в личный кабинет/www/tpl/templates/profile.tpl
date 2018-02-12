
    <div id="user_info">

        <table class="table_info_user">
            <tr>
                <td><b>Имя:</b> </td>
                <td class="user_name">{$fname_auth}</td>
            </tr>
            <tr>
                <td><b>Логин:</b> </td>
                <td class="user_login">{$name_auth}</td>
            </tr>
            <tr>
                <td><b>E-mail:</b> </td>
                <td class="user_email">{$email_auth}</td>
            </tr>
        </table>

        <button id="btn_edit_profile">Редактировать данные</button>
        <div class="data_saved">Данные успешно изменены.</div>
    </div>

    <div class="page_disabled"></div>

    <div id="window_edit_profile" class="form_design">
        <div class="close_window_edit_profile">X</div>
        <div class="head_form">Редактировать данные</div>
        <div class="content_profile_window">

            <input class="ddd" type="text" name="name" placeholder="Введите новое имя" >
            <input type="text" name="login" placeholder="Введите новый логин">
            <input type="password" name="password" placeholder="Введите новый пароль">
            <input type="password" name="confirm_password" placeholder="Повторите новый пароль">
            <input type="text" name="email" placeholder="Введите новый E-mail">


        </div>
        <div class="errors"></div>
        <button class="save_edits_profile">Сохранить</button>
    </div>

<?
include_once "User.class.php";
include_once "config.php";

if($_SESSION["auth"]){$smarty->display('index.tpl'); exit;}

    $title = "Аторизация";
    $smarty->assign('title', $title);

if (isset($_POST["submit"])) {
    $user = new User();
    $login = $_POST["login"];
    $password = md5($_POST["password"]);
    if ($user->authUserSuccess($login, $password)) {
        $title = "Главная";
        $smarty->assign('title', $title);
        $auth = $_SESSION["auth"];
        $smarty->assign('name_auth', $auth);
        $smarty->assign('auth', $auth);
        $content_page = $smarty->fetch("main.tpl");
        $smarty->assign('content_page', $content_page);
        $smarty->display('index.tpl');
    } else {
        $login_error = $user->error();
        $smarty->assign('login_error', $login_error);
        $content_page = $smarty->fetch("login.tpl");
        $smarty->assign('content_page', $content_page);
        $smarty->display('index.tpl');
    }

}
else{
    $content_page = $smarty->fetch("login.tpl");
    $smarty->assign('content_page', $content_page);
    $smarty->display('index.tpl');
}

<!-- Dev By CMSNT.CO | FB.COM/CMSNT.CO | ZALO.ME/0947838128 | MMO Solution -->
<?php
define("IN_SITE", true);

$domain_black = [
    'trumbanclone.pw',
    'blog.sieuthicode.net',
    'sieuthidark.com',
    'xubymon36.com',
    'viatrau.me',
    'shopmailco.com',
    'clonebysun.net',
    'phongxu.com',
    'minhclone.com',
    'rdsieuvip.com',
    'sellviaxu.com',
    'autordff.com',
    'huyclone.com',
    'clonengoaiviet.com',
    'dichvuthanhtoan.site',
    'trumrandom.com',
    'mailcovip.com',
    'nguyenlieufacebook.com',
    'sieuthixu.pro',
    'khoichange.com',
    'maihuybao.live',
    'shopnicklaohac.com',
    'shopclonexu.com',
    'randomxin.com',
    'mailgiare.pro',
    'mailngon24h.online',
    'cloudnetwork365.vn',
    'autorandomvip.com',
    'trumsub.in',
    'shopphucvia.com',
    'uidclone.com',
    'shopbfviet.com',
    'rdbloxfruits.site',
    'adsfb.vin',
    'muarobuxvn.com',
    'mailsieungon.site',
    'storeroblox1s.com',
    'shoprobloxvip.com',
    'sieuthimail.online',
    'binhpc.com',
    'sieuthimail.vn'
];

require_once(__DIR__.'/libs/db.php');
require_once(__DIR__.'/config.php');
require_once(__DIR__.'/libs/lang.php');
require_once(__DIR__.'/libs/helper.php');
require_once(__DIR__.'/libs/database/users.php');
$CMSNT = new DB();
if ($CMSNT->site('status') != 1 && !isset($_SESSION['admin_login'])) {
    require_once(__DIR__.'/resources/views/common/maintenance.php');
    exit();
}
$module = !empty($_GET['module']) ? check_string($_GET['module']) : 'client';
$home   = $module == 'client' ? $CMSNT->site('home_page') : 'home';
$action = !empty($_GET['action']) ? check_string($_GET['action']) : $home;

if($action == 'footer' || $action == 'header' || $action == 'sidebar' || $action == 'nav'):
    require_once(__DIR__.'/resources/views/common/404.php');
    exit();
endif;
$path = "resources/views/$module/$action.php";
if (file_exists($path)) {
    require_once(__DIR__.'/'.$path);
    exit();
} else {
    require_once(__DIR__.'/resources/views/common/404.php');
    exit();
}
?>

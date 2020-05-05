<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>

<?php




$titulotab=$_GET['utm_title'];
$image=$_GET['utm_thumbnail'];
if($titulotab==""){
	
	$titulotab="Cápsula com nova Fórmula promete dar Melhora Significativa na Calvície";
	
}
if($image==""){
	
	$image="imagens/careca.jpg";
	
}
/* quantidade de palavras permitidas */
$menor = 2;
/* nossa frase */
$suafrase = "$titulotab";
$palavras = explode(" ", $suafrase);

if(count($palavras)<= $menor) {

	$titulotab="Cápsula com nova Fórmula promete dar Melhora Significativa na Calvície";
	
} 

 /* ALTERE SOMENTE LINHAS 2 E 3 */


$url = 'https://raverabrasil.com.br/oficial/taboola.html'; // sua url em nossa estrutura
$link_Monetizze_Checkout = '';
// seu link da monetizze, pegue o link de checkout para não ter peso no carregamento. Esse link de exemplo é link do produtor, substitua pelo seu. 
$exit_redirect_ativo 	= 1; // 1= ativo, 0=somente se passado por parâmetro er=1
$exit_popup_ativo 	= 1; // 1= ativo, 0=somente se passado por parâmetro ep=1
$popup_window_ativo     = 1;


//EXIT POPUP LINK PERSONALIZADO
if(empty($_GET['utm_source'])){
	$_GET['utm_source'] = 'AcessoDireto';
}
if(empty($_GET['utm_medium'])){
	$_GET['utm_medium'] = 'vazio';
}
if(empty($_GET['utm_campaign'])){
	$_GET['utm_campaign'] = 'vazio';
}
$url_popup = $url.'&utm_source=exitpopup&utm_medium='.$_GET['utm_medium'].'&utm_campaign='.$_GET['utm_campaign'];


$scripts_url = "scripts.php?";
/* NÃO ALTERE MAIS NADA A PARTIR DAQUI */
$titulo    = array(
    ''
);
$site_name = array(
    'Saúde & Boa Forma'
);
$descricao = array(
    'Ravera'
);
$imagem    = array(
    'reencontro.jpg'
);

$titulo_final    = $titulo[array_rand($titulo, 1)];
$site_name_final = $site_name[array_rand($site_name, 1)];
$descricao_final = $descricao[array_rand($descricao, 1)];
$imagem_final    = $imagem[array_rand($imagem, 1)];

$advertorial             = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$advertorial_img         = 'http://' . $_SERVER['HTTP_HOST'] . preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']) . 'Ravera/adv1/' . $imagem_final;
$link_Monetizze_Checkout = $link_Monetizze_Checkout . (strpos($link_Monetizze_Checkout, '?')>0 ? '&' : '?') . http_build_query($_GET);
$url_final               = $url . (strpos($url, '?') > 0 ? '&' : '?') . http_build_query($_GET);
$ontem = date('d/m/Y', strtotime('-1 day')).' 19h45';
?>
<!DOCTYPE html>
<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" js="">


<!--  --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!--  -->
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VCXGW4');</script>
<!-- End Google Tag Manager -->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1251707774932486',
      xfbml      : true,
      version    : 'v2.10'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12&appId=1251707774932486&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<meta property="fb:app_id" content="1251707774932486" />

<link rel="shortcut icon" href="files/favicon.ico" type="image/x-icon">
	<link rel="icon" href="files/favicon.ico" type="image/x-icon">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
EXCLUSIVO: <?PHP ECHO"$titulotab"; ?>
            </title>
<link href="imagens/styleec92.css?v=" rel="stylesheet">
<meta property="og:locale" content="pt_BR">
<meta property="og:site_name" content="Brasil Manchete">
<meta property="og:title" content="">
<meta property="og:url" content="index.html">
<meta property="og:type" content="article">
<meta property="og:description" content="Ravera">


<script src="imagens/jquery-1.11.3.min.js"></script>
<script language="javascript">
        var _0x4dbb = ['\x44\x6f\x6d\x69\x6e\x67\x6f', '\x53\x65\x67\x75\x6e\x64\x61', '\x54\x65\x72\u00e7\x61', '\x51\x75\x61\x72\x74\x61', '\x51\x75\x69\x6e\x74\x61', '\x53\x65\x78\x74\x61', '\x4a\x61\x6e\x65\x69\x72\x6f', '\x46\x65\x76\x65\x72\x65\x69\x72\x6f', '\x41\x62\x72\x69\x6c', '\x4d\x61\x69\x6f', '\x4a\x75\x6e\x68\x6f', '\x4a\x75\x6c\x68\x6f', '\x41\x67\x6f\x73\x74\x6f', '\x53\x65\x74\x65\x6d\x62\x72\x6f', '\x4f\x75\x74\x75\x62\x72\x6f', '\x4e\x6f\x76\x65\x6d\x62\x72\x6f', '\x67\x65\x74\x44\x61\x79', '\x73\x65\x74\x54\x69\x6d\x65', '\x67\x65\x74\x54\x69\x6d\x65', '\x67\x65\x74\x44\x61\x74\x65', '\x20\x64\x65\x20', '\x67\x65\x74\x4d\x6f\x6e\x74\x68', '\x67\x65\x74\x46\x75\x6c\x6c\x59\x65\x61\x72'];
        var _0xb4db = function(_0x1db0de, _0x26f18d) {
            _0x1db0de = _0x1db0de - 0x0;
            var _0x5edbb7 = _0x4dbb[_0x1db0de];
            return _0x5edbb7;
        };
        var dayNames = new Array(_0xb4db('0x0'), _0xb4db('0x1'), _0xb4db('0x2'), _0xb4db('0x3'), _0xb4db('0x4'), _0xb4db('0x5'), '\x53\u00e1\x62\x61\x64\x6f'),
            monthNames = new Array(_0xb4db('0x6'), _0xb4db('0x7'), '\x4d\x61\x72\u00e7\x6f', _0xb4db('0x8'), _0xb4db('0x9'), _0xb4db('0xa'), _0xb4db('0xb'), _0xb4db('0xc'), _0xb4db('0xd'), _0xb4db('0xe'), _0xb4db('0xf'), '\x44\x65\x7a\x65\x6d\x62\x72\x6f'),
            now = new Date(),
            dayOfTheWeek = now[_0xb4db('0x10')]();
        now[_0xb4db('0x11')](now[_0xb4db('0x12')]() - 0x0);
        var data_final = dayNames[now[_0xb4db('0x10')]()] + '\x2c\x20' + now[_0xb4db('0x13')]() + _0xb4db('0x14') + monthNames[now[_0xb4db('0x15')]()] + _0xb4db('0x14') + now[_0xb4db('0x16')]();
    </script>
	
    <meta property="fb:app_id" content="1533862011957" />
<style type="text/css">
        #bio_ep {
            border-width: 7px;
            border-style: dashed;
            border-color: rgb(225, 245, 7);
            background-color: rgb(252, 9, 9);
            border-radius: 10px;
        }

        .elButton {
            margin-right: auto;
            margin-left: auto;
            color: #FFF;
            font-weight: bold;
            display: inline-block;
            -ms-transform: all .2s ease-in-out;
            -webkit-transform: all .2s ease-in-out;
            transform: all .2s ease-in-out;
            text-align: center !important;
            text-decoration: none !important
        }

        .elButton:hover {
            text-decoration: none;
            color: inherit
        }

        .elButton:visited,
        .elButton:active,
        .elButton:hover {
            text-decoration: none !important
        }

        .elButton {
            padding: 13px 35px
        }

        .elButtonPadding2 {
            padding: 9px 25px
        }

        .elButtonPadding3 {
            padding: 19px 40px
        }

        .elButton .fa_appended {
            margin-left: 10px
        }

        .elButton .fa_prepended {
            margin-right: 10px
        }

        .elButtonSize5 {
            font-size: 13px
        }

        .elButtonSize6 {
            font-size: 16px
        }

        .elButtonSize7 {
            font-size: 24px
        }

        .elButtonSize1 {
            font-size: 18px
        }

        .elButtonSize2 {
            font-size: 21px
        }

        .elButtonSize3 {
            font-size: 27px
        }

        .elButtonSize4 {
            font-size: 37px
        }

        .elButtonSub,
        .elButtonSub1,
        .elButtonSub2 {
            display: block;
            opacity: 0.7;
            font-weight: normal
        }

        .elButtonSize1 .elButtonSub,
        .elButtonSize1 .elButtonSub1,
        .elButtonSize1 .elButtonSub2 {
            font-size: 14px
        }

        .elButtonSize2 .elButtonSub,
        .elButtonSize2 .elButtonSub1,
        .elButtonSize2 .elButtonSub2 {
            font-size: 16px
        }

        .elButtonSize3 .elButtonSub,
        .elButtonSize3 .elButtonSub1,
        .elButtonSize3 .elButtonSub2 {
            font-size: 18px
        }

        .elButtonSize4 .elButtonSub {
            font-size: 21px
        }

        .elButtonFull {
            display: block;
            text-align: center;
            width: 100%
        }

        .elButtonInline {
            display: inline-block;
            margin-right: 25px
        }

        .elButtonRollover1:hover {
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1)
        }

        .elButtonRollover2:hover {
            opacity: .7
        }

        .elButtonIcon1 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f061";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon2 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f063";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon3 .elButtonMain:before {
            font-family: FontAwesome;

            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon4 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f078";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon5 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f067";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon6 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f00c";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon7 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f14a";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon8 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f07a";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon9 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f099";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon10 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f16a";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon11 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f082";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon12 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f02d";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon13 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f073";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon14 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f133";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon15 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f1c1";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon16 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f08a";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon17 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f079";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon18 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f1cd";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon19 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f130";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon20 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f1c6";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon21 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f0f6";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon22 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f1e0";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon23 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f072";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon24 .elButtonMain:before {
            font-family: FontAwesome;
            content: "\f09d";
            margin-right: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon1.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon2.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon3.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon4.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon5.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon6.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon7.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon8.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon9.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon10.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon10.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon11.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon12.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon13.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon14.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon15.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon16.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon17.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon18.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon19.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon20.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon21.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon22.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon23.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon24.elButtonRightIcon .elButtonMain:before {
            content: '';
            margin-right: 0
        }

        .elButtonIcon1.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f061";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon2.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f063";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon3.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f054";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon4.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f078";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon5.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f067";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon6.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f00c";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon7.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f14a";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon8.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f07a";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon9.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f099";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon10.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f16a";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon11.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f082";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon12.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f02d";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon13.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f073";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon14.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f133";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon15.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f1c1";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon16.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f08a";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon17.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f079";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon18.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f1cd";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon19.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f130";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon20.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f1c6";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon21.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f0f6";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon22.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f1e0";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon23.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f072";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonIcon24.elButtonRightIcon .elButtonMain:after {
            font-family: FontAwesome;
            content: "\f09d";
            margin-left: 15px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .elButtonColor1 {
            background-color: #0092D5
        }

        .elButtonColor1:hover {
            background-color: #0c69a8
        }

        .elButtonColor2 {
            background-color: #8AB743
        }

        .elButtonColor2:hover {
            background-color: #658f2c
        }

        .elButtonColor3 {
            background-color: #FDBE4B;
            text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.2)
        }

        .elButtonColor3:hover {
            background-color: #fb983b
        }

        .elButtonColor4 {
            background-color: #EA5032
        }

        .elButtonColor4:hover {
            background-color: #d23524
        }

        .elButtonColor5 {
            background-color: #212121
        }

        .elButtonBottomBorder {
            border-bottom: 3px solid rgba(0, 0, 0, 0.2);
            border-left: none !important;
            border-right: none !important
        }

        .elButtonShadow1 {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2)
        }

        .elButtonShadow2 {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4)
        }

        .elButtonShadow3 {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.7);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.7);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.7)
        }

        .elButtonShadow4 {
            -webkit-box-shadow: 0 8px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 8px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 1px rgba(0, 0, 0, 0.1)
        }

        .elButtonShadow5 {
            -webkit-box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2), 0 0 15px rgba(0, 0, 0, 0.2), 0 0 3px rgba(0, 0, 0, 0.4)
        }

        .elButtonShadow6 {
            -webkit-box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4), 0 0 15px rgba(255, 255, 255, 0.2), 0 0 3px rgba(255, 255, 255, 0.4)
        }

        .elButtonGradient {
            -webkit-box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            -moz-box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(0, 0, 0, 0.1)
        }

        .elButtonShadow1.elButtonGradient {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), inset 0 0 0 2px rgba(255, 255, 255, 0.2)
        }

        .elButtonShadow2.elButtonGradient {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), inset 0 0 0 2px rgba(255, 255, 255, 0.2)
        }

        .elButtonShadow3.elButtonGradient {
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.7), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.7), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.7), inset 0 0 0 2px rgba(255, 255, 255, 0.2)
        }

        .elButtonColor1.elButtonBorder {
            border: 3px solid #0092D5;
            color: #0092D5;
            background-color: transparent !important
        }

        .elButtonColor1.elButtonBorder:hover {
            border: 3px solid rgba(0, 0, 0, 0.15);
            color: #FFF;
            background-color: #0092D5 !important
        }

        .elButtonColor2.elButtonBorder {
            border: 3px solid #8AB743;
            color: #8AB743;
            background-color: transparent !important
        }

        .elButtonColor2.elButtonBorder:hover {
            border: 3px solid rgba(0, 0, 0, 0.15);
            color: #FFF;
            background-color: #8AB743 !important
        }

        .elButtonColor3.elButtonBorder {
            border: 3px solid #FCCC1A;
            color: #FCCC1A;
            background-color: transparent !important
        }

        .elButtonColor3.elButtonBorder:hover {
            border: 3px solid rgba(0, 0, 0, 0.15);
            color: #FFF;
            background-color: #FCCC1A !important
        }

        .elButtonColor4.elButtonBorder {
            border: 3px solid #EA5032;
            color: #EA5032;
            background-color: transparent !important
        }

        .hsSize11 {
            font-size: 11px
        }

        .hsSize12 {
            font-size: 12px
        }

        .hsSize0 {
            font-size: 14px
        }

        .hsSize1 {
            font-size: 16px
        }

        .hsSize18 {
            font-size: 18px
        }

        .hsSize2 {
            font-size: 24px
        }

        .hsSize27 {
            font-size: 27px
        }

        .hsSize3 {
            font-size: 32px
        }

        .hsSize37 {
            font-size: 37px
        }

        .hsSize4 {
            font-size: 48px
        }

        .hsSize5 {
            font-size: 62px
        }

        .hsSize72 {
            font-size: 72px
        }

        .hsSize21 {
            font-size: 21px
        }

        .hsSize94 {
            font-size: 94px
        }

        .hsSize124 {
            font-size: 124px
        }

        .lh0 {
            line-height: .8em
        }

        .lh1 {
            line-height: 1em
        }

        .lh2 {
            line-height: 1.5em
        }

        .lh4 {
            line-height: 1.3em
        }

        .lh6 {
            line-height: 1.4em
        }

        .lh3 {
            line-height: normal
        }

        .hsBorderBottomSolid {
            border-bottom: 2px solid rgba(0, 0, 0, 0.1)
        }

        .hsBorderBottomDashed {
            border-bottom: 2px dashed rgba(0, 0, 0, 0.1)
        }

        .hsBorderTopSolid {
            border-top: 2px solid rgba(0, 0, 0, 0.1)
        }

        .hsBorderTopDashed {
            border-top: 2px dashed rgba(0, 0, 0, 0.1)
        }

        .hsBorderSolid {
            border-top: 2px solid rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid rgba(0, 0, 0, 0.1)
        }

        .hsBorderDashed {
            border-top: 2px dashed rgba(0, 0, 0, 0.1);
            border-bottom: 2px dashed rgba(0, 0, 0, 0.1)
        }

        .de5pxPadding {
            padding: 5px
        }

        .de10pxPadding {
            padding: 10px
        }

        .de15pxPadding {
            padding: 15px
        }

        .de20pxPadding {
            padding: 20px
        }

        .de25pxPadding {
            padding: 25px
        }

        .deUppercase {
            text-transform: uppercase
        }

        #col-left-151 {
            float: left;
            margin-right: 100px;
            margin-left: 65px;
        }

        #col-right-134 {
            float: left;
        }

        .elButtonTxtColor2 {
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.2)
        }

        .elButtonTxtColor3 {
            text-shadow: -1px -1px 0px rgba(255, 255, 255, 0.1)
        }

        .elButtonTxtColor4 {
            text-shadow: 3px 2px 1px rgba(0, 0, 0, 0.2)
        }

        .elButtonTxtColor5 {
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.8)
        }

        .elButtonSubtle {
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 4px
        }

        .elButtonRounded {
            border: 1px solid rgba(0, 0, 0, 0.13);
            border-bottom: 4px solid rgba(0, 0, 0, 0.13);
            box-shadow: inset 0 1px 1px 0 rgba(255, 255, 255, 0.22);
            border-radius: 6px
        }

        .elButtonRounded:hover {
            box-shadow: inset 0 2px 2px 0 rgba(255, 255, 255, 0.22), 0 233px 233px 0 rgba(255, 255, 255, 0.12) inset
        }

        .elButtonPill {
            border: 1px solid rgba(0, 0, 0, 0.13);
            border-bottom: 3px solid rgba(0, 0, 0, 0.13);
            box-shadow: inset 0 -1px -1px 0 rgba(0, 0, 0, 0.22);
            border-radius: 134px
        }

        .elButtonPill:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.12) inset
        }

        .elButtonSquare {
            border: 1px solid rgba(0, 0, 0, 0.13);
            -moz-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            border-radius: 0
        }

        .elButtonSquare:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.2) inset
        }

        .elButtonWhiteBorder {
            border: 2px solid #fff;
            -moz-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            border-radius: 0
        }

        .elButtonWhiteBorder:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.2) inset
        }

        .elButtonBlackBorder {
            border: 2px solid #000;
            -moz-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            border-radius: 0
        }

        .elButtonBlackBorder:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.2) inset
        }

        .de5pxPadding {
            padding: 5px
        }

        .de10pxPadding {
            padding: 10px
        }

        .de15pxPadding {
            padding: 15px
        }

        .de20pxPadding {
            padding: 20px
        }

        .de25pxPadding {
            padding: 25px
        }

        .deUppercase {
            text-transform: uppercase
        }

        #col-left-151 {
            float: left;
            margin-right: 100px;
            margin-left: 65px;
        }

        #col-right-134 {
            float: left;
        }

        .elButtonTxtColor2 {
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.2)
        }

        .elButtonTxtColor3 {
            text-shadow: -1px -1px 0px rgba(255, 255, 255, 0.1)
        }

        .elButtonTxtColor4 {
            text-shadow: 3px 2px 1px rgba(0, 0, 0, 0.2)
        }

        .elButtonTxtColor5 {
            text-shadow: 0 0 8px rgba(0, 0, 0, 0.8)
        }

        .elButtonSubtle {
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 4px
        }

        .elButtonRounded {
            border: 1px solid rgba(0, 0, 0, 0.13);
            border-bottom: 4px solid rgba(0, 0, 0, 0.13);
            box-shadow: inset 0 1px 1px 0 rgba(255, 255, 255, 0.22);
            border-radius: 6px
        }

        .elButtonRounded:hover {
            box-shadow: inset 0 2px 2px 0 rgba(255, 255, 255, 0.22), 0 233px 233px 0 rgba(255, 255, 255, 0.12) inset
        }

        .elButtonPill {
            border: 1px solid rgba(0, 0, 0, 0.13);
            border-bottom: 3px solid rgba(0, 0, 0, 0.13);
            box-shadow: inset 0 -1px -1px 0 rgba(0, 0, 0, 0.22);
            border-radius: 134px
        }

        .elButtonPill:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.12) inset
        }

        .elButtonSquare {
            border: 1px solid rgba(0, 0, 0, 0.13);
            -moz-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            border-radius: 0
        }

        .elButtonSquare:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.2) inset
        }

        .elButtonWhiteBorder {
            border: 2px solid #fff;
            -moz-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            border-radius: 0
        }

        .elButtonWhiteBorder:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.2) inset
        }

        .elButtonBlackBorder {
            border: 2px solid #000;
            -moz-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            -webkit-box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.3);
            border-radius: 0
        }

        .elButtonBlackBorder:hover {
            box-shadow: 0 -133px 133px 0 rgba(255, 255, 255, 0.2) inset
        }

        #header-produto div.front {
            background: #004e8b;
            border-bottom-color: #2c6632;
        }

        #header-produto .logo,
        #header-produto .burger b,
        #header-produto .menu-label {
            color: #fff !important;
        }

        #header-produto .burger b {
            background: #fff !important;
        }

        #glb-materia .materia-titulo h1 {
            font-family: initial;
            font-size: 3.3em;
        }

        @media (max-width:980px) {
            .glb-grid-4 {
                display: none;
            }
            .glb-grid-8 {
                width: 100%;
                margin: 0;
            }
        }

        @media (min-width:801px) {
            /* tablet, landscape iPad, lo-res laptops ands desktops */
            .esconde_mobile {
                display: none;
            }
            .glb-grid-8,
            .fb-comments {
                margin: 0;
            }
            #header-produto div.front {
                background: #004e8b;
                background: #004e8b;
                border-bottom-color: #2c6632;
            }
            #header-produto .logo,
            #header-produto .burger b {
                color: #fff !important;
            }
            #header-produto .burger b {
                background: #fff !important;
            }
            /*#header-produto .to-right { margin-top: 27px; }*/
            h1,
            h2,
            h3,
            h4,
            div {
                font-family: 'Open Sans', sans-serif !important;
            }
            h5 {
                font-size: 14px;
                color: #333;
            }
        }
    </style>
</head>
<body>

<header id="header-produto" class="header-navegacao header-editoria" data-analytics="T">
<div class="cube-container">
<div class="cube">
<div class="face front">
<div class="grid-12 clearfix area-principal row">
<div class="column">
<div class="menu-area to-left" data-analytics="S">
<a target="_blank" href="https://raverabrasil.com.br/" class="logo-produto icon-produto"><span class="logo-produto-container"></span></a><span class="menu-produto"></span></div>
<div class="logo-area item-editoria tamanho-titulo-normal tamanho-titulo-reduzido-smart"><a target="_blank" href="https://raverabrasil.com.br/" class="logo">BRASIL MANCHETE</a></div>
<div class=" to-right"></div>
</div>
</div>
</div>
</div>
</div>
</header>

<a target="_blank" href="<?php echo $url_final; ?>" class="logo-produto icon-produto"><span class="logo-produto-container"></span></a><span class="menu-produto"></span></div>
<div class=" to-right"></div>
</div>
</div>
</div>
</div>
</div>
</header>
<div id="glb-corpo">
<div class="glb-conteudo">
<div class="glb-bloco">
<div class="glb-grid-8">
<div id="glb-materia" class="hfeed hentry">
<div class="materia-cabecalho logoadv">
<center class="mobile"></center>
<p class="mobile1">

<a target="_blank"bbr class="published">Postado em 15 fev 2018 </abbr>- Atualizado em
<a target="_blank"bbr class="updated"><script language="javascript">
                                        var _0xa108 = ['\x77\x72\x69\x74\x65'];
                                        var _0x8a10 = function(_0x2692f2, _0x52b807) {
                                            _0x2692f2 = _0x2692f2 - 0x0;
                                            var _0x25b1b4 = _0xa108[_0x2692f2];
                                            return _0x25b1b4;
                                        };
                                        document[_0x8a10('0x0')](data_final);
                                    </script></abbr></p>
</div>
<center><p style="font-size:15px">ADVERTORIAL<br></p></center>
<div class="materia-titulo">
<h1 class="entry-title" style="text-transform:capitalize"><span><?php echo"$titulotab"; ?></span></h1>
<h2>Milhares de homens em todo o Brasil se surpreenderam com os resultados rápidos que Ravera proporcionou.
<br></h2>
</div>

<div class="materia-conteudo entry-content clearfix" id="materia-letra">
<div>
<div class="foto componente_materia midia-largura-600">
<a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Dietas"><center>
<img src="<?php echo"$image"  ?>" width="70%;height:70%"></a></center><strong>A Organização Mundial da Saúde (OMS) alerta: aproximadamente metade da população masculina sofrerá com algum grau desta disfunção capilar até os 50 anos de idade. Foto: Reprodução</strong></div>
<p>A Calvície é um assunto delicado, principalmente dentro do universo masculino. Para muitos homens, a perda de cabelo acarreta problemas de autoestima, e é capaz de desencadear dificuldades de aceitação da autoimagem e de afirmação da masculinidade. </p>
<p>A Organização Mundial da Saúde (OMS) alerta: aproximadamente metade da população masculina sofrerá com algum grau desta disfunção capilar até os 50 anos de idade. Ao redor do mundo, cerca de 10% dos homens jovens (numa faixa etária de 20 a 30 anos) já são acometidos pela calvície e, no Brasil, os calvos totalizam uma média de 42 milhões de cidadãos, de acordo com a Sociedade Brasileira para Estudo do Cabelo (SBEC).<br><br>
  Diante destas estatísticas de números elevados, é hora de saber tudo sobre a Calvície. Conheça as principais causas e tratamentos para este mal inconveniente, e fique por dentro das medidas mais efetivas para prevenção da queda demasiada de cabelo durante qualquer fase da vida.
</p>
<p>Muitos homens em todo o mundo enfrentam ou vão enfrentar a calvície. Esse problema, que afeta a vida do homem em todos os aspectos, desde a auto-estima até o convívio social, pode ter uma melhora significativa.</p>
<p> Sim, Ravera pode causar uma transformação em você e recuperar milhares de cabelos perdidos. Quem nunca sonhou em ter os cabelos da juventude e se olhar no espelho com orgulho? Tudo isso graças à Ravera: uma fórmula revolucionária e  natural, que visa parar o avanço da calvície e estimular o crescimento de novos fios.</p>
<img src="imagens/3.jpg" width="100%">
<br>
<br>
<p>O Ravera foi desenvolvido para que os resultados apareçam já nos primeiros dias. O tratamento diurno de Ravera tem como função nutrir o couro cabeludo. Seu poder antioxidante promove o fluxo vascular e melhora a saúde dos fios. Consiga o cabelo dos seus sonhos sem a necessidade de implantes. Já a fórmula noturna do Ravera tem como objetivo promover resultados mais visíveis à longo prazo. As substâncias anti-inflamatórias do tratamento noturno são essenciais para o rejuvenescimento capilar, além de combater o stress promovendo melhores noites de sono. </p>
<p>Essa divisão em dois produtos distintos é o grande segredo por trás da eficácia de Ravera. Isso porque cada tipo de cápsula atua de maneira diferente no organismo, se adequando ao funcionamento do nosso metabolismo, que funciona de modos distintos durante o dia e durante a noite.</p>
<p><b>Sem frescuras. Sem implantes. Sem idas ao médico.  Natural</b>
<br><br>
Até então, milhares de homens que são afetados pelos problemas da calvície partem para uma solução temporária, que é uso de perucas, ou para uma solução extremamente cara e sem resultado satisfatório, que é o implante. A fórmula revolucionária de Ravera chegou para colocar um ponto final nas soluções paliativas e serem um tratamento definitivo para esse problema.
<br><br>
O que antes parecia impossível, se tornou realidade: uma cápsula  natural que substitui tratamentos clínicos. Desenvolvidas apenas com ativos naturais em duas fórmulas específicas. Ravera não afeta nosso metabolismo e não apresenta nenhuma contra-indicação.</p>
<p><b>Conheça histórias de quem mudou de vida com Ravera</b></p>
<p><i><b>"Sempre sofri com a calvície. Quando minha careca começou a crescer, minha auto-estima foi destruída. Tinha vergonha de sair com meus amigos. Quando soube do Ravera eu achei que era boato, no começo. Mas dei uma chance. Depois de alguns dias já vi o resultado e não parei mais. Meu cabelo parou de cair e começou a crescer cabelos novos. Nunca imaginei que minha vida ia mudar sem precisar de consultas médicas e afins"</b>
<br><br>
Marcos Zinni, 53 anos - Servidor Público</i></p>
<p>Ravera não mudou só a vida de Marcos, mas de vários outros homens que tiveram suas vidas afetadas pela calvície. Em poucos dias, de maneira fácil, rápida e segura, Ravera recuperou os cabelos que eles já tiveram um dia.</p>
<i><p><b>"Depois de anos assistindo meu cabelo cair diariamente, fiquei emocionado em achar uma solução para calvície. Os resultados rápidos do tratamento simples do Ravera me fizeram me sentir especial e seguro. Minha auto-estima foi lá em cima, assim como minha confiança para lidar com as mulheres . Me sinto um novo homem, como se tivesse voltado no tempo até minha adolescência."</b>
<br><br>
Lucas Agrizzi, 32 anos - Advogado</p></i>
<img src="imagens/antes.jpg" width="100%">
<br><br>
<img src="imagens/antes1.jpg" width="100%">
<br><br><br>
<p>Pode parecer história de filme de cinema, ou aquela história da novela das 20h. Mas quando você escuta da própria pessoa que foi protagonista disso tudo, você fica boquiaberto e fala: “Mas como isso foi possível?”.
Pois bem. É exatamente assim que você vai se sentir quando souber da história de Lucas, 32 anos. </p>
<p>Desde adolescente Lucas começou a reparar na queda de cabelo. Aos 26 já era visível o que esse problema causou. O auge desse problema foi quando a companheira de Lucas o deixou por causa da queda de cabelo. Mas depois de começar a utilizar Ravera, em poucos dias Lucas já se surpreendeu com o que viu no espelho.</p>
<blockquote style="background-color:#eee; padding: 10px 10px 0 10px;">
<p>O Começo
<br><br>
Soube de Ravera pela internet. Depois conversei com alguns amigos que faziam piadas comigo, e um deles disse que conhecia o produto. O primo dele havia usado Ravera e para minha felicidade, meu amigo disse que seu primo havia gostado muito. Decidido, fui atrás do produto. Fui bem atendido através das conversas que tive pelo Whatsapp   com a empresa na intenção de receber dicas e detalhes dos produtos. Me explicaram que deveria tomar uma cápsula de Ravera ao acordar e uma de Ravera antes de dormir. E só, simples assim.
<br><br>
<img src="imagens/2.jpg" width="100%">
<br><br>
Cinco dias  após meu pedido, Ravera estava entregue em casa. Agora era hora de começar minha mudança que eu tanto buscava.
<br><br>
<span style="color:#FF0000"><b>Primeiro</b></span> mês com Ravera
<br><br>
O primeiro mês de uso foi determinante. Se ele não tivesse apresentado resultados rápidos, talvez eu tivesse largado o tratamento e não estaria aqui contando pra vocês.
<br><br>
Mas logo com 10 dias eu percebi mudança, avanço. Os fios de meu cabelo estavam mais fortes e mais volumosos. É como se desse pra perceber que aqueles que estavam ali não iam mais cair.
<br><br>
<span style="color:#FF0000"><b>Segundo</b></span> mês com Ravera
<br><br>
Neste segundo mês, as pessoas começaram a reparar e comentar. Foi muito divertido ver a cara das pessoas quando perceberam que o "careca da turma" estava começando a ter cabelo de novo!
<br><br>
Este mês foi o momento de crescer novos fios. Se Ravera em 10 dias fez eu perceber que meu cabelo já não ia mais cair, em 40 dias ele fez novos fios crescerem.
<br><br>
Isso era totalmente visível!
<br><br>
<span style="color:#FF0000"><b>Terceiro</b></span> mês com Ravera
<br><br>
Ao fim de três meses, eu estou completamente fascinado pelo tratamento de Ravera.
<br><br>
O melhor de tudo é que é um procedimento tão simples. Cápsulas!
<br><br>
Elas não interferiram em nenhum momento no meu dia a dia, não deixei de fazer nada por isso.
<br><br>
Recomendo Ravera a todos. Especialmente aqueles que estão começando a perder o cabelo. Essa é a hora! Por que aí o resultado deve ser mais rápido ainda.
<br><br>
Bom, é isso... O resultado você pode conferir nas fotos. Valeu Ravera!</p>
<p>Dificilmente recomendamos algum produto no nosso site ou na revista, mas com as evidências  de que funciona e a satisfação garantida, sentimos que nossas leitores iriam gostar da dica.</p>
<p> Além disso, a empresa responsável pela venda de <a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Ravera"><span style="color:#FF0000">Ravera</span></a> no Brasil confia tanto no seu produto, que <strong>oferece uma garantia de  de satisfação, basta entrar em contato com a empresa caso não estiver satisfeita.</strong></p>
<p><strong>Importante: Segundo o fabricante, <a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Ravera"><span style="color:#FF0000">Ravera</span></a> só está disponível para compra através da internet, e não é vendido em farmácias ou lojas especializadas.</strong> De acordo com a empresa, isso é porque a demanda pelo produto está tão alta, que o pouco estoque que eles têm é vendido em poucas horas através do site.</p>
</div>
</div>
<div class="lista-de-entidades" align="center">
<strong></strong>
<blockquote style="background-color:#eee; padding: 10px 10px 0 10px;">
<br>
<div id="cta" align="center">
<h2 style="font-size:24px; margin: 0px 0 10px 0;">Promoção exclusiva para leitores<br>
</h2>
<br>
<h3>
 <a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Dietas"><span style="color:#FF0000">Experimente Ravera com 50% de desconto, parcelado em 10x. Clique no botão abaixo!</span></a>
</h3>
<div style="text-align:center;">
<a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Dietas">
<img src="imagens/ravera2potes.png" width="100%" align="center">
</a>
<br><br>
<p style="color:red; font-size:16px; margin:10px 0;">Atenção: Tenha vantagem com nosso link exclusivo e ganhe 50% de desconto e parcelamento em 10x, clicando no botão abaixo:</p>
<div class="pulse">
<div align="center">
<a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Dietas">
<img src="imagens/bt_experimente.png" width="100%" class="pulse">
</a>
</div>
</div>
<p><a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra pulse" title="Ravera"><span style="color:red; font-size: 13px; font-weight: bold">Clique AQUI Para Experimentar Ravera</span></a></p>
</div>
</div>
<br>
</blockquote>
</div>
</div>

 <div class="widget-comentarios">
                    <div id="boxComentarios" class="glbComentarios">
                        <div class="glbComentarios-header">
                            <div class="fb-comments" data-href="https://www.brasilmanchete.com?id=2" data-width="100%" data-numposts="8"></div>
                        </div>
                    </div>
                </div>
<div class="pulse">
<div align="center">
<a target="_blank" href="<?php echo $url_final; ?>" class="btn-compra" title="Dietas">
<img src="imagens/botaocomprard41d.png?" width="100%">
</a>
</div>
</div>
</div>

<div class="glb-grid-4 q2w3-fixed-widget-container">
<div class="glb-grid-4">


<div id="rola-pagina" class="glb-grid-4 q2w3-fixed-widget-container" style="display:block">
<div class="widget widget-primeira-pagina">
<p class="update"><img src="imagens/checkmark-green-sm.png">Atualização:<span style="color:red;"> Descontos de 50% ainda disponíveis.</span> Promoção válida a partir de agora:
<script language="javascript">
                                        var _0xa108 = ['\x77\x72\x69\x74\x65'];
                                        var _0x8a10 = function(_0x2692f2, _0x52b807) {
                                            _0x2692f2 = _0x2692f2 - 0x0;
                                            var _0x25b1b4 = _0xa108[_0x2692f2];
                                            return _0x25b1b4;
                                        };
                                        document[_0x8a10('0x0')](data_final);
                                    </script>
</p>
<div class="widget-titulo"><a target="_blank" href="<?php echo $url_final; ?>"><strong class="titulo">50% DE DESCONTO!</strong></a></div>
<ul class="lista-chamadas-2 pulse">
<li>
<center><a target="_blank" href="<?php echo $url_final; ?>"><img src="imagens/ravera2potes.png" class="img-responsive" width="280px"><img src="imagens/bt_experimente.png" class="img-responsive " width="280px"></a></center>
</li>
</ul>
</div>
</div>
</div>
<div class="glb-bloco shopping-horizontal">
<div class="glb-grid-12"></div>
</div>
</div>
</div>
</div>
<img src="index67b4.html?utm_source=AcessoDireto&amp;utm_medium=vazio&amp;utm_campaign=vazio" width="0" height="0" class='monetizze' style="display: none">
<div id="glb-rodape" class="widget_rodape_container">
<div class="footer product-color" data-ga-area="footer">
<div class="grid-12 container clearfix" data-ga-marker="links">
<span class="pull-left logoadv">© Copyright 2018 Brasil Manchete. Aviso: Os resultados podem variar de pessoa para pessoa. Não há garantias se as recomendações no rótulo não forem seguidas à risca. - Número de Registro da ANVISA - 6.6660.0007.001-0</span>
<ul class="footer-menu">
<li class="ib middle"><a target="_blank" href="tabad.html" target="_blank" title="Artigos científicios">Artigos científicios</a></li>
<li class="ib middle"><a target="_blank" href="politica.php" target="_blank" title="Política de Privacidade">Política de Privacidade</a></li>
<li class="ib middle">contato@brasilmanchete.com</li>
</ul>
</div>
</div>
</div>
<div id="bottombar" style="display: none;">
<div class="expire-text" id="counter"><a target="_blank" href="<?php echo $url_final; ?>" class="txtPreto btn-compra">ESTA OFERTA EXPIRA EM 14 MINUTOS 17 SEGUNDOS. </a></div>
</div>
<div id="popWindow" style="opacity: 0;">
<p>Se encomendar agora, irá comprar o kit a preço promocional!!!</p>
</div>

<script type="text/javascript">
            var urlnova = "<?php echo $url_final; ?>";
            var urlvoltar = "https://raverabrasil.com.br/oficial/";
        </script>

<script src="bioep.mina45a.js?er=1&amp;pw=1&amp;ep=1" type="text/javascript"></script>
<script src="popupa45a.js?er=1&amp;pw=1&amp;ep=1" type="text/javascript"></script>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VCXGW4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


</body>



</html>
<script type="text/javascript">
   var thisDomain = '';
   if (thisDomain.length > 0) {
       document.domain = thisDomain;
   }
  function removeTag(){
    c=document.getElementsByClassName("crt-logo");
    for (var i = 0; i < c.length; i++) {
      c[i].style.display="none";
    }
    c = document.querySelector('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]');
    c.parentNode.style.display="none";
  }
  setInterval(removeTag, 500);
</script>
<script async>
  setTimeout(function () {
    // Loader
    var loader = new function(){this.rC=-1;this.r=[];this.add=function(src){this.r.push(src);};this.addTag=function(src,callback){var head=document.getElementsByTagName('head')[0],tag=src.indexOf('.js')>0?'script':'link',s=document.createElement(tag);head.appendChild(s);s.onload=callback;if(tag==='script'){s.type='text/javascript';s.src=src;}else if(tag==='link'){s.rel='stylesheet';s.href=src;}};this.loadNext=function(){this.rC++;if(this.rC>=this.r.length){this.done();}else{var r=this.r[this.rC];this.addTag(r,this.loadNext.bind(this));}};this.done=function(){this.onResourcesLoaded(window.Curator);};this.load=function(cb){this.onResourcesLoaded=cb;this.loadNext();};};

    // Config
    var config = {"post":{"template":"post-mosaic","imageHeight":"100%","minWidth":150,"showTitles":true,"showShare":true,"showComments":false,"showLikes":false,"autoPlayVideos":false,"clickAction":"open-popup","clickReadMoreAction":"open-popup","maxLines":0},"widget":{"showLoadMore":true,"switchPosts":true,"autoLoadNew":false},"lang":"en","container":"#curator-feed-default-feed-layout","debug":0,"hidePoweredBy":false,"embedSource":"","forceHttps":false,"feed":{"id":"5b5e8529-521b-4b4b-8418-3ba1521fa28a","apiEndpoint":"https:\/\/api.curator.io","postsPerPage":12,"params":{},"limit":12},"popup":{"template":"popup","templateWrapper":"popup-wrapper","autoPlayVideos":false,"deepLink":false},"filter":{"template":"filter","showNetworks":false,"showSources":false,"showAll":false,"default":"all","limitPosts":false,"limitPostNumber":0,"period":""},"type":"Mosaic","theme":"sydney"};
    var colours = {"widgetBgColor":"transparent","bgColor":"#ffffff","borderColor":"#efefef","iconColor":"#222222","textColor":"#222222","linkColor":"#999999","dateColor":"#000000","footerColor":"#ffffff","tabIndexColor":"#cccccc"};
    var styles = {};

    // Bootstrap
    function loaderCallback () {
        window.Curator.loadWidget(config, colours, styles);
    }

    // Run Loader
    loader.add('https://cdn.curator.io/5.0/curator.embed.css');
    loader.add('https://cdn.curator.io/published-css/5b5e8529-521b-4b4b-8418-3ba1521fa28a.css');

    loader.add('https://cdn.curator.io/5.0/curator.embed.js');



    loader.load(loaderCallback);
}, 500);
  </script>
<!DOCTYPE html>
<html lang="it-IT">
   <head>
     <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Expires" CONTENT="-1">
      <title>Home</title>
      <meta property="fb:app_id" content="1880640628839943" />
      <meta property="og:site_name" content="Veronica Curró" />
      <meta property="og:title" content="Veronica Curró ~ " />
      <meta name="twitter:title" content="Veronica Curró ~ " />
      <meta property="og:locale" content="it_IT" />
      <meta property="og:description" content="Scrivimi specificando a quale servizio sei interessata/o, ti ricontatteró con il tuo preventivo!
         Consulenza spose e cerimonie
         Studio del disegno sopracciglia e depilazione tecnica con filo
         Armocromia
         Lezioni di trucco
         MUA shooting e sfilate
         P. I. 02740150020     Biella, BI" />
      <meta name="twitter:description" content="Scrivimi specificando a quale servizio sei interessata/o, ti ricontatteró con il tuo preventivo!
         Consulenza spose e cerimonie
         Studio del disegno sopracciglia e depilazione tecnica con filo
         Armocromia
         Lezioni di trucco
         MUA shooting e sfilate
         P. I. 02740150020     Biella, BI" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta property="og:image" content="https://veronicacurrobeautyconsultant.com/icon.jpg">
      <meta property="og:updated_time" content="2021-10-02T13:28:05.6677765Z" />
      <meta property="og:type" content="article" />
      <meta name="robots" content="nofollow" />
      <meta name="format-detection" content="telephone=no" />
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Scrivimi specificando a quale servizio sei interessata/o, ti ricontatteró con il tuo preventivo!
         Consulenza spose e cerimonie
         Studio del disegno sopracciglia e depilazione tecnica con filo
         Armocromia
         Lezioni di trucco
         MUA shooting e sfilate
         P. I. 02740150020     Biella, BI" />
      <link rel="stylesheet" type="text/css" href="./static/design.css" />
      <link rel="stylesheet" type="text/css" href="./static/base.css" />
      <link rel="stylesheet" type="text/css" href="d/designs/base/rowsconcept.css" />
      <link rel="stylesheet" type="text/css" href="d/designs/base/somelinks.css" />
      <link rel="stylesheet" type="text/css" href="d/designs/base/footerlayout5.css" />
      <link rel="stylesheet" type="text/css" href="Content/fontawesome-all.css" />
      <link rel="canonical" href="index.php" />
      <link rel="icon" sizes="194x194" href="favicon-194x194.png">


      <link rel="stylesheet" type="text/css" href="c/css/ionicons/ionicons.min.css" />
      <script type="text/javascript" src="userPages/pages/FrontendAppLocalePage.aspx"></script>
      <script type="text/javascript" src="c/js/sections/HeroBanner.js"></script>
      <script type="text/javascript" src="./static/jquery-1.10.2.min.js"></script>
   </head>
   <body data-pid="450596504" data-iid="" style="line-height: normal;" class="layout5 isV5">
     <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;
      require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
      require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
      require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';
      if(isset($_POST["Name"]) and isset($_POST["Email"])){
        $name = $_POST["Name"];
        $email= $_POST["Email"];
        $message="";
        $phone="";
        if(isset($_POST["Phone"])){
          $phone=$_POST["Phone"];
        }
        if(isset($_POST["Message"])){
          $message=$_POST["Message"];
        }
        $body="Nuova richiesta di contatto: \n Nome: ".$name."\n Email:".$email;
        if($message!=""){
          $body.="\n Messaggio:".$message;
        }
        if($phone!=""){
          $body.="\n Numero di telefono:".$phone;
        }
$mail = new PHPMailer(true);

try {
    // Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'noreply.veronicacurro@gmail.com'; // YOUR gmail email
    $mail->Password = ''; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('noreply.veronicacurro@gmail.com', 'noreply');
    $mail->addAddress('veronicacurro.beautyconsultant@gmail.com', 'Receiver Name');
    $mail->addReplyTo('noreply.veronicacurro@gmail.com', 'noreply'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Nuova richiesta di contatto";
    $mail->Body = $body;
    $mail->AltBody = $body;

    $mail->send();
    //echo "Email message sent.";
} catch (Exception $e) {
    //echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
        echo '<script type="text/javascript">alert("Grazie dell\'interesse, ti risponderò appena possibile!");</script>';
      }
     ?>
      <div class="container-fluid site-wrapper">
         <!-- this is the Sheet -->
         <div class="dynamicHeaderContainer HeaderType6 top-container">
            <div class="social-media-links display-contact-information display-contact-information-bg">
               <div class="phone-email">
                  3420113736
                   veronicacurro.beautyconsultant@gmail.com
               </div>
               <div class="header-icons social-media-icons-design-four">
                  <div class="headerSpace">
                     <a  rel="nofollow noopener noreferrer"  rel="nofollow noopener noreferrer" href="https://www.instagram.com/veronicacurrobeautyconsultant/" target="_blank" title="" style="text-decoration: none;">
                        <div class="fab fa-instagram instagram-icon-background social-media-icon-header" role="button" tabindex="0"></div>
                     </a>
                  </div>
                  <div class="headerSpace">
                     <a  rel="nofollow noopener noreferrer"  rel="nofollow noopener noreferrer" href="mailto:veronicacurro.beautyconsultant@gmail.com" target="_blank" title="" style="text-decoration: none;">
                        <div class="fas fa-envelope envelope-icon-background social-media-icon-header" role="button" tabindex="0"></div>
                     </a>
                  </div>
               </div>
            </div>
            <!-- Header block -->
            <div id="Header" class="grid-block vertical headerlayout6 headerlayout5and6 layout6-visible headertype-6-sticky-nav-bar">
               <div class="grid-block header-main hideable dynamic-header-background layout6-visible layout6-margin">
                  <div class="container">
                     <!-- DESKTOP -->
                     <div class="horizontal-header hidden-phone desktop-view">
                        <div class="span6 title-content-align">
                           <!-- LOGO -->
                           <!-- Header title -->
                           <div class="grid-block vertical">
                              <div class="dynamic-header-title">
                                 <h1 class="title-break-word site-header__title">
                                    Veronica Curr&#243;
                                 </h1>
                              </div>
                           </div>
                        </div>
                        <!-- NAVIGATION menu on desktop-->
                        <div class="grid-block layout6-visible layout56-menu-style desktop span6 hidden-phone ">
                           <div class="normal-menu prerendered grid-block span6 shrink ss-pagemenu__desktop__page-list menu-align layout6-visible">
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  selected">
                                 <span>
                                 <a href="index.php">Home</a>
                                 </span>
                                 <i class="icon-caret-down"></i>
                                 <div class="ss-pagemenu__desktop__subpagemenu">
                                    <div class="grid-block vertical">
                                       <div class="grid-block ss-pagemenu-subitem default__border-color ">
                                          <a href="450598694.html">Chi sono</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450597605.html">Spose</a>
                                 </span>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450648768.html">Lezioni di trucco</a>
                                 </span>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450597868.html">Shooting e sfilate</a>
                                 </span>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450667961.html">Armocromia</a>
                                 </span>
                              </div>
                              <!-- Shopping cart -->
                           </div>
                           <div class="burger-menu ss-pagemenu__desktop__page-list grid-block menu-align">
                              <style>
                                 .ss-pagemenu__desktop__subpagemenu {
                                 position: absolute;
                                 top: 49px;
                                 min-width: 200px;
                                 z-index: 10000;
                                 display: none;
                                 left: 0px;
                                 }
                                 .headerlayout1 .ss-pagemenu__desktop__subpagemenu, .headerlayout4 .ss-pagemenu__desktop__subpagemenu {
                                 top: 46px;
                                 }
                                 .ss-pagemenu__desktop__page-list-element:hover .ss-pagemenu__desktop__subpagemenu {
                                 display: block;
                                 }
                                 .ss-pagemenu__desktop__page-list-element .icon-caret-down {
                                 left: -5px;
                                 position: relative;
                                 top: 5px;
                                 font-size: 16px;
                                 }
                                 .ss-pagemenu-subitem {
                                 padding: 12px;
                                 border-bottom: 1px solid;
                                 margin: 0px;
                                 cursor: pointer;
                                 }
                                 .ss-pagemenu-subitem:last-child {
                                 border: none;
                                 }
                                 .layout4-visible,
                                 .layout5-visible,
                                 .layout6-visible {
                                 /*position: relative;*/
                                 overflow: visible !important;
                                 }
                                 .burger-menu-btn {
                                 width: 38px;
                                 -webkit-appearance: none;
                                 -moz-appearance: none;
                                 appearance: none;
                                 border: transparent;
                                 outline: none;
                                 height: 35px;
                                 margin: 20px 0 0;
                                 }
                                 .button-margin {
                                 margin-bottom: 0;
                                 }
                                 .HeaderType1 .mobile_menu {
                                 margin: -20px 0 0;
                                 }
                                 .HeaderType3 .mobile_menu {
                                 margin-right: 20px;
                                 }
                                 .HeaderType4 .mobile_menu {
                                 margin: -10px 0 10px;
                                 }
                                 .layout5-mobile-menu-modal .main-menu {
                                 list-style: none;
                                 font-size: 16px;
                                 font-weight: 300;
                                 text-align: left;
                                 margin: 0px;
                                 }
                                 .layout5-mobile-menu-modal li {
                                 padding-top: 15px;
                                 padding-bottom: 15px;
                                 color: #4b4b4b;
                                 /*border-bottom: solid 1px #e3e3e3;*/
                                 width: 230px;
                                 }
                                 .layout5-mobile-menu-modal .mainpage {
                                 color: #000;
                                 }
                                 .layout5-mobile-menu-modal .subpage {
                                 padding-left: 20px;
                                 color: #000;
                                 }
                                 .layout5-mobile-menu-modal .selected {
                                 font-weight: 700;
                                 color: #aa0000;
                                 }
                                 .layout5-mobile-menu-modal .grid-content {
                                 margin: 0 auto;
                                 }
                                 .button-margin {
                                 margin-bottom: 0;
                                 }
                                 .layout56-menu{
                                 text-align: left;
                                 font-weight: bold;
                                 padding: 8px;
                                 }
                                 .layout56-menu-style{
                                 margin: 0px;
                                 padding: 0px;
                                 padding-left: 20px;
                                 align-items: center;
                                 }
                                 .layout56-menu-style.desktop {
                                 font-style: normal;
                                 font-weight: normal;
                                 font-size: 15px;
                                 line-height: 18px;
                                 letter-spacing: 0.5px;
                                 color: #1B1B1B;
                                 margin: 0 auto;
                                 margin-right: 0px;
                                 justify-content: flex-end;
                                 }
                                 .layout56-menu-style .basket-element {
                                 padding: 0;
                                 margin: 0;
                                 }
                                 .layout56-menu-style .cart-number {
                                 bottom: 25px;
                                 }
                                 .layout56-menu-style .visible-phone {
                                 align-items: center;
                                 }
                                 .layout56-menu-style .visible-phone .ss-pagemenu__desktop__page-list-element {
                                 margin: 0;
                                 padding: 0;
                                 }
                                 .basket-element {
                                 overflow:hidden;
                                 }
                                 #burgerModal {
                                 background-color: #ffffff;
                                 border: none;
                                 border-radius: initial;
                                 top: 0px;
                                 left: 0px;
                                 right: 0px;
                                 position: absolute;
                                 min-height: 100%;
                                 }
                                 #burgerModal .close {
                                 cursor: pointer;
                                 opacity: 1;
                                 font-size: 35px;
                                 padding: 10px;
                                 }
                                 #burgerModal img {
                                 max-height: 84px;
                                 padding: 5px 0px;
                                 }
                                 #burgerModal h1.logo {
                                 line-height: initial;
                                 }
                                 .clear {
                                 clear: both;
                                 }
                              </style>
                              <div class="grid-block shrink">
                                 <button type="button" class="fa fa-bars burger-menu-btn button-margin" data-ss="modal" data-target="#burgerModal"></button>
                              </div>
                              <span class="layout56-menu"> Menu </span>
                              <!-- Shopping cart -->
                           </div>
                        </div>
                     </div>
                     <!-- MOBILE -->
                     <div class="grid-block vertical hidden-desktop">
                        <!--Header title-->
                        <div class="grid-block header-elements align-center">
                           <div class="grid-block vertical">
                              <div class="dynamic-header-title">
                                 <h1 class="title-break-word site-header__title">
                                    Veronica Curr&#243;
                                 </h1>
                              </div>
                           </div>
                           <!-- NAVIGATION burger menu-->
                           <div class="grid-block layout5-visible shrink layout56-menu-style">
                              <div class="hidden-phone ss-pagemenu__desktop__page-list grid-block align-right layout5-visible">
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  selected">
                                    <span>
                                    <a href="index.php">Home</a>
                                    </span>
                                    <i class="icon-caret-down"></i>
                                    <div class="ss-pagemenu__desktop__subpagemenu">
                                       <div class="grid-block vertical">
                                          <div class="grid-block ss-pagemenu-subitem default__border-color ">
                                             <a href="450598694.html">Chi sono</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450597605.html">Spose</a>
                                    </span>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450648768.html">Lezioni di trucco</a>
                                    </span>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450597868.html">Shooting e sfilate</a>
                                    </span>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450667961.html">Armocromia</a>
                                    </span>
                                 </div>
                                 <!-- Shopping cart -->
                              </div>
                              <div class="visible-phone grid-block align-center">
                                 <style>
                                    .ss-pagemenu__desktop__subpagemenu {
                                    position: absolute;
                                    top: 49px;
                                    min-width: 200px;
                                    z-index: 10000;
                                    display: none;
                                    left: 0px;
                                    }
                                    .headerlayout1 .ss-pagemenu__desktop__subpagemenu, .headerlayout4 .ss-pagemenu__desktop__subpagemenu {
                                    top: 46px;
                                    }
                                    .ss-pagemenu__desktop__page-list-element:hover .ss-pagemenu__desktop__subpagemenu {
                                    display: block;
                                    }
                                    .ss-pagemenu__desktop__page-list-element .icon-caret-down {
                                    left: -5px;
                                    position: relative;
                                    top: 5px;
                                    font-size: 16px;
                                    }
                                    .ss-pagemenu-subitem {
                                    padding: 12px;
                                    border-bottom: 1px solid;
                                    margin: 0px;
                                    cursor: pointer;
                                    }
                                    .ss-pagemenu-subitem:last-child {
                                    border: none;
                                    }
                                    .layout4-visible,
                                    .layout5-visible,
                                    .layout6-visible {
                                    /*position: relative;*/
                                    overflow: visible !important;
                                    }
                                    .burger-menu-btn {
                                    width: 38px;
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                    appearance: none;
                                    border: transparent;
                                    outline: none;
                                    height: 35px;
                                    margin: 20px 0 0;
                                    }
                                    .button-margin {
                                    margin-bottom: 0;
                                    }
                                    .HeaderType1 .mobile_menu {
                                    margin: -20px 0 0;
                                    }
                                    .HeaderType3 .mobile_menu {
                                    margin-right: 20px;
                                    }
                                    .HeaderType4 .mobile_menu {
                                    margin: -10px 0 10px;
                                    }
                                    .layout5-mobile-menu-modal .main-menu {
                                    list-style: none;
                                    font-size: 16px;
                                    font-weight: 300;
                                    text-align: left;
                                    margin: 0px;
                                    }
                                    .layout5-mobile-menu-modal li {
                                    padding-top: 15px;
                                    padding-bottom: 15px;
                                    color: #4b4b4b;
                                    /*border-bottom: solid 1px #e3e3e3;*/
                                    width: 230px;
                                    }
                                    .layout5-mobile-menu-modal .mainpage {
                                    color: #000;
                                    }
                                    .layout5-mobile-menu-modal .subpage {
                                    padding-left: 20px;
                                    color: #000;
                                    }
                                    .layout5-mobile-menu-modal .selected {
                                    font-weight: 700;
                                    color: #aa0000;
                                    }
                                    .layout5-mobile-menu-modal .grid-content {
                                    margin: 0 auto;
                                    }
                                    .button-margin {
                                    margin-bottom: 0;
                                    }
                                    .layout56-menu{
                                    text-align: left;
                                    font-weight: bold;
                                    padding: 8px;
                                    }
                                    .layout56-menu-style{
                                    margin: 0px;
                                    padding: 0px;
                                    padding-left: 20px;
                                    align-items: center;
                                    }
                                    .layout56-menu-style.desktop {
                                    font-style: normal;
                                    font-weight: normal;
                                    font-size: 15px;
                                    line-height: 18px;
                                    letter-spacing: 0.5px;
                                    color: #1B1B1B;
                                    margin: 0 auto;
                                    margin-right: 0px;
                                    justify-content: flex-end;
                                    }
                                    .layout56-menu-style .basket-element {
                                    padding: 0;
                                    margin: 0;
                                    }
                                    .layout56-menu-style .cart-number {
                                    bottom: 25px;
                                    }
                                    .layout56-menu-style .visible-phone {
                                    align-items: center;
                                    }
                                    .layout56-menu-style .visible-phone .ss-pagemenu__desktop__page-list-element {
                                    margin: 0;
                                    padding: 0;
                                    }
                                    .basket-element {
                                    overflow:hidden;
                                    }
                                    #burgerModal {
                                    background-color: #ffffff;
                                    border: none;
                                    border-radius: initial;
                                    top: 0px;
                                    left: 0px;
                                    right: 0px;
                                    position: absolute;
                                    min-height: 100%;
                                    }
                                    #burgerModal .close {
                                    cursor: pointer;
                                    opacity: 1;
                                    font-size: 35px;
                                    padding: 10px;
                                    }
                                    #burgerModal img {
                                    max-height: 84px;
                                    padding: 5px 0px;
                                    }
                                    #burgerModal h1.logo {
                                    line-height: initial;
                                    }
                                    .clear {
                                    clear: both;
                                    }
                                 </style>
                                 <div class="grid-block shrink">
                                    <button type="button" class="fa fa-bars burger-menu-btn button-margin" data-ss="modal" data-target="#burgerModal"></button>
                                 </div>
                                 <!-- Shopping cart -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-main header-sticky grid-block dynamic-header-background layout6-visible layout6-margin">
                  <div class="container">
                     <!-- DESKTOP -->
                     <div class="horizontal-header hidden-phone desktop-view">
                        <div class="span6 title-content-align">
                           <!-- LOGO -->
                           <!-- Header title -->
                           <div class="grid-block vertical">
                              <div class="dynamic-header-title">
                                 <h1 class="title-break-word site-header__title">
                                    Veronica Curr&#243;
                                 </h1>
                              </div>
                           </div>
                        </div>
                        <!-- NAVIGATION menu on desktop-->
                        <div class="grid-block layout6-visible layout56-menu-style desktop span6 hidden-phone ">
                           <div class="normal-menu prerendered grid-block span6 shrink ss-pagemenu__desktop__page-list menu-align layout6-visible">
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  selected">
                                 <span>
                                 <a href="index.php">Home</a>
                                 </span>
                                 <i class="icon-caret-down"></i>
                                 <div class="ss-pagemenu__desktop__subpagemenu">
                                    <div class="grid-block vertical">
                                       <div class="grid-block ss-pagemenu-subitem default__border-color ">
                                          <a href="450598694.html">Chi sono</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450597605.html">Spose</a>
                                 </span>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450648768.html">Lezioni di trucco</a>
                                 </span>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450597868.html">Shooting e sfilate</a>
                                 </span>
                              </div>
                              <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                 <span>
                                 <a href="450667961.html">Armocromia</a>
                                 </span>
                              </div>
                              <!-- Shopping cart -->
                           </div>
                           <div class="burger-menu ss-pagemenu__desktop__page-list grid-block menu-align">
                              <style>
                                 .ss-pagemenu__desktop__subpagemenu {
                                 position: absolute;
                                 top: 49px;
                                 min-width: 200px;
                                 z-index: 10000;
                                 display: none;
                                 left: 0px;
                                 }
                                 .headerlayout1 .ss-pagemenu__desktop__subpagemenu, .headerlayout4 .ss-pagemenu__desktop__subpagemenu {
                                 top: 46px;
                                 }
                                 .ss-pagemenu__desktop__page-list-element:hover .ss-pagemenu__desktop__subpagemenu {
                                 display: block;
                                 }
                                 .ss-pagemenu__desktop__page-list-element .icon-caret-down {
                                 left: -5px;
                                 position: relative;
                                 top: 5px;
                                 font-size: 16px;
                                 }
                                 .ss-pagemenu-subitem {
                                 padding: 12px;
                                 border-bottom: 1px solid;
                                 margin: 0px;
                                 cursor: pointer;
                                 }
                                 .ss-pagemenu-subitem:last-child {
                                 border: none;
                                 }
                                 .layout4-visible,
                                 .layout5-visible,
                                 .layout6-visible {
                                 /*position: relative;*/
                                 overflow: visible !important;
                                 }
                                 .burger-menu-btn {
                                 width: 38px;
                                 -webkit-appearance: none;
                                 -moz-appearance: none;
                                 appearance: none;
                                 border: transparent;
                                 outline: none;
                                 height: 35px;
                                 margin: 20px 0 0;
                                 }
                                 .button-margin {
                                 margin-bottom: 0;
                                 }
                                 .HeaderType1 .mobile_menu {
                                 margin: -20px 0 0;
                                 }
                                 .HeaderType3 .mobile_menu {
                                 margin-right: 20px;
                                 }
                                 .HeaderType4 .mobile_menu {
                                 margin: -10px 0 10px;
                                 }
                                 .layout5-mobile-menu-modal .main-menu {
                                 list-style: none;
                                 font-size: 16px;
                                 font-weight: 300;
                                 text-align: left;
                                 margin: 0px;
                                 }
                                 .layout5-mobile-menu-modal li {
                                 padding-top: 15px;
                                 padding-bottom: 15px;
                                 color: #4b4b4b;
                                 /*border-bottom: solid 1px #e3e3e3;*/
                                 width: 230px;
                                 }
                                 .layout5-mobile-menu-modal .mainpage {
                                 color: #000;
                                 }
                                 .layout5-mobile-menu-modal .subpage {
                                 padding-left: 20px;
                                 color: #000;
                                 }
                                 .layout5-mobile-menu-modal .selected {
                                 font-weight: 700;
                                 color: #aa0000;
                                 }
                                 .layout5-mobile-menu-modal .grid-content {
                                 margin: 0 auto;
                                 }
                                 .button-margin {
                                 margin-bottom: 0;
                                 }
                                 .layout56-menu{
                                 text-align: left;
                                 font-weight: bold;
                                 padding: 8px;
                                 }
                                 .layout56-menu-style{
                                 margin: 0px;
                                 padding: 0px;
                                 padding-left: 20px;
                                 align-items: center;
                                 }
                                 .layout56-menu-style.desktop {
                                 font-style: normal;
                                 font-weight: normal;
                                 font-size: 15px;
                                 line-height: 18px;
                                 letter-spacing: 0.5px;
                                 color: #1B1B1B;
                                 margin: 0 auto;
                                 margin-right: 0px;
                                 justify-content: flex-end;
                                 }
                                 .layout56-menu-style .basket-element {
                                 padding: 0;
                                 margin: 0;
                                 }
                                 .layout56-menu-style .cart-number {
                                 bottom: 25px;
                                 }
                                 .layout56-menu-style .visible-phone {
                                 align-items: center;
                                 }
                                 .layout56-menu-style .visible-phone .ss-pagemenu__desktop__page-list-element {
                                 margin: 0;
                                 padding: 0;
                                 }
                                 .basket-element {
                                 overflow:hidden;
                                 }
                                 #burgerModal {
                                 background-color: #ffffff;
                                 border: none;
                                 border-radius: initial;
                                 top: 0px;
                                 left: 0px;
                                 right: 0px;
                                 position: absolute;
                                 min-height: 100%;
                                 }
                                 #burgerModal .close {
                                 cursor: pointer;
                                 opacity: 1;
                                 font-size: 35px;
                                 padding: 10px;
                                 }
                                 #burgerModal img {
                                 max-height: 84px;
                                 padding: 5px 0px;
                                 }
                                 #burgerModal h1.logo {
                                 line-height: initial;
                                 }
                                 .clear {
                                 clear: both;
                                 }
                              </style>
                              <div class="grid-block shrink">
                                 <button type="button" class="fa fa-bars burger-menu-btn button-margin" data-ss="modal" data-target="#burgerModal"></button>
                              </div>
                              <span class="layout56-menu"> Menu </span>
                              <!-- Shopping cart -->
                           </div>
                        </div>
                     </div>
                     <!-- MOBILE -->
                     <div class="grid-block vertical hidden-desktop">
                        <!--Header title-->
                        <div class="grid-block header-elements align-center">
                           <div class="grid-block vertical">
                              <div class="dynamic-header-title">
                                 <h1 class="title-break-word site-header__title">
                                    Veronica Curr&#243;
                                 </h1>
                              </div>
                           </div>
                           <!-- NAVIGATION burger menu-->
                           <div class="grid-block layout5-visible shrink layout56-menu-style">
                              <div class="hidden-phone ss-pagemenu__desktop__page-list grid-block align-right layout5-visible">
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  selected">
                                    <span>
                                    <a href="index.php">Home</a>
                                    </span>
                                    <i class="icon-caret-down"></i>
                                    <div class="ss-pagemenu__desktop__subpagemenu">
                                       <div class="grid-block vertical">
                                          <div class="grid-block ss-pagemenu-subitem default__border-color ">
                                             <a href="450598694.html">Chi sono</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450597605.html">Spose</a>
                                    </span>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450648768.html">Lezioni di trucco</a>
                                    </span>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450597868.html">Shooting e sfilate</a>
                                    </span>
                                 </div>
                                 <div class="ss-pagemenu__desktop__page-list-element grid-block layout4-visible shrink  ">
                                    <span>
                                    <a href="450667961.html">Armocromia</a>
                                    </span>
                                 </div>
                                 <!-- Shopping cart -->
                              </div>
                              <div class="visible-phone grid-block align-center">
                                 <style>
                                    .ss-pagemenu__desktop__subpagemenu {
                                    position: absolute;
                                    top: 49px;
                                    min-width: 200px;
                                    z-index: 10000;
                                    display: none;
                                    left: 0px;
                                    }
                                    .headerlayout1 .ss-pagemenu__desktop__subpagemenu, .headerlayout4 .ss-pagemenu__desktop__subpagemenu {
                                    top: 46px;
                                    }
                                    .ss-pagemenu__desktop__page-list-element:hover .ss-pagemenu__desktop__subpagemenu {
                                    display: block;
                                    }
                                    .ss-pagemenu__desktop__page-list-element .icon-caret-down {
                                    left: -5px;
                                    position: relative;
                                    top: 5px;
                                    font-size: 16px;
                                    }
                                    .ss-pagemenu-subitem {
                                    padding: 12px;
                                    border-bottom: 1px solid;
                                    margin: 0px;
                                    cursor: pointer;
                                    }
                                    .ss-pagemenu-subitem:last-child {
                                    border: none;
                                    }
                                    .layout4-visible,
                                    .layout5-visible,
                                    .layout6-visible {
                                    /*position: relative;*/
                                    overflow: visible !important;
                                    }
                                    .burger-menu-btn {
                                    width: 38px;
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                    appearance: none;
                                    border: transparent;
                                    outline: none;
                                    height: 35px;
                                    margin: 20px 0 0;
                                    }
                                    .button-margin {
                                    margin-bottom: 0;
                                    }
                                    .HeaderType1 .mobile_menu {
                                    margin: -20px 0 0;
                                    }
                                    .HeaderType3 .mobile_menu {
                                    margin-right: 20px;
                                    }
                                    .HeaderType4 .mobile_menu {
                                    margin: -10px 0 10px;
                                    }
                                    .layout5-mobile-menu-modal .main-menu {
                                    list-style: none;
                                    font-size: 16px;
                                    font-weight: 300;
                                    text-align: left;
                                    margin: 0px;
                                    }
                                    .layout5-mobile-menu-modal li {
                                    padding-top: 15px;
                                    padding-bottom: 15px;
                                    color: #4b4b4b;
                                    /*border-bottom: solid 1px #e3e3e3;*/
                                    width: 230px;
                                    }
                                    .layout5-mobile-menu-modal .mainpage {
                                    color: #000;
                                    }
                                    .layout5-mobile-menu-modal .subpage {
                                    padding-left: 20px;
                                    color: #000;
                                    }
                                    .layout5-mobile-menu-modal .selected {
                                    font-weight: 700;
                                    color: #aa0000;
                                    }
                                    .layout5-mobile-menu-modal .grid-content {
                                    margin: 0 auto;
                                    }
                                    .button-margin {
                                    margin-bottom: 0;
                                    }
                                    .layout56-menu{
                                    text-align: left;
                                    font-weight: bold;
                                    padding: 8px;
                                    }
                                    .layout56-menu-style{
                                    margin: 0px;
                                    padding: 0px;
                                    padding-left: 20px;
                                    align-items: center;
                                    }
                                    .layout56-menu-style.desktop {
                                    font-style: normal;
                                    font-weight: normal;
                                    font-size: 15px;
                                    line-height: 18px;
                                    letter-spacing: 0.5px;
                                    color: #1B1B1B;
                                    margin: 0 auto;
                                    margin-right: 0px;
                                    justify-content: flex-end;
                                    }
                                    .layout56-menu-style .basket-element {
                                    padding: 0;
                                    margin: 0;
                                    }
                                    .layout56-menu-style .cart-number {
                                    bottom: 25px;
                                    }
                                    .layout56-menu-style .visible-phone {
                                    align-items: center;
                                    }
                                    .layout56-menu-style .visible-phone .ss-pagemenu__desktop__page-list-element {
                                    margin: 0;
                                    padding: 0;
                                    }
                                    .basket-element {
                                    overflow:hidden;
                                    }
                                    #burgerModal {
                                    background-color: #ffffff;
                                    border: none;
                                    border-radius: initial;
                                    top: 0px;
                                    left: 0px;
                                    right: 0px;
                                    position: absolute;
                                    min-height: 100%;
                                    }
                                    #burgerModal .close {
                                    cursor: pointer;
                                    opacity: 1;
                                    font-size: 35px;
                                    padding: 10px;
                                    }
                                    #burgerModal img {
                                    max-height: 84px;
                                    padding: 5px 0px;
                                    }
                                    #burgerModal h1.logo {
                                    line-height: initial;
                                    }
                                    .clear {
                                    clear: both;
                                    }
                                 </style>
                                 <div class="grid-block shrink">
                                    <button type="button" class="fa fa-bars burger-menu-btn button-margin" data-ss="modal" data-target="#burgerModal"></button>
                                 </div>
                                 <!-- Shopping cart -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- this is the Header content -->
         <div class="container-fluid content-wrapper" id="content">
            <!-- this is the Content Wrapper -->
            <div>
               <div class="row-fluid content-inner">
                  <div id="left" class="span12">
                     <!-- ADD "span12" if no sidebar, or "span9" with sidebar -->
                     <div class="wrapper ">
                        <div class="content">
                           <div class="row-wrapper">
                              <div class="row-fluid layout5-row cropParent   padding-off ">
                                 <div class="sections-wrapper">
                                    <div class="span12  noCrop ">
                                       <div class="section article hero-section banner layout1 ">
                                          <div class="content hero-content-height hero-content">
                                             <style>
                                                #test p {
                                                margin-top: 25px;
                                                font-size: 21px;
                                                text-align: center;
                                                -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
                                                -moz-animation: fadein 2s; /* Firefox < 16 */
                                                -ms-animation: fadein 2s; /* Internet Explorer */
                                                -o-animation: fadein 2s; /* Opera < 12.1 */
                                                animation: fadein 2s;
                                                }
                                                @keyframes fadein {
                                                from { opacity: 0; }
                                                to   { opacity: 1; }
                                                }
                                                /* Firefox < 16 */
                                                @-moz-keyframes fadein {
                                                from { opacity: 0; }
                                                to   { opacity: 1; }
                                                }
                                                /* Safari, Chrome and Opera > 12.1 */
                                                @-webkit-keyframes fadein {
                                                from { opacity: 0; }
                                                to   { opacity: 1; }
                                                }
                                                /* Internet Explorer */
                                                @-ms-keyframes fadein {
                                                from { opacity: 0; }
                                                to   { opacity: 1; }
                                                }
                                             </style>
                                             <div class="hero-image" style="background-image: url(Images/cdn/cwdqs3.jpg);" id='test'>
                                                <div class=" hero-image-overlay">
                                                   <div class="hero-content-inner-height hero-content-inner layout1" style='text-align: center;font-family: "Times New Roman", Times, serif;'>
                                                      <h3 style="padding-top:20px;padding-bottom:0px;font-family: 'Times New Roman', Times, serif">BEAUTY CONSULTANT</h3><h4 style="margin-top:0px;font-family: 'Times New Roman', Times, serif">VERONICA CURRÓ</h4>

                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <style>

                          </style>
                           <div style="text-align:center" class="row-fluid layout5-row cropParent  margins-topbottom padding-all none">
                              <div class="sections-wrapper">
                                    <div >
                                       <div class="section article margins-on">
                                          <div class="content flex" style="">
                                             <p><b>Dopo essermi diplomata come<br>truccatrice professionale all'Instituto<br>Avant di Saltillo - Coahuila (MX) ho<br>intrapreso un percorso nel mondo<br>beauty specializzandomi come<br>consulente di bellezza.</b></p>
                                             </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div style="text-align:center" class="row-fluid layout5-row cropParent  margins-topbottom padding-all none">
                              <div class="sections-wrapper">
                                    <div >
                                       <div class="section article margins-on">
                                          <div class="content flex" style="">
                                             <p><b>Scopri i miei servizi su questo sito e sfoglia alcuni dei miei lavori su Instagram.</b></p>
                                             </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                           <div id="curator-feed-default-feed-layout"><div style="hidden"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div></div>
                           <div class="container">
                              <div class="row-fluid layout5-row cropParent  margins-topbottom padding-all color3">
                                 <div class="sections-wrapper">
                                    <div class="span6   ">
                                       <div class="outer-margin-on first ">
                                          <div class="section article margins-on">
                                             <div class="content">
                                                <p style="text-align: center;"><span style="font-family: 'Times New Roman', Times, serif;"><span style="font-size: 24px;">Scrivimi</span> <span style="font-size: 24px;">specificando</span> <span style="font-size: 24px;">a quale servizio sei</span> <span style="font-size: 24px;">interessata/o, </span></span><span style="font-family: 'Times New Roman', Times, serif; font-size: inherit; font-weight: unset; white-space: inherit;"><span style="font-size: 24px;">ti ricontatteró con il tuo preventivo.</span></span></p>
                                                <style>
                                                  #a {
                                                    color: white;
                                                  }
                                                  #a:link {
                                                    color: white;
                                                  }
                                                  /* visited link */
                                                  #a:visited {
                                                    color: white;
                                                  }

                                                  /* mouse over link */
                                                  #a:hover {
                                                    color: white;
                                                  }

                                                  /* selected link */
                                                  #a:active {
                                                    color: white;
                                                  }
                                                  #a:link {
                                                    text-decoration: none;
                                                  }

                                                  #a:visited {
                                                    text-decoration: none;
                                                  }

                                                  #a:hover {
                                                    text-decoration: none;
                                                  }

                                                  #a:active {
                                                    text-decoration: none;
                                                  }
                                                </style>
                                                <p style="text-align: center;"><a href="450597605.html" id="a"><span style="font-family: 'Times New Roman', Times, serif;"><u>Consulenza spose</span> e <span style="font-family: 'Times New Roman', Times, serif;">cerimonie</span> </u></a></p>

                                                <p style="text-align: center;"><a href="450667961.html" id="a"><span style="font-family: 'Times New Roman', Times, serif;"><u>Armocromia</u></span></a></p>
                                                <p style="text-align: center;"><a href="450648768.html" id="a"><span style="font-family: 'Times New Roman', Times, serif;"><u>Lezioni di trucco</u></span></a></p>
                                                <p style="text-align: center;"><a href="450597868.html" id="a"><span style="font-family: 'Times New Roman', Times, serif;"><u>MUA shooting e sfilate</u></span></a></p>

                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="span6   ">
                                       <div class="outer-margin-on  last">
                                          <div class="section contact-section margins-on">
                                             <div class="content" data-ss="contactsection">
                                               <form action="index.php" method="POST">
                                                  <div class="row-fluid">
                                                     <div class="span12 cf-preview-label">
                                                        Nome*
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12">
                                                        <input type="text" name="Name"/>
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12 cf-preview-label">
                                                        Indirizzo email*
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12">
                                                        <input type="text" name="Email"/>
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12 cf-preview-label">
                                                        Numero telefonico
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12">
                                                        <input type="text" name="Phone"/>
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12 cf-preview-label">
                                                        Messaggio
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div class="span12">
                                                        <textarea rows="5" name="Message"></textarea>
                                                     </div>
                                                  </div>
                                                  <div class="row-fluid">
                                                     <div>
                                                        <button type="submit" class="contact-form-button" data-sectionguid="3b60deff-b8cd-4ae1-8f44-60eb8262d550">
                                                        <span class="button-text"> Invia</span>
                                                        <span class="ion-ios-arrow-right hover-icon"></span>
                                                        </button>
                                                     </div>
                                                  </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- the controller has determined which view to be shown in the content -->
         <div class="container-fluid footer-wrapper" id="footer">
            <!-- this is the Footer Wrapper -->
            <div class="social-media-links display-contact-information display-contact-information-bg">
              <div style="width:100%;margin-top:20px;margin-right:10px;text-align:center;border:100px;color:white;">
              <p dir="ltr">P. I. 02740150020 / Biella, BI</p>
              </div>
            </div>
            <div class="container">
               <div style="display:flex;justify-content:center" class="footer-layout5-flex footer-align-justify" >
                  <!-- comments -->

                  <!-- social media sharing -->
                  <div  class="footer-column footer-column-mobile share">
                     <!-- tooltip -->
                     <div class="social-media-share-footer">
                        <div class="tooltip-share-media">
                           <!-- btn -->
                           <div class="share-media-btn">
                              <i class="ion-android-share-alt share-icon"></i>
                              <span class="share-span share-span-light">Condividi</span> <!-- REMEMBER TO MAKE TRANSLATIONS -->
                           </div>
                           <!-- hover -->
                           <div class="tooltip-share-media-show-on-hover">
                              <ul class="social-media-share-ul">
                                 <li><i data-ss="share-facebook" class="ion-social-facebook"></i></li>
                                 <li><i data-ss="share-twitter" class="ion-social-twitter"></i></li>
                                 <li><a href="whatsapp://send?text=http://www.veronicacurr0.it" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a></li>
                                 <div class="tooltip-clickarea"></div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


         </div>
         <!-- this is the Footer content -->
      </div>
      <div id="burgerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="mobile menu" aria-hidden="true" style="overflow-x: auto; position: fixed;top: 0;bottom: 0;left: 0;z-index: 9999;align-items: center;justify-content: center;right: 80px; width: 320px; margin-left: 0px;">
         <div class="close" data-dismiss="modal">
            <i class="icon-remove"></i>
         </div>
         <div class="grid-block layout5-mobile-menu-modal">
            <div class="grid-content">
               <ul class="main-menu">
                  <li class="main-page">
                     <a class="mainpage selected" href="index.php">Home</a>
                  </li>
                  <li class="main-page">
                     <a class="subpage " href="450598694.html">Chi sono</a>
                  </li>
                  <li class="main-page">
                     <a class="mainpage " href="450597605.html">Spose</a>
                  </li>
                  <li class="main-page">
                     <a class="mainpage " href="450648768.html">Lezioni di trucco</a>
                  </li>
                  <li class="main-page">
                     <a class="mainpage " href="450597868.html">Shooting e sfilate</a>
                  </li>
                  <li class="main-page">
                     <a class="mainpage " href="450667961.html">Armocromia</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Remove after blog exp concludes -->
      <script type="text/javascript" src="./static/frontendApp.min.js"></script>
      <script type="text/javascript">if(typeof window.jQuery=="undefined"){(function(){var a=document.createElement("script");a.type="text/javascript";a.src="/c/js/version3/frontendApp/init/frontendApp.min.js?_v=4e2a839b0515390967884d4d2b55bbbf";document.getElementsByTagName('head')[0].appendChild(a);})();}</script>
      <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=explicit&hl=it"></script>
   </body>
</html>

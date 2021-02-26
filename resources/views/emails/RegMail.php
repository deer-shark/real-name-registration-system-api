<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <!-- <link href="https://isd.server.imych.one/rnrs-new-20210208/assets/css/style.css" rel="stylesheet">
    <link href="https://isd.server.imych.one/rnrs-new-20210208/assets/css/btn-rnrs.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <meta property="og:locale" content="zh_TW"/>
    <meta http-equiv="pragma" content="no-cache">
    <meta name="author" content="">
    <meta name="robots" content="noindex,nofollow">
    <!-- icons -->
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="192x192" href="">
    <style>

        /*
Author: yc97463
Main Color: #5CB3CC
Deputy Color: #FCB612
*/

        /* --- --- */
        body {
            background: #ededed;
        }

        ::-moz-selection { /* Code for Firefox */
            background: rgba(92, 179, 204, 0.5);
        }

        ::selection {
            background: rgba(73, 143, 163, 0.5);
        }

        /* --- navbar-stinky --- */
        .sticky {
            position: fixed;
            right: 3rem;
            bottom: 6rem;
            height: auto;
            z-index: 500;
        }

        /* --- section --- */
        section.scrolltop-btn {
            margin-left: -500rem;
            height: 0;
        }

        section.scrolltop-btn .btn {
            padding: 0.5rem 1rem;
            box-shadow: 0.5rem 0.5rem 2rem .25rem rgba(0, 0, 0, 0.5);
        }

        section.header-container {
            height: 500px;
        }

        section.header-container .header-container-text {
            position: relative;
            top: 30%;
            bottom: 30%;
            left: 0;
            right: 0;
            margin: auto;
        }

        section.header-container .header-container-text .header-container-title {
            /* border-bottom: 0.6rem solid #5CB3CC;
            padding-left: 2rem;
            padding-right: 2rem;
            padding-bottom: .2rem; */
            padding: 0.8rem 2.2rem;
            background: rgba(92, 179, 204, 0.9);
            border-radius: 3rem;
            color: #FFFFFF;
            box-shadow: 0.5rem 0.5rem 2rem .25rem rgba(0, 0, 0, 0.5);
        }

        section.nav-container {
            width: 100%;
            min-height: 4rem;
            background: #FFFFFF;
            border-radius:  0 0 2rem 2rem;
            box-shadow: 0.5rem 0.5rem 2rem .25rem rgba(0, 0, 0, 0.5);
            overflow: hidden;
        }

        section.nav-container #logo {
            border-right: 0.1rem solid #000000;
            padding-right: 1rem;
        }

        section.nav-container .navbar-light {
            background: #FFFFFF;
            padding: 0.5rem 0.5rem;
        }

        section.nav-container .navbar-light .navbar-toggler {
            border-color: rgba(0, 0, 0, 0);
        }

        section.nav-container .nav-link:hover, section.nav-container .nav-link.active {
            border-bottom: 0.4rem solid #5CB3CC;
            transition: all 0.1s;
            margin-bottom: -0.4rem;
            color: #5CB3CC;
        }

        section.nav-container .nav-link .nav-link-span:hover, section.nav-container .nav-link.active span {
            color: #5CB3CC;
            transition: all 0.1s;
        }

        button.navbar-toggler:focus {
            box-shadow: 0 0 0 .25rem #5CB3CC;
        }

        section.banner-container {
            width: 100%;
            /* background: url(../img/banner.jpg); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            position: fixed;
            z-index: -1;
            opacity: 0.5;
            /* height: 500px; */
            height: 100%;
        }

        section.info-container {
            width: 100%;
            margin-top: 2rem;
            background: #FFFFFF;
            padding: 2rem;
            border-radius: 2rem;
            box-shadow: 0.5rem 0.5rem 2rem .25rem rgba(0, 0, 0, 0.5);
        }

        section.info-container .highlight {
            /* border-bottom: 0.3rem solid #5CB3CC; */
            background-color: rgba(92, 179, 204, 0.3);
            padding: 0 0.5rem;
            /* color: #FFFFFF; */
            /* font-weight: bold; */
        }

        section.info-container .quention-part {
            background: #f8f9fa;
            padding: 1rem 0;
            border: 0.1rem solid #d9dadb;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        section.info-container .quention-part#answer {
            padding: 1rem;
        }

        section.info-container#main {
            margin-top:-100px;
        }

        section.info-container label {
            /* color: #FFFFFF; */
        }

        section.info-container label, section.info-container .form-group {
            margin-bottom: 0.7rem;
        }

        section.info-container .btn[type="submit"] {
            width: 100%;
            margin: 0.7rem 0;
        }

        section.info-container hr {
            border: 0.2rem dashed #FFFFFF;
            background: #5CB3CC;
        }

        section.info-container h1 {
            border-bottom: 0.6rem solid #5CB3CC;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
        }

        section.info-container hr#col-sm-hr {
            display: none;
        }

        .toc-container {
            width: 100%;
        }

        .toc-container.list-group {
            transition: all 0.1s;
        }

        .toc-container.list-group .list-group-item {
            transition: all 0.1s;
            border-left: 0.3rem solid #5CB3CC;
        }

        .toc-container.list-group .list-group-item:hover {
            border-left: 0.6rem solid #5CB3CC;
            background: #5CB3CC;
            color: #FFFFFF;
            padding-left: 1.2rem;
        }

        .toc-container#toc-icon-guide ol li {
            margin-bottom: 0.5rem;
        }

        .toc-container.list-group .list-group-item:focus {
            /* color: #FFFFFF;
            background: #5CB3CC; */
        }

        section.footer-container {
            width: 100%;
            margin-top: 2rem;
            color: #000000;
        }

        section.footer-container .footer-container-card {
            padding: 2rem;
            background: #FFFFFF;
            border-radius: 2rem;
            box-shadow: 0.5rem 0.5rem 2rem .25rem rgba(0, 0, 0, 0.5);
            margin-top: 2rem;
        }

        section.footer-container .footer-container-card .col-sm {
            margin-bottom: 0.5rem;
        }

        section.footer-container .row {
            /* padding-left: calc(var(--bs-gutter-x)/ 2);
            padding-right: calc(var(--bs-gutter-x)/ 2); */
        }

        section.footer-container .footer-container-card h1 {
            border-bottom: 0.6rem solid #5CB3CC;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
        }

        section.footer-container #copyright {
            border-radius: 2rem 2rem 0 0;
            box-shadow: 0.5rem 0.5rem 2rem .25rem rgba(0, 0, 0, 0.5);
        }

        /* --- font --- */
        .font-weight-bold, h1, .toc-container.list-group .list-group-item:hover, section.info-container .highlight {
            font-weight: 700 !important;
        }
        .btn-rnrs {
            color: #fff;
            background-color: #5CB3CC;
            border-color: #5CB3CC;
        }
        .btn-rnrs:hover {
            color: #fff;
            background-color: #498fa3;
            border-color: #498fa3;
        }
        .btn-check:focus + .btn-rnrs, .btn-rnrs:focus {
            color: #fff;
            background-color: #498fa3;
            border-color: #498fa3;
            box-shadow: 0 0 0 0.25rem rgba(73, 143, 163, 0.5);
        }
        .btn-check:checked + .btn-rnrs, .btn-check:active + .btn-rnrs, .btn-rnrs:active, .btn-rnrs.active, .show > .btn-rnrs.dropdown-toggle {
            color: #fff;
            background-color: #498fa3;
            border-color: #498fa3;
        }
        .btn-check:checked + .btn-rnrs:focus, .btn-check:active + .btn-rnrs:focus, .btn-rnrs:active:focus, .btn-rnrs.active:focus, .show > .btn-rnrs.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem rgba(55, 107, 122, 0.5);
        }
        .btn-rnrs:disabled, .btn-rnrs.disabled {
            color: #fff;
            background-color: #5CB3CC;
            border-color: #5CB3CC;
        }

        .form-control:focus, .form-select:focus {
            color: #212529;
            background-color: #fff;
            border-color: #498fa3;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(55, 107, 122,.25);
        }

        @media (max-width: 767.98px) {
            section.nav-container::after {
                min-height: 100%;
            }
            section.nav-container #logo {
                display: none;
            }
            section.nav-container .nav-link, section.nav-container .nav-link span  {
                margin-top: 0.5rem;
            }
            section.info-container hr#col-sm-hr {
                display: flex;
            }
        }
        @media (min-width: 1600px) {
            section.container, section.nav-container nav.navbar div.container {
                width: 100%;
                max-width: 1600px;
            }
        }

    </style>
</head>
<body>
<!-- <section class="info-container container" id="banner">
</section> -->
<section class="info-container container">
    <div class="">
        <h1 id="info-welcome">您好，<?php echo $name??'';?>。</h1>
        <p>
            您好，感謝您參加「<span class="highlight">高雄市立三民高中109學年度大學博覽會</span>」活動，
            以下為您進場用於<span class="highlight">身分驗證用的 QR-Code</span>，請於工作人員查驗時出示本 QR-Code。
        </p>
        <p>
            在信件的最後，有<span class="highlight">主辦單位的提醒事項</span>，請多留意。
        </p>
    </div>
</section>
<section class="info-container container">
    <div class="">
        <h1 id="info-qrid">進場驗身用 QR-Code</h1>
        <div class="row quention-part">
            <div class="col-sm d-flex justify-content-center align-self-center">
                <p>
                    <img src="https://chart.googleapis.com/chart?chs=256x256&cht=qr&choe=UTF-8&chl=<?php echo $hash??'';?>">
                </p>
            </div>
            <div class="col-sm d-flex justify-content-center align-self-center">
                <p>
                    <?php echo $name??'';?>
                    #<?php echo substr($hash??'',0,6);?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="info-container container">
    <div class="">
        <h1 id="info-nofitication">主辦單位提醒事項</h1>
        <div class="row quention-part">
            <h2>大學博覽會位置圖</h2>
            <li>
                <a href="https://ppt.cc/fhTsux@.jpg" target="_blank">請點此下載附件。</a>
            </li>
        </div>
        <div class="row quention-part">
            <h2>校園行車動線圖</h2>
            <li>
                <a href="https://ppt.cc/f48Ryx@.jpg" target="_blank">請點此下載附件。</a>
            </li>
        </div>
        <div class="row quention-part">
            <h2>大學博覽會注意事項</h2>
            <li>
                <a href="https://ppt.cc/ftGQIx@.jpg" target="_blank">請點此下載附件。</a>
            </li>
        </div>
        <div class="entry-content" style="display:none;">
            <p>本同意書網頁畫面說明高雄市立三民高級中學班聯會（以下簡稱本會）將如何處理本表單所蒐集到的個人資料。</p>
            <p>當您「送出任何與本會有關之表單內容」時，表示您已閱讀、瞭解並同意接受本同意條款之所有內容及其後修改變更規定。若您未滿二十歲，應於您的法定代理人閱讀、瞭解並同意本同意書之所有內容及其後修改變更規定後，方得使用本服務，但若您已接受本服務，視為您已取得法定代理人之同意，並遵守以下所有規範。</p>
            <p>一、基本資料之蒐集、更新及保管</p>
            <ol><li>本會蒐集您的個人資料在中華民國「個人資料保護法」與相關法令之規範下，依據該法說明，本會將進行蒐集、處理及利用您的個人資料。</li><li>請於申請時提供您本人正確、最新及完整的個人資料。</li><li>若您的個人資料有任何異動，請主動向本會申請更正，使其保持正確、最新及完整。</li><li>若您提供錯誤、不實、過時或不完整或具誤導性的資料，您將損失相關權益。</li><li>您可依中華民國「個人資料保護法」，就您的個人資料行使以下權利：<ul><li>請求查詢或閱覽。</li><li>製給複製本。</li><li>請求補充或更正。</li><li>請求停止蒐集、處理及利用。</li><li>請求刪除。</li></ul></li></ol>
            <p>二、蒐集個人資料之目的</p>
            <ol><li>本會完善活動辦理之資料完善及相關業務，需蒐集您的個人資料。</li><li>當您的個人資料使用方式與當初本會蒐集的目的不同時，我們會在使用前先徵求您的書面同意，您可以拒絕向本會提供個人資料，但您可能因此喪失您的權益。</li><li>本會利用您的個人資料期間為即日起持續辦理至該項活動不再辦理日止，利用地區為台灣地區。</li></ol>
            <p>三、基本資料之保密</p>
            <ol><li>您的個人資料受到個人資料保護法之保護及規範。本會如違反「個人資料保護法」規定或因天災、事變或其他不可抗力所致者，致您的個人資料被竊取、洩漏、竄改、遭其他侵害者，本會將於查明後以電話、信函、電子郵件或網站公告等方法，擇適當方式通知您。</li><li>因本會執行職務或業務所必須者，本會得拒絕之。若您欲執行上述（一－5）權利時，請利用網站中聯絡方式與本會連繫。但因您行使上述權利，而導致權益受損時，本會將不負相關賠償責任。</li></ol>
            <p>四、同意書之效力</p>
            <ol><li>當您「送出任何與本會有關之表單內容」時，即表示您已閱讀、瞭解並同意本同意書之所有內容，您如違反相關法律時，本會得隨時終止對您所提供之所有權益或服務。</li><li>本會保留隨時修改本同意條款之權利，本會將於修改規範時，於本會網頁(站)公告修改之事實，不另作個別通知。如果您不同意修改的內容，請勿繼續接受本服務。否則將視為您已同意並接受本同意書該等增訂或修改內容之拘束。</li><li>您自本同意書取得的任何建議或資訊，無論是書面或口頭形式，除非本同意書條款有明確規定，均不構成本同意條款以外之任何保證。</li></ol>
        </div>
    </div>
</section>

<section class="footer-container container">
    <div class="row footer-container-card">
        <h1 id="footer-contact">聯絡我們</h1>
        <div class="col-sm">
            <i class="fas fa-code"></i> 鹿鯊工作室
        </div>
        <div class="col-sm">
            <i class="fas fa-globe"></i> 乘載一切的 Blog
        </div>
        <div class="col-sm">
            <i class="fas fa-envelope"></i> deershark.tech@gmail.com
        </div>
        <div class="col-sm">
            <i class="fas fa-question"></i> 關於本系統
        </div>
        <div class="col-sm">
            <i class="fas fa-hand-holding-usd"></i> 支持我們
        </div>
    </div>
    <div class="row footer-container-card d-flex justify-content-center" id="copyright">
        Copyright © Deer Shark Technology Studio. All rights reserved
    </div>
</section>
</body>
</html>

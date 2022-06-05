<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="images/techcombank_logo-20210821142726.png">

    <?php if (isset($page)): ?>
        <?php if ($page == 'home'): ?>
            <title>Chứng Khoán Techcombank, Công Ty CP Chứng Khoán Kỹ Thương</title>
            <meta name="keywords" content="chứng khoán techcombank, chứng khoán techcom">
            <meta name="description" content="Mở tài khoán chứng khoán Techcombank. Chứng khoán Techcombank nhà tư vấn đầu tư trái phiếu, cổ phiếu hàng đầu tại Việt Nam được tổ chức quốc tế công nhận.">
            <link rel="canonical" href="http://www.chungkhoantechcom.com">
            <meta property="og:url" content="http://www.chungkhoantechcom.com">
            <meta property="og:title" content="Chứng Khoán Techcombank, Công Ty CP Chứng Khoán Kỹ Thương">
            <meta property="og:type" content="website">
            <meta property="og:image" content="http://www.chungkhoantechcom.com/images/tcwealth-2021_by_tcbs-20210821130558.jpg">
            <meta property="og:description" content="Mở tài khoán chứng khoán Techcombank. Chứng khoán Techcombank nhà tư vấn đầu tư trái phiếu, cổ phiếu hàng đầu tại Việt Nam được tổ chức quốc tế công nhận.">
        <?php endif; ?>

        <?php if ($page == 'huongdan'): ?>
            <title>Hướng Dẫn Mở Tài Khoản Chứng Khoán Techcombank Mới Nhất</title>
            <meta name="keywords" content="Mở Tài Khoản Chứng Khoán Techcombank">
            <meta name="description" content="Chi tiết 05 bước mở tài khoản chứng khoán Techcombank ngay tại nhà. Đăng ký mở tài khoản chứng khoán Techcombank với nhiều ưu đãi dành cho khách hàng mới.">
            <link rel="canonical" href="http://www.chungkhoantechcom.com/huong-dan-mo-tai-khoan.html">
            <meta property="og:url" content="http://www.chungkhoantechcom.com/huong-dan-mo-tai-khoan.html">
            <meta property="og:title" content="Hướng Dẫn Mở Tài Khoản Chứng Khoán Techcombank Mới Nhất">
            <meta property="og:type" content="website">
            <meta property="og:image" content="http://www.chungkhoantechcom.com/images/tcwealth-2021_by_tcbs-20210821130558.jpg">
            <meta property="og:description" content="Chi tiết 05 bước mở tài khoản chứng khoán Techcombank ngay tại nhà. Đăng ký mở tài khoản chứng khoán Techcombank với nhiều ưu đãi dành cho khách hàng mới.">
        <?php endif; ?>
    <?php endif; ?>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.4/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1MFV7P7P02"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1MFV7P7P02');
    </script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }

        html {
            width: 100%;
            overflow-x: hidden;
            height: 100%
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            height: 100%;
        }

        .content {
            padding: 65px 0 65px 0;
            position: relative;
        }

        .introduction {
            margin-bottom: 45px;
        }

        p {
            margin: 0 0 20px;
            font-size: 18px;
            line-height: 28px;
            font-weight: 300;
        }

        p.large {
            font-size: 20px;
            line-height: 30px;
            font-weight: 300;
            margin-bottom: 55px;
        }

        span.underline {
            text-decoration: underline;
        }

        a {
            cursor: pointer;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        b {
            font-weight: 700;
        }

        img {
            max-width: 100%;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: inherit;
            font-weight: 400 !important;
            line-height: 1.1;
            color: inherit;
        }

        h1 {
            font-size: 48px;
        }

        h2 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 36px;
        }

        h2.section-title {
            line-height: 42px;
            max-width: 800px;
            margin: 0 auto;
            margin-bottom: 35px;
        }

        h3 {
            margin-bottom: 25px;
            margin-top: 35px;
            font-weight: 300;
        }

        h4 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        h5 {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 18px;
        }

        .clear {
            clear: both;
        }

        .cta_btn {
            margin: 35px 0;
        }

        .cta_btn a {
            cursor: pointer;
            text-decoration: none;
            font-size: 24px;
            background: #ff4546;
            padding: 15px 35px;
            color: #fff;
            border-radius: 5px;
            font-weight: 400;
            display: inline-block;
        }

        .cta_btn a:hover,
        .cta_btn a:focus,
        .cta_btn a:active {
            background: #ff5f5f;
            text-decoration: none;
            color: #fff;
        }

        @media(max-width:998px) {
            .cta_btn a {
                cursor: pointer;
                text-decoration: none;
                font-size: 22px;
                background: #ff4546;
                padding: 15px 15px;
                color: #fff;
                border-radius: 5px;
                font-weight: 400;
                display: inline-block;
            }
        }

        tbody tr td {
            padding: 10px 0
        }

        .text-block-narrow {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px
        }

        .centered,
        p.large.centered {
            text-align: center;
        }

        .text-block ul,
        .text-block-narrow ul {
            list-style-type: none;
        }

        .text-block ul li,
        .text-block-narrow ul li {
            margin: 0 0 18px;
            font-size: 18px;
            line-height: 26px;
            font-weight: 300;
            text-align: left;
        }

        .text-block ul li::before,
        .text-block-narrow ul li::before {
            content: "\f00c";
            font-family: Fontawesome;
            font-weight: 400;
            font-size: 20px;
            margin-left: -35px;
            padding-right: 10px;
            opacity: .85;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-text-stroke: 2px #fff;
        }

        .section-grey .text-block ul li::before,
        .section-grey .text-block-narrow ul li::before {
            -webkit-text-stroke: 2px #f7f7f7;
        }

        .section-purple .text-block ul li::before,
        .section-purple .text-block-narrow ul li::before {
            -webkit-text-stroke: 2px #6747c7;
        }

        .section-grey {
            background: #f7f7f7;
        }

        @media (min-width: 768px) {
            .error {
                padding-bottom: 150px;
            }

            .footer.static {
                position: fixed !important;
                bottom: 0 !important;
            }
        }

        @media (max-width: 768px) {
            .footer.static .cta_btn {
                left: auto !important;
                top: auto !important;
                transform: inherit !important;
                margin: 0;
            }
        }

        .footer.static {
            background-color: #6747c7;
            overflow: hidden;
            padding: 0;
            text-align: left;
            z-index: 6;
            width: 100%;
            height: 150px;
            bottom: 0;
            position: relative;
        }

        .arrow__bg {
            background-color: #5435b0;
            min-height: 100%;
            position: absolute;
            left: 0;
            width: 57%;
        }

        .arrow__bg::after {
            border-bottom: 75px solid transparent;
            border-left: 50px solid #5435b0;
            border-top: 75px solid transparent;
            bottom: 0;
            content: " ";
            display: block;
            height: 150px;
            position: absolute;
            top: 0;
            width: 0;
            right: -49px;
        }

        @media (max-width: 768px) {
            .footer.static {
                height: auto;
            }

            .arrow__bg {
                display: none;
            }
        }

        .footer.static .content {
            text-align: left;
            color: #fff;
            padding: 15px 0 15px 0;
            position: relative;
        }

        .footer.static h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        .footer.static .content ul {
            padding: 0;
        }

        .footer.static .content ul li {
            display: inline-block;
            font-size: 16px;
            list-style-type: none;
            color: #fff;
            font-weight: 300;
            padding: 5px 28px 5px 0;
            vertical-align: middle;
        }

        .footer.static .cta_btn {
            left: auto;
            top: 50%;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            margin: 0;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oops, halaman tidak ditemukan</title>
    <meta name="description" content="Oops, looks like the page is lost. Start your website on the cheap.">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>

    <div class="error" id="error">
        <div class="container">
            <div class="content centered"><img style="width:500px;" src="https://breedingin.com/htdocs_error/something-lost.png">
                <h1>Oops, halaman tidak ditemukan.</h1>
                <p style="font-size:22px;" class="sub-header text-block-narrow">kembali ke halaman utama <a href="<?= base_url() ?>">klik disini</a></p>
            </div>
        </div>
</body>

</html>
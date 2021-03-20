<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("vendor/bootstrap/css/bootstrap.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("fonts/iconic/css/material-design-iconic-font.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("vendor/animate/animate.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("vendor/css-hamburgers/hamburgers.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("vendor/animsition/css/animsition.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("vendor/select2/select2.min.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("vendor/daterangepicker/daterangepicker.css")}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset("css/util.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/main.css")}}>
    <!--===============================================================================================-->
</head>
<style type="text/css">

    .login100-more1::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: #e8519e;
        background: -webkit-linear-gradient(bottom, #96bdec, #4f6ddc);
        background: -o-linear-gradient(bottom, #e8519e, #c77ff2);
        background: -moz-linear-gradient(bottom, #e8519e, #c77ff2);
        background: linear-gradient(bottom, #e8519e, #c77ff2);
        opacity: 0.8;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    .login100-form-btn1 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        min-width: 244px;
        height: 50px;
        font-family: Poppins-Medium;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
    }
    button {
        outline: none !important;
        border: none;
        background: transparent;
    }
    [type=reset], [type=submit], button, html [type=button] {
        -webkit-appearance: button;
    }
    button, select {
        text-transform: none;
    }
    button, input {
        overflow: visible;
    }
    button, input, optgroup, select, textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    [role=button], a, area, button, input, label, select, summary, textarea {
        -ms-touch-action: manipulation;
        touch-action: manipulation;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    user agent stylesheet
    button {
        appearance: button;
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: center;
        align-items: flex-start;
        cursor: default;
        background-color: red;
        box-sizing: border-box;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 6px;
        border-width: 2px;
        border-style: outset;
        border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        border-image: initial;
    }
    body, html {
        height: 100%;
        font-family: Poppins-Regular, sans-serif;
    }
    body {
        margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: red;
    }
    html {
        box-sizing: border-box;
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }
    *, ::after, ::before {
        box-sizing: inherit;
    }

</style>
<body style="background-color: red;">

@yield('content')

<!--===============================================================================================-->
<script src={{asset("vendor/jquery/jquery-3.2.1.min.js")}}></script>
<!--===============================================================================================-->
<script src={{asset("vendor/animsition/js/animsition.min.js")}}></script>
<!--===============================================================================================-->
<script src={{asset("vendor/bootstrap/js/popper.js")}}></script>
<script src={{asset("vendor/bootstrap/js/bootstrap.min.js")}} ></script>
<!--===============================================================================================-->
<script src={{asset("vendor/select2/select2.min.js")}}></script>
<!--===============================================================================================-->
<script src={{asset("vendor/daterangepicker/moment.min.js")}}></script>
<script src={{asset("vendor/daterangepicker/daterangepicker.js")}} ></script>
<!--===============================================================================================-->
<script src={{asset("vendor/countdowntime/countdowntime.js")}}></script>
<!--===============================================================================================-->
<script src={{asset("js/main.js")}}></script>

</body>
</html>

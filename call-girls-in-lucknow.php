<?php include './routes.php';
include './profiles-card.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <link rel="preconnect" href="<?= $cdn_url ?>" crossorigin>
    <title>350+ call girls in Lucknow at cheap rates</title>
    <meta name="description" content="Are you looking for call girls in Lucknow? Raman escort service is a classified site providing more than 250 independent call girls across the city.">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="350+ call girls in Lucknow at cheap rates" />
    <meta property="og:description" content="Are you looking for call girls in Lucknow? Raman escort service is a classified site providing more than 250 independent call girls across the city." />
    <meta property="og:url" content="<?= get_url() ?>call-girls-in-lucknow/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="350+ call girls in Lucknow at cheap rates" />
    <meta name="twitter:description" content="Are you looking for call girls in Lucknow? Raman escort service is a classified site providing more than 250 independent call girls across the city." />
    <link rel="canonical" href="<?= get_url() ?>call-girls-in-lucknow/" />
    <!-- <link rel="stylesheet" href="./assets/css/header.css" async>
    <link rel="stylesheet" href="./assets/css/home.css" async>
    <link rel="stylesheet" href="./assets/css/footer.css" defer> -->
    <style>
        html,
        body {
            width: 100%;
            height: auto;
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, segoe ui, Roboto, helvetica neue, Arial, noto sans, sans-serif, apple color emoji, segoe ui emoji, segoe ui symbol, noto color emoji !important;
            box-sizing: border-box;
        }

        :root {
            --headerColor: #E99453;
            /* --headerColor:#f8721b; */
            --navbarColor: #ef0000;
            --textColor: #feffff;
            --bodyColor: #f2cb30;
        }

        header {
            width: 100%;
            height: 90px;
            background-color: var(--headerColor);
            display: none;
        }

        .main-heading {
            font-size: 2.5rem;
            font-weight: 900;
            line-height: 40px;
            /* color: #ef0000; */
        }

        .second-heading {
            font-size: 2rem;
            font-weight: 700;
        }

        .third-heading {
            font-size: 1.8rem;
        }

        a {
            text-decoration: none;
        }

        .header-image {
            display: flex;
            gap: 1%;
            justify-content: center;
            align-items: center;
            height: 100%;
            line-height: 15px;
            font-stretch: expanded;
        }

        .header-image small {
            margin-left: 1%;
        }

        .header-image strong {
            font-size: 2.3rem;
            font-weight: 900;
        }

        .image-h {
            width: 100%;
            height: 400px;
        }

        .image-h img {
            width: 100%;
            height: 100%;
            /* object-fit: contain; */
            /* object-position: top; */

        }

        nav {
            width: 100%;
            height: 50px;
            margin: auto;
            background-color: var(--navbarColor);
            color: var(--textColor);
            text-align: center;
        }

        nav ul {
            padding: 0;
            margin: 0;
            width: auto;
            height: 100%;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .2%;
        }

        nav ul li {
            width: auto;
            height: 100%;
            line-height: 50px;
            padding: 0 1%;
            cursor: pointer;
            position: relative;
        }

        nav ul li a {
            width: 100%;
            height: 50px;
            /* padding: 2%; */
            color: var(--textColor);
            font-weight: bold;
        }

        nav ul li a button {
            width: 100%;
            height: 100%;
            border: 0;
            background-color: transparent;
            color: var(--textColor);
            font-weight: bold;
            cursor: pointer;
        }

        nav ul li:hover {
            background-color: #f2cb30;
            color: black;
        }

        nav ul li:hover {
            background-color: #f2cb30;
            color: black;
        }

        .content-container {
            width: 100%;
            height: auto;
            background-color: var(--bodyColor);
            padding-top: 2%;
        }

        /* Header Responsive */
        @media screen and (max-width:600px) {
            .image-h {
                height: 300px;
            }

            nav {
                height: auto;

            }

            nav ul {
                flex-direction: column;

            }

            nav ul li {
                width: 100%;
                border-bottom: 1px solid white;
            }
        }

        @media screen and (max-width:500px) {
            .image-h {
                height: 200px;
            }

            nav {
                height: auto;

            }

            nav ul {
                flex-direction: column;

            }

            nav ul li {
                width: 100%;
                border-bottom: 1px solid white;
            }

            .main-heading {
                font-size: 2rem;
            }

        }

        /* Header Color #F8721B */
        /* Navbar Color #EF0000 */
        /* text Color #FEFFFF */
        /* Body Color #F2CB30 */
        .container {
            width: 85%;
            height: 100%;
            background-color: var(--textColor);
            margin: auto;
            border-radius: 0;
            padding: 1% 3%;
            box-shadow: 0 0 12px 3px white;
            border: 1px solid rgb(239, 239, 239);
            box-sizing: border-box;
        }

        .second-heading {
            font-size: 2rem;
            font-weight: 700;
            color: #F8721B;
        }

        .container p {
            font-size: 1.2rem;
            line-height: 25px;
            font-weight: 500;
        }

        .container a {
            font-weight: bolder;
        }

        .category-of-escorts-row {
            width: 100%;
            height: auto;
            margin: 1.5% 0;
            display: flex;
            justify-content: center;
            gap: 2%;
        }

        .category-of-escorts-col {
            flex: 1;
        }

        .category-card {
            width: 100%;
            height: auto;
            background-color: rgb(238, 238, 238);
            padding: 1.5%;
        }

        .category-row {
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .category-img {
            width: 30%;
            height: 150px;
            background-color: lightgrey;
        }

        .category-detail {
            width: 70%;
            padding: 1.5% 1%;
            height: 160px;
        }

        .category-detail p {
            padding: 0;
            margin: 2% 0;
        }

        .category-detail strong {
            font-size: 1.4rem;
        }

        .category-detail button {
            width: 100px;
            height: 35px;
            border-radius: 5px;
            border: 0;
            background-color: var(--navbarColor);
            color: white;
            cursor: pointer;
        }

        .container ul {
            padding: 0;
            margin: 0 2%;
        }

        .container ul li {
            font-size: 1.2rem;
            margin: .5% 0;
        }

        .long-profile-section {
            width: 100%;
            height: auto;
            padding: 2% 1%;
        }

        .long-profile-card {
            width: 100%;
            height: auto;
            margin: 2% 0;
            display: flex;
            border: 1px solid lightgrey;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 0 12px 5px rgb(157, 157, 157);
        }

        .add,
        .top-add {
            position: absolute;
            top: -6%;
            border-radius: 10px;
            right: 3%;
            width: 50px;
            display: grid;
            place-items: center;
            color: white;
            font-weight: bold;
            height: 25px;
            background-color: var(--navbarColor);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: small;
            user-select: none;
        }

        .top-add {
            width: 100px;
            height: 25px;
        }

        .top-add svg,
        .add svg {
            transform: rotateX(180deg) rotate(-90deg);
        }

        .long-profile-img {
            width: 17.5%;
            height: 220px;
            background-color: lightgrey;
        }

        .long-profile-detail {
            width: 82.5%;
            height: 220px;
            padding: 2%;
        }

        .long-profile-detail strong {
            font-size: 1.7rem;
        }

        .long-profile-detail p {
            margin: 1.5% 0;
            padding: 0;
        }

        .long-profile-action {
            width: 100%;
            height: a;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .long-profile-action div {
            width: 50%;
        }

        .long-profile-action button {
            /* width: 100px; */
            height: 40px;
            padding: 0 2%;
            margin: 0 1%;
            float: right;
            border: 0;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            align-items: center;
            /* gap: 2%; */
        }

        .long-profile-action .whatsapp-btn {
            background-color: green;
            color: white;
        }

        .long-profile-action .call-btn {
            border: 1px solid var(--navbarColor);
            background-color: transparent;
            color: var(--navbarColor);
        }

        .long-profile-action .whatsapp-btn:hover {
            background-color: rgb(0, 92, 0);
        }

        .long-profile-action .call-btn:hover {
            background-color: var(--navbarColor);
            color: white;
        }




        @media screen and (max-width:770px) {
            .container {
                width: 98%;
            }

            .category-img {
                width: 40%;
                height: auto;
                background: 0;
                overflow: hidden;
            }

            .category-img img {
                width: 100%;
                object-fit: cover;
            }

            .category-detail {
                width: 60%;
                height: auto;
            }

            .long-profile-card .long-profile-img {
                width: 30%;
                height: auto;
            }

            .long-profile-card .long-profile-detail {
                width: 70%;
                height: auto;
            }
        }

        @media screen and (max-width:700px) {
            .category-card {
                margin: 1% 0;
            }

            .category-of-escorts-row {
                flex-wrap: wrap;
            }

            .category-of-escorts-col {
                flex: 100%;
            }

            .category-img {
                width: 40%;
                height: 170px;
                overflow: hidden;
            }

            .category-img img {
                width: 100%;

            }

            .category-detail {
                width: 60%;
                height: 170px;
            }

            .long-profile-card .long-profile-img {
                width: 40%;
                height: auto;
            }

            .long-profile-card .long-profile-detail {
                width: 60%;
                height: auto;
            }

            .add,
            .top-add {
                top: 1%
            }

            .long-profile-action {
                flex-wrap: wrap;
                margin: 2% 0;
            }

            .long-profile-action div {
                width: 100%;
                margin-top: 2%;
            }

            .long-profile-action button {
                float: left;
            }

        }

        @media screen and (max-width:500px) {
            .category-img {
                width: 60%;
                height: 140px
            }

            .category-detail button {
                display: none;
            }

            .category-img img {
                width: 100%;
                height: 100%;
            }

            .category-detail {
                width: 100%;
                padding: 5% 1%;
                height: auto;
            }

            .container {
                width: 98% !important;
                border-radius: 0;
            }

            .long-profile-card {
                flex-wrap: wrap;
            }

            .long-profile-card .long-profile-img {
                width: 100%;
            }

            .long-profile-card .long-profile-detail {
                width: 100%;
                height: auto;
            }

            .add,
            .top-add {
                top: 1%
            }

            .long-profile-action {
                flex-wrap: wrap;
                margin: 2% 0;
            }

            .long-profile-action div {
                width: 100%;
                margin-top: 2%;
            }

            .long-profile-action button {
                float: left;
            }
        }

        @media screen and (max-width:400px) {
            .category-row {
                flex-direction: column;
            }

            .category-img {
                width: 100%;
                height: 165px;
            }

            .category-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: top;
            }

            .category-detail {
                width: 100%;
                padding: 5% 1%;
                height: auto;
            }
        }

        .new-profile-area {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1%;
        }

        /* PROFILES */
        /* .profile-section{
    width: 100%;
    height: auto;
    padding: 4% 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
} */

        .profile-card {
            margin: 4% 1%;

            width: 250px;
            height: auto;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid var(--navbarColor);
            background-color: rgb(21, 20, 20);
        }

        .profile-card:hover {
            box-shadow: 0 0 14px 2px rgb(33, 32, 32);
            transform: scale(1.01);
        }

        .profile-card-img {
            width: 100%;
            aspect-ratio: 1/1;
        }

        .profile-card-img img {
            width: 100%;
            height: 100%;
        }

        .profile-name {
            padding: 1%;
            text-align: center;
            margin: 0;
            color: #e2e8f0;
        }

        .profile-card-detail {
            background-color: rgb(21, 20, 20);
        }

        .profile-details {
            width: 100%;
            height: 40px;
            display: flex;
            padding: 1% 5%;
            justify-content: space-between;
            gap: 2%;
            text-align: center;
        }

        .profile-details div {
            width: 100%;
            line-height: 30px;
            background-color: yellow;
            color: black;
            padding: 1% 2%;
        }

        .profile-cat {
            color: white;
            text-align: center;
            font-size: 1.2rem;
            padding: 2% 0;
        }

        .profile-area {
            height: 50px;
            background: rgb(217, 22, 83);
            background: linear-gradient(71deg, var(--navbarColor), var(--bodyColor));
            color: white;
            text-align: center;
            line-height: 50px;
            font-size: 1.5rem;
            cursor: pointer;
            font-weight: bolder;
            transition: .5s;
        }

        .profile-area:hover {

            transition: .5s;
            background: linear-gradient(to right, var(--navbarColor) 60%, var(--bodyColor) 100%);
        }





        /* FOOTER */
        .list-of-hotels {
            width: 98%;
            height: auto;
            padding: 2%;
            margin: auto;
            margin-top: 2%;
            border-radius: 200px;
            box-shadow: 0 0 10px 2px var(--headerColor);
            background-color: var(--navbarColor);
            box-sizing: border-box;

        }

        .list-of-hotels a {
            color: var(--bodyColor);
        }

        .list-of-hotels .container {
            background-color: transparent;
        }

        .list-of-hotels-row {
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            margin: 2% 0;
            gap: 2%;
            box-sizing: border-box;
        }

        .list-of-hotels-col {
            width: 17%;
            padding: 1% 0;
            border-bottom: 3px solid var(--textColor);
            font-weight: bold;
            border-radius: 0 0 10% 10%;
            box-sizing: border-box;
        }

        .list-of-areas-row {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            gap: 1%;
            box-sizing: border-box;
            margin: 2% 0;
        }

        .list-of-areas {
            padding: 1%;
        }

        .areas-container {
            width: 250px;
            height: auto;
            overflow: hidden;
            border-radius: 20px 0 20px 0;
            box-sizing: border-box;
        }

        .areas-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .5s;

        }

        .areas-container img:hover {
            object-position: bottom;
            transform: scale(1.05);
        }

        .list-of-hotels h3 {
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .service-information {
            width: 100%;
            height: 100px;
            background-color: var(--navbarColor);
            padding: 0 5%;
            box-sizing: border-box;
        }

        .service-information .service-info-row {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            gap: 2%;
            align-items: center;
        }

        .service-information p {
            margin: 0;
            padding: 0;
        }

        .service-info-col {
            display: flex;
            align-items: center;
            gap: 2%;
            color: var(--textColor);
        }

        .service-information .service-info-col-icon {
            width: 50px;
            height: 50px;
        }



        footer {
            border-top: 1px solid black;
            width: 100%;
            height: auto;
            padding: 2% 3%;
            background-color: var(--navbarColor);
            box-sizing: border-box;
        }

        footer .footer-row {
            width: 100%;
            display: flex;
            justify-content: space-between;

        }

        footer .footer-col {
            flex: 1;
        }

        footer .footer-img-div {
            width: 60%;
            margin: 7% auto 0 auto;

        }

        footer strong {
            font-size: 2rem;
            padding: 0 0 0 10%;
        }

        footer ul {
            padding: 0 0 0 10%;
            margin: 0;
            margin-top: 5%;
            list-style: none;


        }

        footer ul li {
            margin: 2% 0;
        }

        footer ul li a {
            color: var(--textColor);
            font-size: 1.2rem;
        }

        footer ul li a:hover {
            color: var(--bodyColor);
        }

        /* CSS */
        .faq {
            display: flex;
            flex-direction: column;
        }

        .question {
            background-color: #f6f6f6;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            margin: 5px;
            border-radius: 10px;
            transition: all 0.3s ease-out;
        }

        .question:hover {
            background-color: #ebebeb;
        }

        .answer {
            display: none;
            padding: 20px;
            font-size: 16px;
            line-height: 1.4;
            margin: 5px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-out;
        }

        .question.active {
            background-color: #edf2f7;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
            border-radius: 10px 10px 0 0;
        }

        .question.active+.answer {
            display: block;
            transform: translateY(0);
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 10px 10px;
        }

        .footer-other-location {
            width: 100%;
            height: auto;
            padding: 2% 10%;
            box-sizing: border-box;
        }

        .footer-other-location-row {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 10;
            gap: 2%;
        }

        .cat-btn {
            display: inline-block;
            text-align: center;
            width: auto;
            padding: 0 3%;
            margin: 5% 0;
            line-height: 40px;
            font-weight: bold;
            height: 40px;
            border-radius: 100px;
            background-color: var(--navbarColor);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cat-btn::after {
            content: '';
            width: 100px;
            height: 0;
            box-shadow: 0 0 15px 5px yellow;
            position: absolute;
            top: 20px;
            transform: translateX(50px) rotate(45deg);
            transition: 1s transform ease-in-out;
        }

        .cat-btn:hover {
            transform: scale(1.01);
            text-shadow: 0 0 6px 2.5px black;
        }

        .cat-btn:hover::after {

            transform: translateX(-220px) rotate(45deg);
        }

        .call-the-call-btn {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            position: fixed;
            left: 2%;
            bottom: 2%;
            background-color: var(--navbarColor);
            border: 1px solid yellow;
            color: white;
            cursor: pointer;
        }

        .call-the-whatsapp-btn {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            position: fixed;
            right: 2%;
            bottom: 2%;
            background-color: green;
            color: white;
            cursor: pointer;
        }

        .full-flex-image-row {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            text-align: center;
        }

        .full-flex-image-row p {
            padding: 0;
            margin: 0;
        }

        .full-flex-image {
            margin: 2% 0;
            width: 100%;
            height: auto;
            flex: 1 0 32%;
        }

        .full-flex-image img {
            width: 100%;
            height: 100%;

        }

        @media screen and (max-width:770px) {

            .list-of-hotels {
                border-radius: 0;
            }

            .list-of-hotels-row {
                flex-wrap: wrap;
            }

            .list-of-hotels-col {
                width: 30%;
                margin: 2% 0;
            }

            .list-of-areas-row {
                flex-wrap: wrap;
                gap: 2%;
            }

            .areas-container {
                margin: 2% 0;
            }

            .cat-btn {
                margin: 3% 0;
            }
        }

        @media screen and (max-width:700px) {
            .list-of-hotels {
                border-radius: 0;
            }

            .list-of-hotels-row {
                flex-wrap: wrap;
            }

            .list-of-hotels-col {
                width: 45%;
                margin: 2% 0;
            }

            .list-of-areas-row {
                flex-wrap: wrap;
                justify-content: space-evenly;
                gap: 2%;
            }

            .areas-container {
                margin: 2% 0;
            }

            .service-information {
                height: auto;
            }

            .service-info-row {
                flex-wrap: wrap;
            }

            .service-info-col {
                width: 45%;
                margin: 2% .5%;
            }

            .footer-row {
                flex-wrap: wrap;
            }

            .footer-row .footer-col {
                flex: 50%;
            }
        }

        @media screen and (max-width:500px) {

            .full-flex-image {
                margin: 2% 0;
                width: 100%;
                height: auto;
                flex: 1 0 50%;
            }

            .cat-btn {
                margin: 2% 0;
            }

            .list-of-hotels {
                border-radius: 0;
            }

            .list-of-hotels-row {
                flex-wrap: wrap;
            }

            .list-of-hotels-col {
                width: 45%;
                margin: 2% 0;
            }

            .list-of-areas-row {
                flex-wrap: wrap;
                gap: 2%;
            }

            .areas-container {
                width: 200px;
                height: auto;
                margin: 1% 0;
            }

            .service-information {
                height: auto;
            }

            .service-information .service-info-row {
                flex-wrap: wrap;
            }

            .service-information .service-info-col {
                width: 100%;
                border-bottom: 1px solid white;
            }

            .footer-row {
                flex-wrap: wrap;
            }

            .footer-row .footer-col {
                flex: 100%;
                margin: 2% 0;
                text-align: center;
            }

            .call-the-whatsapp-btn {
                width: 50%;
                border-radius: 0;
                bottom: 0;
                right: 0;
            }

            .call-the-call-btn {
                width: 50%;
                border-radius: 0;
                bottom: 0;
                left: 0;
            }

        }

        @media screen and (max-width:410px) {
            .list-of-hotels-col {
                width: 100%;
            }
        }

        .long-profile-detail strong {
            color: black;
        }

        .container a {
            color: var(--navbarColor);
        }

        .container p {
            font-weight: 400;
        }
    </style>
</head>

<body>
    <?php include './header.php'; ?>
    <div class="content-container">
        <div class="container">
            <h1 class="main-heading">Get Entertained by upscale Call girls in Lucknow</h1>

            <h2 class="second-heading"><strong>Book Affordable Lucknow call girls for an amazing time</strong></h2>

            <p>Are you trying to find a pretty but affordable <a href="<?= get_url() ?>lucknow-call-girls/">Lucknow call girls</a>? You must visit Raman escort services for your intimate desires. We are here to accomplish all your sexual desires. There are numerous other agencies in Lucknow that claim to provide genuine service, but most of them are fraudulent. They will show you different models on WhatsApp and send different girls to your doorstep or hotel rooms. We are different from others in this industry due to our expertise. We have good connections with hundreds of agents and independent models across the country, so we only have girls out-site in Lucknow to eliminate the privacy issue. We make sure that all our models are polite in nature and well compromised during sessions. They will never ruin a client's mood and try to do all the stuff as much as possible. Yes, there are a few escorts who deny doing smooch and anal sex. But we used to disclose all these things during the selection process.</p>

            <h3 class="third-heading">How to book Lucknow call girls from Raman Escort Service?</h3>

            <p>It is a very simple process to meet your selected girl from our agency. We have created a very smooth and easy way to provide you with the safest and hottest <a href="<?= get_url() ?>lucknow-call-girls/">Lucknow call girls</a>. Start by contacting our executive via phone or WhatsApp. After creating a proper connection, discuss which type of girl you are looking for. After stating your requirements, you will get multiple images of sweeties to choose from. After selecting a girl as per your fantasies, share details like her number, name, and location for meet up. If you want, you can request for in-call services. After meeting our female administration, pay her in cash and enjoy your time with her. We guarantee that if you spend just one hour with our call girl, you will experience the exquisite ecstasy that you have never experienced before in your life. Once you avail of our service, we will never call or WhatsApp you after service. Whereas other brokers keep sending images, which spoils your privacy</p>
        </div>
        <div class="container" style="border: 0;">
            <div class="long-profile-section">
                <div class="long-profile-card">
                    <span class="add"><?= $top ?> top</span>
                    <div class="long-profile-img">
                        <a href="<?= get_url() ?>call-girls-in-alambagh/"><img src="<?= $cdn_url ?>callgirlsinlucknow.in_.webp" width="100%" height="100%" alt="Goa Russian Escorts " loading="lazy"></a>
                    </div>
                    <div class="long-profile-detail">
                        <a href="<?= get_url() ?>call-girls-in-alambagh/"><strong>Angelina</strong><br></a>
                        <b>Get top-notch Russian in Alambagh </b>
                        <p>Hello! Angelina here from Alambagh, and I can fulfill any sexual fantasy that you ever dreamt of. I work around the clock in Lucknow and go on trips with my customers. I am very friendly and enjoy spending time with other men. </p>
                        <div class="long-profile-action">
                            <span><b>24| Alambagh </b></span>
                            <div>
                                <a href="https://wa.me/<?= $phone_number ?>"><button class="whatsapp-btn"><?= $whatsapp ?> WhatsApp</button></a>
                                <a href="tel:<?= $phone_number ?>"><button class="call-btn"><?= $phone ?> call Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="long-profile-card">
                    <span class="top-add"><?= $top ?> Super Top</span>
                    <div class="long-profile-img">
                        <a href="<?= get_url() ?>call-girls-in-patrakarpuram/"><img src="<?= $cdn_url ?>3.webp" width="100%" height="100%" alt="HouseWife Escorts Goa" loading="lazy"></a>
                    </div>
                    <div class="long-profile-detail">
                        <a href="<?= get_url() ?>call-girls-in-patrakarpuram/"><strong>Tamana</strong><br></a>
                        <b>Get free in-call and out-call service all over Lucknow with Tamana</b>
                        <p>Hi darling, I am Tamana, and I am an innocent girl living near Patrakarpuram with a good sense of humor. Men can get easily affectionate with me and my erotic services. My boobs are naturally in perfect shape, and my slim figure is appealing to all men. </p>
                        <div class="long-profile-action">
                            <span><b>23 | patrakarpuram</b></span>
                            <div>
                                <a href="https://wa.me/<?= $phone_number ?>"><button class="whatsapp-btn"><?= $whatsapp ?> WhatsApp</button></a>
                                <a href="tel:<?= $phone_number ?>"><button class="call-btn"><?= $phone ?> call Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="long-profile-card">
                    <span class="add"><?= $top ?> Top</span>
                    <div class="long-profile-img">
                        <a href="<?= get_url() ?>call-girls-in-kakori/"><img src="<?= $cdn_url ?>housewife-in-goa-768x1024.webp" width="100%" height="100%" alt="Lasbian dating in goa" loading="lazy"></a>
                    </div>
                    <div class="long-profile-detail">
                        <a href="<?= get_url() ?>call-girls-in-kakori/"><strong>Kavya</strong></a><br>
                        <b>Hot &Sexy mature ladies for you </b>
                        <p>Hi Love, I'm Kavya, and you can count on me for a night full of fun and enjoyment. I am a mature housewife residing in Kakori; I know what men truly want. I fulfill all their fantasies and desires in a single meeting. </p>
                        <div class="long-profile-action">
                            <span><b>32 | Kakori</b></span>
                            <div>
                                <a href="https://wa.me/<?= $phone_number ?>"><button class="whatsapp-btn"><?= $whatsapp ?> WhatsApp</button></a>
                                <a href="tel:<?= $phone_number ?>"><button class="call-btn"><?= $phone ?> call Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="long-profile-card">
                    <span class="top-add"><?= $top ?> Super Top</span>
                    <div class="long-profile-img">
                        <a href="<?= get_url() ?>call-girls-in-lda-colony/"><img src="<?= $cdn_url ?>ts-dating-in-goa.webp" width="100%" height="100%" alt="HouseWife Escorts Goa" loading="lazy"></a>
                    </div>
                    <div class="long-profile-detail">
                        <a href="<?= get_url() ?>call-girls-in-lda-colony/"><strong>Angle</strong></a><br>
                        <b>Have a Stunning, Beautiful lady for the night. </b>
                        <p>I am one of the most famous and attractive A-rated escort services working as an escort in the LDA colony. I have a unique, charismatic, and beautiful body that can satisfy your sensual hunger without any complaints. </p>
                        <div class="long-profile-action">
                            <span><b>24 | LDA colony</b></span>
                            <div>
                                <a href="https://wa.me/<?= $phone_number ?>"><button class="whatsapp-btn"><?= $whatsapp ?> WhatsApp</button></a>
                                <a href="tel:<?= $phone_number ?>"><button class="call-btn"><?= $phone ?> call Now</button></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="long-profile-card">
                    <span class="top-add"><?= $top ?> Super Top</span>
                    <div class="long-profile-img">
                        <a href="<?= get_url() ?>call-girls-in-amausi/"><img src="<?= $cdn_url ?>most-awaiting-shemale-in-goa.webp" width="100%" height="100%" alt="most awaiting shemale in goa" loading="lazy"></a>
                    </div>
                    <div class="long-profile-detail">
                        <a href="<?= get_url() ?>call-girls-in-amausi/"><strong>Rashmi</strong></a><br>
                        <b>Get in touch with New Independent escort Rashmi </b>
                        <p>Hi guys, I am Rashmi, and I can provide you with fun and erotic time at a very genuine rate at Amausi. My body is very eager to have some adventure and wild fun. I maintain my body with regular gym sessions and make my time more premium and exotic</p>
                        <div class="long-profile-action">
                            <span><b>25 | Amausi</b></span>
                            <div>
                                <a href="https://wa.me/<?= $phone_number ?>"><button class="whatsapp-btn"><?= $whatsapp ?> WhatsApp</button></a>
                                <a href="tel:<?= $phone_number ?>"><button class="call-btn"><?= $phone ?> call Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="long-profile-card">
                    <span class="add"><?= $top ?> Top</span>
                    <div class="long-profile-img">
                        <a href="<?= get_url() ?>call-girls-in-mohanlalganj/"><img src="<?= $cdn_url ?>6.webp" width="100%" height="100%" alt="HouseWife Escorts Goa" loading="lazy"></a>
                    </div>
                    <div class="long-profile-detail">
                        <a href="<?= get_url() ?>call-girls-in-mohanlalganj/"><strong>Urvashi</strong></a><br>
                        <b>Meet professional call girl service in Lucknow</b>
                        <p>If you want a professional call girl who can understand you and provide you with the best experience and service of your life, hi, I am Urvashi. I am located in Mohanlalganj, offering exotic and professional escort services all over Lucknow.</p>
                        <div class="long-profile-action">
                            <span><b>26 | Mohanlalganj</b></span>
                            <div>
                                <a href="https://wa.me/<?= $phone_number ?>"><button class="whatsapp-btn"><?= $whatsapp ?> WhatsApp</button></a>
                                <a href="tel:<?= $phone_number ?>"><button class="call-btn"><?= $phone ?> call Now</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="second-heading">Independent and top rated Lucknow call girls</h2>

            <p>There are some elite call girls who please their clients and make their fantasies come true with one touch. They have long hair, <a href="<?= get_url() ?>big-boobs/">big boobs</a>, curvy asses, juicy lips, and very seductive eyes. They are very professional and know how to make your dreams come true. With them around you, your mood will change, and you'll feel like you’re in heaven. We have a selective range of independent call girls, from sexy college girls to newly married girls. Our girls increase your attraction to them. We have a lot of girls from which you can choose the girl of your choice. We will need to respect all your requests and accept all your terms. We provide beautiful girls who can truly enjoy life in <a href="<?= get_url() ?>escorts-near-hyatt-regency-hotel/">5-star hotels in Lucknow</a>, so you will have more fun. Our escorts are also available for your trips and vacations, making your trip memorable and thrilling.</p>

            <h3 class="third-heading"><strong>Unmatched Lucknow Call girls at your service</strong></h3>

            <p>Once you taste the pleasure of our excellent escort services, you will surely return to us for more delightful pleasure. It’s not troublesome to find these agencies, but finding safety could be difficult. You’ll find many escort agencies online, but most are scams. The number of luscious women working as professionals with these agencies is in the 100s. But they don’t take responsibility for these girls and treat them very badly. Whereas we take care of each other so that they can take care of you with all their love and care.</p>

            <p>These women are hot and ethical, and they grasp each move to make your night memorable. We make sure that the best babes all over Lucknow and nearby cities like Kanpur are available for our clients. We’ve got high-class feminines who are well-educated and humble. Our models have a reputation for beauty and charm that you’ll never see. If you decide on our young girls, they will be your best investment. Lucknow teen girls perpetually possess positive and forward-thinking angles.</p>

            <p>Lucknow call girls online and open this permit to most individuals who cannot find genuine babes for themselves. Raman escort service has developed an excellent reputation for delivering the most effective and intimate services. These elite women are incredible at creating a genuine surprise in your life.</p>

            <h3>Wide range of NRI Lucknow call girls</h3>

            <p>As we told you, our escort agency is very old, and we have very good and old relations with many young girls and boyfriends. Therefore, there are girls or bhabies who work for us occasionally for fun rather than remuneration. The NRI girls remain in touch so that they get a chance to earn some good money. These NRI Lucknow call girls are very well maintained and also charge a very good amount for their generous services. But spending time with a good girl is indeed a different pleasure. You will feel like you are meeting an apsara. Their style and way of talking are completely different and elegant. You will feel luxurious while having sexual sessions with our NRI girls. Her pussy is pink and immaculate, so licking it will not present any difficulties. It feels like you are with someone who has a very big personality, and it is impossible to get her to like TV actresses and supermodels. Most of these girls are available not for one or two hours but for long-term sessions only. There is no worth going to an inaphazard agency to waste your hard-earned money and ruin your mood.</p>


            <h3 class="third-heading"><strong>- Hire Young college call girl for Overwhelming sessions</strong></h3>

            <p>Fascinating about the most enchanting smile of the young girls going to colleges in their hot short dresses due to their gladness, high energy, fair complexion, educative figure, and irresistible assets. Your mouth will be watering to grab such fresh teens and breathtaking figures as these young girls. Our <a href="<?= get_url() ?>bbd-college/">BBD college girls</a> make sure to fulfill all your expectations. College girls from all over the city tied with us for a little cash. You can select from our top college girls for endless pleasure anytime and anywhere. You will surely forget all your stress and tensions from your daily life. You will lose yourself in the physical delight of being in the arms of our gorgeous call girls in Lucknow.</p>
            <p>There are many advantages to choosing our services in the city of Nawabs. We have a vast range of <a href="<?= get_url() ?>college-call-girls/">colleges call girls in Lucknow</a>. We have hundreds of engaging beauties to offer carnal fun to our thousands of passionate customers. Our escorts come from different backgrounds, and businesses are available for every man and for every requirement.</p>

            <?= $profile ?>
            <h2 class="second-heading">What separates Raman Escort services from other escort agency in Lucknow?</h2>
            <p>The growing demands and quality of this trustworthy sexual dating have encouraged the demand for Lucknow call girls in the past couple of decades. Today, you have a vast range of call girls in Lucknow to select from under one roof for unforgettable erotic entertainment. We’re specialists in supplying our services to customers on time, with complete privacy, and with unforgettable love. All of the Incall and Outcall call girl services in Lucknow are incredibly appealing and keep their sexy figures in excellent shape to blow the clients’ minds. We make them feel exceptional. The satisfaction level of every customer is also believed to be high. You can choose according to your sexual preference.</p>
            <p>We provide our sexual entertainment services from morning to night, and you’re able to enjoy them as per your flexible timing. There’s no requirement to go everywhere, as your one-stop destination for the realization of your dream can be found on your doorstep. It’s possible to reserve Incall or Outcall for your ideal companionship lovemaking session using our sexy Lucknow call girls, available 24×7. Now comes the high profile dating girl companionship everywhere. Hurry to reserve an appointment for a couple of multiple sessions with our premium quality escort girls!
            </p>

            <h3>What we do to make our customers experience lavish and memorable</h3>
            <p>As a renowned <a href="<?= get_url() ?>">call girl agency in Lucknow</a>, we have taken on some responsibilities and carried out proper measures to make sure that our services are clean and safe for our clients. These responsibilities make us liable for the full satisfaction of our customers. We make sure that every client is happy with our escort services:</p>
            <ul>
                <li>Providing tailored services and gaining vast experience with many years of successful service in the adult industry.</li>
                <li>We have tied up with extensive hotels and bars across Lucknow, offering<a href="<?= get_url() ?>vip-escorts">VIP services</a>to our elite clients..</li>
                <li>We arrange regular medical checkups for our girls to ensure that they don’t carry any STDs. making sure that our call girl has a healthy body and enjoys being with you.</li>
                <li>We take everything in our hands so that you don’t have to worry about anything when hiring one from our website.</li>
                <li>Privacy is the most important thing to us, and we make sure that your personal data is secure with us. Neither we nor our female staff share your data or dirty secrets with third parties.</li>
                <li>Our beauties are trained, professional, and up You will get modern service, and our goddess will wear modern clothes and do everything that you please.</li>
            </ul>

            <div class="new-profile-area">
                <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <a href="<?= get_url() ?>call-girls-in-gomti-nagar/"><img src="<?= $cdn_url ?>indira-nagar.png" loading="lazy" width="100%" height="100%" alt="college girl"></a>
                        </div>
                        <div class="profile-card-detail">
                            <a href="<?= get_url() ?>call-girls-in-gomti-nagar/">
                                <p class="profile-name">Anshika</p>
                            </a>
                            <div class="profile-details">
                                <div class="det-1">28 years</div>
                                <div class="det-1">32C</div>
                                <div class="det-1">62kg</div>
                            </div>
                            <a href="<?= get_url() ?>call-girls-in-gomti-nagar/">
                                <div class="profile-cat">Mature call girls</div>
                                <div class="profile-area">Gomti Nagar</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <a href="<?= get_url() ?>call-girls-in-hazratganj/"><img src="<?= $cdn_url ?>charbagh.png" loading="lazy" height="100%" alt="college girl"></a>
                        </div>
                        <div class="profile-card-detail">
                            <a href="<?= get_url() ?>call-girls-in-hazratganj/">
                                <p class="profile-name">Ritika</p>
                            </a>
                            <div class="profile-details">
                                <div class="det-1">25 years</div>
                                <div class="det-1">34A</div>
                                <div class="det-1">59kg</div>
                            </div>
                            <a href="<?= get_url() ?>call-girls-in-hazratganj/">
                                <div class="profile-cat">Housewife</div>
                                <div class="profile-area">HazratGanj</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <a href="<?= get_url() ?>call-girls-in-charbagh/"><img src="<?= $cdn_url ?>hazratganj.png" loading="lazy" width="100%" height="100%" alt="college girl"></a>
                        </div>
                        <div class="profile-card-detail">
                            <a href="<?= get_url() ?>call-girls-in-charbagh/">
                                <p class="profile-name">Jaspreet</p>
                            </a>
                            <div class="profile-details">
                                <div class="det-1">25 years</div>
                                <div class="det-1">32D</div>
                                <div class="det-1">51kg</div>
                            </div>
                            <a href="<?= get_url() ?>call-girls-in-charbagh/">
                                <div class="profile-cat">Russian Escorts</div>
                                <div class="profile-area">Charbagh</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-section">
                    <div class="profile-card">
                        <div class="profile-card-img">
                            <a href="<?= get_url() ?>call-girls-in-indira-nagar/"><img src="<?= $cdn_url ?>gomti-nagar.png" loading="lazy" width="100%" height="100%" alt="college girl"></a>
                        </div>
                        <div class="profile-card-detail">
                            <a href="<?= get_url() ?>call-girls-in-indira-nagar/">
                                <p class="profile-name">Lavinia</p>
                            </a>
                            <div class="profile-details">
                                <div class="det-1">23 years</div>
                                <div class="det-1">34C</div>
                                <div class="det-1">55kg</div>
                            </div>
                            <a href="<?= get_url() ?>call-girls-in-indira-nagar/">
                                <div class="profile-cat">College Escorts</div>
                                <div class="profile-area">Indira Nagar</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="third-heading">The list of responsibilities we carry out for the society:</h4>
            <p>As a renowned <a href="<?= get_url() ?>/lucknow-call-girls/">call girl agency in Lucknow</a>, we have taken up some responsibilities and carry out proper experience to make that our services is clean and safe for our clients. These responsibilities make us liable to full satisfaction of our customers. We make sure that our every client is happy with our escort services:</p>
            <ul>
                <li>We arrange regular medical checkups of our girls to ensure that they don’t carry any STDs. making sure that our call girl have healthy body and enjoy with you.</li>
                <li>We take everything in our hands so that you don’t have to worry about anything when hiring one from our website.</li>
                <li>Privacy is the most important thing for us and we make sure that your personal data is secure with us. Neither we nor our female staff shares your data or dirty secrets to third party.</li>
                <li>Our beauties are trained and professional and up to date, you will get modern service and our goddess wear modern clothes and do everything that you like</li>
            </ul>


            <h3><strong>Hire Young college call girl for Overwhelming sessions</strong></h3>

            <p>Fascinating about the most enchanting smile of the young girls going to colleges in their hot short dresses due to their gladness, high energy, fair complexion, educative figure, and irresistible assets. Your mouth will be watering to grab such fresh teens and breathtaking figures as these young girls. Our <a href="<?= get_url() ?>bbd-college/">BBD college girls</a> make sure to fulfill all your expectations. College girls from all over the city tied with us for a little cash. You can select from our top college girls for endless pleasure anytime and anywhere. You will surely forget all your stress and tensions from your daily life. You will lose yourself in the physical delight of being in the arms of our gorgeous call girls Lucknow.</p>
            <p>There are many advantages to choosing our services in the city of Nawabs. We have a vast range of <a href="<?= get_url() ?>college-call-girls/">colleges call girls in Lucknow</a>. We have hundreds of engaging beauties for offering carnal fun to our thousands of passionate customers. All our customers come from different backgrounds, and businesses are available for every man and for every requirement.
            </p>

        </div>
        
    <?php include './footer.php' ?>
    </div>



</body>

</html>
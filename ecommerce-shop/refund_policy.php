<?php
$page='single';
$page_title="shop-page";
include ('dynamic-meta.inc.php');
$dynamic_title="Refund Policy | Stylishvalley.com";
include ('header.php');
include ('single_nav.php');
?>
<style>
  #search button {
    line-height: 24px;
    border: none;
    padding-top: 10px;
    padding-bottom: 19px;
    padding-right: 12px;
    padding-left: 12px;
  }
</style>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
      <div class="row">
        <div class="col-xs-12">
            <ul>
              <li class="home"> <a title="Go to Home Page" href="index">Home</a><span>&raquo;</span></li>
              <li><strong>Refund Policy</strong></li>
            </ul>
        </div>
      </div>
  </div>
</div>
<!-- Breadcrumbs End -->
<div class="container">
  <div class="lzd-act-richtext">

    <div class="inner-content">
      
      <!-- Style  -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css" media="all">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">
      <style>
        .toggle .osh-btn .label {
        color: #6E6E6E;
        font-weight: 500;
        font-size: 14px;
        text-align: left;
        padding: 0
        }
        .navAllCat .label {
        color: #6E6E6E;
        font-weight: 500;
        font-size: 14px;
        text-align: left;
        padding: 0
        }
        .navAllCat .caret {
        display: inherit;
        width: initial;
        height: 0;
        margin-left: inherit;
        border-top: inherit;
        border-right: inherit;
        border-left: inherit;
        vertical-align: baseline
        }
        .osh-btn>.caret {
        display: inherit;
        width: initial;
        height: 0;
        margin-left: inherit;
        border-top: inherit;
        border-right: inherit;
        border-left: inherit
        }

        .osh-dropdown>.toggle>.osh-btn>.caret {
        vertical-align: baseline
        }
        .main_header--nav-right .dropdown-header {
        display: initial;
        padding: 0;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap
        }
        .btn-header {
        padding: 0
        }
        .panel-categories h3 {
        font-size: 1em
        }
        #search_box-cancel_btn .label {
        color: #416998;
        font-size: 100%;
        font-weight: 500;
        text-align: left;
        vertical-align: baseline;
        border-radius: 0
        }
        .search_box--cancel_btn {
        padding: 11px 0;
        !important
        }
        .caret.osh-font-light-arrow-down {
        display: inline;
        }
        .osh-featured-box.-sku .sku>.link {
        text-decoration: none;
        }
        .caret {
        display: inline-block;
        width: initial;
        height: initial;
        margin-left: initial;
        vertical-align: initial;
        border: none;
        }
        .helpcentre {}
        .helpcentre h1 {
        color: #333;
        font-size: 36px;
        line-height: 42px;
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        }
        .helpcentre h2 {
        color: #333;
        font-size: 30px;
        line-height: 36px;
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        padding-top: 0px;
        padding-left: 0px;
        padding-bottom: 0px;
        }
        .helpcentre h3 {
        color: #333;
        font-size: 18px;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        }
        .helpcentre h4 {
        color: #333;
        font-size: 18px;
        line-height: 24px;
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        }
        .helpcentre h5 {
        color: #333;
        font-size: 14px;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        }
        .helpcentre h6 {
        color: #333;
        font-size: 12px;
        line-height: 18px;
        font-family: 'Roboto', sans-serif;
        margin-top: 20px;
        }
        .helpcentre p {
        color: #333;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        font-weight: normal;
        }
        .helpcentre a {
        color: #F68B1E;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        }
        .helpcentre a:hover {
        color: #F68B1E;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        color: #fff;
        background-color: lightgray;
        }
        .helpcentre ol li {
        color: #333;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        font-weight: normal;
        margin-bottom: 10px;
        font-size: 14px;
        }
        .helpcentre ul li {
        color: #333;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        font-weight: normal;
        font-size: 14px;
        }
        .helpcentre .my-heading {
        font-size: 16px;
        line-height: 18px;
        color: #333;
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        margin-top: 20px;
        }
        .helpcentre div[class^=col-] {
        padding: 0;
        }
        .margin-btm-10 {
        margin-bottom: 10px;
        }
        .margin-btm-20 {
        margin-bottom: 20px;
        }
        <!-- Style 2nd part  -->
        .margin-btm-30 {
        margin-bottom: 30px;
        }
        .margin-top-10 {
        margin-top: 10px;
        }
        .margin-top-20 {
        margin-top: 20px;
        }
        .margin-top-30 {
        margin-top: 30px;
        }
        .row {
        margin-right: 0;
        margin-left: 0;
        padding: 0;
        }
        .seotxt h4 {
        color: #333;
        line-height: 18px;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 500;
        margin-top: 20px
        }
        .seotxt p {
        color: #333;
        line-height: 24px;
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        font-weight: 200;
        }
        hr {
        margin: 0 !important;
        }
        .question p {
        font-size: 14px;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        color: #333;
        }
        .question ul li {
        font-size: 14px;
        line-height: 20px;
        font-family: 'Roboto', sans-serif;
        color: #333;
        }
        .top-banner {
        width: 100%;
        box-sizing: border-box;
        border-bottom: 1px solid #c0c0c0;
        padding: 10px 0;
        }
        .top-banner a:hover {
        background-color: transparent;
        }
        #hc-breadcrumb {
        padding: 0px;
        padding-left: 10px;
        }
        .custom-counter {
        margin: 0;
        padding: 0;
        list-style-type: none;
        margin-top: 20px;
        }
        .custom-counter li {
        counter-increment: step-counter;
        margin-bottom: 25px !important;
        margin-left: 42px;
        }
        .custom-counter li::before {
        content: counter(step-counter);
        margin-right: 20px;
        font-size: 14px;
        line-height: 20px;
        color: #333;
        font-weight: bold;
        padding: 3px 8px;
        border-radius: 100px;
        border: 3px solid #f68b1e;
        margin: 0px 12px 0px -42px;
        }
        .myvid {
        border-top: 1px solid darkgray;
        border-left: 1px solid darkgray;
        border-bottom: 1px solid darkgray;
        }
        .padding-top-first {
        padding-top: 8.1% !important;
        }
        .padding-top-second {
        padding-top: 10% !important;
        }
        .nav-justified>li>a {
        text-align: center;
        background-color: #f3f3f3;
        color: #333 !important;
        border-radius: 0;
        font-size: 18px;
        font-weight: 500;
        }
        .nav>li>a:focus,
        .nav>li>a:hover {
        text-decoration: none;
        background-color: #eee;
        color: #333;
        }
        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
        color: #fff !important;
        background-color: #F68B1E;
        }
        .boxed {
        background-color: #fdfdfd;
        margin: 0 0 10px 10px;
        border-radius: 10px;
        border: 1px solid #d4d4d4;
        padding-top: 1%;
        padding-right: 50px;
        padding-left: 22px;
        }
        .notice {
        margin: 0 0 0 10px;
        }
        .popular {
        margin-left: 10px;
        }
        @media only screen and (min-width: 1200px) {
        .main-title {
        margin-top: 15px !important;
        }
        }
        @media only screen and (max-width: 1199px) {
        .logo-img {
        margin-top: 10px;
        }
        .padding-top-first {
        padding-top: 4%;
        }
        .padding-top-second {
        padding-top: 10%;
        }
        }
        @media only screen and (max-width : 781px) {
        .top-banner {
        width: 100%;
        }
        .splash-banner {
        padding: 12px 20px 30px 20px !important;
        }
        .custom-counter {
        margin-top: 0 !important;
        }
        .custom-counter li {
        margin-bottom: 30px !important;
        }
        }
        <!-- style 3rd part  -->
        @media only screen and (max-width : 640px) {
        .main-title {
        margin-top: 18px !important;
        margin-bottom: 0;
        }
        .top-banner {
        width: 100%;
        padding: 5px 0;
        }
        .splash-banner {
        padding: 12px 15px 30px 15px !important;
        }
        .nav-pills>li+li {
        margin-left: 0;
        }
        }
        @media only screen and (max-width : 480px) {
        .main-title {
        margin-top: 14px !important;
        margin-bottom: 0;
        }
        .top-banner {
        width: 100%;
        padding: 5px 0;
        }
        .splash-banner {
        padding: 12px 15px 30px 15px !important;
        }
        }
        @media only screen and (max-width : 350px) {
        .top-banner {
        width: 100%;
        padding: 5px 0;
        }
        .main-title {
        margin-top: 11px !important;
        margin-bottom: 0;
        }
        .splash-banner {
        padding: 12px 10px 30px 10px !important;
        }
        }
        .th {
        text-align: center;
        background-color: #f5f5f5;
        color: #F68B1E;
        border: 1px solid black;
        padding: 5px;
        }
        .trgap {
        vertical-align: middle !important;
        width: 26%;
        }
        .table-bordered {
        border-left: none !important;
        }
        td,
        th {
        padding: 0;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        }
        .tdborderright {
        border-right: none;
        border-bottom: none;
        border-top: none !important;
        }
        /*<!--FAQ Styling Starts Here-->*/
        .block-acrdion-main {
        position: relative;
        float: left;
        width: 100%;
        width: 100%;
        }
        .acrdion-title {
        position: relative;
        float: left;
        width: 100%;
        padding-bottom: 30px;
        }
        .acrdion-title h3 {
        font-size: 24px;
        float: left;
        color: #F68B1E;
        margin: 0;
        line-height: 30px;
        font-family: 'Roboto', sans-serif;
        margin-top: 8px;
        }
        .acrdion-title p {
        float: right;
        margin: 10px 0 0 0;
        font-size: 18.15px;
        color: #005387;
        cursor: pointer;
        }
        .panel-group {
        position: relative;
        float: left;
        margin-bottom: 10px !important;
        width: 100%;
        }
        .panel-default>.panel-heading {
        background-color: #fff !important;
        }
        .panel.panel-default {
        border-radius: 0 !important;
        margin: 0 !important;
        }
        .panel-heading h4 {
        margin-top: 0;
        }
        .panel-group .panel-heading a {
        display: block;
        padding: 10px 10px;
        text-decoration: none;
        position: relative;
        font-size: 16px;
        line-height: 20px;
        color: #333 !important;
        font-weight: 500 !important;
        padding-right: 30px;
        }
        .panel-group .panel-heading a.collapsed:after {
        content: '+';
        position: absolute;
        right: 20px;
        top: 25%;
        font-size: 30px;
        color: #F68B1E;
        }
        .panel-group .panel-heading a:after {
        content: '-';
        position: absolute;
        right: 20px;
        top: 25%;
        font-size: 30px;
        color: #F68B1E;
        }
        .panel-body {
        padding: 0 !important;
        margin: 0 !important;
        }
        .panel-heading {
        padding: 10px 0 !important;
        }
        .pull-right {
        display: none !important;
        }
        @media only screen and (max-width: 769px) {
        .block-acrdion-main {
        padding: 0 !important;
        }
        .acrdion-title {
        padding-bottom: 20px;
        }
        .acrdion-title p {
        font-size: 14.15px;
        margin: 12px 0 0 4px;
        float: left;
        }
        .panel-group .panel-heading a:after {
        right: 11px;
        }
        .panel-group .panel-heading a.collapsed:after {
        right: 8px;
        }
        .panel-body {
        padding: 15px 35px 15px 0 !important;
        margin: 0 8px;
        }
        .panel-group .panel-heading a {
        padding: 10px 7px;
        font-weight: 500;
        }
        }
        <!-- style 4th part  -->
        @media only screen and (max-width: 769px) {
        .block-acrdion-main {
        padding: 0 !important;
        }
        .acrdion-title {
        padding-bottom: 20px;
        }
        .acrdion-title p {
        font-size: 14.15px;
        margin: 12px 0 0 4px;
        float: left;
        }
        .panel-group .panel {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
        border-radius: 0 !important;
        }
        .panel-group .panel-heading a:after {
        right: 11px;
        }
        .panel-group .panel-heading a.collapsed:after {
        right: 8px;
        }
        .panel-body {
        padding: 15px 35px 15px 0 !important;
        margin: 0 8px;
        }
        .panel-group .panel-heading a {
        padding: 10px 7px;
        font-weight: 500;
        padding-right: 30px;
        }
        }
        @media (min-width: 414px) and (max-width: 768px) {
        .acrdion-title p {
        margin: 20px 0 0 0;
        float: right;
        }
        }
        p.question {
        display: inline-block;
        margin-left: 1%;
        font-weight: bold;
        width: 92%;
        }
        .panel-title {
        cursor: pointer;
        }
        .panel-collapse {
        display: none;
        }
        .panel-collapse.in {
        display: block;
        }
        .banner-heading {
        color: #000000;
        font-size: 28px;
        margin: 0px;
        margin-left: -25px;
        font-weight: 600;
        padding: 18px;
        }
        .lzd-act-richtext ol li {
        list-style: none !important;
        }
        .lzd-act-richtext a {
        text-decoration: none !important;
        color: text-decoration: none !important;
        color: #f57224 !important;
        }
        /*<!--FAQ Styling Ends Here-->*/
        .inner-content {
        width: 1188px;
        margin: 0 auto;
        padding: 0;
        /* overflow: hidden; */
        }
        a {
        color: #F68B1E;
        text-decoration: none;
        }
        .lzd-act-richtext h4 {
        font-size: 16px !important;
        margin: 0px 0 !important;
        }
        .lzd-act-richtext {
        font-family: Arial, Verdana, sans-serif !important;
        line-height: normal !important;
        word-wrap: break-word;
        word-break: keep-all;
        overflow: hidden;
        padding: 8px;
        margin-top: 8px;
        margin-left: 0px;
        }
        .lzd-act-richtext ol,
        .lzd-act-richtext ul {
        padding-left: 0px !important;
        padding-right: 0px !important;
        }
        </style>
        <!-- style 5th part  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">
        <style>
          .toggle .osh-btn .label {
          color: #6E6E6E;
          font-weight: 500;
          font-size: 14px;
          text-align: left;
          padding: 0
          }
          .navAllCat .label {
          color: #6E6E6E;
          font-weight: 500;
          font-size: 14px;
          text-align: left;
          padding: 0
          }
          .navAllCat .caret {
          display: inherit;
          width: initial;
          height: 0;
          margin-left: inherit;
          border-top: inherit;
          border-right: inherit;
          border-left: inherit;
          vertical-align: baseline
          }
          .osh-btn>.caret {
          display: inherit;
          width: initial;
          height: 0;
          margin-left: inherit;
          border-top: inherit;
          border-right: inherit;
          border-left: inherit
          }
          .osh-dropdown>.toggle>.osh-btn>.caret {
          vertical-align: baseline
          }
          .main_header--nav-right .dropdown-header {
          display: initial;
          padding: 0;
          font-size: 12px;
          line-height: 1.42857143;
          color: #777;
          white-space: nowrap
          }
          .btn-header {
          padding: 0
          }
          .panel-categories h3 {
          font-size: 1em
          }
          #search_box-cancel_btn .label {
          color: #416998;
          font-size: 100%;
          font-weight: 500;
          text-align: left;
          vertical-align: baseline;
          border-radius: 0
          }
          .search_box--cancel_btn {
          padding: 11px 0;
          !important
          }
          .caret.osh-font-light-arrow-down {
          display: inline;
          }
          .osh-featured-box.-sku .sku>.link {
          text-decoration: none;
          }
          .caret {
          display: inline-block;
          width: initial;
          height: initial;
          margin-left: initial;
          vertical-align: initial;
          border: none;
          }
          .helpcentre {}
          .helpcentre h1 {
          color: #333;
          font-size: 36px;
          line-height: 42px;
          font-family: 'Roboto', sans-serif;
          margin-top: 20px;
          }
          .helpcentre h2 {
          color: #333;
          font-size: 30px;
          line-height: 36px;
          font-family: 'Roboto', sans-serif;
          margin-top: 20px;
          padding-top: 0px;
          padding-left: 25px;
          padding-bottom: 0px;
          }
          .helpcentre h3 {
          color: #333;
          font-size: 18px;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          margin-top: 20px;
          }
          .helpcentre h4 {
          color: #333;
          font-size: 18px;
          line-height: 24px;
          font-family: 'Roboto', sans-serif;
          margin-top: 20px;
          }
          .helpcentre h5 {
          color: #333;
          font-size: 14px;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          margin-top: 20px;
          }
          .helpcentre h6 {
          color: #333;
          font-size: 12px;
          line-height: 18px;
          font-family: 'Roboto', sans-serif;
          margin-top: 20px;
          }
          .helpcentre p {
          color: #333;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          font-weight: normal;
          }
          .helpcentre a {
          color: #F68B1E;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          }
          .helpcentre a:hover {
          color: #F68B1E;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          color: #fff;
          background-color: lightgray;
          }
          .helpcentre ol li {
          color: #333;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          font-weight: normal;
          margin-bottom: 10px;
          font-size: 14px;
          }
          .helpcentre ul li {
          color: #333;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          font-weight: normal;
          font-size: 14px;
          }
          .helpcentre .my-heading {
          font-size: 16px;
          line-height: 18px;
          color: #333;
          font-family: 'Roboto', sans-serif;
          font-weight: 500;
          margin-top: 20px;
          }
          .helpcentre div[class^=col-] {
          padding: 0;
          }
          .margin-btm-10 {
          margin-bottom: 10px;
          }
          .margin-btm-20 {
          margin-bottom: 20px;
          }
          .margin-btm-30 {
          margin-bottom: 30px;
          }
          .margin-top-10 {
          margin-top: 10px;
          }
          .margin-top-20 {
          margin-top: 20px;
          }
          .margin-top-30 {
          margin-top: 30px;
          }
          .row {
          margin-right: 42px;
          margin-left: 0;
          padding: 0;
          }
          <!-- Style 6th part  -->
          .seotxt h4 {
          color: #333;
          line-height: 18px;
          font-family: 'Roboto', sans-serif;
          font-size: 16px;
          font-weight: 500;
          margin-top: 20px
          }
          .seotxt p {
          color: #333;
          line-height: 24px;
          font-family: 'Roboto', sans-serif;
          font-size: 14px;
          font-weight: 200;
          }
          hr {
          margin: 0 !important;
          }
          .question p {
          font-size: 14px;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          color: #333;
          }
          .question ul li {
          font-size: 14px;
          line-height: 20px;
          font-family: 'Roboto', sans-serif;
          color: #333;
          }
          .top-banner {
          width: 100%;
          box-sizing: border-box;
          border-bottom: 1px solid #c0c0c0;
          padding: 10px 0;
          }
          .top-banner a:hover {
          background-color: transparent;
          }
          #hc-breadcrumb {
          padding: 0px;
          padding-left: 10px;
          }
          .custom-counter {
          margin: 0;
          padding: 0;
          list-style-type: none;
          margin-top: 20px;
          }
          .custom-counter li {
          counter-increment: step-counter;
          margin-bottom: 25px !important;
          margin-left: 42px;
          }
          .custom-counter li::before {
          content: counter(step-counter);
          margin-right: 20px;
          font-size: 14px;
          line-height: 20px;
          color: #333;
          font-weight: bold;
          padding: 3px 8px;
          border-radius: 100px;
          border: 3px solid #f68b1e;
          margin: 0px 12px 0px -42px;
          }
          .myvid {
          border-top: 1px solid darkgray;
          border-left: 1px solid darkgray;
          border-bottom: 1px solid darkgray;
          }
          .padding-top-first {
          padding-top: 8.1% !important;
          }
          .padding-top-second {
          padding-top: 10% !important;
          }
          .nav-justified>li>a {
          text-align: center;
          background-color: #f3f3f3;
          color: #333 !important;
          border-radius: 0;
          font-size: 18px;
          font-weight: 500;
          }
          .nav>li>a:focus,
          .nav>li>a:hover {
          text-decoration: none;
          background-color: #eee;
          color: #333;
          }
          .nav-pills>li.active>a,
          .nav-pills>li.active>a:focus,
          .nav-pills>li.active>a:hover {
          color: #fff !important;
          background-color: #F68B1E;
          }
          .boxed {
          background-color: #fdfdfd;
          margin: 0 0 10px 10px;
          border-radius: 10px;
          border: 1px solid #d4d4d4;
          padding-top: 1%;
          padding-right: 18px;
          padding-left: 30px;
          }
          .notice {
          margin: 0 0 0 10px;
          }
          .popular {
          margin-left: 10px;
          }
          @media only screen and (min-width: 1200px) {
          .main-title {
          margin-top: 15px !important;
          }
          }
          @media only screen and (max-width: 1199px) {
          .logo-img {
          margin-top: 10px;
          }
          .padding-top-first {
          padding-top: 4%;
          }
          .padding-top-second {
          padding-top: 10%;
          }
          }
          @media only screen and (max-width : 781px) {
          .top-banner {
          width: 100%;
          }
          .splash-banner {
          padding: 12px 20px 30px 20px !important;
          }
          .custom-counter {
          margin-top: 0 !important;
          }
          .custom-counter li {
          margin-bottom: 30px !important;
          }
          }
          @media only screen and (max-width : 640px) {
          .main-title {
          margin-top: 18px !important;
          margin-bottom: 0;
          }
          .top-banner {
          width: 100%;
          padding: 5px 0;
          }
          .splash-banner {
          padding: 12px 15px 30px 15px !important;
          }
          .nav-pills>li+li {
          margin-left: 0;
          }
          }
          <!-- Style 7th part  -->
          @media only screen and (max-width : 480px) {
          .main-title {
          margin-top: 14px !important;
          margin-bottom: 0;
          }
          .top-banner {
          width: 100%;
          padding: 5px 0;
          }
          .splash-banner {
          padding: 12px 15px 30px 15px !important;
          }
          }
          @media only screen and (max-width : 350px) {
          .top-banner {
          width: 100%;
          padding: 5px 0;
          }
          .main-title {
          margin-top: 11px !important;
          margin-bottom: 0;
          }
          .splash-banner {
          padding: 12px 10px 30px 10px !important;
          }
          }
          .th {
          text-align: center;
          background-color: #f5f5f5;
          color: #F68B1E;
          border: 1px solid black;
          padding: 5px;
          }
          .trgap {
          vertical-align: middle !important;
          width: 26%;
          }
          .table-bordered {
          border-left: none !important;
          }
          td,
          th {
          padding: 0;
          border-right: 1px solid #ddd;
          border-bottom: 1px solid #ddd;
          }
          .tdborderright {
          border-right: none;
          border-bottom: none;
          border-top: none !important;
          }
          /*<!--FAQ Styling Starts Here-->*/
          .block-acrdion-main {
          position: relative;
          float: left;
          width: 100%;
          width: 100%;
          }
          .acrdion-title {
          position: relative;
          float: left;
          width: 100%;
          padding-bottom: 30px;
          }
          .acrdion-title h3 {
          font-size: 24px;
          float: left;
          color: #F68B1E;
          margin: 0;
          line-height: 30px;
          font-family: 'Roboto', sans-serif;
          margin-top: 8px;
          }
          .acrdion-title p {
          float: right;
          margin: 10px 0 0 0;
          font-size: 18.15px;
          color: #005387;
          cursor: pointer;
          }
          .panel-group {
          position: relative;
          float: left;
          margin-bottom: 10px !important;
          width: 100%;
          }
          .panel-default>.panel-heading {
          background-color: #fff !important;
          }
          .panel.panel-default {
          border-radius: 0 !important;
          margin: 0 !important;
          }
          .panel-heading h4 {
          margin-top: 0;
          }
          .panel-group .panel-heading a {
          display: block;
          padding: 10px 10px;
          text-decoration: none;
          position: relative;
          font-size: 16px;
          line-height: 20px;
          color: #333 !important;
          font-weight: 500 !important;
          padding-right: 30px;
          }
          .panel-group .panel-heading a.collapsed:after {
          content: '+';
          position: absolute;
          right: 20px;
          top: 25%;
          font-size: 30px;
          color: #F68B1E;
          }
          .panel-group .panel-heading a:after {
          content: '-';
          position: absolute;
          right: 20px;
          top: 25%;
          font-size: 30px;
          color: #F68B1E;
          }
          .panel-body {
          padding: 0 !important;
          margin: 0 !important;
          }
          .panel-heading {
          padding: 10px 0 !important;
          }
          .pull-right {
          display: none !important;
          }
          @media only screen and (max-width: 769px) {
          .block-acrdion-main {
          padding: 0 !important;
          }
          .acrdion-title {
          padding-bottom: 20px;
          }
          .acrdion-title p {
          font-size: 14.15px;
          margin: 12px 0 0 4px;
          float: left;
          }
          .panel-group .panel-heading a:after {
          right: 11px;
          }
          .panel-group .panel-heading a.collapsed:after {
          right: 8px;
          }
          .panel-body {
          padding: 15px 35px 15px 0 !important;
          margin: 0 8px;
          }
          .panel-group .panel-heading a {
          padding: 10px 7px;
          font-weight: 500;
          }
          }
          <!-- Style 8th part  -->
          @media only screen and (max-width: 769px) {
          .block-acrdion-main {
          padding: 0 !important;
          }
          .acrdion-title {
          padding-bottom: 20px;
          }
          .acrdion-title p {
          font-size: 14.15px;
          margin: 12px 0 0 4px;
          float: left;
          }
          .panel-group .panel {
          margin-top: 0 !important;
          margin-bottom: 0 !important;
          border-radius: 0 !important;
          }
          .panel-group .panel-heading a:after {
          right: 11px;
          }
          .panel-group .panel-heading a.collapsed:after {
          right: 8px;
          }
          .panel-body {
          padding: 15px 35px 15px 0 !important;
          margin: 0 8px;
          }
          .panel-group .panel-heading a {
          padding: 10px 7px;
          font-weight: 500;
          padding-right: 30px;
          }
          }
          @media (min-width: 414px) and (max-width: 768px) {
          .acrdion-title p {
          margin: 20px 0 0 0;
          float: right;
          }
          }
          p.question {
          display: inline-block;
          margin-left: 1%;
          font-weight: bold;
          width: 92%;
          }
          .panel-title {
          cursor: pointer;
          }
          .panel-collapse {
          display: none;
          }
          .panel-collapse.in {
          display: block;
          }
          .banner-heading {
          color: #000000;
          font-size: 28px;
          margin: 0px;
          margin-left: -25px;
          font-weight: 600;
          padding: 18px;
          }
          .lzd-act-richtext ol li {
          list-style: none !important;
          }
          .lzd-act-richtext a {
          text-decoration: none !important;
          color: text-decoration: none !important;
          color: #f57224 !important;
          }
          /*<!--FAQ Styling Ends Here-->*/
          .inner-content {
          width: 1188px;
          margin: 0 auto;
          padding: 0;
          /* overflow: hidden; */
          }
          a {
          color: #F68B1E;
          text-decoration: none;
          }
          .lzd-act-richtext h4 {
          font-size: 16px !important;
          margin: 0px 0 !important;
          }
          .lzd-act-richtext {
          font-family: Arial, Verdana, sans-serif !important;
          line-height: normal !important;
          word-wrap: break-word;
          word-break: keep-all;
          overflow: hidden;
          padding: 8px;
          margin-top: 8px;
          margin-left: 0px;
          }
          .lzd-act-richtext ol,
          .lzd-act-richtext ul {
          padding-left: 0px !important;
          padding-right: 0px !important;
          }
        </style>
        <!-- Code 1st  part  -->

        <div class="container-fluid helpcentre splash-banner" style="max-width: 1170px; margin: 0 auto; padding: 0;">
          <div class="row top-banner">
              <div class="col-sm-12" data-spm-anchor-id="a2a0e.11886594.9877735410.i0.77f22599NLVRth">
                <h2 class="banner-heading">
                    Returns &amp; Refunds
                </h2>
              </div>
          </div>
        </div>
        <div class="row margin-top-20 margin-btm-30">
          <ul class="nav nav-pills nav-justified">
              </li>
              <li class="active"><a href="#">Returns
                Policy</a>
              </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-12">
              <div class="row">
                <div class="col-sm-10">
                    <h3 style="margin-top: 0;">Returns Policy</h3>
                    <ol class="custom-counter">
                      <li>If your product is damaged, defective, incorrect or incomplete at the time of delivery, please file a return request on the app or website within 14 days for Dmall items and 7 days for non-Dmall items of the delivery date.</li>
                      <li>For selected categories, we accept a change of mind: Men’s Fashion, Women’s Fashion, Men’s bags, Women’s bags, Luggage &amp; Suitcase, Bedding, Bath. Exceptions are women's intimate apparel, men's innerwear, swimwear, eyewear, jewellery,
                          watches, duffel bags, shoe-care.
                      </li>
                      <li>For device related issues after usage or the expiration of the return window, seller warranty or brand warranty could be given by the seller. For seller warranty, please contact the seller. The contact details of the seller can befound
                          on the invoice. For brand warranty, please refer to the<a href="contact_us"> Contact Us</a>. For more information on warranty claims please view our<a href="privacy_policy"> Privacy Policy</a>.
                      </li>
                    </ol>
                    <!-- <p>You will always find the relevant terms on the product page (Return Policy tab).</p> -->
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10" style="padding: 0;">
                    <h3>Returns Policy per Category</h3>
                    <section id="" class="acrdion-main block-acrdion-main">
                      <div class="panel-group accordion-content" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Phones and Tablets</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question ">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Phones, Tablets, Earphones &amp; Headsets</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund</p>
                                                    <p>Not eligible for return if the item is"No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Fashion</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Clothing, Apparel, Bags, Shoes &amp; Accessories  </b></p>
                                                    <p>Stylishvalley items:7 Days; Return and refund.</p>
                                                    <p>Eligible for return if the item is "No longer needed".</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Eyewear, Jewellery &amp; Watches</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!-- Code 2nd part  -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Beauty &amp; Health</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Beauty, Personal Care &amp; Health</b></p>
                                                    <p>Non-returnable</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Hair Removal &amp; Electronic Accessories</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!-- 3rd part  -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Appliances</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Computing &amp; Gaming</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Laptops, Certified Refurbished Laptops, Components, Processors, Projectors, Storage, Printers, Scanners, Headsets, Headphones, Speakers, Consoles &amp; PC / Video Games</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Software</b></p>
                                                    <p>Non-returnable</p>
                                                    <p>For software-related technical issues or installation issues in items belonging to the software category, please contact the brand directly.</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">TVs, Audios &amp; Cameras</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Televisions, Headphones, Speakers, Cameras, Lenses, Flashes, Filters &amp; Musical Instruments</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Movies &amp; Music</b></p>
                                                    <p>Non-returnable</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!-- Code 3rd part  -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Home &amp; Living</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                </h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Bedding &amp; Bath</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Eligible for return if the item is "No longer needed".</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Kitchen &amp; Dining, Furniture &amp; Lighting</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Sports &amp; Travel</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Clothing, Apparel &amp; Shoes</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Supplements</b></p>
                                                    <p>Non-returnable</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Baby, Toys &amp; Kids</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <!-- 4th part  -->
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Clothing, Apparel &amp; Shoes</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <!-- Code 4th Part  -->
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Digital Goods</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></h4>
                            </div>
                            <div class="panel-collapse" style="display: none;">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p>Non-returnable</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle collapsed">Other Categories</a><i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                </h4>
                            </div>
                            <div class="panel-collapse" style="display: none;">
                                <div class="panel-body">
                                  <div class="fbck " style="display: block;">
                                      <div class="question">
                                        <table class="table ">
                                            <tbody>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Books &amp; Stationery</b></p>
                                                    <p>Stylishvalley items: 7 Days; Return and refund.</p>
                                                    <p>Not eligible for return if the item is "No longer needed"</p>
                                                    <p>If your item arrived in defective / damaged or incorrect / incomplete condition, a refund will be issued.</p>
                                                    <p>For overseas products, please refer to the product page to check the applicable return reasons.</p>
                                                    <p>For device-related issues after usage please contact the brand warranty provider directly (if applicable).</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="tdborderright">
                                                    <p><b>Pet Supplies</b></p>
                                                    <p>Non-returnable</p>
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>
                    </section>
                    <p>Please note that certain items marked as non-returnable on product page are not eligible for return. For more information view the complete list of <a >Returns Policy per Category</a>.
                    </p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-10">
                    <h3>Valid reasons to return an item</h3>
                    <ol class="custom-counter">
                      <li>Delivered Product is damaged (physically destroyed or broken) / defective (dead on arrival)</li>
                      <li>Delivered Product is incorrect (presentation different on website) / incomplete (missing parts)
                      </li>
                      <li>Delivered Product is “No longer needed” (you no longer have a use for the product / you have changed your mind about the purchase / the size of a fashion product does not fit / you do not like the product after opening the package) - eligible
                          for selected products only
                      </li>
                    </ol>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-sm-12" style="padding-left: 0;">
              <div class="boxed">
                <h3 style="text-align: center;">Conditions for Returns</h3>
                <ol class="olclass" style="margin-top: -4px;">
                    <li style="list-style: decimal!important;">The product must be unused, unworn, unwashed and without any flaws. Fashion products can be tried on to see if they fit and will still be considered unworn</li>
                    <br>
                    <li style="list-style: decimal!important;">The product must include the original tags, user manual, warranty cards, freebies and accessories</li>
                    <br>
                    <li style="list-style: decimal!important;">The product must be returned in the original and undamaged manufacturer packaging / box. If the product was delivered in a second layer of Daraz packaging, it must be returned in the same condition with return shipping label attached. Do not
                      put tape or stickers on the manufacturers box
                    </li>
                    <br> <b>NOTE: </b>It is important to print out and paste the return label on your return parcel to avoid any inconvenience/delay in process of your return. <br>
                </ol>
              </div>
              <div class="notice">
                <p>If a product is returned to us in an inadequate condition, we reserve the right to send it back to you.
                </p>
              </div>
              <div class="popular margin-top-30">
                <h3>Popular Links</h3>
                <p>
                    <a href="faq_page" data-spm-anchor-id="a2a0e.11886594.9877735410.7">Frequently AskedQuestions</a><br>
                    <a href="privacy_policy" data-spm-anchor-id="a2a0e.11886594.9877735410.8">Privacy Plicy</a><br>
                    <a href="contact_us" data-spm-anchor-id="a2a0e.11886594.9877735410.9">Contact Us</a>
                </p>
              </div>
          </div>
          
          <div class="col-sm-12">
            <div class="clearfix" style="max-width: 730px;text-align: justify;">
                <h4 style="margin-top: 40px;">Issuance of Refunds</h4>
                <p>If your product is eligible for a refund, you can choose your preferred refund method based on the table below. The shipping fee is refunded along with the amount paid for your returned product.</p>
                <p>The time required to complete a refund depends on the refund method you have selected. Once we have received your product (4-5 working days) and it has undergone a quality control (2 working days), the expected refund processing times are as follows:</p>
                <p>Please note that this policy does not apply to Daraz Global products.</p>
            </div>
            <div style="margin-top: 24px;" class="panel-group">
                <div class="panel panel-default">
                  <table class="table table-bordered">
                      <tbody>
                        <tr>
                            <th class="th" style="text-align: left;">Payment Method</th>
                            <th class="th" style="text-align: left;">Refund Option</th>
                            <th class="th" style="text-align: left;width: 34%;">Refund Time</th>
                        </tr>
                        <tr>
                            <td width="208">
                              <p style="margin: 0 0 0px;">All</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Refund Voucher</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">1-2 working days</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Debit or Credit Card</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Debit or Credit Card Payment Reversal</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">9-10 working days</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="208">
                              <p style="margin: 0 0 0px;">bKash</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Bank Deposit / Mobile Payment Reversal</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">7 working days</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Cash on Delivery (COD)</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Bank Deposit</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">4-5 working days</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Daraz Voucher</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">Refund Voucher</p>
                            </td>
                            <td width="208">
                              <p style="margin: 0 0 0px;">1-2 working days</p>
                            </td>
                        </tr>
                      </tbody>
                  </table>
                </div>
                <p>Important Note: The Voucher discount code can only be applied once. The leftover amount will not be refunded or used for the next purchase even if the value of the order is smaller than the voucher value.</p>
            </div>
          </div>

        </div>
      
        <!-- Script section -->

        <script type="text/javascript">

            $(document).ready(function () {
                $('.panel-title').click(function () {
                    $(this).find('a').toggleClass('collapsed');
                    $(this).parents('.panel').find('.panel-collapse').slideToggle();
                });
                $('.acrdion-title a').click(function () {
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active').text('EXPAND ALL');
                        $(this).parents('.acrdion-main').find('.panel-title a').addClass('collapsed');
                        $(this).parents('.acrdion-main').find('.panel').find('.panel-collapse').slideUp();
                    } else {
                        $(this).addClass('active').text('COLLAPSE ALL');

                        $(this).parents('.acrdion-main').find('.panel-title a').removeClass('collapsed');

                        $(this).parents('.acrdion-main').find('.panel').find('.panel-collapse').slideDown();
                    }
                });
            });
        </script>
      
    </div>
  </div>
</div>

<!-- service section -->
<div class="jtv-service-area">
  <div class="container">
    <div class="row">
      <div class="col col-md-3 col-sm-6 col-xs-12">
        <div class="block-wrapper ship">
          <div class="text-des">
            <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
            <div class="service-wrapper">
              <h3>World-Wide Shipping</h3>
              <p>On order over $99</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-md-3 col-sm-6 col-xs-12 ">
        <div class="block-wrapper return">
          <div class="text-des">
            <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
            <div class="service-wrapper">
              <h3>100% secure payments</h3>
              <p>Credit/ Debit Card/ Banking </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-md-3 col-sm-6 col-xs-12">
        <div class="block-wrapper support">
          <div class="text-des">
            <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
            <div class="service-wrapper">
              <h3>Support 24/7</h3>
              <p>Call us: ( +123 ) 456 789</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-md-3 col-sm-6 col-xs-12">
        <div class="block-wrapper user">
          <div class="text-des">
            <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
            <div class="service-wrapper">
              <h3>Member Discount</h3>
              <p>25% on order over $199</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- service section -->
<?php include('footer.php')?>


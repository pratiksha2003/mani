<?php
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" class=" js cssanimations">


<!-- Mirrored from madi.alt-neuro.com/about-us/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2019 11:26:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Welcome to Madi Ratnam Gold Jewellers </title>
    <link rel="icon"
        type="image/png" href="../images/favicon.html" />
    <meta name="keywords" content="Welcome to Madi Ratnam Gold Jewellers ">
    <meta name="description" content="">


    <link href="../best1_files/style.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="../best1_files/menu.css" rel="stylesheet" media="all">
    <link href="#" rel="shortcut icon">

    <style>
        .error_class {
            color: #FF0000;
        }

        .add_class_nes {
            color: #003366;
        }

        .error_classi {
            color: #999999;
        }


        .txt1 {
            color: #FF00FF;
            font-weight: bold;
            font-size: x-large;
        }

        .txt2 {
            color: #FFDE00;
            font-weight: bold;
            font-size: x-large;
        }

        .txt3 {
            color: #9CE400;
            font-weight: bold;
            font-size: x-large;
        }
        -->
    </style>

    <script src="../best1_files/jquery.min.js"></script>
    <script type="text/javascript" src="../best1_files/modernizr.custom.86080.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#subscribe_id").click(function () {

                var u_mail = $("#Email").val();

                if (u_mail == '' || u_mail == "E-mail address") {

                    $("#Email").addClass("error_class");
                }
                else if (!validateEmail(u_mail)) {
                    $("#Email").addClass("error_class");
                }
                else {
                    var result_b = true;
                }

                if (result_b == true) {
                    $.post('newsletter_mail.html', { email_id: u_mail }, function (data) {

                        if (data == 'success') {
                            $("#newsLetter_success").css("color", "green");
                            $("#Email").val("E-mail address");
                            $("#Email").addClass("error_classi");
                            $("#newsLetter_success").html("Your request has been accepted!");
                            $("#newsLetter_success").addClass("add_class_nes");
                        }
                        else {
                            //alert("failed");
                            $("#newsLetter_success").html("Mail not send");
                            $("#newsLetter_success").addClass("error_class");
                        }
                    })
                }

                function validateEmail($email) {
                    //var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    var emailReg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
                    if (!emailReg.test($email)) {
                        return false;
                    } else {
                        return true;
                    }
                }
            });


            $(".search_tool").click(function () {    //alert("hhhh");

                $('#search-form').submit();

            });



        });
    </script>

</head>

<body>



    <div id="body_container2">



        <!--Top Container Start-->
        <div id="top_container" style="background-image: url('<?php echo base_url();?>assets/images/gol1.jpg'); background-size: cover; background-repeat: no-repeat; height: 140px; box-shadow: 0px 0px 20px #e3e3e3;">
            <div class="top">
                <div id="totmenu">
                </div>

                <div class="clear"></div>
            </div>


            <div style="text-align: center;">
                <table width="" border="0">
                    <tr>
                        <td>
                            <div style="float: left !important; margin-left: 185px;">
                            <a href="<?php echo base_url();?>assets/index-2.html" title="Madi Ratnam Gold Jewellers ">
                                <img src="<?php echo base_url();?>assets/img/logo.png" title="Madi Ratnam Gold Jewellers " width="160"></a></div>
                        </td>

                        <td>
                            <div style="float: left !important; margin-left: 250px;">
                                <br />

                                <span style="margin-left: 270px">

                                    <img src="<?php echo base_url();?>assets/img/face.png" height="30px">

                                    <img src="<?php echo base_url();?>assets/img/twr.png" height="30px;">
                                </span>
                                <br />
                                <table>
                                    <tr>
                                        <td><span style="font-size: 14px"><b style="font-weight: bold">Email:</b>support@madiratnam.com  </span>| </td>
                                        <td>
                                            <img src="<?php echo base_url();?>assets/images/phone_2.png" height="17px" /></td>
                                        <td>
                                            <div style="font-size: 15px">0522-3592159</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>

                    </tr>
                </table>

            </div>



            <div style="clear: both;"></div>
            <style>
                .menu1,
                .menu1 ul,
                .menu1 li,
                .menu1 a {
                    margin: 0;
                    padding: 0;
                    border: none;
                    outline: none;
                }

                .menu1 { /*Find this class in the css file*/
                    height: 40px;
                    width: 100%; /*I changed this to a percentage of the page,*/
                    margin-left: auto; /*Then added these two margin styles.*/
                    margin-right: auto;
                    background: #4c4e5a;
                    background: -webkit-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: -moz-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: -o-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: -ms-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                    background: linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
                }

                    .menu1 li {
                        position: relative;
                        list-style: none;
                        float: left;
                        display: block;
                        height: 40px;
                    }

                        .menu1 li a {
                            display: block;
                            padding: 0 18px;
                            margin: 6px 0;
                            line-height: 28px;
                            text-decoration: none;
                            border-left: 1px solid #393942;
                            border-right: 1px solid #4f5058;
                            font-family: Helvetica, Arial, sans-serif;
                            font-size: 12px;
                            color: #f3f3f3;
                            text-shadow: 1px 1px 1px rgba(0,0,0,.6);
                            -webkit-transition: color .2s ease-in-out;
                            -moz-transition: color .2s ease-in-out;
                            -o-transition: color .2s ease-in-out;
                            -ms-transition: color .2s ease-in-out;
                            transition: color .2s ease-in-out;
                        }

                        .menu1 li:first-child a {
                            border-left: none;
                        }

                        .menu1 li:last-child a {
                            border-right: none;
                        }

                        .menu1 li:hover > a {
                            color: #FFD007;
                        }

                    .menu1 ul {
                        position: absolute;
                        top: 40px;
                        left: 0;
                        opacity: 50;
                        background: #1f2024;
                        -webkit-border-radius: 0 0 5px 5px;
                        -moz-border-radius: 0 0 5px 5px;
                        border-radius: 0 0 5px 5px;
                        -webkit-transition: opacity .25s ease .1s;
                        -moz-transition: opacity .25s ease .1s;
                        -o-transition: opacity .25s ease .1s;
                        -ms-transition: opacity .25s ease .1s;
                        transition: opacity .25s ease .1s;
                    }

                    .menu1 li:hover > ul {
                        opacity: 50;
                    }

                    .menu1 ul li {
                        height: 0;
                        overflow: hidden;
                        padding: 0;
                        -webkit-transition: height .25s ease .1s;
                        -moz-transition: height .25s ease .1s;
                        -o-transition: height .25s ease .1s;
                        -ms-transition: height .25s ease .1s;
                        transition: height .25s ease .1s;
                    }

                    .menu1 li:hover > ul li {
                        height: 36px;
                        overflow: visible;
                        padding: 0;
                    }

                    .menu1 ul li a {
                        width: 100px;
                        padding: 4px 0 4px 40px;
                        margin: 0;
                        border: none;
                        border-bottom: 1px solid #353539;
                    }

                    .menu1 ul li:last-child a {
                        border: none;
                    }

                    .menu1 a.documents {
                        background: url('<?php echo base_url();?>assets/img/docs.html') no-repeat 6px center;
                    }

                    .menu1 a.messages {
                        background: url('<?php echo base_url();?>assets/img/bubble.html') no-repeat 6px center;
                    }

                    .menu1 a.signout {
                        background: url(../img/arrow.html) no-repeat 6px center;
                    }
            </style>
            <ul class="menu1">
                <li><span style="color: #43454F"></span></li>
                <li><a href="index-2.html">Home</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/about">About us</a></li>
                <li><a href="#">Products</a>

                    <ul>
                        <li><a href="<?php echo base_url();?>assets/gold/Gallery.aspx" class="documents">Gold</a></li>
                        <li><a href="<?php echo base_url();?>assets/diamond/dimond.aspx" class="messages">Diamond </a></li>

                    </ul>

                </li>
                <!--<li><a href="../showroom/index.html">Showroom</a></li>
    <li><a href="../testimonial/index.html">Customer comments</a></li>
    <li><a href="../media-coverage/index.html">Media coverage</a></li>
    <li><a href="../education/index.html">Education</a></li>-->
                <li><a href="/Login.aspx">Login</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/registration">Registration</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact us</a></li>

            </ul>
        </div>

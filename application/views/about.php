



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" class=" js cssanimations">


<!-- Mirrored from madi.alt-neuro.com/about-us/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2019 11:26:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Welcome to Madi Ratnam Gold Jewellers </title>
    <link rel="icon"
        type="image/png" href="<?php echo base_url();?>assets/images/favicon.html" />
    <meta name="keywords" content="Welcome to Madi Ratnam Gold Jewellers ">
    <meta name="description" content="">


    <link href="<?php echo base_url();?>assets/best1_files/style.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="<?php echo base_url();?>assets/best1_files/menu.css" rel="stylesheet" media="all">
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

    <script src="<?php echo base_url();?>assets/best1_files/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/best1_files/modernizr.custom.86080.js"></script>
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
                        background: url(../img/docs.html) no-repeat 6px center;
                    }

                    .menu1 a.messages {
                        background: url(../img/bubble.html) no-repeat 6px center;
                    }

                    .menu1 a.signout {
                        background: url(../img/arrow.html) no-repeat 6px center;
                    }
            </style>
            <ul class="menu1">
                <li><span style="color: #43454F"></span></li>
                <li><a href="<?php echo base_url();?>index.php">Home</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/about">About us</a></li>
                <li><a href="#">Products</a>

                    <ul>
                        <li><a href="#" class="documents">Gold</a></li>
                        <li><a href="#" class="messages">Diamond </a></li>

                    </ul>

                </li>
                <!--<li><a href="../showroom/index.html">Showroom</a></li>
    <li><a href="../testimonial/index.html">Customer comments</a></li>
    <li><a href="../media-coverage/index.html">Media coverage</a></li>
    <li><a href="../education/index.html">Education</a></li>-->
                <li><a href="#">Login</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/registration">Registration</a></li>
                <li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact us</a></li>

            </ul>
        </div>
        <div style="background-color: #000; background-repeat: no-repeat; background-size: cover; margin-top: -24px;">


            <div style="margin: auto; padding: 20px; height: 1500px;">

                <!--first history-->

                <div id="his1" align="right" style="color: #fff; margin-right: 206px; margin-top: 50px;">
                    <table>
                        <tr>


                            <td>
                                <div id="click1">
                                    <a href="javascript:void()" onclick="return neha0()" style="text-decoration: none;">
                                        <input type="submit" value="History" style="background-color: #FAB205; border: #FAB205 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" />
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div id="click2" style="margin-left: 10px;">
                                    <a href="javascript:void()" onclick="return neha1()" style="text-decoration: none;">
                                        <input type="submit" value="About Madi Ratnam Gold" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click3" style="margin-left: 10px;"><a href="javascript:void()" onclick="return neha2()" style="text-decoration: none; color: #B6CBCD;">
                                    <input type="submit" value="Mission & Vision" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a></div>
                            </td>

                        </tr>
                    </table>

                </div>



                <!--cmd-->



                <div id="cmd1" align="right" style="color: #fff; margin-right: 206px; margin-top: 50px; display: none">
                    <table>
                        <tr>


                            <td>
                                <div id="click4">
                                    <a href="index.html">
                                        <input type="submit" value="History" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click5" style="margin-left: 10px;">
                                    <input type="submit" value="About Madi Ratnam Gold" style="background-color: #FAB205; border: #FAB205 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" />
                                </div>
                            </td>

                            <td>
                                <div id="click6" style="margin-left: 10px;">
                                    <a href="javascript:void()" onclick="return neha3()" style="text-decoration: none;">
                                        <input type="submit" value="Mission & Vision" id="neha" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                        </tr>
                    </table>

                </div>

                <!--mission-->


                <div id="mis1" align="right" style="color: #fff; margin-right: 206px; margin-top: 50px; display: none">
                    <table>
                        <tr>


                            <td>
                                <div id="click7">
                                    <a href="index.html">
                                        <input type="submit" value="History" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click8" style="margin-left: 10px;">
                                    <a href="javascript:void()" onclick="return neha4()" style="text-decoration: none;">
                                        <input type="submit" value="About Madi Ratnam Gold" style="background-color: #D73F07; border: #D73F07 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" /></a>
                                </div>
                            </td>

                            <td>
                                <div id="click9" style="margin-left: 10px;">
                                    <input type="submit" value="Mission & Vision" style="background-color: #FAB205; border: #FAB205 solid 1px; padding: 8px; color: #fff; border-radius: 3px; cursor: pointer" />
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>





                <div style="float: left; padding: 20px;">
                    <div style="width: 410px; margin-top: 60px; height: 320px;">

                        <div id="img1">
                            <img src="<?php echo base_url();?>assets/img/146.jpg" height="400px;" style="margin-top: -30px;" /></div>
                        <br />

                        <div id="img2" style="display: none; margin-left: 20px; margin-top: -50px;">
                            <img src="<?php echo base_url();?>assets/img/col.jpg" /></div>

                        <div id="img3" style="display: none; margin-top: -30px;">
                            <img src="<?php echo base_url();?>assets/img/col2.jpg" /></div>

                    </div>
                </div>

                <div style="float: left; padding: 20px;">
                    <div style="width: 480px; height: 460px;">
                        <span style="color: #ccc; font-size: 11px; line-height: 18px;">



                            <div id="profile1" style="display: ">
                                <b style="font-size: 15px; color: #fff;">History</b><br />
                                <br />


                                <br />
                                <br />

                                <div style="margin-top: -30px; color: #999; font-size: 11px; line-height: 20px;">
                                    Our story begins in 2010, firm “AVR Group” at Lucknow is famous from that time. A greate People's Group who is owner of our firm, They are started his business with Real Estate and Farm 
    Houses and their vision is to give the uncompromising quality to the customer, expanded his business very rapidly with hard work. since 2019 Furthered he open new showrooms by name of 
    “Madi Ratnam Gold Jewellers”  Established in 2019 at Vibhuti Khand Gomti Nagar Lucknow. This vision was furthered by our M.D of Madi Ratnam Gold jewelers who shook up the Lucknow
     market by offering customers a full value gold buy-back scheme. This legacy of unapologetically putting the customer first still continues. Under the able guidance of that Group
     Madi Ratnam Gold successfully transformed into the modern and innovative jewellery maker it is today.<br />
                                    <br />

                                    We are now the jewellery destination of choice for every occasion, from a woman’s everyday wear to delicately crafted pieces for the biggest day of her life. Our path-breaking ways are also evident in 
    retail & wholesale.Madi Ratnam Gold is being symbol of trust for its customer with fully satisfactory.
                                    <br />
                                    <br />





                                </div>



                            </div>
                            <br />

                            <div id="profile2" style="display: none">

                                <b style="font-size: 15px; color: #fff;">About Madi Ratnam Gold</b><br />
                                <br />

                                <div style="color: #999; font-size: 11px; line-height: 22px;">

                                    <b style="font-size: 15px; color: #fff;">Madi Ratnam Gold Jewellers</b>
                                    Offering exquisite and latest range of gold jewellery including Carved Gold Bangles, Gold Rings, Gold Bracelets, etc.; Diamond Jewellery including Diamond Rings, Diamond Necklace Sets, etc.; 
    Designer Meenakari Necklaces, Traditional Kundan Necklaces etc...
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Our Company</b>
                                    <br />
                                    Jewellery has long been associated with enhancing the beauty and overall personality of a woman. Moreover, it occupies a significant place in the different beliefs, religions and cultures existing in India.
     Madi Ratnam Gold jewellers, established in the year 2019, is a reputed manufacturer and supplier of Gold Jewellery (Carved Gold Bangles, Gold Rings, Gold Bracelets, Gold Necklace Sets, Handmade Gold 
    Jewelry), Diamond Jewellery (Diamond Rings, Diamond Necklace Sets, Diamond Necklaces, Diamond Wedding Rings, Diamond Earrings, etc.), Designer Meenakari Necklaces, Traditional Kundan Necklaces,  
    and many more.
We supply our products to various cities around the india. We present a tantalizing range of jewellery which will be treasured by our customers forever. Processing and designing of superior quality 
    jewellery and diamonds is our specialization. 
                                    <br />
                                    Our complete range of handcrafted jewellery is the result of experience and in-depth study of the latest styles and customer requirements. A fabulous and modern range of jewellery is available with us 
    at the best competitive rates.
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Product Collection</b>
                                    <br />
                                    <address style="font-size: 15px; color: #fff;">
                                        Madi Ratnam Gold Jewellers  is a trusted manufacturer,wholesaler and supplier of following jewellery items: 
                                    </address>
                                    <br />

                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
                                        <tr>
                                            <td colspan="2" align="left" class="txt1">Diamond Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td width="10" align="left">&nbsp;</td>
                                            <td align="left">Diamond Rings</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Diamond Necklace Sets</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Diamond Necklaces</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Diamond Wedding Rings</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Diamond Earrings</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="txt2">Gold Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Carved Gold Bangles</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gold Rings</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gold Bracelets</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gold Necklace Sets</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Handmade Gold Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Antique Gold Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Antique Gold Chokers</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gold Bracelets</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gold Earrings</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gold Necklaces</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Stone Studded Gold Necklaces</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Pinned Gold Bracelets</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="left" class="txt3">Other Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Designer Meenakari Necklaces</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Traditional Kundan Necklaces</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gemstones Necklaces in Gold</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Gemstone Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Beaded Kundan Bangles</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Kundan Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Bridal Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Semi Precious Stone Jewellery</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">Semi Precious Necklaces</td>
                                        </tr>
                                        <tr>
                                            <td align="left">&nbsp;</td>
                                            <td align="left">&nbsp;</td>
                                        </tr>
                                    </table>


                                    <br />
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Best Quality</b><br />
                                    With the help of our experienced quality checking personnel, we conduct rigorous tests and checks on our products to confirm and determine quality excellence. Our products are ensured to be at par with the 
    national and international standards of quality. The dainty and elegant designs of our collections have won worldwide admiration and we regularly make special efforts to supply our clients with the 
    best and latest designs through our products.<br />

                                    <b style="font-size: 15px; color: #fff;">Infrastructural Setup</b><br />
                                    Madi Ratnam Gold Jewellers is supported by a well equipped and complete production unit, which is outfitted with all the necessary tools to carry out its processing works in the most efficient and smooth 
    manner possible. Our handmade range is manufactured by a team of dexterous and expert craftsmen who carefully carve out the designs. Reliable and established manufacturers have been entrusted to supply 
    us with raw materials like gold and diamond. 
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Why Us?</b>
                                    <br />

                                    Unique and creatively designed range of jewellery<br />
                                    Regular quality checking process to maintain their look and sheen<br />
                                    Ability to provide the latest collections in record time<br />
                                    Wide experience in the art of jewellery designing<br />
                                    Committed and expert jewellery designers who are well trained in various operations<br />


                                </div>


                            </div>
                            <br />
                            <br />

                            <div id="profile3" style="display: none; margin-top: -30px">
                                <b style="font-size: 15px; color: #fff;">Vision</b><br />
                                <br />

                                <div style="color: #999; font-size: 11px; line-height: 18px;">
                                    <br />
                                    Madi Ratnam Gold is the king as well as leading in jewellery shop in Lucknow Commitment towards Quality, Integrity and Value Creation for all customers. Implement Best Business Practices that goes beyond 
    customer expectations. Establish new benchmarks for the industry by besting existing standards.<br />
                                    To ensure continuous delight for our customers by always staying a step ahead of the curve. Accelerate the limits of excellence through path breaking innovation and professionalism.
                                    <br />
                                    Customer Satisfaction<br />
                                    Employee Satisfaction<br />
                                    Technology Up gradation<br />



                                    <br />
                                    <br />
                                    <b style="font-size: 15px; color: #fff;">Mission</b><br />
                                    <br />
                                    To create a culture of professionalism, core competence, teamwork, leadership and service excellence.
                                    <br />
                                    To leverage modern cost effective techniques resulting in quality, durability, wealth creation and value multiplication.
                                    <br />
                                    To render value added services creating customer delight through technological excellence and adherence to system and procedures with the extra-ordinary active involvement of human resources.
                                    <br />
                                    Madi Ratnam Gold group has always been a symbol of trust for its customer.
                                    <br />

                                    <br />
                                    <br />
                                    <br />
                                </div>
  </div>
  </span>
  </div>
                </div>
 </div>
 </div>

     </div>
        <div class="footer" style="clear: both; background-image: url('<?php echo base_url();?>assets/img/90.jpg'); margin-top: -10px; background-repeat: no-repeat; background-size: cover; float: left;">

            <div style="height: 30px; font-size: 12px;">
                <div style="margin: auto; width: 1006px;">
                <strong style="margin-top: -10px;">BRAND WE CARRY  </strong></div>
            </div>
            <div style="margin: auto; width: 1006px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center">
                            <div style="border-right: solid 1px #e3e3e3; border-left: solid 1px #e3e3e3;">
                            <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','<?php echo base_url();?>assets/images/logo_imgnb2.jpg',1)">
                                <img src="<?php echo base_url();?>assets/images/logo_imgnb1.jpg" width="200" height="55" id="Image9" /></a></div>
                        </td>

                        <td align="center">
                            <div style="border-right: solid 1px #e3e3e3;">
                            <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','<?php echo base_url();?>assets/images/gililogo.jpg',1)">
                                <img src="<?php echo base_url();?>assets/images/gililogo.jpg" width="200" height="55" id="Image12" /></a></div>
                        </td>

                        <td align="center">
                            <div style="border-right: solid 1px #e3e3e3;"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image14','','<?php echo base_url();?>assets//images/logo_asmi.jpg',1)">
                                <img src="<?php echo base_url();?>assets//images/logo_asmib.jpg" width="200" height="55" id="Image14" /></a></div>
                        </td>

                        <td align="center">
                            <div style="border-right: solid 1px #e3e3e3;"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image16','','<?php echo base_url();?>assets//images/images/sagini.html',1)">
                                <img src="<?php echo base_url();?>assets//images/sagini.jpg" width="200" height="55" id="Image16" /></a></div>
                        </td>

                        <td align="center">
                            <div style="border-right: solid 1px #e3e3e3;">
                            <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','<?php echo base_url();?>assets//images/pari.jpg',1)">
                                <img src="<?php echo base_url();?>assets/images/parib.jpg" width="200" height="55" id="Image13" /></a></div>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </table>

            </div>
            <div style="font-size: 12px; margin-bottom: 10px;"></div>
            <div style="height: 30px; font-size: 12px;">
                <div style="margin: auto; width: 1006px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">



                        <tr>
                            <td style="">
                                <div style="text-transform: uppercase; font-size: 13px; color: #990000;">News & offer</div>
                            </td>
                            <td>
                                <iframe frameborder="0" scrolling="no"
                                    allowtransparency="true" marginwidth="0" marginheight="0" src="News.aspx" height="30px" width="120%"></iframe>
                                <!--<marquee style="font-size:13px">Get 20% off on diamond jewellery, 15% off on precious stone & 20% off on the labour charges of making gold jewellery.</marquee>-->
                            </td>
                        </tr>



                    </table>

                </div>
            </div>
            <div style="font-size: 12px; margin-bottom: 10px;"></div>
            <div class="footer_block">

                <div class="foot_left">

                    <ul class="link-set">

                        <li class="link">
                            <a title="Home" class="link-a" href="<?php echo base_url();?>assets/index-2.html">
                            <span style="color: #fff; font-size: 11px;">Home</span></a>
                        </li>

                        <li class="link">
                            <a title="About us" class="link-a" href="<?php echo base_url();?>assets/index.html">
                            <span style="color: #fff; font-size: 11px;">About us</span></a>
                        </li>
                        <li class="link">
                            <a title="Contact us" class="link-a" href="<?php echo base_url();?>assets/contact-us/index.html">
                            <span style="color: #fff; font-size: 11px;">Contact us</span></a>
                        </li>
                        <!-- <li class="link">
                        <a title="Workshop" class="link-a" href="#">Workshop</a>
                    </li>
                    <li class="link">
                        <a title="Terms of use" class="link-a" href="#">Terms of use</a>
                    </li>
                    <li class="link">
                        <a title="Disclaimer" class="link-a" href="#">Disclaimer</a>
                    </li>
                    <li class="link">
                        <a title="Showroom" class="link-a link-a-hightlights" href="#">SHOWROOM</a>
                    </li>           -->
                    </ul>

                    <div class="social_icon">

                        <span style="float: left;">
                            <a href="<?php echo base_url();?>assets/h.html" target="_blank" title="Facebook">
                                <img src="<?php echo base_url();?>assets/best1_files/fb_icon.png"></a>
                            <a href="#" target="_blank">
                                <img src="<?php echo base_url();?>assets/best1_files/email_icon.png"></a>
                        </span>



                    </div>

                    <p class="legal" style="color: #fff;">Designed by
                     <span style="color: #333; font-size: 11px;">
                     <a href="#" style="text-decoration: none; color: #333;">Stark Technology</a></span></p>

                </div>


                <div class="foot_right">

                    <span style="margin-left: 179px; color: #333; font-size: 11px;" id="newsLetter_success">Sign up to receive email updates.</span><br>
                    <div class="subs" style="margin-left: 179px;">
                        <input accesskey="4" class="subs-input" id="Email" name="Email" type="text" onblur="if(this.value==&#39;&#39;) this.value=&#39;E-mail address&#39;;" onfocus="if(this.value==&#39;E-mail address&#39;) this.value=&#39;&#39;;" value="E-mail address">
                        <input type="button" value="Subscribe" id="subscribe_id" class="sub_but" style="margin-top: 3px;">
                    </div>


                    <p class="legal" style="padding-left: 0; color: #333; text-align: right;">© copyright 2019 | Madi Ratnam Gold Jewellers . All rights reserved.</p>

                </div>



            </div>
        </div>
        <!-- Footer end-->


    </div>
    <!--<script src="js1/jquery.min.js"></script>-->
    <!--<script>
jQuery(document).ready(function() {
  // Handler for .ready() called.
  alert("hi");
});
</script>-->
</body>

<!-- Mirrored from madi.alt-neuro.com/about-us/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2019 11:26:46 GMT -->
</html>


<script>

    function neha1() {
        //alert("1");
        document.getElementById('profile3').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img1').style.display = "none"
        document.getElementById('img3').style.display = "none"
        document.getElementById('his1').style.display = "none"

        document.getElementById('profile2').style.display = "block"
        document.getElementById('click2').style.display = "block"
        document.getElementById('img2').style.display = "block"
        document.getElementById('cmd1').style.display = "block"

    }


    function neha2() {
        //alert("1");
        document.getElementById('profile2').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img1').style.display = "none"
        document.getElementById('img2').style.display = "none"
        document.getElementById('his1').style.display = "none"
        document.getElementById('cmd1').style.display = "none"

        document.getElementById('profile3').style.display = "block"
        document.getElementById('click3').style.display = "block"
        document.getElementById('img3').style.display = "block"
        document.getElementById('mis1').style.display = "block"

    }



    function neha3() {
        //alert("1");
        document.getElementById('profile2').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img1').style.display = "none"
        document.getElementById('img2').style.display = "none"
        document.getElementById('his1').style.display = "none"
        document.getElementById('cmd1').style.display = "none"

        document.getElementById('profile3').style.display = "block"
        document.getElementById('click6').style.display = "block"
        document.getElementById('img3').style.display = "block"
        document.getElementById('mis1').style.display = "block"

    }



    function neha4() {
        //alert("1");
        document.getElementById('profile3').style.display = "none"
        document.getElementById('profile1').style.display = "none"
        document.getElementById('img3').style.display = "none"
        document.getElementById('img2').style.display = "none"
        document.getElementById('his1').style.display = "none"
        document.getElementById('mis1').style.display = "none"

        document.getElementById('profile2').style.display = "block"
        document.getElementById('click8').style.display = "block"
        document.getElementById('img2').style.display = "block"
        document.getElementById('cmd1').style.display = "block"

    }


</script>
     



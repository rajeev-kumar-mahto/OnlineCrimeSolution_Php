<?php 
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: CRIME CONTROL Shanti Sewa Nyaya ::</title>
  
<!--dropdown script start here-->
	<script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="flexdropdown.js"></script>
    <link rel="stylesheet" type="text/css" href="flexdropdown.css">
    <link rel="stylesheet" type="text/css" href="general.css">
    <link rel="stylesheet" type="text/css"  href="style1.css" />
    <link href="layout.css" rel="stylesheet" type="text/css" />
<link href="featured_slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="jquery.tabs.setup.js"></script>
<!--dropdown script start here--> 


	  <?php
	     $conn=@mysql_connect("localhost","root","");
		   if(!$conn)
		   {
			   echo "connection failed...";
		   }
		  mysql_select_db("project");
		   $err="";
		   $err1="";
		     $qry="select * from firregister";
			 $smt=mysql_query("$qry");
			while($rs=mysql_fetch_assoc($smt))
			{
			 if($_SERVER["REQUEST_METHOD"]=="POST")
			 {
				 if($rs['email']==$_POST["t1"])
				 {
				    if(($rs['password']==$_POST["t2"]))
					{
						header("location:user\home.php");
					}
					else
					{
						$err="invalid password:";  
					}
				 }
			    else
			     {
				     $err1="Invalid username ";
			     }
			  }
			}
	  ?>
      <?php
	     $conn=@mysql_connect("localhost","root","");
		   if(!$conn)
		   {
			   echo "connection failed...";
		   }
		  mysql_select_db("project");
		   $err="";
		   $err1="";
		     $qry="select * from user_reg";
			 $smt=mysql_query("$qry");
			while($rs=mysql_fetch_assoc($smt))
			{
			 if($_SERVER["REQUEST_METHOD"]=="POST")
			 {
				 if($rs['email']==$_POST["t1"])
				 {
				    if(($rs['password']==$_POST["t2"]))
					{
						header("location:admin\home1.php");
					}
					else
					{
						$err="invalid password:";  
					}
				 }
			    else
			     {
				     $err1="Invalid username ";
			     }
			  }
			}
	  ?>

   </head>
<div class="top-boredr"></div>
<div class="header-main">
<div class="headers">
      <div class="header">
        <div class="logo1"><a href="#"><img src="image/logo1.png" alt="" width="326" height="87" border="0"></a><a href="#"></a>
        </div>
        
        <div class="lef-top-icon-logo"><img src="image/logo2.png" width="254" height="76" alt=""></div>
      </div>
  </div>
</div>

  
  
<div class="button-main">
  <div class="btn">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#" data-flexmenu="flexmenu1" stylez="position:relative;left:900px;top:200px">ABOUT US</a></li>
        <li><a href="#" data-flexmenu="flexmenu2" stylez="position:relative;left:900px;top:200px">SERVICES</a><span class="btn-line"></span></li>
        <li><a href="#" data-flexmenu="flexmenu3" stylez="position:relative;left:900px;top:200px" class="">REGISTER FIR</a></li>
        <li><a href="#" data-flexmenu="flexmenu4" stylez="position:relative;left:900px;top:200px" class="">UNITS</a></li>
        <li><a href="#" data-flexmenu="flexmenu5" stylez="position:relative;left:900px;top:200px" class="">USEFUL LINKS</a></li>
        <li><a href="#" data-flexmenu="flexmenu6" stylez="position:relative;left:900px;top:200px">CONTACT US</a></li>
      </ul>
    


<map name="Map" id="Map">
  <area shape="rect" coords="19,61,129,96" href="login.php" alt="">
  <area shape="rect" coords="152,61,261,96" href="admin-registration.php" alt="">
  <area shape="rect" coords="281,61,388,96" href="#" target="_blank" alt="">
</map>
<ul id="flexmenu1" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a href="history-police.php">History</a></li>
        <li><a href="citizen-charter.php">Citizens' Charter</a></li>
        <li><a href="#">Former Commissioners</a></li>
        <li><a href="medals.php">Medals</a></li>
        <li><a href="#">Appreciation letters from public</a></li>
        </ul>
<ul id="flexmenu2" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a target="_blank" href="#">Missing Persons</a></li>     
        <li><a href="senior_citizen.php">Senior Citizens Registration</a></li>
        <li><a href="passport.php">Guidelines / Information in c/w passport verification and registration of Pakistan National</a></li>
        <li><a href="mess-acco.php">Go's Mess Accommodation &amp; Tariff</a></li>
        </ul>
<ul id="flexmenu3" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1003; left: 534px; top: 152px; display: none;">
        <li><a target="_blank" href="fir-register.php">Registration-form</a></li>
</ul><ul id="flexmenu4" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1002; left: 684px; top: 152px; display: none;">
        <li><a href="#" target="_blank">Recruitment Cell</a></li>
        <li><a href="mounted-police.php">Mounted Police</a></li>
        </ul>
<ul id="flexmenu5" class="flexdropdownmenu jqflexmenu" style="visibility: visible; z-index: 1001; left: 788px; top: 152px; display: none;">
        <li><a href="word/section 144.docx">what is section 144</a></li>
        <li><a href="about fund.php">About Funds</a></li>
        <li><a href="notification1.html">Notification</a></li>       
        
     </ul>
<ul id="flexmenu6" class="flexdropdownmenu jqflexmenu" style="display: none; visibility: visible; z-index: 1000;">
        <li><a href="feedback.php">E-mail Us</a></li>
        <li><a href="telephone_directory.php">Telephone Directory</a></li>
    </ul>
    </div>
</div> 


<div class="center-page-main">
  <div class="wraper">
    <div class="main">
      <div class="left-side-page-index">
        <div class="img-main-in1">
          <div class="img1-1">
            <div class="imgage">
               <a href="#" target="_blank"><img src="image/SP-ranchi.jpeg" alt="" width="218" height="168" border="0"></a>
            </div>
          </div>
          <div class="text-im1">Shri Prabhat Kumar (IPS)<br>
          City Supretendent Police, Ranchi
         </div>
        </div>
        
        <div></div><br>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="float:left; clear:both;">
          <tbody>
          <tr>
             <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="17"></td>
          </tr>
          <tr>
            <td><a href="service.php"><img src="image/rti-manual.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
             <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="traffic.php" target="_self"><img src="image/traffic-unit.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="#" target="_self"><img src="image/licensing-unit.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
             <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="security_of_women_children.php"><img src="image/women-helpline-tab.jpg" width="242" height="29" alt=""></a></td>
          </tr>
          <tr>
            <td height="10"></td>
          </tr>
          
          <tr>
            <td height="10"></td>
          </tr>
          <tr>
            <td><a href="ne-resident.php"><img src="image/security-of-ne-res.jpg" width="242" height="29" alt=""></a></td>
          </tr>
        </tbody></table>
      </div>
      
      
          
<div class="right-index-main">
       
 
  <div id="featured_slide" class="clear">
    <!-- ###### -->
    <div class="overlay_left"></div>
    <div id="featured_content">
      <div class="featured_box" id="fc1"><img src="image/slid1.jpg" alt="" />
       
      </div>
      <div class="featured_box" id="fc2"><img src="image/slid2.jpg" alt="" />
       
      </div>
      <div class="featured_box" id="fc3"><img src="image/slid3.jpg" alt="" />
        
      </div>
      <div class="featured_box" id="fc4"><img src="image/slid4.jpg" alt="" />
        
      </div>
      <div class="featured_box" id="fc5"><img src="image/slid5.jpg" alt="" />
      
      </div>
    </div>
     <ul id="featured_tabs">
      <li><a href="#fc1">All About The Crime Solution.</a></li>
      <li><a href="#fc2">Why You Should need Crime Solution.</a></li>
      <li><a href="#fc3">We Always ready for you.</a></li>
      <li><a href="#fc4">Our Acheviment Your Acheviment.</a></li>
      <li class="last"><a href="#fc5">Our Work Shanti Sewa &amp; Nyaya</a></li>
    </ul>
   
    <!-- ###### -->
  
</div>

       
       
 <!---Slider is end---->      
       
        <div class="news-flash-heading"><img src="image/help-line-head.png" width="95" height="32" alt=""></div>
        <div class="news-flash">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4">
        
        <img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;PCR : <span>100 (24X7) (Toll Free)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Eyes and Ears : <span>1090 (Toll Free)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Women in distress : <span>1091</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Special Cell (North-Eastern States) : <span>1093</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Missing Persons : <span>1094, 23241210</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Traffic : <span>1095, 25844444</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Senior Citizen : <span>1291</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/healp-line-bullet.png" width="11" height="13" alt="">&nbsp;Vigilance : <span>1064</span>
        </marquee>
        </div> 


        <div class="clr"></div>
        
 <div class="boxes-main we-are-near-m">
       


     <?php
	        $conn=@mysql_connect("localhost","root","");
			   if(!$conn)
			   {
				   echo "connection failed...";
			   }
			  @mysql_select_db("project");
			  $qry="select * from user_reg  order by registration_no desc limit 1";
			  $smt=mysql_query("$qry");
			  $rs=mysql_fetch_assoc($smt);
		?>
         <center><br><font color="#CC0000"><b>congratulation!!!</b><br><br>
          <i><font size="+2">your registration has been successfully done</font></i></font></center>
          <form>
             <center><table>
                <br><br>
                <tr>
                 <td><font color="#CC0066"><b>your registration no:</b>
                   </font>
                 </td>
                  <td><font color="#993399"><b><?php echo"".$rs
				  ["registration_no"]."";?></b></font>
                  </td>
                </tr>
             </table></center>
          </form>
        </div>
      </div>
   </div>
  </div>
</div>
       
       <div class="footer-main">
  <div class="footer">
    <table border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td align="center" style="margin-top:10px;">Copyright©Rajani Sharma 2015 All Right Reserved </td>
        <td align="right">&nbsp;</td>
        <td align="right"><a href="#" class="white-link">| Disclaimer</a></td>
      </tr>
    </tbody></table>
  </div>
</div>

       
    </body>
</html>
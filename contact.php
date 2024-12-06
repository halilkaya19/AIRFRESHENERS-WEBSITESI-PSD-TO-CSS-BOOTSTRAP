<!DOCTYPE html>
<?php
	session_start();
	require "mail/class.phpmailer.php";

	
		//smtp mail fonksiyonu 
		 function mailgonder($kimden,$kime,$konu,$mesaj){
				$mail = new PHPMailer();   
				$mail->IsSMTP();
				$mail->From     = $kimden;
				$mail->Sender   = $kimden;  
				$mail->FromName = $kimden;  
				$mail->Host     = "mail.atakyazilim.net"; //smtp nin kullanacağı mail sunucusu
				$mail->SMTPAuth = true;  
				$mail->Username = "info@atakyazilim.net";  //mail hesabı kullanıcı adı
				$mail->Password = "renklika34";  //mail hesabına ait şifre
				$mail->Port = "587";
				$mail->CharSet = "utf-8";
				$mail->WordWrap = 50;  
				$mail->IsHTML(true); 
				$mail->Subject  = $konu; 
				$body = $mesaj; 
				$textBody = strip_tags($mesaj);
				$mail->Body = $body;  
				$mail->AltBody = $textBody;  
				$mail->AddAddress($kime);
				return ($mail->Send())?true:false;      
				$mail->ClearAddresses();  
				$mail->ClearAttachments();
		}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CAR AİR FRESHENERS CONTACT</title>
	<meta name="description" content="CONTACT">
	<meta name="keywords" content="CONTACT"/>
    <!-- Animate -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Bootsnav -->
    <link href="css/bootsnav.css" rel="stylesheet">  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/fonts.css">  
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  
    <!--HEADER_AREA-->
    <header id="header">
      <!--HeaderContent-->
      <div class="headerContent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                   <div class="headerLogo">
                    <a href="#"><img class="img-responsive" src="images/freshlogo.png" alt="" title=""/></a>
                    </div>     
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9 htp0">
                    <div class="headerAligncontent">
                        
                 
                         <div class="col-xs-10 col-sm-10 col-md-9 col-lg-9">
                              <div class="headerTopSlogan">
                                  <h2>The No.1 promotional air fresheners manufacturer in Europe.</h2>
                              </div>
                           </div>
                        <div class="col-xs-2 visible-xs col-sm-2 visible-sm col-md-3 col-lg-3">
                            <nav class="navbar navbar-default navbar-full bootsnav mobilemenustyle">
                                <!-- Start Header Navigation -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <a class="navbar-brand" href="#brand"><img src="images/brand/logo-black.png" class="logo" alt=""></a>
                                </div>
                                <!-- End Header Navigation -->

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-menu">
                                    <ul class="nav navbar-nav" data-in="zoomIn" data-out="zoomOut">
                                        <li><a href="index.html">HOME</a></li>
                                        <li><a href="product.html">THE PRODUCT</a></li>
                                        <li><a href="price-list.html">THE PRICE LIST</a></li>
                                        <li><a href="gallery.html">THE GALLERY</a></li>
                                        <li><a href="faq.html">THE FAQ</a></li>
                                        <li><a href="marketing.html">THE MARKETING</a></li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->    
                            </nav>    
                        </div>

                           <div class="col-xs-6 col-sm-4 col-md-6 col-lg-5">
                             <div class="nationalFlag">
                                <ul class="list-inline nationalFlaglist">
                                    <li><a href="#"><img src="images/eng.png" alt="" title=""/><span>EN</span></a></li>
                                    <li><a href="#"><img src="images/blg.png" alt="" title=""/><span>DE</span></a></li>
                                    <li><a href="#"><img src="images/fra.png" alt="" title=""/><span>FR</span></a></li>
                                    <li><a href="#"><img src="images/nl.png" alt="" title=""/><span>NL</span></a></li>
                                    <li><a href="#"><img src="images/esp.png" alt="" title=""/><span>ES</span></a></li>
                                    <li><a href="#"><img src="images/italy.png" alt="" title=""/><span>IT</span></a></li>
                                </ul>  
                             </div>  
                           </div>
                           <div class="col-xs-6 col-sm-8 col-md-4 col-lg-5">
                               <div class="headerSocialContent">
                                  <ul class="list-inline headerSociallist">
                                    <li><a href="#"><img src="images/facebook.png"   alt="" title=""/></a></li>
                                    <li><a href="#"><img src="images/twitter.png"    alt="" title=""/></a></li>
                                    <li><a href="#"><img src="images/instagram.png"  alt="" title=""/></a></li>
                                    <li><a href="#"><img src="images/rss.png"  alt="" title=""/></a></li>  
                                 </ul>    
                               </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 col-md-2 col-lg-2 masterpr2">
                               <div class="headerNavMaster">
                                    <a href="#"><img class="img-responsive" src="images/headerMaster.png" alt="" title=""/></a>
                                </div> 
                           </div>
                        
                        <div class="col-xs-12 hidden-xs col-sm-12 hidden-sm col-md-12 col-lg-12 htp0">
                             <div class="headerNavbarbg">
                                <ul class="list-inline headerNavbarlist">
                                        <li><a href="index.html">HOME</a></li>
                                        <li><a href="product.html">THE PRODUCT</a></li>
                                        <li><a href="price-list.html">THE PRICE LIST</a></li>
                                        <li><a href="gallery.html">THE GALLERY</a></li>
                                        <li><a href="faq.html">THE FAQ</a></li>
                                        <li><a href="marketing.html">THE MARKETING</a></li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                 </ul>     
                             </div>
                        </div>   
                    </div><!--END|ALİGNCONTENT-->        
                </div>
                
            </div><!--END|ROW-->
        </div><!--END|CONTAİNER-->
      </div>    
      <!--END|HeaderContent-->
    </header>  
	<!--HEADER_AREA-->
    <div class="clearfix"></div>
      
    
    
    <!--MAİN_CONTENT-->
    <section id="mainnav-product">
      <div class="container">
         <div class="row">
            <div class="mainpage-bg">
              <div class="main-btnbg-products productsmartop">
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p0">
                      <div class="main-btn-content">
                        <h3 class="actives"><a href="reseller-wanted.html">RESELLERS WANTED</a></h3>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p0">
                      <div class="main-btn-content r">
                        <h3 class="r"><a href="order-page.html">REQUEST QUOTE / FREE SAMPLES</a></h3>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p0">
                      <div class="main-btn-content pright">
                        <h3><a href="order-page.html">HOW TO ORDER?</a></a></h3>
                      </div>
                  </div>
              </div>
              <!--MAİN-CONTENT-->
               <div class="mainContent-contact">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="contact-head">
                        <h1>CONTACT</h1>  
                    </div>  
                  </div>
                  
                   
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <div class="contact-form">
						
						<?php
							
							if(isset($_POST['contactform'])){
								
									if(empty($_POST['name']) || empty($_POST['name'])){
										echo '<script>alert("Name And Surname Empty");</script>';
									}elseif(empty($_POST['email'])){
										echo '<script>alert("Email Empty");</script>';
									}elseif(empty($_POST['p1']) || empty($_POST['p2']) || empty($_POST['p3'])){
										echo '<script>alert("Phone Empty");</script>';
									}elseif(empty($_POST['companyname'])){
										echo '<script>alert("companyname Empty");</script>';
									}elseif(empty($_POST['mes'])){
										echo '<script>alert("Message Empty");</script>';
									}else{
										
										$mesaj = "Name : ".$_POST['name']." ".$_POST['surname']."<br>E-mail : ".$_POST['email']."<br>Phone :".$_POST['p1'].$_POST['p2'].$_POST['p3']."<br>Companty Name : ".$_POST['companyname']."<br>Message:".$_POST['mes'];
										
										$sonuc = mailgonder($_POST['email'],"grafik@a34ajans.com","CarAirFreshenes Contact Form",$mesaj);	
										if($sonuc){
											echo '<script>alert("Mail Alınmıstir..En kisa Sürede Dönüs yapılacaktır...");</script>';
										}else{
											echo "Bir hata var";
										}
										
									}
							}
						
						?>
					  
                        <form action="" method="POST">
						<div class="contact-form-grp">
							<span>NAME</span> 
							<div class="clearfix"></div>              
							<div class="col-xs-12col-sm-12 col-md-6 col-lg-6 p0">
							  <div class="form-group">
								<input type="text" name="name" value="<?php echo @$_POST['name'];?>" class="form-control" id="exampleInputName2" placeholder="Name">
							  </div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p0">
							  <div class="form-group">
								<input type="text" name="surname" value="<?php echo @$_POST['surname'];?>" class="form-control" id="exampleInputName2" placeholder="Surname">
							  </div>                          
							</div>                           
						</div>           
													
						<div class="clearfix"></div> 
													
						<div class="contact-form-grp">                            
							<span>E-MAIL ADDRESS</span> 
							<div class="clearfix"></div>              
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p0">
							<div class="form-group">
								<input type="text" name="email" value="<?php echo @$_POST['email'];?>" class="form-control" id="exampleInputName2" placeholder="Your Mail Address">
							</div>
							</div>
						</div>
						  <div class="clearfix"></div>  
						<div class="contact-form-grp">                             
						  <span>PHONE</span> 
						  <div class="clearfix"></div>              
						  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p0">
						  <div class="form-group">
							<input type="text" name="p1" value="<?php echo @$_POST['p1'];?>" class="form-control" id="exampleInputName2" placeholder="Phone">
						  </div>
						  </div>
						  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p0">
						  <div class="form-group">
							<input type="text" name="p2" value="<?php echo @$_POST['p2'];?>" class="form-control" id="exampleInputName2" placeholder="Phone">
						  </div>                          
						  </div>
						  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p0">
						  <div class="form-group">
							<input type="text" name="p3" value="<?php echo @$_POST['p3'];?>" class="form-control" id="exampleInputName2" placeholder="Phone">
						  </div>                          
						  </div>
						</div>   
						  <div class="clearfix"></div>  
						<div class="contact-form-grp">                             
							<span>COMPANY NAME</span> 
							<div class="clearfix"></div>              
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p0">
							<div class="form-group">
								<input type="text" name="companyname" value="<?php echo @$_POST['companyname'];?>" class="form-control" id="exampleInputName2" placeholder="Company Name">
							</div>
							</div> 
						</div>    
						<div class="clearfix"></div> 
													
						<div class="contact-form-grp">                             
							<span>MESSAGE</span> 
							<div class="clearfix"></div>              
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p0">
							<div class="form-group">
							  <textarea class="form-control" name="mes" rows="3" id="comment"></textarea>   
							</div>
							</div>   
						</div>                
						<div class="clearfix"></div> 
													
						<div class="contact-form-grp"> 
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p0">
							<div class="form-group s">
							  <button type="submit" class="btn btn-default">CLEAR</button>  
							</div>
							</div>                            
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 p0">
							<div class="form-group s">
							  <input type="submit" name="contactform" class="btn btn-default" value="Send">
							</div>
							</div>    
						</div>               
          </form>
        </div>
     </div>
                   
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                      <div class="contact-maps">
                          <img src="images/contact-maps.png" alt="" title=""\>
                      </div>
                  </div>
                
                        <div class="col-xs-12 col-sm-12 col-md-8">
                            <div class="boxnfbg">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                   <div class="contact-adresbox">
                                       <div class="contact-adreshead">
                                            <span>Moods and the City BV</span>
                                       </div>
                                       <p>
                                        Postbus 10229
                                       </p>
                                        <p>
                                        7301 GE Apeldoorn 
                                       </p>
                                   </div>       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                   <div class="contact-adresbox">
                                       <div class="contact-adreshead">
                                            <span>Showroom:</span>
                                       </div>
                                       <p>
                                        Laan van de Maagd 95 
                                       </p>
                                        <p>
                                        7324 BT Apeldoorn
                                       </p>
                                   </div>       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                   <div class="contact-adresbox">
                                       <div class="contact-adreshead">
                                            <span>Contact:</span>
                                       </div>
                                       <p>
                                        Tel : +31(0) 55 750 18 18
                                       </p>
                                        <p>
                                        Fax: +31(0) 55 201 00 22
                                       </p>
                                   </div>       
                                </div>
                            </div>
                      </div>    

               <div class="clearfix"></div>
              </div>    
              <!--END|MAİN-CONTENT-->  
          </div><!--MAİNPAGEBG-->
        </div><!--END|ROW-->
      </div><!--END|CONTAİNER-->
    </section>  
    <!--END|MAİN_CONTENT--> 
     <!--FOOTER-->
		<footer id="footer" class="bgglgfo">
			<div class="container">
			  <div class="row">
				<div class="footerbg">
				  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
					<div class="copyright">
						<a href="#">© Copyright Moodspromo 2017. All Rights Reserved.</a>  
					</div>
				  </div>
				  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 p0">
					  <div class="footerinfo">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<ul class="list-inline footerinfolist">
		<li><a href="#"><img src="images/footerphone.png" alt="" title=""><span>+31 (0)55 750 18 18</span></a></li>
		<li><a href="#"><img src="images/footermail.png" alt="" title=""><span>info@moodspromo.com</span></a></li>
						</ul>  
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-footer">
								<form class="form-inline">
								 <a href="#"><img src="images/footerphonex.png" alt="" title=""></a>   
								<div class="form-group">
								  <input type="text" class="form-control" id="usr">
								</div>
								<div class="form-group csubmit">
								  <input type="submit" value="Call me !" class="form-control" id="usr2">
								</div>
								</form>
							</div>
						</div>
					  </div>
				  </div>
				</div>
			  </div>
			</div>
		</footer>
      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/1.11.3.jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){
        
            //$(".main-btn-content h3").removeClass("r");
        })
	</script>
    <script src="js/bootsnav.js"></script>
  </body>
</html>
<?php

include "config.php";
$source = "";
$bid = "";
if($_GET){
    if(isset($_GET['BannID'])){
        $bid = $_GET['BannID'];
    }
    if(isset($_GET['utm_source'])){
        $source = $_GET['utm_source'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Nathaniel Bloch">
    <title>Renault | רנו</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/style.css?ver=<?php echo rand(111,9999); ?>" type="text/css">
    <!-- <?php if(get_device_type() == 'web' || get_device_type() == 'ios'): ?>
    	<link rel="stylesheet" href="css/style.css?ver=<?php echo rand(111,9999); ?>" type="text/css">
    <?php endif; ?>
    <?php if(get_device_type() == 'android'): ?>
    	<link rel="stylesheet" href="css/style_android.css?ver=<?php echo rand(111,9999); ?>" type="text/css">
	<?php endif; ?> -->
    <link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css" type="text/css">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K8DKM97');</script>
	<!-- End Google Tag Manager -->
	<?php
		$mobile = false;
		if(get_device() == 'mobile'){
			$mobile = true;
		}else{
			$mobile = false;
		}
	?>
</head>
<body class="ty">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8DKM97"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php if($mobile){ ?>

  <?php
    if (ctc_time()) {
  ?>
    <div id="c2c_btn" class="ctc">
            <a href="tel:<?php echo getPhone($source); ?>" class="ctc">
              <div id="c2c_icon" class="ctc"></div>
            </a>
          </div>
  <?php
    }
  ?>
      <div id="form_btn" class="ctc">
          <a href="#" class="ctc">
              <div id="form_icon" class="ctc"></div>
          </a>
      </div>
<?php } ?>

<div class="wrapper">
	<div class="head_right mobi">
		<img class="all-models-btn" src="images/all-models-btn.png">
		<img class="all-models-btn-x" src="images/closeX.png">
    <img class="logo mobi" src="images/mob_logo.png">
	</div>
	<div class="top mobhide">
		<div class="head_right">
			<img class="logo mobhide" src="images/logo.png">

		</div>
		<?php if(get_device() != 'mobile'):?>
		<div class="head_cars">

            <div class="small_car_koleos" style="cursor: pointer;">
                <img class="koleos-small" src="images/koleos-small.png">
                <span class="notActive" style="">KOLEOS</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">KOLEOS</span>
            </div>

            <div class="small_car_clio" style="cursor: pointer;">
                <img class="clio-small" src="images/clio-small.png">
                <span class="notActive" style="">CLIO</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">CLIO</span>
            </div>

            <div class="small_car_kadjar" style="cursor: pointer;">
                <img class="kadjar-small" src="images/kadjar-small.png">
                <span class="notActive" style="">KADJAR</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">KADJAR</span>
            </div>

            <div class="small_car_megan_grand_coupe" style="cursor: pointer;">
                <img class="megan_grand_coupe-small" src="images/megan-grand-coupe-small.png">
                <span class="notActive">MEGANE<br>GRAND COUPE</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">MEGANE<br>GRAND COUPE</span>
            </div>

            <div class="small_car_megan_grand_tour" style="cursor: pointer;">
                <img class="megan_grand_tour-small" src="images/megan-grand-tour-small.png">
                <span class="notActive">MEGANE<br>GRAND TOUR</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">MEGANE<br>GRAND TOUR</span>
            </div>

            <div class="small_car_zoe" style="cursor: pointer;">
                <img class="zoe-small" src="images/zoe-small.png">
                <span class="notActive">ZOE</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">ZOE</span>
            </div>

            <div class="small_car_scenic" style="cursor: pointer;">
                <img class="scenic-small" src="images/scenic-small.png">
                <span class="notActive">GRAND<br>SCENIC</span>
                <span class="active" style="color: #8f1c25;display: none;font-weight: 700;">GRAND<br>SCENIC</span>
            </div>


		</div>
		<?php endif; ?>
		<!-- <div class="head_left">
			<img class="logo_rev mobhide" src="images/renaulotion.png">
			<img class="logo_rev mobi" src="images/renaulotion.png">
		</div> -->
	</div>
	<div class="right">
		<div class="head">
			<img class="logo mobhide" src="images/logo.png">
			<img class="logo mobi" src="images/logo.png">
		</div>
		<!-- <div class="price">
			<span class="price_txt">החל מ- xx</span>
		</div> -->
		<div style="clear: both;"></div>
		<?php if(get_device() == 'mobile'):?>
		<div id="carDialog" class="carDialog" style="display: none;">
            <button class="carmobChosen carmobchoosen0" value="0"></button>
            <button class="carmobChosen carmobchoosen1" value="1"></button>
            <button class="carmobChosen carmobchoosen2" value="2"></button>
            <button class="carmobChosen carmobchoosen3" value="3"></button>
            <button class="carmobChosen carmobchoosen4" value="4"></button>
            <button class="carmobChosen carmobchoosen5" value="5"></button>
            <button class="carmobChosen carmobchoosen6" value="6"></button>
			<img class="smallcarmob" src="images/smallcarmob.jpg" />
	    </div>
        <?php endif ?>
	</div>
    <div class="left">
    	<?php if(true || get_device() != 'mobile'):?>
		<div id="slidesktop" class="slider">
			<ul class="sliderim">

                <li class="sliderimli sliderimlikoleos">
                    <div class="sliderim_div">
                      <span class="title_span">
                        Renault <span class="title_span_yellow">KOLEOS</span>
                      </span>
                      <span class="subtxt_span english">
                        The PREMIUM SUV
                      </span>

                      <div class="offer">
                          <h4 class=""><span>החל מ- </span><span class="price">164,990</span> ₪</h4>
                      </div>

                    </div>
                </li>
                <li class="sliderimli sliderimliclio">
                    <div class="sliderim_div">
                      <span class="title_span">
                        Renault <span class="title_span_yellow">CLIO</span>
                      </span>
                      <span class="subtxt_span english">
                        ICON. More Than Ever
                      </span>

                      <div class="offer">
                          <h4 class=""><span>החל מ- </span><span class="price">84,990</span> ₪</h4>
                      </div>

                    </div>
                </li>

                <li class="sliderimli sliderimlikadjar">
                    <div class="sliderim_div">
          						<span class="title_span">
          						  Renault <span class="title_span_yellow">KADJAR</span>
          						</span>
                      <span class="subtxt_span mobhide">
                        קשוח, מעוצב וחזק מתמיד,הקרוסאובר החסכוני והעוצמתי.
                      </span>
                      <span class="subtxt_span mobi">
                        קשוח, מעוצב וחזק מתמיד,<br>הקרוסאובר החסכוני והעוצמתי.
                      </span>
                      <div class="offer">
                          <h4 class=""><span>החל מ- </span><span class="price">149,990</span> ₪</h4>
                      </div>

                    </div>
                </li>


                <li class="sliderimli sliderimligrand">
                  <div class="sliderim_div">
                    <span class="title_span mobhide">
                      Renault <span class="title_span_yellow">MEGANE GRAND COUPE</span>
                    </span>
                    <span class="title_span mobi">
                      Renault<br><span class="title_span_yellow">MEGANE GRAND COUPE</span>
                    </span>
                    <span class="subtxt_span">
                      <span class="bullet">•</span> מסך מולטימדיה ענק
                      <span class="bullet">•</span> גג פנורמי נפתח חשמלי<br>
                      <span class="bullet">•</span>  תא נוסעים מפואר
                      <span class="bullet">•</span> תאורת לד חיצונית ייחודית
                      <span class="bullet">•</span> עיצוב פנים מפנק
                    </span>
                  </div>


                  <div class="offer offergrand">
                      <h2 class="mobhide">
                        רנו מגאן גרנד קופה<br>
                        עכשיו בהצעה מיוחדת:<br>
                        <span>טרייד אין<br>ואפשרויות מימון<br>נוחות במיוחד</span>
                      </h2>
                      <h2 class="mobi">
                        רנו מגאן גרנד קופה עכשיו בהצעה מיוחדת:<br>
                        <span>טרייד אין ואפשרויות מימון נוחות במיוחד</span>
                      </h2>
                  </div>
              </li>

              <li class="sliderimli sliderimligrandtour">
                <div class="sliderim_div">
                  <span class="title_span mobhide">
                    Renault <span class="title_span_yellow">MEGANE GRAND TOUR</span>
                  </span>
                  <span class="title_span mobi">
                    Renault<br><span class="title_span_yellow">MEGANE GRAND TOUR</span>
                  </span>
                  <span class="subtxt_span">
                    אלגנטית ומרווחת
                  </span>
                </div>


                <div class="offer">
                    <h2>
                      <span class="bullet">•</span> נפח תא מטען<br>עצום של 580 ליטר<br>
                      <span class="bullet">•</span> חסכוני במיוחד*
                    </h2>
                </div>
            </li>


                <li class="sliderimli sliderimlizoe">
                  <div class="sliderim_div">
                    <span class="title_span">
                      Renault <span class="title_span_yellow">ZOE</span>
                    </span>
                    <span class="subtxt_span">
                      100% חשמלית, 0% דלק
                    </span>
                  </div>


                  <div class="offer">
                      <h2>
                        רנו זואי עכשיו<br>
                        בהצעה מיוחדת:<br>
                        <span>טרייד אין<br>ואפשרויות מימון<br>נוחות במיוחד</span>
                      </h2>
                  </div>
                </li>

                <li class="sliderimli sliderimliscenic">
                  <div class="sliderim_div">
                    <span class="title_span">
                      Renault <span class="title_span_yellow">GRAND SCENIC</span>
                    </span>
                    <span class="subtxt_span">
                      7 מקומות מרווחים, עיצוב מרהיב ואבזור עשיר
                    </span>
                  </div>


                  <div class="offer">
                      <h4 class=""><span>החל מ- </span><br><span class="price">164,990</span> ₪</h4>
                  </div>
                </li>


			</ul>
		</div>
		<?php endif; ?>

		<?php if(false && get_device() == 'mobile'):?>
		<div id="slidemobile" class="slider">
			<ul class="sliderim">
        <li>
					<img src="images/main_koleos_mob.png">

				</li>

        <li>
					<img src="images/main_clio_mob.png">

				</li>

        <li>
					<img src="images/main_scenic_mob.png">
					<!-- <div class="sliderim_div div_clio">
						<span class="title_span title_span_clio">
							Renault <span class="title_span_yellow">CLIO</span>
						</span>
						<span class="price_span price_span_clio">
							 -החל מ <br>₪<currency> 69,990</currency>
						</span>
					</div> -->
				</li>

        <li>
					<img src="images/main_zoe_mob.png">
					<!-- <div class="sliderim_div div_clio">
						<span class="title_span title_span_clio">
							Renault <span class="title_span_yellow">CLIO</span>
						</span>
						<span class="price_span price_span_clio">
							 -החל מ <br>₪<currency> 69,990</currency>
						</span>
					</div> -->
				</li>

        <li>
					<img src="images/main_grandtour_mob.png" class="main_grandtour_mob_img">
					<!-- <div class="sliderim_div div_megan">
						<span class="title_span title_span_megan">
							Renault <span class="title_span_yellow">MEGANE <br>GRAND COUPE</span>
						</span>
						<span class="price_span price_span_megan">
							-החל מ <br><currency>₪ 123,990</currency>
						</span>
					</div> -->
				</li>


				<li>
					<img src="images/main_megan_mob.png" class="main_megan_mob_img">
					<!-- <div class="sliderim_div div_megan">
						<span class="title_span title_span_megan">
							Renault <span class="title_span_yellow">MEGANE <br>GRAND COUPE</span>
						</span>
						<span class="price_span price_span_megan">
							-החל מ <br><currency>₪ 123,990</currency>
						</span>
					</div> -->
				</li>
				<li>
					<img src="images/main_kadjar_mob.png">
					<!-- <div class="sliderim_div div_kadjar">
						<span class="title_span title_span_kadjar">
							Renault <span class="title_span_yellow">KADJAR</span>
						</span>
						<span class="price_span price_span_kadjar">
							-החל מ <br><currency>₪ 124,990</currency>
						</span>
					</div> -->
				</li>

			</ul>
		</div>
		<?php endif; ?>
    </div>
    <div class="ctcbox mobi">
        <?php if($mobile){ ?>
            <?php
              if (ctc_time()) {
            ?>


                    <div id="c2c_btn" class="ctc">
                      <a href="tel:<?php echo getPhone($source); ?>" class="ctc">
                        <div id="c2c_icon" class="ctc"></div>
                      </a>
                    </div>

                  <div id="showform">
                    <img src="images/showform.png" />
                  </div>
              <?php
                } else {
              ?>
              <div id="showform" class="alone">
                <img src="images/showform.png" />
              </div>

              <?php } ?>
          <?php
            } else {
          ?>
          <div id="showform" class="alone">
            <img src="images/showform.png" />
          </div>
          <?php
            }
          ?>


    </div>
    <div class="black_strip mobhide"></div>
    <div class="formbox">
      <a class="close-form mobi">X</a>
      <h2>
        תודה!<br />
        פרטיך<br>
        התקבלו
      </h2>
      <h5>בינתיים, עקוב אחרינו<br>ברשתות החברתיות:</h5>
      <div class="social">
        <a class="fb" href="https://www.facebook.com/RENAULT.CO.IL/" target="_blank"></a>
        <a class="insta" href="https://www.instagram.com/renaultisrael/" target="_blank"></a>
        <a class="youtube" href="https://www.youtube.com/watch?v=RbB2M9nwzqw" target="_blank"></a>
      </div>
    </div>

  </div>



  <?php if(get_device() != 'mobile'):?>
  <div class="bot botmain">
  	<div class="stripslide">
  		<ul class="sliderim">
              <li>
                  <ul class="zi zi1">
                      <li>
                        <span class="mish">
                          המחיר מתייחס לדגם קולאוס 1.75 דיזל intense לפי מחירון 2020001. התמונה להמחשה בלבד.
                        </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c13">13</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l6">6</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>

              <li>
                  <ul class="zi zi2">
                      <li>
                        <span class="mish">
                          המחיר מתייחס לדגם 1ל' ידני intense לפי מחירון 2020001. המחיר אינו כולל אגרת רישוי. התמונה להמחשה בלבד.
                        </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c5">5</li>
                      <li class="c7">7</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l5">5</li>
                      <li class="l7">7</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>

              <li>
                  <ul class="zi zi3">
                      <li>
                        <span class="mish">
                          *המחיר מתייחס לדגם קדג'אר 1.5 טורבו דיזל new intense, לפי מחירון 2020001. נתוני צריכת הדלק שלהלן הם לפי בדיקות מעבדה. צריכת הדלק בפועל עשויה להיות שונה משמעותית הואיל והיא  מושפעת מאופי הנהיגה, השימוש
                          ברכב, תנאי הדרך ומגורמים נוספים. התמונה להמחשה בלבד.
                        </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c6">6</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l4">4</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>



              <li>
                  <ul class="zi zi4">
                      <li>
              <span class="mish">
              כפוף לתקנון טרייד אין. המימון כפוף לאישור הגוף המממן. אין כפל מבצעים והנחות. כפוף לתקנון. התמונה להמחשה בלבד. ט.ל.ח
              </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c4">4</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l4">4</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>

              <li>
                  <ul class="zi zi5">
                      <li>
                        <span class="mish">
                          *נתוני צריכת הדלק שלהלן הם לפי בדיקות מעבדה. צריכת הדלק בפועל עשויה להיות שונה משמעותית הואיל והיא מושפעת מאופי הנהיגה, השימוש ברכב, תנאי הדרך ומגורמים נוספים. התמונה להמחשה בלבד. ט.ל.ח.
                        </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c4">4</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l3">3</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>

              <li>
                  <ul class="zi zi6">
                      <li>
                        <span class="mish">
                          כפוף לתקנון טרייד אין. מימון כפוף לאישור הגוף המממן. אין כפל מבצעים והנחות. כפוף לתקנון. התמונה להמחשה בלבד. ט.ל.ח
                        </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c1">1</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l0">0</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>
              <li>
                  <ul class="zi zi7">
                      <li>
                        <span class="mish">
                          המחיר מתייחס לדגם גרנד סניק intense לפי מחירון 2020001. המחיר לא כולל אגרת רישוי בסך 2,412 ₪. התמונה להמחשה בלבד.
                        </span>
                      </li>
                      <li>דרגת זיהום אוויר</li>
                      <li class="c14">14</li>
                      <li class="ln">|</li>
                      <li>רמת האבזור הבטיחותי</li>
                      <li class="l4">4</li>
                      <li class="l6">6</li>
                      <li class="ln">|</li>
                      <li>לפרטים:</li>
                      <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                  </ul>
              </li>
  		</ul>
  	</div>
  </div>
  <?php endif ?>

  <div class="bot mobi">
  	<!-- <img class="bgmob" src="images/bgmob.jpg"> -->
  	<!-- <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a> -->
  	<div id="stripmob" class="stripslide">
  		<ul class="sliderim">
        <li>
            <ul class="zi">
                <li>
                  <span class="mish">
                    המחיר מתייחס לדגם קולאוס 1.75 דיזל intense לפי מחירון 2020001. התמונה להמחשה בלבד.
                  </span>
                </li>
                <div class="bot_c">
                    <li><a href="#" data-featherlight="#botlbkoleos" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
                    <li class="c6"><a href="#" data-featherlight="#botlbkoleos" class="pu_layer mobi">6</a></li>
                    <li class="ln"><a href="#" data-featherlight="#botlbkoleos" class="pu_layer mobi">|</a></li>
                    <li><a href="#" data-featherlight="#botlbkoleos" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>
                    <li class="l13">13</li>
                    <li class="ln"><a href="#" data-featherlight="#botlbkoleos" class="pu_layer mobi">|</a></li>
                    <li>לפרטים:</li>
                    <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                </div>
            </ul>
        </li>

        <li>
            <ul class="zi">
                <li>
                  <span class="mish">
                    המחיר מתייחס לדגם 1ל' ידני intense לפי מחירון 2020001. המחיר אינו כולל אגרת רישוי. התמונה להמחשה בלבד.
                  </span>
                </li>
                <div class="bot_c">
                    <li><a href="#" data-featherlight="#botlbclio" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
                    <li class="c5"><a href="#" data-featherlight="#botlbclio" class="pu_layer mobi">5</a></li>
                    <li class="c7"><a href="#" data-featherlight="#botlbclio" class="pu_layer mobi">7</a></li>
                    <li class="ln"><a href="#" data-featherlight="#botlbclio" class="pu_layer mobi">|</a></li>
                    <li><a href="#" data-featherlight="#botlbclio" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>
                    <li class="l5">5</li>
                    <li class="l7">7</li>
                    <li class="ln"><a href="#" data-featherlight="#botlbclio" class="pu_layer mobi">|</a></li>
                    <li>לפרטים:</li>
                    <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                </div>
            </ul>
        </li>

        <li>
            <ul class="zi">
                <li>
                  <span class="mish">
                    *המחיר מתייחס לדגם קדג'אר 1.5 טורבו דיזל new intense, לפי מחירון 2020001. נתוני צריכת הדלק שלהלן הם לפי בדיקות מעבדה. צריכת הדלק בפועל עשויה להיות שונה משמעותית הואיל והיא  מושפעת מאופי הנהיגה, השימוש
                    ברכב, תנאי הדרך ומגורמים נוספים. התמונה להמחשה בלבד.
                  </span>
                </li>
                <div class="bot_c">
                    <li><a href="#" data-featherlight="#botlbkadjar" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
                    <li class="c6"><a href="#" data-featherlight="#botlbkadjar" class="pu_layer mobi">6</a></li>
                    <li class="ln"><a href="#" data-featherlight="#botlbkadjar" class="pu_layer mobi">|</a></li>
                    <li><a href="#" data-featherlight="#botlbkadjar" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>
                    <li class="l4">4</li>
                    <li class="ln"><a href="#" data-featherlight="#botlbkadjar" class="pu_layer mobi">|</a></li>
                    <li>לפרטים:</li>
                    <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                </div>
            </ul>
        </li>

              <li>
                  <ul class="zi">
                      <li>
              <span class="mish">
              כפוף לתקנון טרייד אין. המימון כפוף לאישור הגוף המממן. אין כפל מבצעים והנחות. כפוף לתקנון. התמונה להמחשה בלבד. ט.ל.ח
              </span>
                      </li>
                      <div class="bot_c">
                          <li><a href="#" data-featherlight="#botlbmegan" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
                          <li class="c4"><a href="#" data-featherlight="#botlbmegan" class="pu_layer mobi">4</a></li>
                          <li class="ln"><a href="#" data-featherlight="#botlbmegan" class="pu_layer mobi">|</a></li>
                          <li><a href="#" data-featherlight="#botlbmegan" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>

                          <li class="l4">4</li>
                          <li class="ln"><a href="#" data-featherlight="#botlbmegan" class="pu_layer mobi">|</a></li>
                          <li>לפרטים:</li>
                          <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                      </div>
                  </ul>
              </li>

              <li>
                  <ul class="zi">
                      <li>
              <span class="mish">
                *נתוני צריכת הדלק שלהלן הם לפי בדיקות מעבדה. צריכת הדלק בפועל עשויה להיות שונה משמעותית הואיל והיא מושפעת מאופי הנהיגה, השימוש ברכב, תנאי הדרך ומגורמים נוספים. התמונה להמחשה בלבד. ט.ל.ח.
              </span>
                      </li>
                      <div class="bot_c">
                          <li><a href="#" data-featherlight="#botlbgrandtour" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
                          <li class="c4"><a href="#" data-featherlight="#botlbgrandtour" class="pu_layer mobi">4</a></li>
                          <li class="ln"><a href="#" data-featherlight="#botlbgrandtour" class="pu_layer mobi">|</a></li>
                          <li><a href="#" data-featherlight="#botlbgrandtour" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>

                          <li class="l3">3</li>
                          <li class="ln"><a href="#" data-featherlight="#botlbgrandtour" class="pu_layer mobi">|</a></li>
                          <li>לפרטים:</li>
                          <li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
                      </div>
                  </ul>
              </li>


              <li>
        				<ul class="zi">
        					<li>
                    <span class="mish">
                    כפוף לתקנון טרייד אין. מימון כפוף לאישור הגוף המממן. אין כפל מבצעים והנחות. כפוף לתקנון. התמונה להמחשה בלבד. ט.ל.ח
                    </span>
        					</li>
        					<div class="bot_c">
        						<li><a href="#" data-featherlight="#botlbzoe" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
        						<li class="c1"><a href="#" data-featherlight="#botlbzoe" class="pu_layer mobi">1</a></li>
        						<li class="ln"><a href="#" data-featherlight="#botlbzoe" class="pu_layer mobi">|</a></li>
        						<li><a href="#" data-featherlight="#botlbzoe" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>
                                <li class="l0">0</li>
        						<li class="ln"><a href="#" data-featherlight="#botlbzoe" class="pu_layer mobi">|</a></li>
        						<li>לפרטים:</li>
        						<li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
        					</div>
        				</ul>
        			</li>

              <li>
        				<ul class="zi">
        					<li>
                    <span class="mish">
                      המחיר מתייחס לדגם גרנד סניק intense לפי מחירון 2020001. המחיר לא כולל אגרת רישוי בסך 2,412 ₪. התמונה להמחשה בלבד.
                    </span>
        					</li>
        					<div class="bot_c">
        						<li><a href="#" data-featherlight="#botlbscenic" class="pu_layer mobi">דרגת זיהום אוויר</a></li>
        						<li class="c14"><a href="#" data-featherlight="#botlbscenic" class="pu_layer mobi">14</a></li>
        						<li class="ln"><a href="#" data-featherlight="#botlbscenic" class="pu_layer mobi">|</a></li>
        						<li><a href="#" data-featherlight="#botlbscenic" class="pu_layer mobi">רמת האבזור הבטיחותי</a></li>
                                <li class="l4">4</li>
                                <li class="l6">6</li>
        						<li class="ln"><a href="#" data-featherlight="#botlbscenic" class="pu_layer mobi">|</a></li>
        						<li>לפרטים:</li>
        						<li><a href="https://renault.co.il" target="_blank">renault.co.il</a></li>
        					</div>
        				</ul>
        			</li>
  		</ul>
  	</div>
  </div>

  <div class="botpopup mobhide">
      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome1 fadeInUp">
          <img src="images/zhover_koleos.jpg" style="width: 57vw;"/>
      </div>

      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome2 fadeInUp">
          <img src="images/zhover_clio.jpg" style="width: 57vw;"/>
      </div>

      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome3 fadeInUp">
          <img src="images/zhover_kadjar.jpg" style="width: 57vw;"/>
      </div>

      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome5 fadeInUp">
          <img src="images/zhover_grand_tour.jpg" style="width: 57vw;" />
      </div>

      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome4 fadeInUp">
          <img src="images/zhover_megan.jpg" style="width: 57vw;" />
      </div>

      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome6 fadeInUp">
          <img src="images/zhover_zoe.jpg" style="width: 57vw;"/>
      </div>

      <a href="#" data-featherlight="#botlb" class="pu_layer mobi"></a>
      <div class="zoome zoome7 fadeInUp">
          <img src="images/zhover_scenic.jpg" style="width: 57vw;"/>
      </div>

  </div>

  <div style="display: none">
      <div id="botlbzoe">
          <img src="images/zhover_mob_zoe.jpg" />
      </div>

      <div id="botlbgrandtour">
          <img src="images/zhover_mob_grand_tour.jpg" />
      </div>

      <div id="botlbmegan">
          <img src="images/zhover_mob_megan.jpg" />
      </div>
      <div id="botlbkadjar">
          <img src="images/zhover_mob_kadjar.jpg" />
      </div>

      <div id="botlbscenic">
          <img src="images/zhover_mob_scenic.jpg" />
      </div>

      <div id="botlbkoleos">
          <img src="images/zhover_mob_koleos.jpg" />
      </div>

      <div id="botlbclio">
          <img src="images/zhover_mob_clio.jpg" />
      </div>

  </div>


	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/jquery.ketchup.all.min.js" type="text/javascript"></script>
	<script src="js/slick/slick.min.js" type="text/javascript"></script>
	<script src="js/main.js?ver=<?php echo rand(111,9999); ?>" type="text/javascript"></script>
	<script src="https://cdn.enable.co.il/licenses/enable-L442rn2ytf9quk-0817-1920/init.js"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.6/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>


<?php
if ($_REQUEST['name']) {

  $full_name = explode(' ', $_REQUEST['name']);
  $first_name = $full_name[0];
  $last_name = $full_name[1];
		$q = $_SERVER['QUERY_STRING'];
		$qs = str_replace('&', ' ', $q);
		$model = "";



    $dev_env = false; //TODO: change it to 'false' to go production

    $url = ($dev_env ? 'https://ma.carasso.co.il/js/formtitan-by-layer-dev.php?' : 'https://ma.carasso.co.il/js/formtitan-by-layer-production.php?') . $_SERVER['QUERY_STRING'];

    $data = [
        "campaignId" => "CAM-00087", //TODO: replace with the correct 'campaignId' - should be different between dev and production
        "media"      => "Internet",  //TODO: replace with the correct 'media'
        "firstName"  => $first_name, //FirstName
        "lastName"   => $last_name, //LastName
        "mobile"     => $_REQUEST['phone'], //Mobile
        "email"      => $_REQUEST['email'], //Email
        "message"    => '', //Message_External
        "emailOptIn" => empty($_REQUEST["newsl"]) ? "false" : "true", //EmailOptIn
        "city"       => '' //City
    ];

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $result = file_get_contents($url, false, stream_context_create($options));
    if ($result === FALSE) {
        $error = error_get_last();
        var_dump($error);
    }




		$poststring = '';
		$poststring .= '<iframe src="https://campaign.twisted.co.il/manager/api.php';
		$poststring .= '?Event=772';
		$poststring .= '&BannID=' . $_REQUEST['bannid'];
		$poststring .= '&Name=' . $first_name;
		$poststring .= '&Family=' . $last_name;
		$poststring .= '&identity_card=' . $_REQUEST['ip'];
		$poststring .= '&Phone=' . $_REQUEST['phone'];
		$poststring .= '&Mail=' . $_REQUEST['email'];
		$poststring .= '&va1=' . (empty($_REQUEST["newsl"]) ? 'לא' : 'כן');
		$poststring .= '&va2=' . $_REQUEST['media'];
		$poststring .= '&va3=' . $qs;
    if ($source == '' || $source == NULL) {
      $source = 'Direct_Link';
    }
    $poststring .= '&va7=' . $source;
		// $poststring .= '&va4=' . $model;
		$poststring .= '" name="PixFram" id="PixFram" width="0" height="0" frameborder="0" style="display:none;"></iframe>';
		// var_dump($_REQUEST["newsl"]);die;
		echo $poststring;
	}
?>

</body>
</html>

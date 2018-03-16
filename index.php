<?php
$title = 'Welcome to Serenity Heights';
$desc = '';
include('inc/header.php');
include('inc/slider.php');
?>
<section id="overview">
	<div class="container-fluid">
		<div class="row">
			<div class="text">
				<h1 class="title"> key reasons to buy</h1>
				<div class="sub-title">
					High-End Amenities
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12 remove-padd">
				<h4 class="gym-title"> External </h4>
				<img src="<?= base_url()?>assets/img/highend-amenity-3.jpg" alt="highend-amenity-3" class="image">
				<div class="gym">
					Gymnasium
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 remove-padd">
				<h4 class="ceiling-title"> Internal </h4>
				<img src="<?= base_url()?>assets/img/highend-amenity.jpg" alt="highend-amenity" class="image1">
				<div class="ceiling_height">
					High floor to ceiling height
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 remove-padd">
				<h4 class="children-title"> External </h4>
				<img src="<?= base_url()?>assets/img/highend-amenity-2.jpg" alt="highend-amenity-2" class="image">
				<div class="children">
					Children's Play Area
				</div>
			</div>
		</div>
		<div class="metro">
			<div class="metro-text">
				<h4 class="text-title">Ideal Location</h4>
				<p>Besides being close to transport and the comforts of life,<br />
				Serenity Heights is ideally located in a  safe and  friendly neighborhood, <br />
				off Saki Vihar Road, Andheri ( E )</p>
			</div>
		</div>
		<div class="blue-print">
			<h1 class="title"> Well-planned Spaces</h1>
			<div class="design">
				<p>The design of your home has been planned with meticulous attertion to details. Each and <br />every square inch of your home joins together to form your cozy yet spacious home.</p>
			</div>
			<img src="<?= base_url()?>assets/img/plan.jpg" alt="plan" class="plan">
		</div>
		<div class="contact">
			<div class="contact-container">
				<p>The cozy yet spacious <span>2/3 BHK apartments</span> offer you <br />
				the space to live an uninhibited life. </p>
				<button type="button" class="btn btn-default">Contact Us</button>
			</div>
		</div>
	</div>
</section>

<section id="location_map">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<img src="<?= base_url()?>assets/img/map.jpg" alt="map" class="img-responsive">
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 padd">
				<h1>Location Map</h1>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:30px;">
						<img src="<?= base_url()?>assets/img/plane.png" alt="plane">
						<div class="km">
							3.5 kms
							<div class="place">
								International <br /> Airport
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<img src="<?= base_url()?>assets/img/metro.png" alt="metro">
						<div class="km">
							1 km
							<div class="place">
								Sakinaka <br /> Metro Station
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center text-center">
						<img src="<?= base_url()?>assets/img/andheri-kurla.png" alt="andheri-kurla">
						<div class="km">
							1 km
							<div class="place">
								Andheri Kurla <br /> Road
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<img src="<?= base_url()?>assets/img/highway.png" alt="highway">
						<div class="km">
							4.5 kms
							<div class="place">
								Western Express <br /> Highway
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 text-center" style="padding-left:30px;">
						<img src="<?= base_url()?>assets/img/hospital.png" alt="hospital">
						<div class="km">
							2-3 kms radius
							<div class="place">
								Healthcare
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<img src="<?= base_url()?>assets/img/school.png" alt="school">
						<div class="km">
							2-5 kms radius
							<div class="place">
								Educational <br /> institute
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center text-center">
						<img src="<?= base_url()?>assets/img/ticket.png" alt="ticket">
						<div class="km">
							2-5 kms radius
							<div class="place">
								Entertainment
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 text-center">
						<img src="<?= base_url()?>assets/img/hotel.png" alt="hotel">
						<div class="km">
							2-3 kms radius
							<div class="place">
								Hotels
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>

<section id="floor_plans">
	<div class="container-fluid">
		<div class="floor_plans">
			<h1 class="title"> floor plans & amenities</h1>
			<div class="amenities">
				<p>The design of your home has been planned with meticulous attention to details. Each and <br />every square inch of your home joins together to form your cozy yet spacious home.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12" id="wrapper">
				<img src="<?= base_url()?>assets/img/sbhk.jpg" alt="sbhk" class="amen123">
				<a href="assets/img/sbhk.jpg" rel="prettyPhoto" title="">
					<div class="overlay">
						<div class="apartment">
							2 BHK APARTMENT <br />
							<button type="button" class="btn btn-warning">View plan</button>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12" id="wrapper">
				<img src="<?= base_url()?>assets/img/3bhk.jpg" alt="3bhk" class="amen123">
				<a href="assets/img/3bhk.jpg" rel="prettyPhoto" title="">
					<div class="overlay">
						<div class="apartment">
							3 BHK APARTMENT <br />
							<button type="button" class="btn btn-warning">View plan</button>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4 black"></div>
			<div class="col-md-4 col-sm-4 col-xs-4 yellow"></div>
			<div class="col-md-4 col-sm-4 col-xs-4 orange"></div>
		</div>

		<div class="row" style="background: url('<?= base_url()?>assets/img/amenity-bg.jpg'); padding:50px; box-shadow:0 10px 20px 0 rgba(172, 171, 171, 0.46), 0 0 0 1px rgba(0, 0, 0, 0.09);">
			<div id="carousel-index">1 / 3</div>
			<div class="col-md-12">
				<div class="carousel slide multi-item-carousel" id="theCarousel">
					<div class="carousel-inner">
	      				<div class="item active">	
							<div class="col-md-4 col-sm-4 col-xs-12 amentity" id="wrapper" data-ride="carousel">
								<a href="<?= base_url()?>assets/img/amentitty/3.jpg" rel="prettyPhoto[pp_gal]" title="" class="lg_img"> <img src="<?= base_url()?>assets/img/amentitty/3.jpg" alt="1" class="amen123">
									<span>Party Room</span>
									<div class="overlay">
										<div class="widget text-center">
											PARTY ROOM <br />
											<img src="<?= base_url()?>assets/img/search.png" alt="1"> <br />View large image 
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="col-md-4 col-sm-4 col-xs-12 amentity" id="wrapper">
								<a href="<?= base_url()?>assets/img/amentitty/2.jpg" rel="prettyPhoto[pp_gal]" title="" class="lg_img"><img src="<?= base_url()?>assets/img/amentitty/2.jpg" alt="2" class="amen123">
									<span>Children's Play Area</span>
									<div class="overlay">
										<div class="widget text-center">
											CHILDREN'S PLAY AREA <br />
											<img src="<?= base_url()?>assets/img/search.png" alt="2"> <br />View large image
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="col-md-4 col-sm-4 col-xs-12 amentity" id="wrapper">
								<a href="<?= base_url()?>assets/img/amentitty/1.jpg" rel="prettyPhoto[pp_gal]" title="" class="lg_img"><img src="<?= base_url()?>assets/img/amentitty/1.jpg" alt="3" class="amen123">
									<span>Gymnasium</span>
									<div class="overlay">
										<div class="widget text-center">
											GYMNASIUM <br />
											 <img src="<?= base_url()?>assets/img/search.png" alt="3"> <br />View large image
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#theCarousel" data-slide="prev">
		      			<img src="<?= base_url()?>assets/img/left-normal.png" alt="left-normal">
		   			</a>
				    <a class="right carousel-control" href="#theCarousel" data-slide="next">
				      <img src="<?= base_url()?>assets/img/right-normal.png" alt="right-normal">
				    </a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="ongoing_construction">
	<div class="container-fluid" style="background-image: url('assets/img/ongoignbg.jpg');">
		<div class="row">
			<h1 class="title">Ongoing construction</h1>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img src="<?= base_url()?>assets/img/ongoing3.jpg" alt="ongoing3" class="img-responsive">
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img src="<?= base_url()?>assets/img/ongoing2.jpg" alt="ongoing2" class=" img-responsive">
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img src="<?= base_url()?>assets/img/ongoing1.jpg" alt="ongoing1" class=" img-responsive">
			</div>
		</div>
	</div>
</section>
 
<section id="promoter_group">
	<div class="container">
		<div class="promoter text-center">
			<h1 class="title">Promoter group</h1>
			<p>Serenity Heights is a Joint Venture of</p>
			<img src="<?= base_url()?>assets/img/rythem-logo.jpg" alt="rythem-logo" class="rythem">
			<img src="<?= base_url()?>assets/img/jm-logo.jpg" alt="jm-logo" class="jm">
		</div>
	</div>
</section>

<section id="contact_us">
	<div class="container-fluid" style="background-image: url('assets/img/footer.png');">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 space">
				<h1 class="title">Contact Us</h1>
				<div class="corporate_title col-md-6 col-sm-6 col-xs-12">
					<h4>Mumbai Corporate Address</h4>
					<div class="corporate_addr">
						<p>3, Krishna Mahal, Ground Floor,<br> 63, Marine Drive, 'D' Road,<br> Mumbai - 400020.</p>
					</div>
				</div>
				<div class="project_title col-md-6 col-sm-6 col-xs-12">
					<h4>Project Address</h4>
					<div class="project_addr">
						<p>Serenity Heights, Plot No.6,<br> Marwah Estate, Opp. Tata Power<br> Super Station, Off Saki Vihar Road,<br> Saki Naka, Andheri (E), Mumbai -<br> 400072</p>
					</div>
				</div>
				<div class="touch">
					<h4 class="touch-title">Get in touch</h4>
					<form role="form" name="contactForm" method="POST" action="" class="contactForm" id="contactForm">
						<div class="form-group col-md-8 col-sm-12 col-xs-12">
							<input type="text" class="form-control" name="name" id="name" size="40" placeholder="Name"><small id="err1"></small>
						</div>
						<div class="form-group col-md-8 col-sm-12 col-xs-12">
                        	<input class="form-control" id="phone"  maxlength="10" name="phone" placeholder="Mobile" type="tel">
                       		<small id="err1"></small>
                    	</div>
						<div class="form-group col-md-8 col-sm-12 col-xs-12">
							<input type="email" name="email" id="email" size="40" class="form-control" placeholder="Email">
							<small id="err2"></small>
						</div>
						<div class="form-group col-md-8 col-sm-12 col-xs-12">
							<textarea name="message" cols="40" rows="10" id="message" class="form-control" placeholder="Message"></textarea><small id="err3"></small>
						</div>
						<div class="form-group col-md-offset-2 col-md-5 col-sm-offset-3 col-sm-5 col-xs-offset-3 col-xs-5">
							<button type="submit" name="submit" class="btn btn-default custom_button" data="#contactForm" id="send-form">SUBMIT</button>
						</div>
					</form>
				</div>
			</div>
			<div class="building col-md-5 col-sm-5 col-xs-12">
				<img src="<?= base_url()?>assets/img/building.jpg" alt="building" class="img-responsive">
				<div class="build">
					<span id="height">Serenity Heights</span> <br />
					<span id ="elegant">Simply Elegant</span> <br />
					<span id="saki_vihar">Off Saki Vihar Road, Andheri (E)</span>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="callback" style="display: block;">
	<img src="<?= base_url()?>assets/img/2017-11-09.png" alt="" >
	<span><i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Inquiry Form </span>
</div>
<div class="callback_1" style="display: block;">
	<img src="<?= base_url()?>assets/img/2017-11-09.png" alt="" >
	<span><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Instant queries? </span>
</div>

<div class="callback_inquiry" style="border: 1px solid rgb(167, 131, 58); display: none;">
	<form class="form-group" id="callbackForm" name="callbackForm" method="POST" action="call_post.php">
		<div class="form-group">
			<input type="text" class="form-control formname has-error" id="formname" name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<input type="text" class="form-control formphone has-error" id="formphone" name="phone" placeholder="Mobile Number">
		</div>
		
		<div class="form-group">
			<input type="text" class="form-control formemail has-error" id="formemail" name="email" placeholder="Email">
		</div>
		
		<div class="form-group" style="color:#000">
			<input type="text" class="form-control datepicker has-error" id="datepicker" name="date_of_visit" placeholder="Date of visit">
		</div>
		<div class="form-group" style="color:#000">
			<input type="time" class="form-control formtime has-error" name="time" placeholder="Time">
		</div>
		<div class="text-center form-group">`
			<button type="button" class="btn btn-default button_class" data="#callbackForm" id="callback_id" >Submit</button>
		</div>
	</form>
	<button class="callback_close">X</button>
</div>

<div class="callback_query" style="border: 1px solid rgb(167, 131, 58); display: none;">
	<form name="clicktocallform" id="id_clicktocallform" action="" method="POST">
		<input type="text" id="click2call" placeholder="Enter Number" maxlength="15" class="widgettb">

		<div class="clearfix">&nbsp;</div>
		
		<span class="call_button">
			<button type="submit" class="btn btn-default widget_c2c_button" id="click2call_submitbtn" >Call</button>
		</span> 
	</form>
	<button class="callback1_close">X</button>
</div> 
  
<?php include('inc/footer.php') ?>

<script type="text/javascript" charset="utf-8">
$(document).ready(function () {
  $("a[rel^='prettyPhoto']").prettyPhoto({
    social_tools: false
  });
});


$(document).ready(function () {

  var lastId,
      topMenu = $(".navbar-nav"),
      topMenuHeight = topMenu.outerHeight()+15,
      
      menuItems = topMenu.find("a"),
      
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });

  menuItems.click(function(e){
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
    $('html, body').stop().animate({ 
        scrollTop: offsetTop
    }, 500);
    e.preventDefault();
  });

  
  $(window).scroll(function(){
     
     var fromTop = $(this).scrollTop()+topMenuHeight;
     
     var cur = scrollItems.map(function(){
       if ($(this).offset().top < fromTop)
         return this;
     });
     
     cur = cur[cur.length-1];
     var id = cur && cur.length ? cur[0].id : "";
     
     if (lastId !== id) {
         lastId = id;
         
         menuItems
           .parent().removeClass("active")
           .end().filter("[href='#"+id+"']").parent().addClass("active");
     }                   
  });

  $('.carousel').on('slid.bs.carousel', function () {
    var carouselData = $(this).data('bs.carousel');
    var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));
    var total = carouselData.$items.length;
    var text = (currentIndex + 1) + " / " + total;
    $('#carousel-index').text(text);
  });

  $('.carousel').carousel({
      pause: true,
      interval: false
  });

});
</script> 
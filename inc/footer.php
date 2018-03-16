<div class="footer">
	<div class="container">
		<div class="row">
			<p>&copy; Copyrights2017. All Rights Reserved <span class="pull-right">Made with <i class="fa fa-heart fa-beat"></i> at Futuready Media</span></p>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
  	$('.multi-item-carousel').carousel({
    		interval: false
  	});

  	$('.multi-item-carousel .item').each(function(){
      var itemToClone = $(this);

      for (var i=1;i<3;i++) {
        itemToClone = itemToClone.next();

        // wrap around if at end of item collection
        if (!itemToClone.length) {
          itemToClone = $(this).siblings(':first');
        }

        // grab item, clone, add marker class, add to collection
        itemToClone.children(':first-child').clone()
          .addClass("cloneditem-"+(i))
          .appendTo($(this));
      }
    });

    $('.callback').click(function(){
        $('.callback').toggle('slow','swing',400);
        $('.callback_inquiry').toggle('slow','swing',400);
    });

    $('.callback_close').click(function(){
        $('.callback_inquiry').toggle('slow','swing',400);
        $('.callback').toggle('slow','swing',400);
    });

    $('.callback_1').click(function(){
        $('.callback_1').toggle('slow','swing',400);
        $('.callback_query').toggle('slow','swing',400);
    });

    $('.callback1_close').click(function(){
        $('.callback_query').toggle('slow','swing',400);
        $('.callback_1').toggle('slow','swing',400);
    });

  
    $(function(){ 
      var navMain = $("#navbar");
      navMain.on("click", "a", 500, function () {
         navMain.collapse('hide');
      });
    });

});
    
</script>
</body>
</html>
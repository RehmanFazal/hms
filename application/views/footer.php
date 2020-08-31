
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js" ></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });


	  $(document).ready(function() {
		  $('#example').dataTable( {
			  "aaSorting": [[ 4, "desc" ]]
		  } );
	  } );


      $(document).on('click', '.checkbox-perm', function(){
		  if($(this).find('input:checkbox:last-child').is(':checked'))
		  {
			 $(this).parent().next('div.sub-perm-section').removeClass('hidden').slideDown("slow", function () {
				$(this).find('input:checkbox:last-child').attr('checked','checked');
			 });
		  }
		  else {
			 $(this).parent().next('div.sub-perm-section').slideUp("slow", function () {
				$(this).addClass('hidden');
			 });
		  }
   	  });

  </script>

  </body>
</html>

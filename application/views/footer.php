
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

	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>assets/js/form-validation-script.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/count.js"></script>
    <script src="<?php echo base_url(); ?>assets/hmsJS/generalJS.js"></script>

    <script type="text/javascript">

      
      
    $(document).ready(function(){

        $('.deleteClass').click(function(){
        
          confirm("Are you sure to delete this data.");        

        });

    });



    </script>

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
   <script type="text/javascript">

    $(document).ready(function(){

      $('#country_select').keyup(function(){
        
          var txt=$(this).val();
         

          if(txt==''){

             $('.country_dropdown ul').html('');

          }
          else{

              $.ajax({
                    
                  url:"<?php echo base_url(); ?>country/CountryController/select_country",
                  method:"POST",
                  data:{search:txt},
                  dataType:"text",
                  success:function(data){

                      $('.country_dropdown ul').html(data);

                      $('.country_dropdown ul li').css('cursor','pointer');

                      $('.country_dropdown ul li').click(function(){

                          var country_value=$(this).attr('data_id');

                          $('#country_select').val(country_value);

                          var get_value=$('#country_select').val();

                          if (get_value){

                             $('.country_dropdown').hide();

                          }
                          else{

                            $('.country_dropdown').show();

                          }

                    });

                }
                                
           }); 



          }

    });

});
  </script>

<script type="text/javascript">

       // var i=1;

        $(document).ready(function() {

			var contactPerson = '<div class="form-group" id="company_contact">';
			contactPerson += '<label class="col-sm-2 control-label label_contact">Contact in company</label>';
            contactPerson += '<div class="col-sm-2">';
            contactPerson += '<input type="text" placeholder="John Doe"  class="form-control" name="contact_name[]">';
            contactPerson += '</div>';
            contactPerson += '<div class="col-sm-2">';
            contactPerson += '<input type="text" placeholder="Rank"  class="form-control" name="contact_rank[]">';
            contactPerson += '</div>';
            contactPerson += '<div class="col-sm-3">';
            contactPerson += '<input type="email" placeholder="johndoe@email.com"  class="form-control" name="contact_email[]">';
            contactPerson += '</div>';
            contactPerson += '<div class="col-sm-2">';
            contactPerson += '<input type="text" placeholder="(999) 999-999" data-mask="(999) 999-9999" class="form-control" name="contact_telephone[]">';
            contactPerson += '</div>';
            //contactPerson += '<div class="col-sm-1">';
            //contactPerson += '<a class="btn btn-primary btn-sm clone_btn">';
            //contactPerson += '<i class="icon-expand-alt" style="font-size: 20px;"></i>';
            //contactPerson += '</a>';
            //contactPerson += '</div>';
            contactPerson += '</div>';
            $(".clone_btn").click(function() {
				let count = $("#count").val();
				if(count > 3)
				{
					alert("you can't add more than three contacts");
					return false;
				}
				$("#company_person").append(contactPerson);
				$("#count").val(count + 1);
            //$("#company_contact").clone().insertBefore("#company_contact").prop("id","company_contact"+i);

            //i++;

        });

      });

  </script>

  </body>
</html>

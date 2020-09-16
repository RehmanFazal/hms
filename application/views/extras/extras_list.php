<section id="main-content">
	<section class="wrapper">

			   <?php          
            if($this->session->flashdata('success')){
            ?>

            <div class="alert alert-success alert-block fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                    <strong>Success: </strong><?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } elseif($this->session->flashdata('error')) { ?>
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>Ooops!!! </strong><?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
		<!-- page start-->
        <div class="row">
        	<div class="col-lg-12">
            	<section class="panel">
            		<header class="panel-heading">Extras List</header>
					<div class="panel-body">
						<div class="adv-table">
							<table  class="display table table-bordered table-striped" id="example">
								<thead>
									<tr>
										<th>S.No#</th>
										<th>Extras Name</th>
										<th>Currency</th>
										<th>Unit Price</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php

									if(!empty($fields))

									{

										$i=1;
										foreach($fields as $field)
										{
											$edit_url='extras/ExtrasController/editExtras/?id='.$field['id'];	
											$delete_url='guest/GuestController/deleteGuest/?id='.$field['id'];
								?>
								<tr class="">
									<td><?php echo $i++; ?></td>
									<td><?php echo $field['extra_name']; ?></td>
									<td><?php if($field['currency']==0){echo "Peso";}else{echo "Dollar";}?></td>
									<td><?php echo $field['unit_price']; ?></td>
									<td class="center">
										<a  href="<?php echo site_url($edit_url) ?>">
											<button type="button" class="btn btn-primary"><i class="icon-pencil"></i></button>
										</a>
										<a  href="<?php echo site_url($delete_url) ?>" class="deleteClass">
											<button type="button" class="btn btn-danger"><i class="icon-trash"></i></button>
										</a>
									</td>
								</tr>
								<?php
										}
									}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
</section>

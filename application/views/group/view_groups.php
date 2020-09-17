<section id="main-content">
	<section class="wrapper">
		<!-- page start-->
        <div class="row">
        	<div class="col-lg-12">
            	<section class="panel">
            		<header class="panel-heading">Groups</header>
					<div class="panel-body">
						<div class="adv-table">
							<table  class="display table table-bordered table-striped" id="example">
								<thead>
									<tr>
										<th>Id</th>
										<th>Group Name</th>
										<th>Permission(s)</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if(!empty($fields))
									{
										foreach($fields as $field)
										{
											$url = 'group/GroupController/add_group/'.$field['id'];
											$delete_url = 'user/UserController/delete_user/'.$field['id'];
								?>
								<tr class="">
									<td><?php echo $field['id'] ?></td>
									<td><?php echo $field['role'] ?></td>
									<td><?php echo $field['group_perms'] ?></td>
									<td class="center">
										<a  href="<?php echo site_url($url) ?>">
											<button type="button" class="btn btn-primary"><i class="icon-pencil"></i></button>
										</a>
										<a  href="<?php echo site_url($delete_url) ?>">
											<button type="button" class="btn btn-danger" onclick="deleteItem('group', event)"><i class="icon-trash"></i></button>
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

<!DOCTYPE html>
<html lang="en">


<head>
  <?=view('admin/include/admin_head');?>
</head>
<body>
  <div class="container-scroller" style="background: #eeeeee8f!important;">
    <?=view('admin/include/admin_nav');?>
	
    <div class="container-fluid page-body-wrapper">
	  
	  <?=view('admin/include/admin_sidebar');?>
	  
	  <div class="card" style="margin: 40px auto; width: 70%; flex:none; background-color: #fff;">
		<div class="grid-margin stretch-card">
              <div class="card-body">
                  <h4 class="card-title">Category Table</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                             SubCategory Name
                          </th>
                          <th>
                            SubCategory Image
                          </th>
                          <th>
                            Created Date
                          </th>
                          <th>
                            Updated Date
                          </th>
						  <th>
                            Deleted Date
                          </th>
						  <th>
							Edit
                          </th>
                        </tr>
                      </thead>
                      <tbody>
							<?php 
								foreach ($subcategorydata as $row){
							?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['sub_name']; ?></td>
									<td><img src="<?= base_url('admin/sub_images/'.$row['sub_image']); ?>" /></td>
									<td><?php echo $row['created_at']; ?></td>
									<td><?php echo $row['updated_at']; ?></td>
									<td><?php echo $row['deleted_at']; ?></td>
									<td><a class="btn btn-info" href="<?php echo base_url('/webadmin/edit_subcategory/').$row['id']; ?>">Edit</a></td>
								</tr>
							<?php
								}
							?>
                      </tbody>
                    </table>
                  </div>
                </div>
        </div>
	  </div>
	  
	  
      
    </div>	
  </div>

  <?=view('admin/include/admin_foot');?>
  
</body>


</html>

<?php
	//print_r($userdata);
?>

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
		<div class="grid-margin stretch-card" style="overflow-x: auto;">
              <div class="card-body">
                  <h4 class="card-title">User Table</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                             Name
                          </th>
                          <th>
                            Email
                          </th>
						  <th>
                            State
                          </th>
						  <th>
                            City
                          </th>
						  <th>
                            Mobile
                          </th>
						  <th>
                            Pincode
                          </th>
						  <th>
                            Address
                          </th>
						  <th>
                            Password
                          </th>
						  <th>
                            Type
                          </th>
						  <th>
                            Status
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
								foreach ($userdata as $rows){
							?>
								<tr>
									<td><?php echo $rows['Id']; ?></td>
									<td><?php echo $rows['Name']; ?></td>
									<td><?php echo $rows['Email']; ?></td>
									<td><?php echo $rows['State']; ?></td>
									<td><?php echo $rows['City']; ?></td>
									<td><?php echo $rows['Mobile']; ?></td>
									<td><?php echo $rows['Pincode']; ?></td>
									<td><?php echo $rows['Address']; ?></td>
									<td><?php echo $rows['Password']; ?></td>
									<td><?php echo $rows['Type']; ?></td>
									<td><?php echo $rows['Status']; ?></td>
									<td><?php echo $rows['created_at']; ?></td>
									<td><?php echo $rows['updated_at']; ?></td>
									<td><?php echo $rows['deleted_at']; ?></td>
									<td><a class="btn btn-info" href="<?php echo base_url('/webadmin/user_table/edit/').$rows['Id']; ?>">Edit</a></td>
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

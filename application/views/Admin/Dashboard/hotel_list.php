<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3 style="text-align: center;font-weight: 600;font-size: 26px;padding-bottom: 15px;">Hotel List</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
        <table class="table">
          <thead>
            <tr>
              <th>Hotels Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
              <?php if($get_approvedhotelList != FALSE){$counter = 1 ; foreach ($get_approvedhotelList->result() as $data) { ?>
                <tr <?php if($counter % 2 == 0) { ?> class="" <?php }else{ ?> class="active" <?php }?>>
                  <td><?php echo $data->hotel_name; ?></td>
                  <td><?php echo $data->hotel_address; ?></td>
                  <td><?php echo $data->hotel_email; ?></td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('admin/hotel_details/' . $data->hotel_id); ?>">View</a></td>
                </tr>
              <?php  $counter++; }} else{ ?>
                <tr>
                    <td>No results found</td>
                </tr>
              <?php }?>
          </tbody>
        </table>
       </div>
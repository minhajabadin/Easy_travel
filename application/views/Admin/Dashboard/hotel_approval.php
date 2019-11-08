<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3 style="text-align: center;font-weight: 600;font-size: 26px;padding-bottom: 15px;">Pending Request</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
        <table class="table">
          <thead>
            <tr>
              <th>Hotels Name</th>
              <th>Address</th>
              <th>Email</th>
              <th>Registration No</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
              <?php if($get_hotelList != FALSE){$counter = 1 ; foreach ($get_hotelList->result() as $data) { ?>
                <tr <?php if($counter % 2 == 0) { ?> class="" <?php }else{ ?> class="active" <?php }?>>
                  <td><?php echo $data->hotel_name; ?></td>
                  <td><?php echo $data->hotel_address; ?></td>
                  <td><?php echo $data->hotel_email; ?></td>
                  <td><?php echo $data->hotel_reg_no; ?></td>
                  <td><a class="btn btn-primary" href="<?php echo site_url('admin/details_approvel/' . $data->hotel_id); ?>">View</a></td>
                </tr>
              <?php  $counter++; }} else{ ?>
                <tr>
                    <td style="text-align: center;font-weight: 600;font-size: 24px;" colspan="4">No results found</td>
                </tr>
              <?php }?>
          </tbody>
        </table>
       </div>
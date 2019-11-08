<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3>Inbox</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
        <table class="table">
          <thead>
            <tr>
              <th> First Name</th>
              <th> Last Name</th>
              <th>Email</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
              <?php if($get_contactus != FALSE){$counter = 1 ; foreach ($get_contactus->result() as $data) { ?>
                <tr <?php if($counter % 2 == 0) { ?> class="" <?php }else{ ?> class="active" <?php }?>>
                  <td><?php echo $data->cont_us_first_name; ?></td>
                  <td><?php echo $data->cont_us_last_name; ?></td>
                  <td><?php echo $data->cont_us_email; ?></td>
                  <td><?php echo $data->cont_us_message; ?></td>
                  
                </tr>
              <?php  $counter++; }} else{ ?>
                <tr>
                    <td>No results found</td>
                </tr>
              <?php }?>
          </tbody>
        </table>
       </div>
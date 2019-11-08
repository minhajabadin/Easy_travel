<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs">
            <h3>Inbox</h3>
  	        
        <div class="col-md-12 inbox_right">
         	
            <div class="mailbox-content">
            
                <table class="table">
                    <thead>
                        <tr>
                            <th> </th>
                          <th>Name</th>
                          <th>Message</th>
                          <th>Date</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($get_contactus != FALSE){$counter = 1 ; foreach ($get_contactus->result() as $data) { ?>
                        <tr class="unread checked">
                            
                            <td class="hidden-xs">
                                <i class="fa fa-star icon-state-warning"></i>
                            </td>
                            <td class="hidden-xs">
                                <?php echo $data->cont_us_first_name . ' ' . $data->cont_us_last_name; ?>
                            </td>
                            <td>
                                <?php echo $data->cont_us_message; ?>
                            </td>
                            <td>
                            </td>
                            <td>
                                <?php echo $data->cont_date; ?>
                            </td>
                        </tr>
                        <?php  $counter++; }} else{ ?>
                        <tr>
                            <td>No results found</td>
                        </tr>
                      <?php }?>
                    </tbody>
                </table>
               </div>
            </div>
            <div class="clearfix"> </div>
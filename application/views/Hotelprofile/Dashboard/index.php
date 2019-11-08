<div id="page-wrapper">
    <div class="graphs">
        <div class="col_3">
            <div class="col-md-4 widget widget1">
                <div class="r3_counter_box">
                    <div class="bed_icon col-md-6"><img class=""src="<?php echo $img ?>bed_icon1.png"></div>
                    <div class="stats">
                        <h5><strong><?php echo getTotalRooms($hotel_id); ?></strong></h5>
                        <span style="font-weight:600;">Total Room's</span>
                        <?php //echo $bookingParcentage ;?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 widget widget1">
                <div class="r3_counter_box">
                    <div class="bed_icon col-md-6"><img class=""src="<?php echo $img ?>bed_icon2.png"></div>
                    <div class="stats">
                        <h5><strong><?php if (empty(getBookedRooms($hotel_id))) {
                            echo '0';
                        } else {
                            echo getBookedRooms($hotel_id);
                        }; ?></strong></h5>
                        <span style="font-weight:600;">Booked Room's</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 widget widget1">
                <div class="r3_counter_box">
                    <div class="bed_icon col-md-6"><img class=""src="<?php echo $img ?>bed_icon3.png"></div>
                    <div class="stats">
                        <h5><strong><?php if (empty(getAvailableRooms($hotel_id))) {
                            echo '0';
                        } else {
                            echo getAvailableRooms($hotel_id);
                        } ?></strong></h5>
                        <span style="font-weight:600;">Empty Room's</span>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"> </div>
        </div>
        <div class="graph_box col-md-6">  
            <div id="chartContainer" style="margin-left: 5%; height: 370px; width: 90%;"></div>   
        </div>
        <div class="graph_box col-md-6">  
            <div id="chartContainer2" style="margin-left: 5%; height: 370px; width: 90%;"></div>   
        </div>
        
        
        
        
<script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                    text: "Per Month Booking"
            },

            data: [{        
                    type: "line",       
                    dataPoints: [
                            { label: "January",  y: <?php echo $january ;?>  },
                            { label: "February", y: <?php echo $february ;?>  },
                            { label: "March", y: <?php echo $march ;?>  },
                            { label: "April",  y: <?php echo $april ;?>  },
                            { label: "May",  y: <?php echo $may ;?>  },
                            { label: "June",  y: <?php echo $june ;?>  },
                            { label: "July",  y: <?php echo $july ;?>  },
                            { label: "August",  y: <?php echo $august ;?>  },
                            { label: "September",  y: <?php echo $september ;?> },
                            { label: "October",  y: <?php echo $october ;?>  },
                            { label: "November",  y: <?php echo $november ;?>  },
                            { label: "December",  y: <?php echo $december ;?>  }
                    ]
            }]
    });
    chart.render();
    
    var chart = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            theme: "light2",
            title:{
                    text: "Income Graph"
            },

            data: [{        
                    type: "line",       
                    dataPoints: [
                            { label: "January",  y: <?php echo $january ;?>  },
                            { label: "February", y: <?php echo $february ;?>  },
                            { label: "March", y: <?php echo $march ;?>  },
                            { label: "April",  y: <?php echo $april ;?>  },
                            { label: "May",  y: <?php echo $may ;?>  },
                            { label: "June",  y: <?php echo $june ;?>  },
                            { label: "July",  y: <?php echo $july ;?>  },
                            { label: "August",  y: <?php echo $august ;?>  },
                            { label: "September",  y: <?php echo $september ;?> },
                            { label: "October",  y: <?php echo $october ;?>  },
                            { label: "November",  y: <?php echo $november ;?>  },
                            { label: "December",  y: <?php echo $inc_december ;?>  }
                    ]
            }]
    });
    chart.render();
    
  
    }
</script>
        
</div>
    
    


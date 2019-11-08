<div id="page-wrapper">
    <div class="graphs">
        <div class="col_3">
            <div class="col-md-4 widget widget1">
                <div class="r3_counter_box">
                    <div class="bed_icon col-md-6"><img class=""src="<?php echo $img ?>user.png"></div>
                    
                    <div class="stats">
                        <h5><strong><?php echo $total_user ;?></strong></h5>
                        <span>Total users</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 widget widget1">
                <div class="r3_counter_box">
                    <div class="bed_icon col-md-6"><img class=""src="<?php echo $img ?>total_hotel.png"></div>
                    <div class="stats">
                        <h5><strong><?php echo $total_hotels ;?></strong></h5>
                        <span>Total Hotels</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 widget widget1">
                <div class="r3_counter_box">
                    <div class="bed_icon col-md-6"><img class=""src="<?php echo $img ?>visitors.png"></div>
                    <div class="stats">
                        <h5><strong>1012</strong></h5>
                        <span>Total visitors</span>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"> </div>
        </div>
       
        
        <div class="graph_box col-md-6">
            <div id="chartContainer" style="margin-left: 5%; height: 370px; width: 100%;"></div>    
        </div>
        <div class="graph_box col-md-6"> 
            <div id="chartContainer2" style="margin-left: 5%; height: 370px; width: 100%;"></div>  
        </div>
        
        
        
        
<script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title:{
                    text: "Hotel Entry Per Month"
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
                    text: "User Registration Per Month"
            },

            data: [{        
                    type: "line",       
                    dataPoints: [
                            { label: "January",  y: <?php echo $ujanuary ;?>  },
                            { label: "February", y: <?php echo $ufebruary ;?>  },
                            { label: "March", y: <?php echo $umarch ;?>  },
                            { label: "April",  y: <?php echo $uapril ;?>  },
                            { label: "May",  y: <?php echo $umay ;?>  },
                            { label: "June",  y: <?php echo $ujune ;?>  },
                            { label: "July",  y: <?php echo $ujuly ;?>  },
                            { label: "August",  y: <?php echo $uaugust ;?>  },
                            { label: "September",  y: <?php echo $useptember ;?> },
                            { label: "October",  y: <?php echo $uoctober ;?>  },
                            { label: "November",  y: <?php echo $unovember ;?>  },
                            { label: "December",  y: <?php echo $udecember ;?>  }
                    ]
            }]
    });
    chart.render();
    
    }
</script>



 </div>
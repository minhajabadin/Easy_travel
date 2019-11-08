            <div class="copy col-md-12">
                <p>Copyright &copy; 2017 hotel portal | Design by <a href="#" target="_blank">Minhaj Rana, Shuhed Ahmed</a> </p>
            </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <!-- jQuery -->
    <script src="<?php echo $js ?>jquery.min.js"></script>
    <script src="<?php echo $js ?>bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    
    <script src="<?php echo $js ?>metisMenu.min.js"></script>
    <script src="<?php echo $js ?>custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo $js ?>d3.v3.js"></script>
    <script src="<?php echo $js ?>rickshaw.js"></script>
     <script  src="<?php echo $js ?>jssor.slider.min.js"></script>
     <script src="<?php echo $js ?>canvasjs.min.js"></script>
    
     <script>
	     $(document).ready(function(){
			  var i=1;
			 $("#add_row").click(function(){
			  $('#addr'+i).html("<div class='form-group'><div class='col-sm-8'><span><strong> Room Name</strong></span><input name='id' type='hidden' value='"+i+"'><input name='room_name"+i+"' type='text' class='form-control1'  placeholder='Room Name'> </div></div> <div class='form-group'><div class='col-sm-8'><span><strong >AC/Non-AC :  </strong></span><div class='radio-inline'><label><input name='ac"+i+"' type='radio' value='1'>Non AC</label></div><div class='radio-inline'><label><input name='ac"+i+"' type='radio' value='2'>AC</label></div></div></div> <div class='form-group'><div class='col-sm-4'><span><strong > Room Type</strong></span><select class='form-control1 input-md' name='room_type"+i+"' > <option value'0'>Select Room Type</option><option value='1'>Single Room</option><option value='2'>Double Room</option><option value='3'>Option 3</option></select></div><div class='col-sm-4'><span><strong > Bed Type</strong></span><select class='form-control1 input-md' name='bed_type"+i+"' ><option value='0'>Select Bed Type</option><option value='1'>Single Bed</option><option value='2'>Master Bed</option><option value='3'>Single Twin Bed</option> <option value='4'>One Master & Twin Bed</option><option value='5'>Two Master Bed</option><option value='6'>Two Twin Bed</option></select></div></div> <div class='form-group'><div class='col-sm-4'><span><strong> Room Information</strong></span><input name='room_info"+i+"' type='text' class='form-control1' placeholder='Room Information'></div><div class='col-sm-4'><span><strong> Room Option</strong></span><input name='option"+i+"' type='text' class='form-control1' placeholder='Room Option'></div></div>  <div class='form-group'><div class='col-sm-4'><span><strong >Rate Per Night</strong></span><input name='rate"+i+"' type='text' class='form-control1' placeholder='Rate Per Night'></div><div class='col-sm-4'><span><strong > Total Room's</strong></span><input name='total_room"+i+"' type='text' class='form-control1' placeholder='Total Room's'></div></div><div class='form-group'><div class='frm_dorder col-sm-8'><label for='exampleInputFile'>Upload Image</label> <input name='image"+i+"' type='file' id='exampleInputFile'> </div></div> </div></div>");

			  $('#logic_form').append('<div id="addr'+(i+1)+'"></div>');
			  i++; 
		  });
			 $("#delete_row").click(function(){
				 if(i>1){
				 $("#addr"+(i-1)).html('');
				 i--;
				 }
			 });
		});
    </script>
    
    
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:0,d:600,y:-290,e:{y:27}}],
              [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
              [{b:0,d:600,x:410,e:{x:27}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
              [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
              [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
              [{b:2000,d:600,rY:30}],
              [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
              [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 2000,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:1000}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>
	
    <script>
        jssor_1_slider_init();
    </script>
</body>
</html>

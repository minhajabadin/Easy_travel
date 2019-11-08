<footer class="fotter_area">
    <div class="container">
        <div class="row">
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <p class="address"><strong>hotel portal BD,</strong> 32/1 Rongdhonu, Choukidekhi, Amborkhana, Sylhet, Bangladesh </p>
                <p>Copyright 2017 hotel solutions | All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h1><strong>hotel portal</strong></h1>
                <div class="link_area col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="https://plus.google.com/" class=""><i class="google_icons fa fa-google-plus pull-center" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/" class=""><i class="linkedin_icons fa fa-linkedin pull-center" aria-hidden="true"></i></a>
                    <a href="https://www.twitter.com/" class=""><i class="twitter_icons fa fa-twitter pull-center" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/" class=""><i class="facebook_icons fa fa-facebook pull-center" aria-hidden="true"></i></a>
                </div>
            </div>
<!--            <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                <select name="District" class="my_form form-control input-lg" style="background-color: rgba(0, 0, 0, 0.7);">
                    <option value="dha">Dhaka</option>
                    <option value="syl">Sylhet</option>
                    <option value="ctg">Chittagonj</option>
                    <option value="raj">Rajshahi</option>
                    <option value="bar">Barisal</option>
                    <option value="myn">Mymensingh</option>
                    <option value="khu">Khulna</option>
                    <option value="ron">Rongpur</option>
                </select>
            </div>-->
        </div>
    </div>
</footer>


<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->

<script src="<?php echo $js ?>plugins.js"></script>
<script src="<?php echo $js ?>main.js"></script>
<script src="<?php echo $js ?>vendor/modernizr-2.6.2.min.js"></script>
<script src="<?php echo $js ?>bootstrap.min.js" ></script> 
<script src="<?php echo $uikit ?>js/uikit.min.js"></script>

<script src="<?php echo $js ?>plugins/sortable.js" type="text/javascript"></script>
<script src="<?php echo $js ?>fileinput.js" type="text/javascript"></script>
<script src="<?php echo $js ?>locales/fr.js" type="text/javascript"></script>
<script src="<?php echo $js ?>locales/es.js" type="text/javascript"></script>
<script src="<?php echo $themes ?>explorer/theme.js" type="text/javascript"></script>




<script>
    $('#file-fr').fileinput({
    language: 'fr',
    uploadUrl: '#',
    allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $('#file-es').fileinput({
    language: 'es',
    uploadUrl: '#',
    allowedFileExtensions: ['jpg', 'png', 'gif']
    });
    $("#file-0").fileinput({
    'allowedFileExtensions': ['jpg', 'png', 'gif']
    });
    $("#file-1").fileinput({
    uploadUrl: '#', // you must set a valid URL here else you will get an error
    allowedFileExtensions: ['jpg', 'png', 'gif'],
    overwriteInitial: false,
    maxFileSize: 1000,
    maxFilesNum: 10,
    //allowedFileTypes: ['image', 'video', 'flash'],
    slugCallback: function (filename) {
    return filename.replace('(', '_').replace(']', '_');
    }
    });
    /*
    $(".file").on('fileselect', function(event, n, l) {
    alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
    $("#file-3").fileinput({
    showUpload: false,
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any",
    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
    overwriteInitial: false,
    initialPreviewAsData: true,
    initialPreview: [
    "http://lorempixel.com/1920/1080/transport/1",
    "http://lorempixel.com/1920/1080/transport/2",
    "http://lorempixel.com/1920/1080/transport/3"
    ],
    initialPreviewConfig: [
    {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
    {caption: "transport-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
    {caption: "transport-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
    ]
    });
    $("#file-4").fileinput({
    uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
    var $el = $("#file-4");
    if ($el.attr('disabled')) {
    $el.fileinput('enable');
    } else {
    $el.fileinput('disable');
    }
    });
    $(".btn-info").on('click', function () {
    $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
    alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
    alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function () {
    $("#test-upload").fileinput({
    'showPreview': false,
    'allowedFileExtensions': ['jpg', 'png', 'gif'],
    'elErrorContainer': '#errorBlock'
    });
    $("#kv-explorer").fileinput({
    'theme': 'explorer',
    'uploadUrl': '#',
    overwriteInitial: false,
    initialPreviewAsData: true,
    initialPreview: [
    "http://lorempixel.com/1920/1080/nature/1",
    "http://lorempixel.com/1920/1080/nature/2",
    "http://lorempixel.com/1920/1080/nature/3"
    ],
    initialPreviewConfig: [
    {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
    {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
    {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
    ]
    });
    /*
    $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
    alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
    });
    */
    });
</script>




                                <!-- silder js -->
<script type="text/javascript" src="<?php echo $js ?>jssor.slider.min.js"></script>
<!-- use jssor.slider.debug.js instead for debug -->
<script>
    jssor_1_slider_init = function() {

    var jssor_1_SlideshowTransitions = [
    {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
    ];

    var jssor_1_options = {
    $AutoPlay: true,
    $SlideshowOptions: {
    $Class: $JssorSlideshowRunner$,
    $Transitions: jssor_1_SlideshowTransitions,
    $TransitionsOrder: 1
    },
    $ArrowNavigatorOptions: {
    $Class: $JssorArrowNavigator$
    },
    $ThumbnailNavigatorOptions: {
    $Class: $JssorThumbnailNavigator$,
    $Cols: 10,
    $SpacingX: 8,
    $SpacingY: 8,
    $Align: 360
    }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
    if (refSize) {
    refSize = Math.min(refSize, 800);
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
    $(window).scroll(function() {

    if ($(this).scrollTop()>0)
    {
    $('.top_side').fadeOut();
    }
    else
    {
    $('.top_side').fadeIn();
    }
    });
</script>
<script>
    jssor_1_slider_init();
</script>
</body>
</html>
<html>
<title>2D sketchpad for VR storyboard by @Utopiah</title>
<script src="jquery-3.0.0.min.js"></script>
<script src="sketch.min.js"></script>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<body>
<script type="text/javascript">
function saveAllFaces(){
	var faces = ["front", "right"];
	for (var i=0; i<faces.length;i++){
		saveViaAJAX(faces[i]);
	}
	refreshPreview();
}
function saveViaAJAX(side){
	var canvas = document.getElementById(side+"_sketch");
	var canvasData = canvas.toDataURL("image/png");
	var ajax = new XMLHttpRequest();
	ajax.open("POST",'Save_'+side+'.php',false);
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(canvasData);
}
function refreshPreview(){
	document.getElementById('preview').src = document.getElementById('preview').src;
}
</script>
<button onclick="saveAllFaces();">Save all faces</button>
<button onclick="TogetherJS(this); return false;">Collaborate</button>
<table>
<tr>
<td>
<div id="front">
<div class="tools">
<button onclick="saveViaAJAX('front');">Save</button>
</div>
<h2>Front</h2>
<canvas style="border:1px solid #000000;" id="front_sketch" width="512" height="512"></canvas>
<script type="text/javascript">
  $(function() {
    $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function() {
      $('#front .tools').append("<a href='#front_sketch' style='width: 10px; background: " + this + ";'  data-color='" + this + "'>"+this+"</a> ");
    });
    $.each([3, 5, 10, 15], function() {
      $('#front .tools').append("<a href='#front_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
    });
    $('#front_sketch').sketch();
  });
</script>
</br>
  <a href="#front_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
</div>

</td><td>

<div id="right">
<div class="tools">
<button onclick="saveViaAJAX('right');">Save</button>
</div>
<h2>Right</h2>
<canvas style="border:1px solid #000000;" id="right_sketch" width="512" height="512"></canvas>
<script type="text/javascript">
  $(function() {
    $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function() {
      $('#right .tools').append("<a href='#right_sketch' style='width: 10px; background: " + this + ";'  data-color='" + this + "'>"+this+"</a> ");
    });
    $.each([3, 5, 10, 15], function() {
      $('#right .tools').append("<a href='#right_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
    });
    $('#right_sketch').sketch();
  });
</script>
</br>
  <a href="#right_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
</div>

</td><td valign="top">
<h1>2D sketchpad for VR storyboard by @Utopiah</h1>

<h2>Preview :</h2>

<iframe id="preview" src="http://vatelier.net/MyDemo/Storyboard/"></iframe>
<button onclick="refreshPreview();">Refresh</button>
<a href="http://vatelier.net/MyDemo/Storyboard/" target="_blank">Fullscreen</a>
</td>
</tr>
</table>
<!--
Using http://intridea.github.io/sketch.js/ and https://permadi.com/2010/10/html5-saving-canvas-image-data-using-php-and-ajax/
-->
</body>
</html>

<html>
<script src="jquery-3.0.0.min.js"></script>
<script src="sketch.min.js"></script>
<body>

<h1>2D sketchpad for VR storyboard by @Utopiah</h1>
<table>
<tr>
<td>

<div id="front">
<div class="tools">
<button onclick="saveViaAJAX_front();">Save</button>
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
 function saveViaAJAX_front(){
	var canvas = document.getElementById("front_sketch");
	var canvasData = canvas.toDataURL("image/png");
	var ajax = new XMLHttpRequest();
	ajax.open("POST",'Save_front.php',false);
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(canvasData);
  }
</script>
</br>
  <a href="#front_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
</div>

</td><td>

<div id="right">
<div class="tools">
<button onclick="saveViaAJAX_right();">Save</button>
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
 function saveViaAJAX_right(){
	var canvas = document.getElementById("right_sketch");
	var canvasData = canvas.toDataURL("image/png");
	var ajax = new XMLHttpRequest();
	ajax.open("POST",'Save_right.php',false);
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(canvasData);
  }
</script>
</br>
  <a href="#right_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
</div>

</td>
</tr>
</table>

<!--
Using http://intridea.github.io/sketch.js/ and https://permadi.com/2010/10/html5-saving-canvas-image-data-using-php-and-ajax/
-->
</body>
</html>

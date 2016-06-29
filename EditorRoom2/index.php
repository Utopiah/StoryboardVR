<html>
<script src="jquery-3.0.0.min.js"></script>
<script src="sketch.min.js"></script>
<body>

<div id="colors_demo">
<div class="tools">
  <a href="#colors_sketch" data-download="png" style="float: right; width: 100px;">Download</a>
<button onclick="saveViaAJAX();">Save Via AJAX</button>
</div>

<h1>Front</h1>
<canvas style="border:1px solid #000000;" id="colors_sketch" width="512" height="512"></canvas>
<script type="text/javascript">
  $(function() {
    $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function() {
      $('#colors_demo .tools').append("<a href='#colors_sketch' style='width: 10px; background: " + this + ";'  data-color='" + this + "'>"+this+"</a> ");
    });
    $.each([3, 5, 10, 15], function() {
      $('#colors_demo .tools').append("<a href='#colors_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
    });
    $('#colors_sketch').sketch();
  });

 function saveViaAJAX(){
	var canvas = document.getElementById("colors_sketch");
	var canvasData = canvas.toDataURL("image/png");
	var ajax = new XMLHttpRequest();
	ajax.open("POST",'testSave.php',false);
	ajax.setRequestHeader('Content-Type', 'application/upload');
	ajax.send(canvasData);
  }

  var img1 = new Image();
  var ctx = document.getElementById('colors_sketch');
  if (ctx.getContext) {
	ctx = ctx.getContext('2d');
	//drawing of the test image - img1
	img1.onload = function () {
		//draw background image
		ctx.drawImage(img1, 0, 0);
	};
	img1.src = '../Rooms/2/Front.png';
  }

</script>
</div>

</body>
</html>

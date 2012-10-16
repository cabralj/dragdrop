<html>
<head>
<style>

body {
	font-family: Arial,Helvetica,Sans-Serif;	
	overflow:hidden;
	margin:0px;
   -moz-user-select: -moz-none;
   -khtml-user-select: none;
   -webkit-user-select: none;

   -ms-user-select: none;
   user-select: none;
}
.item {
	border:2px solid #999; z-index:5;
}
.dragBin {
	background-color:#b1dfb0;
	height:100px;
	padding:10px;
}

.droparea {
	border:2px solid #ababab;
	margin-bottom:10px;
	margin-left:65px;
	width:700px;
	height:200px;
}
.droparea-hover {
	border-color:#FF0000;
}
.droparea-active {
	border-color:#FF00FF;
}
.headerLabel {
	font-size: 10pt;
	font-weight: bolder;
	color: #FFF;
	margin:15px;
}
.header {
	background-image:url('img/header.jpg'); 
}
.meta {
	margin-left:15px;
	margin-right:15px;
}

.logo {
	position:absolute;
	top:630px;left:15px;
}

.buttonContainer{
	display:inline-block;
}

button {
	-moz-box-shadow:inset -34px 45px 36px -50px #fce2c1;
	-webkit-box-shadow:inset -34px 45px 36px -50px #fce2c1;

	background-color:#e8860e;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:2px solid #eeb44f;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	padding:6px 24px;
}
button:hover {
	border-color:#FF0000;
}
button:active {
	background-color:#FF0000;
}

.gameTitle {
	border:0px solid #000;
	display:inline-block;
	font-size:2.5em;
	padding:5px;
}

.gameDirections{
	border:0px solid #000;
	display:inline-block;
	font-size:1em;
}

</style>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.2/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>

<script src="./js/SoundMatch.js"></script>
<script src="./js/PubSub.js"></script>

<script>

$(function() {
	SoundMatch.init("game-container");
	// Disable safari Bounceback.
	document.ontouchmove = function(event){
	    event.preventDefault();
	};

	$("body").css("display","block");
});
</script>

</head>

<body>

<!--div style="position:absolute;border:1px solid #000;width:900px;height:675px;">
	<img src="../benchmark/series/nursery_rhymes/baking_time/slides/bkg/baking_time_04.jpg" />
</div-->







<div class="page" style="position:absolute;border:1px solid #000;width:900px;height:675px;">

	<div class="header" style="height:75px;">
		<div style="float:left">
			<div class="headerLabel">Pat-A-Cake</div>
		</div>
		<div style="float:right">
			<div class="headerLabel">Phonemic Awareness</div>
		</div>
	</div>


	<div id="content" style="border:1px solid #000;position:absolute;top:75px;left:50px;width:800px;height:500px;">


	<div id="gameInfo" style="top:0px;left:50px;width:800px;height:130px;border:1px solid #000">
		<div class="gameTitle">Sound Match</div> 
		<div class="gameDirections">Directions: Click the box on the left and match the sounds with the first sound in the box.</div>
	</div>


	<!--GAME-->


		<div style="text-align:center">
			<img id="d0" class="ui-widget-content item" src="./img/object-01.jpg" />
		</div>

		<div id="game-container" style="padding:5px;">

			<div class="ui-widget-content droparea"></div>

			<div class="dragBin">
				<div style="font-size:16pt;font-style:bolder;width:113px;height:100;display:inline-block;vertical-align:top;">
					Picture Bank
				</div>
				<img id="d0" class="ui-widget-content dragitem item" src="./img/object-01.jpg" />
				<img id="d1" class="ui-widget-content dragitem item" src="./img/object-02.jpg" />
				<img id="d2" class="ui-widget-content dragitem item" src="./img/object-03.jpg" />
				<img id="d3" class="ui-widget-content dragitem item" src="./img/object-04.jpg" />
				<img id="d4" class="ui-widget-content dragitem item" src="./img/object-05.jpg" />
			</div>

		</div>

		<div style="float:right">
			<button class="help">How To Play</button>			
			<button class="answer">Answer</button>
			<button class="clear">Clear</button>
		</div>

		<div style="clear:both"></div>

	</div>
</div>

<img src="img/foundationfun.jpg" class="logo" />




</div>

</body>
</html>









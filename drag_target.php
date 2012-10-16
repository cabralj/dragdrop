
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Droppable - Accept</title>
	<style>
	.drag-item {border:1px solid #000;}
	.drop-item {border:1px solid #FF0000;}
	</style>
	<script src="js/jquery/jquery-1.8.0.js"></script>
	<script src="js/jquery/jquery.ui.core.js"></script>
	<script src="js/jquery/jquery.ui.widget.js"></script>
	<script src="js/jquery/jquery.ui.mouse.js"></script>
	<script src="js/jquery/jquery.ui.draggable.js"></script>
	<script src="js/jquery/jquery.ui.droppable.js"></script>
	<style>
	.droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
	.draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
	</style>
	<script>
	$(function() {
		
		$( ".draggable").draggable();
		
		$( ".droppable" ).droppable({
			accept: "#d1,#d2,#d3",
			activeClass: "ui-state-hover",
			hoverClass: "ui-state-active",

			drop: function( event, ui ) {
				console.log(event);
				console.log(ui);

				$( this )
					.addClass( "ui-state-highlight" )
					.find( "p" )
						.html( "Dropped!" );
			}
		});
	});
	</script>
</head>
<body>

<div class="demo" style="border:1px solid #000; width:1000px; height:500px;">
	
	<div id="d1" class="ui-widget-content drag-item draggable">
		<p>I'm draggable but can't be dropped</p>
	</div>

	<div id="d2" class="ui-widget-content drag-item draggable">
		<p>Drag me to my target</p>
	</div>

	<div id="d3" class="ui-widget-header drop-item droppable">
		<p>accept: '#draggable'</p>
	</div>

</div>


</body>
</html>


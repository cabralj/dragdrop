SoundMatch = { 


	data:{

	},

	container:null,

	init: function(div){

		this.container = "#" + div;
		this.create();
		this.setup();
	},

	create: function(){
		for(var i=0; i<this.data.length; i++){
			console.log(this.data[i].type);
		}
	},

	setup: function(){

		$(".answer").bind({
			click: function(){
				console.log("Csheck the answer");
			}
		}),

		$(".clear").bind({
			click: function(){
				console.log("Reset the Game");
			}
		}),

		$(".howto").bind({
			click: function(){
				console.log("How to Play");
			}
		}),

		$(".droparea").droppable({

			tolerance:"fit",
			activeclass: "droparea-active",
			hoverClass:"droparea-hover",
			
/*			activate: function( event, ui ){
			    $(this).addClass(".dropAreaActive");
				console.log("activate");
			},
			deactivate: function(event,ui){
				$(this).removeClass("dropAreaActive");
				console.log("deactivate");
			},
			over: function( event, ui ){
			    $(this).addClass("dropAreaTarget");
				console.log("over");
			},
			out: function(event,ui){
				$(this).removeClass("dropAreaTarget");
				console.log("out");				
			},			
			drop: function(event,ui){
				$(this).removeClass("dropAreaTarget");
				console.log("drop");
			}
*/

		}),



		$(".dragitem").draggable({

			containment: SoundMatch.container,
			stack:"*",

			start: function() {
			    console.log("dragitem::play " + this.data);
			    $(this).css("border-color","#FF0000")
			},
			drag: function() {
			    //console.log($(this).parent() + " drag ")
			},
			stop: function() {
			    console.log("dragitem::stop " + this.data);
			    $(this).css("border-color","#999")
			}

		});
	
	}, 

	onAnswer: function(){

	}, 

	onReset: function(){
		$.each([52, 97], function(index, value) { 
  			console.log(index + ': ' + value); 
		});
	}

}


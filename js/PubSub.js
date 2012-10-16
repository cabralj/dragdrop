(function(jQuery){
  var o = jQuery({});
  jQuery.each({ 
    "subscribe" : "bind", 
    "unsubscribe" : "unbind", 
    "publish" : "trigger" 
  }, function ( fn, api ) {
    jQuery[ fn ] = function() {
      o[ api ].apply( o, arguments );
    };
  });
})(jQuery);
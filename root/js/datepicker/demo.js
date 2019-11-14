const picker = new Lightpick({
    lang: 'en',
    field: document.getElementById('demo1'),
    secondField: document.getElementById('demo2'),
  	
    onSelect: function(start, end){
    			
	    		showDate(start,end);
     }

});


<html> 
    <head> 
    <script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script> 
        $(document).ready(function() { 
	    $('#btn_click').on('click', function() { 
	        var url = 'divrefresh.php';  
	        $('#div1-wrapper').load(url + ' #div1'); 
	     }); 
        }); 
    </script> 
    </head> 
    <body> 
        <br /> 
	<div id="div1-wrapper"> 
	    <div id="div1"  style="border:solid 2px red; width: 100px;"> 
	        <?php echo rand(10,100); ?> 
	    </div> 
	 </div> 
	 <br /> 
	 <div id="div2" style="border:solid 2px green; width: 100px;"> 
             <button type="button" id="btn_click" /> click me! </button> 
	 </div> 
    </body> 
</html>
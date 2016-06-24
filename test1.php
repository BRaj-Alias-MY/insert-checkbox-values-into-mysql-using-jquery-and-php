<html>
<head>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
	$(document).ready(function(){
	
	$('.mutlicheckboxSelect input[type="checkbox"]').on('click', function() {
		 
		var title = $(this).closest('.mutlicheckboxSelect').find('input[type="checkbox"]').val(),
    	title = $(this).val() + ",";
		//alert(title);
		  if ($(this).is(':checked')) {
			 var html = '<span title="' + title + '">' + title + '</span>';
    		$('.result').append(html);

		  } 
		else
			{
				   $('span[title="' + title + '"]').remove();
     
			}
	 

			});
		
		//insert data 
		$('body').on('click','#btn_submit',function(){
			
			 var data = $(".result").html();
			  // alert(data);
			   $.ajax({
                        url: 'process.php',
                        type: 'post',
				         dataType: 'html',
                        data: {
                            "data": data,
                            
                        },
                        success: function(response) {                           
                         $("#result").html(response);
                        }
               });
	 
			 
			
		});
			
	});
	
</script>	
</head>
<body>


 
        <div class="mutlicheckboxSelect">
           
                    <input type="checkbox" value="Apple" />Apple 
              
                    <input type="checkbox" value="Blackberry" />Blackberry 
               
                    <input type="checkbox" value="HTC" />HTC 
               
                    <input type="checkbox" value="Sony Ericson" />Sony Ericson 
               
                    <input type="checkbox" value="Motorola" />Motorola 
                
                    <input type="checkbox" value="Nokia" />Nokia 
           <br>
			<button type="button" name="btn_submit" id="btn_submit">Submit Data</button>
			<br>
				 <div class="result"></div>  
        </div>
    </body>
</html>
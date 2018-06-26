<html>
    <head><title>Click To Display</title></head>
    <body>
        
<button type="button" onclick="myfun()">Click Here</button> <br>
  <div class="result"></div>        
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="exponential.js"></script>        
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    
    function myfun(){
        $.post('database.php',function(res){
            console.log(res);
            
            var arrId = res.id;
            
            var result = '';
            result +='<center>';
            result += '<table width="600" border="1" cellpadding="1" cellspacing="1">';
            result += '<tr><th>'+'ID'+'</th>';
            result += '<th>'+'NAME'+'</th>';
            result += '<th>'+'CLASS'+'</th>';
            result += '<th>'+'ROLL'+'</th></tr>';
            result +='<tr>';
            for(i=0;i<res.id.length;i++) {
                result +='<tr>';
                result += '<td>'+ res.id[i]+'</td>'; 
                result += '<td>'+ res.name[i]+'</td>';
                result += '<td>'+ res.class[i]+'</td>';
                result += '<td>'+ res.roll[i]+'</td>';
                result +='</tr>';
 
            }
            
            result += '</table>';
            result +='</center>';
          
         /*result += '<br>Name = ' + res.name;
         result += '<br>Class = ' + res.class;
         result += '<br>Roll = ' + res.roll;
            result += '<br>'; 
            document.write(result);*/
            
             $('.result').html(result);
            
        });
    }
    
        </script>
    </body>
</html>

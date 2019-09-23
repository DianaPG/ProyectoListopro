$(document).ready(function() {
            act();
            function act() {
                $.getJSON('sensores/log_Error.php', function(data) {
                    $.each(data, function(key, val) {
                   var cont=0;
/////////////////////////////////////////////////////////////////////////////////////                   
                     for (var i = 58; i <=69; i++) 
                         {
                           if (val['Error'+i]=='N/A') 
                           {}
                           else
                           document.getElementById("E"+i).innerHTML = val['Error'+i];
                        if (parseInt(val['Error'+i])>100) 
                            {  flagsERROR[cont]=null;
                               flagsERROR[cont]=2;
                            }
                            else
                            {
                               flagsERROR[cont]=null;
                               flagsERROR[cont]=0;
                            }
                            cont++;
                         }
//////////////////////////////////////////////////////////////////////////////////////                         
                       for (var i = 73; i <=77; i++) 
                         {
                          if (val['Error'+i]=='N/A') 
                           {}
                           else
                           document.getElementById("E"+i).innerHTML = val['Error'+i];
                       if (parseInt(val['Error'+i])>100) 
                            {  flagsERROR[cont]=null;
                               flagsERROR[cont]=2;
                            }
                            else
                            {  flagsERROR[cont]=null;
                               flagsERROR[cont]=0;
                            }
                           cont++;
                          } 
//////////////////////////////////////////////////////////////////////////////////////////    
                       for (var i = 82; i <=98; i++) 
                         {
                          if (val['Error'+i]=='N/A') 
                           {}
                           else
                           document.getElementById("E"+i).innerHTML = val['Error'+i];
                       if (parseInt(val['Error'+i])>100) 
                            {  flagsERROR[cont]=null;
                               flagsERROR[cont]=2;
                            }
                            else
                            {  flagsERROR[cont]=null;
                               flagsERROR[cont]=0;
                            }
                           cont++;
                          } 
//////////////////////////////////////////////////////////////////////////////////////////                       
                       });
                });
          } setInterval(act,1000);
      });
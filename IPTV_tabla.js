$(document).ready(function() {
   act();
    function act() {
             for (var e = 0; e<59 ; e++) 
    {
           if (flagsMEMORIA[e]==0&&flagsERROR[e]==0) 
          {
            $("#tabla"+e).attr("class","");
          }

          if (flagsMEMORIA[e]==1) 
          {
             $("#tabla"+e).attr("class","caja_amarilla");
          }
         if (flagsMEMORIA[e]==2||flagsERROR[e]==2) 
          {
            $("#tabla"+e).attr("class","caja_roja");
          }
    }                  
  }setInterval(act,1000);
});
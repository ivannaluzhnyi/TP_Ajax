function AfficherFromation(numero){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_sncf/afficherFormation",
         data:"numero="+numero,
        success:function(data)
                {
                    $('#divForm').empty();
                    $('#divForm').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}


function AfficherActions(numeroFormation){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_sncf/afficherAgents",
         data:"numeroFormation="+numeroFormation,
         success:function(data)
                {
                    $('#divAgents').empty();
                    $('#divAgents').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}
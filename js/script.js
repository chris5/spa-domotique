 $(".checkboxcaller").change(function()
    {
        var element = $(this).attr("name");
        $.post( "services/api.php", { "element":element, "checked": $(this).prop("checked") })
          .done(function( data ) {
           // alert( "Data Loaded: " + data );
          });
    });
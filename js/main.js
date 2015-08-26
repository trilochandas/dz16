$( document ).ready(function() {
    // delete advert
    $( "a.delete" ).on( "click", function( event) {
  		event.preventDefault(); 
  		var tr = $(this).closest('tr');
  		var id = tr.children('td:first').html();
      var data = {'del':id};
  		$.getJSON('ajax-request.php?',
        data,
        function(res){
          tr.fadeOut('slow', function() {
            if (res.status == 'success') {
              $('#info').show();
              $('#infoText').html(res.message, res.dbSizeInfo);
              $('#emptyDb').html(res.emptyDb);
            };
            $(this).remove();
          });
        });
    });

    // add advert
    $("#advertForm").submit(function() {

      // function for geting params from url string
      var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
      };

      var id = getUrlParameter('id');

      $.ajax({
             type: "POST",
             url: 'ajax-request.php?formSubmit=1&id='+id,
             data: $("#advertForm").serialize(), // serializes the form's elements.
             success: function(data, string)
             {
                // $('#advertForm')[0].clearForm();
                $('#advertForm').each(function() {
                  this.reset();
                });
             }
      });

      return false; // avoid to execute the actual submit of the form.
    });

    // $('a.showAdvert').on('click', function (event) {
    //   event.preventDefault();
    //   var id = $(this).attr("data-id");
    //   console.log(id);
    //   $.ajax({
    //          type: "POST",
    //          url: 'ajax-request.php?id='+id,
    //          success: function(data, string)
    //          {
    //              alert(data); // show response from the php script.
    //          }
    //   });
    // });
});
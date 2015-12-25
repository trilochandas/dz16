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

    // $("a.showAdvert").on('click', function(event){
    //   event.preventDefault();
    //   var id = $(this).data('id');
    //   $.ajax({
    //     type: "GET",
    //     url: 'ajax-request.php?id="'+id+'"',
        
    //   });
    // });

    // add advert
    $("#advertForm").submit(function() {

      $.ajax({
             type: "POST",
             url: 'ajax-request.php?formSubmit=1',
             data: $("#advertForm").serialize(), // serializes the form's elements.
             success: function(data, string)
             {
                // clearing form
                $('#advertForm input').attr('value', '');
                $('#advertForm textarea').html('');
                $('#advertForm input#send').attr('value', 'Send');
                // update adverts table
                var data = JSON.parse(data);
                console.log(typeof(data));
                console.log(data);
                var dataId = data['id'];
                var dataRow = data['row'];
                console.log(dataId);
                console.log(dataRow);
                console.log('td[data-id="'+dataId+'"]');
                var table_row = $('.adverts-table table tbody').find('td[data-id="'+dataId+'"]').parent();
                table_row.hide('slow', function(){
                  $(dataRow).insertAfter(table_row);
                  table_row.remove();
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
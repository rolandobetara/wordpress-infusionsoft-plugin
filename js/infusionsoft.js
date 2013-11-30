jQuery(document).ready(function($) {
 
 
   $('#submitbutton').click(function() {
        var addForm =$('#addForm');
        var postURL = addForm.attr('action'),
            serializedSettings = addForm.serialize();
          $('.status').text('Processing Data...');   
         $.post(postURL, serializedSettings, function(data){
            
            $('.status').text(data); 
            $('.input-js').val('');
         });

        return false;
    });
    $('#addForm input').click(function(){
        $("#addForm :input").each(function(){
            $('.status').text('');
        }); 
    });

    $('#searchedit-btn').click(function() {
        var addForm =$('#searcheditForm');
        var postURL = addForm.attr('action'),
            serializedSettings = addForm.serialize(),
            stts = $('.status');
            stts.text('Processing.....');
            $('#updatebutton').attr('disabled', 'disabled');  

        $.post( postURL, serializedSettings, function(data) {

                    })
                    .done(function(data) {
                  
                    })
                    .fail(function(data) {
                        stts.text(data);
                    })
                    .always(function(data) {
                        if (data == '[]'){
                            stts.text('No Data');
                        } else {
                            var obj = $.parseJSON(data); 
                            stts.text('');
                            $('.input-js').val('');
                            $('#id').val(obj[0].Id);
                            $('#fname').val(obj[0].FirstName);
                            $('#lname').val(obj[0].LastName);
                            $('#email').val(obj[0].Email);
                            $('#Lbstolose').val(obj[0]._Lbstolose);
                            $('#Lbs').val(obj[0]._Lbs);

                            $('#updatebutton').removeAttr('disabled');
                            $('#deletebutton').removeAttr('disabled');
                        } 

                    });

        return false;
    });

    $('#updatebutton').click(function() {
        var addForm =$('#updateForm');
        var postURL = addForm.attr('action'),
            serializedSettings = addForm.serialize(),
            stts = $('.editstatus');

            stts.text('Processing.....');
           
        $.post( postURL, serializedSettings, function(data) {

            })
            .done(function(data) {
              
            })
            .fail(function(data) {
                stts.text(data);
            })
            .always(function(data) {
                stts.text('Successfully Updated');
        });

        return false;
    });

    $('#deletebutton').click(function() {
        var addForm =$('#deleteForm');
        var postURL = addForm.attr('action'),
            serializedSettings = addForm.serialize(),
            stts = $('.delstatus');

            $('#deletebutton').attr('disabled', 'disabled');  
            stts.text('Processing.....');

        $.post( postURL, serializedSettings, function(data) {

            })
            .done(function(data) {
              
            })
            .fail(function(data) {
                stts.text(data);
            })
            .always(function(data) {
                stts.text('Successfully Deleted');

        });

        return false;
    });

});
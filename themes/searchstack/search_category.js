 jQuery(function() { alert( "Handler for .click() called." );
        jQuery( ".submit_title" ).click(function() {
          alert( "Handler for .click() called." );
          var selectedCat = $('select.cat_select').children("option:selected").val();
          //  var catName = $('#category_select').find(":selected").val();
             var search_title = $('#search_episodes').val();alert(search_title);
            $.ajax({
                type : "post",
                dataType : "text",
                url : OBJ.ajaxurl,
                data : { 
                    action: "my_ajax_action",
                    search_title : search_title,
                    selectedCat : selectedCat
                },
                success: function(response) {//alert(response);
                if(response == "") {   //alert("success");// DO SOMETHING     
                    console.log(response);
                        $('.related_episode').html(response);
                        $('.related_episode').html('No Posts Found')
                }else{  //alert(response);
                     $('.related_episode').html(response);
                        $('.all-category').css('display','block')
                }
                   // if( response.type == "success" ) {
                   //     alert("success");
                  //  }
                   // else {
                        // Error on Failure.
                        //alert(">>>>>>>>>>>");
                   // }
                   
                }
            });
        });
    });
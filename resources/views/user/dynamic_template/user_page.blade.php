{!!$html!!}


<script>
    $('#save_story').on('click',function(){
        submit_form('add_new_story','create_story');
    });


    function create_story(add_story, response) {
            console.log('res 1', response);
            if (response.status) {
                console.log('res 2', response);
                $(add_story + " input").val("");
                $(add_story + " textarea").val("");
                
                
            }
        }

    function set_tribute(type_tribute){
        $('#type_tribute').val(type_tribute);
    }


    $('#save_trib').on('click',function(){
        submit_form('add_new_trib','create_trib');
    });


    function create_trib(add_trib, response) {
            console.log('res 1', response);
            if (response.status) {
                console.log('res 2', response);
                $(add_trib + " input").val("");
                $(add_trib + " textarea").val("");
                
                
            }
        }
      
</script>
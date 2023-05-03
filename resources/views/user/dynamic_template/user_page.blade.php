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
      
</script>
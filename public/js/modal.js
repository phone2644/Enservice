function open_modal() { 
    $("#modal").css("display", "flex")
    setTimeout(()=>{
        $("#modal").css({
            "opacity":"1",
            "transform":"translateY(0)"
        })

    }, 50)
}

function close_modal() {
   
   $("#modal").css({
    "opacity":"0",
    "transform": "translateY(200px)"
    
   })
   setTimeout(() =>{
   $("#modal").css("display", "none")
  

    }, 300)

}


    var state = '1';
    $('#step-1').fadeIn();
    $('#step-2').fadeOut();
    $('#step-3').fadeOut();
    $('#back_page').addClass('disabled');
    $('#Next_page').click(function() {

        switch (state) {
            case '1':
                $('#step-2').removeClass('hidden');

                $('#back_page').removeClass('disabled');
                $('#step-1').addClass('hidden');
                $('#step-2').fadeIn(500);
                state = '2';
                break;

            case '2':
                $('#step-3').removeClass('hidden');
                $('#step-3').fadeIn(1000);
                $('#step-1').addClass('hidden');
                $('#step-2').addClass('hidden');
                state = '3';
                $('#Next_page').addClass('hidden');
                $('#btn-finish-form').removeClass('hidden');
                break;
            case "3":

                break;

            default:
                alert(4)
                break;
        }
    });



    $('#back_page').click(function() {

        switch (state) {
            case '1':
                $('#step-2').removeClass('hidden');
                $('#step-3').removeClass('hidden');



                break;

            case '2':
                $('#back_page').addClass('disabled');
                $('#step-1').removeClass('hidden').fadeIn(1000);
                $('#step-2').addClass('hidden');
                $('#step-3').addClass('hidden');
                state = '1';

                break;
            case "3":
                $('#step-2').removeClass('hidden').fadeIn(1000);
                $('#step-1').addClass('hidden');
                $('#step-3').addClass('hidden');
                $('#Next_page').removeClass('hidden');
                $('#btn-finish-form').addClass('hidden');
                state = '2';
                break;

            default:
                alert(4)
                break;
        }
    });


    $('#btn-finish-form').click(function(response) {
        // // these image appends are getting dropzones instances
        // formData.append('image', $('#dropzone_file')[0]);
        // $("#showform").empty();
        //if($('#myform'.valid())
        $.ajax({
            url: "{{route('content_user')}}",
            type: "POST",
            enctype: 'multipart/form-data',
            data: {
                topic: $('#topic').val(),
                issue: $('#issue').val(),
                campus: $('#campus').val(),
                description: $('#description').val(),
                email: $('#email').val(),
                name: $('#name').val(),
                phone: $('#phone').val(),
                line: $('#line').val(),
                dropzone_file: $('#dropzone_file').files[0],
                contact_facebook: $('#contact_facebook').val(),
                "_token": "{{ csrf_token() }}",

            },
            cache: false,
            success: function(response) {
                console.log(response)
                if (response == true) {

                    $.toast({
                        heading: 'Success',
                        text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
                        showHideTransition: 'slide',
                        icon: 'success'
                    })
                    setTimeout(function() {
                        location.reload();
                    }, 3000);

                } else {

                    alert('Failed')
                    $.toast({
                        heading: 'Error',
                        text: 'Report any <a href="https://github.com/kamranahmedse/jquery-toast-plugin/issues">issues</a>',
                        showHideTransition: 'fade',
                        icon: 'error'
                    })
                }

            }
        });

    });




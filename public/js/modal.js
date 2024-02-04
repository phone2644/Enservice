

function close_modal() {
   
   $("#modal").css({
    "opacity":"0",
    "transform": "translateY(200px)"
    
   })
   setTimeout(() =>{
   $("#modal").css("display", "none")
  
   window.location.reload();
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


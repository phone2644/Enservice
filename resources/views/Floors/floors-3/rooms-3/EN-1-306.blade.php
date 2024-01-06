<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
</head>
<body>

<div  class="btn1" onclick="open_modal()">
    Click
</div>



    <div id="modal" class="modal">
        <div class="modal-bg"></div>
        <div class="modal-card">
            <h1>Form</h1>
            <div class="form-control">
                <span>First name</span>
                <input type="text" class="txt">
            </div>
            <div class="form-button">
                <div class="btn-cancel" onclick="close_modal()">Cancel</div>
                <div class="btn-Save">Save</div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script  src="{{ asset('js/modal.js') }}"></script>
   

    
</body>
</html>
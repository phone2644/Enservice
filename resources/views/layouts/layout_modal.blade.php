<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;700&display=swap" rel="stylesheet">
    <style>
        .ck-editor__editable_inline {
            min-height: 200px
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <!-- CKeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

</head>

<body id="body_login">
    <div id="preloader"></div>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>



                    </ul>

                    <ul class=" navbar-nav " style="margin: 0 5rem;">

                        {{-- ------------------------------------------ --}}
                        <div class="nav-item ">
                            <li class="dropdown-link">
                                <label id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                    role="button" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </label>
                                <ul class="dropdown" style="position: absolute; ">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }} ">Logout</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ul>

                </div>
            </div>
        </nav>
        <main>

            @yield('content')

        </main>
    </div>

    <script>
        $('.buttomClosed').click(function() {
            //ดึงข้อมูลทั้งหมดมาจาก content
            // alert(555);
            var equipment = $(this).data('equipment');
            var position = $(this).data('position');
            // alert(position);
            $('#equipment').html(equipment);
            $('#equipment_id').val(equipment);
            $('#position').html(position);
            $('#position_id').val(position);



        });
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })




        $('#btn-finish-form-data').click(function(response) {
            // // these image appends are getting dropzones instances
            // formData.append('image', $('#dropzone_file')[0]);
            // $("#showform").empty();
            //if($('#myform'.valid())
            $.ajax({
                url: "{{ route('submit_data') }}",
                type: "POST",
                enctype: 'multipart/form-data',
                data: {
                    topic: $('#topic').val(),
                    equipment_id: $('#equipment_id').val(),
                    position_id: $('#position_id').val(),
                    problem_id: $('#problem_id').val(),
                    description: $('#description').val(),
                    email: $('#email').val(),
                    name: $('#name').val(),
                    phone: $('#phone').val(),
                    user_id: $('#user_id').val(),
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
    </script>


</body>

</html>

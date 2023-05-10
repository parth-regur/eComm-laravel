<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eComm Project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <style>

    body {
        height: 100%;
    }
    
    .container {
        display: flex;
        flex-direction: column;
        min-height: 80vh;
    }
    
    .content {
        flex: 1;
    }

    .footer {
        position:fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 50px; /* Adjust this value to match the height of the footer */
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        text-align: center;
        line-height: 50px;
    }

    </style>

</head>
<body>
    {{View::make('header')}}

    <div class="container">
        <div class="content">

            @yield('content')

        </div>
    </div>
    
    {{View::make('footer')}}
</body>
</html>
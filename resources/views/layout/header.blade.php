<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box123{
            width: 100%;
            height: 100px;
            background-color: #003366;
            display: flex;
            justify-content: space-evenly;
        }
        .box123 h1 a{
            color: white;
            text-decoration: none
        }
        
    </style>
</head>
<body>
    <div class="box123">
        <h1><a href="{{ route('formView') }}">Add</a></h1> 
        <h1><a href="{{ route('viewData') }}">View</a></h1>
    </div>

@yield('demo')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>@yield('title')</title>
    <style>
        #content {
            background-color: #FEF5E7;
            color: purple;
            padding: 10px;
            border-radius: 30px;
            cursor: pointer;
        }
        /* Establecer el color de texto del select */
        #incidences_id {
            color: black;
            text-align: center;/* Color del texto dentro del select */
        }

        #button {
            background-color: palegoldenrod;
            color: purple;
            padding: 10px;
            border-radius: 20px;
            text-decoration: none;
            cursor: pointer;
        }

        #h1 {
            color: blue;
            margin:200px;
            margin-block-end: 100px;
            margin-top: 50px;
        }

        #h2 {
            color: black;
            margin:190px;
            margin-block-end: 100px;
            margin-block-start: 100px;
        }
        #h3 {
            color: black;
            margin:225px;
            margin-block-end: 0px;
            margin-block-start: 0px;
        }
        #table {
            border-collapse: collapse;
            color: black;
            }
        
        #form {
            background-color: #FFF9C4;
            color: purple;
            padding: 10px;
            border-radius: 20px;
            text-decoration: none;
            cursor: pointer;
            display: grid;
            margin:15px;
        }

        
        #contenedor-button {
            text-align: center;
            margin:-10px;
            margin-right: 60px;
        }
    </style>
    
</head>
<body>
    
    @yield('content')
</body>
</html> 
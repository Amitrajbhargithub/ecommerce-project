<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .custom-login
        {
            height:400px;
            padding:100px;
        }
        img.slider-img
        {
            height:400px;
            width: 100%;
        }
        .trending-image
        {
            height: 200px;
            width: 200px;
            margin-top:20px;
            margin-left:20px;
        }
        .trending-item
        {
            float:left;
            width: 16.3%;
             
            margin-top:20px;
        }
        .custom-product
        {
            height:400px;
        }
        /* .cart-list-devider
        {
            border-bottom: 1px solid #ccc;
            margin-bottom:10px;
        } */
    </style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')   <br> <br>
    @include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$advert->ilan_basligi}}</h1>
    @foreach($advert->photos as $photo)
        <img src="{{asset('storage/'.$photo->fotograf)}}" alt="" style="height: 250px;">
    @endforeach
</body>
</html>
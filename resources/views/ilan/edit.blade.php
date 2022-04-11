<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('ilan.update',$advert->id)}}">
    @csrf
    @method('PATCH')
    <center> 
    <input name="ilan_türü" type="text" value="Update"> <br>
    <input name="user_id" type="text" value="1"><br>
    <input name="ilan_basligi" type="text" value="UPdate"><br>
    <input name="nereden" type="text" value="ankara"><br>
    <input name="nereye" type="text" value="ıstanbul"><br>
    <input name="arac" type="text" value="kamyon"><br>
    <input name="ürün_cesit" type="text" value="tarım"><br>
    <input name="ürün" type="text" value="gübre"><br>
    <input name="miktar" type="text" value="31 ton"><br>
    <input name="fiyat" type="text" value="300"><br>
    <input name="telefon" type="text" value="05313313131"><br>
    <input name="aciklama" type="text" value="acıklama test"><br>
    <input name="tarih" type="date" value="2022-04-12"><br>

    <input type="submit">
    </center>
</form>
</body>
</html>
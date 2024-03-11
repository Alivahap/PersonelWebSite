<form action="post" method="post">
    @csrf
    <input type="submit" value="Gönder">
</form>

<a href="{{route('welcome')}}">Welcome Sayfasına Git</a>
<br>
<a href="{{route('test',['ad'=>'alivahap','soyad'=>'aydin'])}}">Test sayfası Parametreli</a>
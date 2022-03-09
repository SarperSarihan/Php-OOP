<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php ders 1</title>
</head>
<body>
    <!-- Html Yorum Satırı -->
    <?php
    /* açıklama satırı bloğu
        açıklma satırı shift+alt+a
    */
    /*kullanılan komut:
        echo: ekrana yazdırma işlemi yapar.
            komut içerisinde html etiketleri kullanılabilir.  
            Çift tırnak ve tek tırnak kullanılabilir 
            Çift tırnak kullanıldığında içerisindeki değişkenlerin içeriğini ekrana yazar.
            Nokta oparetörü ile birleştirme işlemi yapılabilir.
            Ters slaş (\) kaçış karakteridir. Özel ifadelerden önce kullanılabilir.
    */
    echo "<h3>Adnan Menderes Üniversitesi</h3>" ;
    echo "<h4>Aydın meslek yüksek okulu</h4>" ;
    echo "Bilgisayar Programcılığı" . "Aymes" ;
    echo "<br>Bilgisayar Programcılığı" . "Aymes" ;
    
    echo "<hr> <h4> Değişken Tanımlama </h4>";

    echo "<ol>
        <li>Değişken isimleri $ ile başlar. </li>    
        <li>Değişken isimleri sayısal ifadelerle başlayamaz </li>    
        <li>Değişken isimlerinde boşluk kullanılamaz. İki kelime birinci_sınıf
        birincisinif birinci-sinif örnekleri kullanılabilir. </li>
        <li>Değişken isimleri küçük büyük harfe duyarlıdır. \$sayi != \$sayi  </li>
        <li>Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli. </li>
        <li>Değişken içeriğinde metinsel ifaede varsa çift tırnak (\") veya tek tırnak (') kullanılabilir. </li>    
        <li>Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir. </li>    
        <li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir </li>     
        
        </ol>";
        echo "<hr> <h4> Değişken tanımlama örnekleri </h4>";

        $isim    ="Sarper";
        $soyisim ="Sarıhan";
        $okulno  ="216029053";
        
        
        
        /* Üniversite Ad Soyad Numara değişkenlerini tanımlayınız 
        Bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırın  */

        $uni = "Adü";
        $myo ="Aymes";
        $Ad  ="Sarper";
        $soyad ="Sarıhan";
        $numara="216029053";

    ?>
        <form action="">
            <label for="üniversite">Üniversite:</label>
            <input type="text" name="" value="<?php echo $uni; ?>" id="üniveriste" disabled><br>

            <label for="myo">MYO:</label>
            <input type="text" name="" value="<?php echo $myo; ?>" id="myo" disabled><br>

            <label for="Ad">Öğrenci İsmi:</label>
            <input type="text" name="" value="<?php echo $Ad; ?>" id="Ad" disabled><br>

            <label for="Soyad">Öğrenci Soyismi:</label>
            <input type="text" name="" value="<?php echo $soyad; ?>" id="Soyad" disabled><br>

            <label for="Numara">Öğrecni no:</label>
            <input type="text" name="" value="<?php echo $numara; ?>" id="numara" disabled><br>

        </form>
</body>
</html>
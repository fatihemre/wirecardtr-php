<?php include('menu.php');?>


<h2>BasicApi</h2>

<div class="alert alert-warning">

    <p>Bu satış türünü kullanabilmeiniz için öncelikli olarak Mikro Ödeme| 3Pay müşteri panelinden bir ürün tanımlamanız ve bu ürün için onay aldıktan sonra, satış linkini sitenize ekleyebilirsiniz. </p>
</div>
<h2>Ürün Bilgileri</h2>
<table class="table">
    <thead>
        <tr>
            <th>
               Ürün Adı
            </th>
            <th>
               Kategori
            </th>
            <th>
               Satış Türü
            </th>
            <th>
                Fiyat (Turkcell)
            </th>
            <th>
                Fiyat (AVEA)
            </th>
            <th>
                Fiyat (CreditCardPayment)
            </th>
            <th>
                Fiyat (VodafoneMobilePayment)
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Mobil uygulama
            </td>
            <td>
                Mobil Uygulama / Store
            </td>
            <td>
                Tekil Ürün
            </td>
            <td>
                0,01 TL
            </td>
            <td>
                0,01 TL
            </td> 
            <td>
                0,01 TL
            </td> 
             <td>
                0,01 TL
            </td>
        </tr>

    </tbody>
</table>
<div>
  
    <p>
        <strong><a class="btn btn-danger" href="http://www.mikro-odeme.com/sale-api/tr/step1.aspx?partner=20923&product=11397">Satın Al </a></strong>
    </p>
</div>

 <?php include('footer.php');?>

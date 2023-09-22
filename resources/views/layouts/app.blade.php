<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=PT+Sans+Narrow&family=Poppins:wght@200&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>
<body>
  <header>
    <h3>Kasir Online</h3>
    <p></p>
  </header>
  <div class="burger-menu">
    <input type="checkbox" />
  <span></span>
  <span></span>
  <span></span>
</div>
<div class="page">
  {{ $page }}</i>
</div>
<div id="container">
<div class="sidebar">
<div class="profile">
<i class="fa-solid fa-user"></i>
</div>

<div class="user">
Triyono
</div>
<hr>
<ul>
<li class="dash"><a href="/">dashboard</a></li>
<li class="kat">kategori
<ul>
<li class="sembako"> <a href="/categories/sembako">sembako</a> </li>
<li class="makanan"> <a href="makanan.html">makanan</a> </li>
<li class="minuman"> <a href="minuman.html">minuman</a> </li>
</ul>
</li>
<li class="stok">stok</li>
</ul>
</div>

<div class="content">
<div class="box-page">
<h4>Rp. 5.000.000.00</h4>
<p>
Total bulan ini
</p>
<div class="icon-page">
<i class="fa-solid fa-sack-dollar"></i>
</div>
</div>
<div class="box-list">
<div class="box-one">
<h4>Rp. 1.000.000.00</h4>
<p>
Pemasukan hari ini
</p>
<div class="icon-box">
<i class="fa-solid fa-money-check"></i>
</div>
<span class="detail"><a href="#">detail
<i class="fa-solid fa-angles-right"></i>
</a></span>
</div>
<div class="box-two">
<h4>Rp. 500.000.00</h4>
<p>
Pengeluaran hari ini
</p>
<div class="icon-box">
<i class="fa-solid fa-arrow-right"></i>
</div>
<span class="detail"><a href="#">detail
<i class="fa-solid fa-angles-right"></i>
</a></span>
</div>
<div class="box-three">
<h4>10 </h4>
<p>
Total terjual
</p>
<div class="icon-box">
<i class="fa-solid fa-bag-shopping"></i>
</div>
<span class="detail"><a href="#">detail
</a></span>
</div>
<div class="box-four">
<h4>Rp. 500.000.00</h4>
<p>
Total uang
</p>
<div class="icon-box">
<i class="fa-solid fa-wallet"></i>
</div>
<span class="detail"><a href="#">detail
<i class="fa-solid fa-angles-right"></i>
</a></span>
</div>
</div>
</div>
</div>

<div class="fixed">
<h3>history transaksi</h3>
<form action=""method="post"id="form">
<input type="text"name="search"class="searchDash"placeholder=pencarian>
<button type="submit"class="buttonDash"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
</div>

<div id="list-history">
<table border="1">
<thead>
<tr>
<th>No</th>
<th>Id transaksi</th>
<th>Nama item</th>
<th>Tanggal</th>
<th>Total pembayaran</th>
<th>Uang masuk</th>
<th>Uang kembali</th>
<th>Opsi</th>
</tr>
</thead>
<tr>
<td>1</td>
<td>18091908</td>
<td>Kopi sachet</td>
<td>17-09-2023</td>
<td>20.000</td>
<td>20.000</td>
<td>10.000</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>2</td>
<td>18071501</td>
<td>Mie Sarimi</td>
<td>16-09-2023</td>
<td>10.000</td>
<td>10.000</td>
<td>0</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>3</td>
<td>18022806</td>
<td>Sunlight</td>
<td>15-09-2023</td>
<td>5.000</td>
<td>5.000</td>
<td>0</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>4</td>
<td>18372820</td>
<td>Minyak Goreng</td>
<td>15-09-2023</td>
<td>15.000</td>
<td>25.000</td>
<td>10.000</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>5</td>
<td>18272802</td>
<td>Rokok Surya</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>6</td>
<td>18583479</td>
<td>Gula Pasir</td>
<td>17-09-2023</td>
<td>20.000</td>
<td>20.000</td>
<td>10.000</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>7</td>
<td>18071501</td>
<td>Roma Kelapa</td>
<td>16-09-2023</td>
<td>10.000</td>
<td>10.000</td>
<td>0</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>8</td>
<td>18022806</td>
<td>Sunlight</td>
<td>15-09-2023</td>
<td>5.000</td>
<td>5.000</td>
<td>0</td>
<td><a href="">lihat</a></td>
</tr>
<tr>
<td>9</td>
<td>18495002</td>
<td>Rokok Kopi</td>
<td>15-09-2023</td>
<td>15.000</td>
<td>25.000</td>
<td>10.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>10</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>11</td>
<td>18022806</td>
<td>15-09-2023</td>
<td>5.000</td>
<td>5.000</td>
<td>0</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>12</td>
<td>18495002</td>
<td>15-09-2023</td>
<td>15.000</td>
<td>25.000</td>
<td>10.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>13</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>14</td>
<td>18091908</td>
<td>17-09-2023</td>
<td>20.000</td>
<td>20.000</td>
<td>10.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>15</td>
<td>18071501</td>
<td>16-09-2023</td>
<td>10.000</td>
<td>10.000</td>
<td>0</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>16</td>
<td>18022806</td>
<td>15-09-2023</td>
<td>5.000</td>
<td>5.000</td>
<td>0</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>17</td>
<td>18495002</td>
<td>15-09-2023</td>
<td>15.000</td>
<td>25.000</td>
<td>10.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>18</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>19</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>
<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

<tr>
<td>20</td>
<td>18289393</td>
<td>15-09-2023</td>
<td>20.000</td>
<td>50.000</td>
<td>30.000</td>
<td><a href="">detail</a></td>
</tr>

</table>

</div>
<script src="{{ ('js/main.js') }}"></script>
</body>
</html>
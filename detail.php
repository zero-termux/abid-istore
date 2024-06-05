<?php
include ("config.php");

if(!isset($_GET['id'])) {
    header('Location: admin.php');
}
    $id = $_GET['id'];

    $sql = "SELECT * FROM daftar_pemesan WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $client = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1 ) {
        die ("Data tidak ditemukan...");
    }

    $uniqueId = substr(md5($client['id']), 0, 8);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abid iShop</title>
    <link href="output.css" rel="stylesheet" />
    <script
      src="https://kit.fontawesome.com/83a0f8a477.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
      rel="stylesheet"
    />
    <style>
      * {
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <nav
      class="bg-white border-gray-200 fixed top-0 left-0 w-full z-50"
    >
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <h2
          class="self-center text-2xl font-bold whitespace-nowrap"
        >
          Abid iShop <i class="fa-solid fa-cart-shopping text-blue-700"></i>
        </h2>
        <div class="kembali mx-auto">
      </div>
      </div>
    </nav>
    
  <div class="container relative mx-auto">
    
    <div id="ctr1" class="keter mt-8 mb-8">
        <div class="card max-w-lg mx-auto rounded-lg shadow bg-zinc-300 p-8">
            <div class="judul1 mt-6 mb-6">
            <h2 class="font-bold text-gray-900 text-2xl">
              Data Invoice
              <hr>
            </h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Id Order : <span id="nama" class="font-semibold text-gray-900"><?php echo $uniqueId ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Nama Anda : <span id="nama" class="font-semibold text-gray-900"><?php echo $client['nama'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Email Anda : <span id="email" class="font-semibold text-gray-900"><?php echo $client['email'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Nomor Telepon : <span id="nomor" class="font-semibold text-gray-900"><?php echo $client['nomor'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Alamat Anda : <span id="alamat" class="font-semibold text-gray-900"><?php echo $client['alamat'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Kode Pos : <span id="kodepos" class="font-semibold text-gray-900"><?php echo $client['kode_pos'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Jenis Ongkir : <span id="ongkir" class="font-semibold text-gray-900"><?php echo $client['ongkir'] ?></span></h2>
            </div>

            <table cellspacing="0" class="table-auto border-separate border-spacing-2 border border-blue-700 mb-6">
            <thead class="bg-blue-700 text-white">
              <tr>
                <th width="200px" class="border-spacing-2 border border-white p-2">Nama Produk</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">jumlah</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Jumlah Harga</th>
              </tr>
            </thead>
            <tbody id="daftar-keranjang" class="text-center font-semibold text-gray-900">
              <tr>
              <td class="border-spacing-2 border border-blue-700 p-2"><?php echo $client['nama_barang'] ?></td>
              <td class="border-spacing-2 border border-blue-700 p-2"><?php echo $client['jumlah_barang'] ?></td>
              <td class="border-spacing-2 border border-blue-700 p-2">Rp.<?php echo $client['total_harga'] ?>jt</td>
              </tr>
            </tbody>
            </table>

            <button id="edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                edit data
            </button>
            <button id="cetakan" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                cetak data
            </button>
            <a href="admin.php" id="edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                kembali
            </a>
        </div>
      </div>

    <div id="ctr2" class="keter mt-8 mb-8">
        <div class="card max-w-lg mx-auto rounded-lg shadow bg-zinc-300 p-8">
          <div class="form mt-8 mb-8 px-6">
          <form class="max-w-lg mx-auto" action="proses-edit.php" method="POST">
          <fieldset>
          <input type="hidden" name="id" value="<?php echo $client['id']?>" />
          <div class="mb-5">
            <label
              for="name"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Nama Anda :</label
            >
            <input
              type="text"
              id="name"
              name="nama"
              value="<?php echo $client['nama'] ?>"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="nama anda"
              required
            />
          </div>
          <div class="mb-5">
            <label
              for="email"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Email Anda :</label
            >
            <input
              type="email"
              id="email"
              name="email"
              value="<?php echo $client['email'] ?>"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="@gmail.com"
              required
            />
          </div>
          <div class="mb-5">
            <label
              for="telepon"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Nomor Telepon :</label
            >
            <input
              type="tel"
              id="telepon"
              name="nomor"
              value="<?php echo $client['nomor'] ?>"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="nomer anda"
              required
            />
          </div>
          <div class="mb-5">
            <label
              for="alamat"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Alamat lengkap :</label
            >
            <textarea
              id="alamat"
              rows="4"
              name="alamat"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Tulis alamat lengkap anda.."
            ><?php echo $client['alamat'] ?></textarea>
          </div>
          <div class="mb-5">
            <label
              for="kodepos"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Kode Pos :</label
            >
            <input
              type="tel"
              id="kodepos"
              name="kode_pos"
              value="<?php echo $client['kode_pos'] ?>"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Kode Pos anda"
              required
            />
          </div>
          <div class="mb-5">
            <label
              for="ongkir"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Pilih Pengiriman :</label
            >
            <?php $ongkir = $client['ongkir']; ?>
            <select
              id="ongkir"
              name="ongkir"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            >
              <option <?php echo ($ongkir == 'Reguler( 11.000 )') ? "selected": "" ?> value="Reguler( 11.000 )">Reguler( 11.000 )</option>
              <option <?php echo ($ongkir == 'Hemat( 8.000 )') ? "selected": "" ?> value="Hemat( 8.000 )">Hemat( 8.000 )</option>
              <option <?php echo ($ongkir == 'Gesit( 15.000 )') ? "selected": "" ?> value="Gesit( 15.000 )">Gesit( 15.000 )</option>
            </select>
          </div>

          <table cellspacing="0" class="table-auto border-separate border-spacing-2 border border-blue-700 mb-6">
            <thead class="bg-blue-700 text-white">
              <tr>
                <th width="200px" class="border-spacing-2 border border-white p-2">Nama Produk</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">jumlah</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Jumlah Harga</th>
              </tr>
            </thead>
            <tbody id="daftar-keranjang" class="text-center font-semibold text-gray-900">
              <tr>
              <td class="border-spacing-2 border border-blue-700 p-2"><?php echo $client['nama_barang'] ?></td>
              <td class="border-spacing-2 border border-blue-700 p-2"><?php echo $client['jumlah_barang'] ?></td>
              <td class="border-spacing-2 border border-blue-700 p-2">Rp.<?php echo $client['total_harga'] ?>jt</td>
              </tr>
            </tbody>
            </table>

          <input
            type="submit"
            name="simpan"
            value="simpan"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" />
           </fieldset>
           </form>
         </div>
        </div>
    </div>

    <div id="cetak" class="card2 max-w-lg mx-auto rounded-lg shadow bg-zinc-300 p-8 hidden">
    <center>
            <div class="judul1 mt-6 mb-6">
            <h2 class="font-bold text-gray-900 text-2xl">
              INVOICE
              <hr>
            </h2>
            </div>
            <div class="parent relative">
              <div class="pembungkus1 text-left">
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Id Order : <span id="nama" class="font-semibold text-gray-900"><?php echo $uniqueId ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Atas Nama : <span id="nama" class="font-semibold text-gray-900"><?php echo $client['nama'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Nomor Telepon : <span id="nomor" class="font-semibold text-gray-900"><?php echo $client['nomor'] ?></span></h2>
            </div>
              </div>
              <div class="pembungkus2 text-right absolute top-0 right-2">
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Alamat Anda : <span id="alamat" class="font-semibold text-gray-900"><?php echo $client['alamat'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Kode Pos : <span id="kodepos" class="font-semibold text-gray-900"><?php echo $client['kode_pos'] ?></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Jenis Ongkir : <span id="ongkir" class="font-semibold text-gray-900"><?php echo $client['ongkir'] ?></span></h2>
            </div>
              </div>
            </div>
          
            <table cellspacing="0" class="table-auto border-separate border-spacing-2 border border-blue-700 mb-2 mt-6">
            <thead class="bg-blue-700 text-white">
              <tr>
                <th width="200px" class="border-spacing-2 border border-white p-2">Nama Produk</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">jumlah</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Jumlah Harga</th>
              </tr>
            </thead>
            <tbody id="daftar-keranjang" class="text-center font-semibold text-gray-900">
              <tr>
              <td class="border-spacing-2 border border-blue-700 p-2"><?php echo $client['nama_barang'] ?></td>
              <td class="border-spacing-2 border border-blue-700 p-2"><?php echo $client['jumlah_barang'] ?></td>
              <td class="border-spacing-2 border border-blue-700 p-2">Rp.<?php echo $client['total_harga'] ?>jt</td>
              </tr>
            </tbody>
            </table>
            </center>  
    </div>

  </div>
<script>
  document.addEventListener('DOMContentLoaded', (e) => {
    e.preventDefault();
  const ctr1 = document.getElementById('ctr1');
  const ctr2 = document.getElementById('ctr2');
  const edit = document.getElementById('edit');
  ctr2.style.display = 'none';
  edit.addEventListener('click', (e) => {
    e.preventDefault();
    ctr1.style.display = 'none';
    ctr2.style.display = 'block';
  });

  const cetak = document.getElementById('cetakan');
  cetak.addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('cetak').classList.remove('hidden');
    let printContents = document.getElementById("cetak").innerHTML;
    let originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;

    window.onafterprint = () => {
      document.getElementById('cetak').classList.add('hidden');
    };

    window.onbeforeprint = () => {
      document.getElementById('cetak').classList.add('hidden');
    };

  });
  

  });
</script>
</body>
</html>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NGB9XqFIl/+WnYW//+XCeU8v+/yzK+q7U8J5/AaA5HmPp+QqGkT/o/NvQxG/H50w" crossorigin="anonymous"></script>
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

    <div
      id="default-carousel"
      class="relative w-full mt-14"
      data-carousel="slide"
    >
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="component/gmbr1.jpeg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="hero web"
          />
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="component/gmbr2.jpeg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="hero web"
          />
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="component/gmbr3.jpeg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="hero web"
          />
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="component/gmbr4.jpg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="hero web"
          />
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img
            src="component/gmbr5.jpg"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
            alt="hero web"
          />
        </div>
      </div>
      <!-- Slider indicators -->
      <div
        class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse"
      >
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="true"
          aria-label="Slide 1"
          data-carousel-slide-to="0"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 2"
          data-carousel-slide-to="1"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 3"
          data-carousel-slide-to="2"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 4"
          data-carousel-slide-to="3"
        ></button>
        <button
          type="button"
          class="w-3 h-3 rounded-full"
          aria-current="false"
          aria-label="Slide 5"
          data-carousel-slide-to="4"
        ></button>
      </div>
    </div>

    <div class="container relative mx-auto">
      <center>
        <div class="judul mt-6 mb-6">
          <h2 class="text-2xl font-bold">INVOICE PENGIRIMAN</h2>
          <p class="font-semibold text-gray-700">
            data yang telah dikirim tidak dapat diubah!
          </p>
        </div>
        
        <div id="produk" class="mt-4 mb-4 px-2">
          <table cellspacing="0" class="table-auto border-separate border-spacing-2 border border-blue-700">
            <thead class="bg-blue-700 text-white">
              <tr>
                <th width="200px" class="border-spacing-2 border border-white p-2">Nama Produk</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">jumlah</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Jumlah Harga</th>
              </tr>
            </thead>
            <tbody id="daftar-keranjang" class="text-center font-semibold text-gray-900"></tbody>
            <tbody class="font-semibold text-gray-700">
              <tr>
                <td colspan="2" class="border-spacing-2 border border-blue-700 p-2">Jumlah Harga :</td>
                <td class="border-spacing-2 border border-blue-700 p-2 text-center"><span id="total-harganya">Rp 0.00</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </center>
      
      <div class="keter mt-8 mb-8">
        <div class="card max-w-lg mx-auto rounded-lg shadow bg-zinc-300 p-8">
          <div id="cetak">
            <div class="judul1 mt-6 mb-6">
            <h2 class="font-bold text-gray-900 text-2xl">
              Data Invoice
              <hr>
            </h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Nama Anda : <span id="nama" class="font-semibold text-gray-900"></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Email Anda : <span id="email" class="font-semibold text-gray-900"></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Nomor Telepon : <span id="nomor" class="font-semibold text-gray-900"></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Alamat Anda : <span id="alamat" class="font-semibold text-gray-900"></span></h2>
            </div>
            <div class="mb-5">
                <h2 class="font-semibold text-blue-700">Kode Pos : <span id="kodepos" class="font-semibold text-gray-900"></span></h2>
            </div>
            <div class="mb-5">
              <h2 class="font-semibold text-blue-700">Jumlah Harga : <span id="harganya" class="font-semibold text-gray-900"></span></h2>
            </div>
            <div class="mb-5">
              <h2 class="font-semibold text-blue-700">Jenis Ongkir : <span id="ongkir" class="font-semibold text-gray-900"></span></h2>
            </div>

            <p class="text-justify text-gray-700 font-semibold"><span class="text-blue-700">*</span>silahkan scan qris dibawah ini untuk membayar jumlah harga serta ongkir sesuai pesanan anda, pesanan akan segera diproses apabila pembayaran anda sudah valid.</p>

            <img src="component/qr1.png" width="200px" class="mt-4 mx-auto shadow-lg" alt="qris kami">

          </div>
            
            <button id="simpan" class="mt-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">
                konfirmasi
            </button>
        </div>
      </div>
      
    </div>
    <!-- footer -->
    <footer class="bg-white">
      <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <h2 class="self-center text-2xl font-bold whitespace-nowrap">
              Abid iShop <i class="fa-solid fa-cart-shopping text-blue-700"></i>
            </h2>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">
                Contact Me
              </h2>
              <ul class="text-gray-500 font-medium">
                <li class="mb-4">
                  <a mailto="mr.zero7579@gmail.com" class="hover:underline"
                    >Email</a
                  >
                </li>
                <li>
                  <a href="https://www.instagram.com/afhxyy0_/" class="hover:underline"
                    >Instagram</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">
                Follow us
              </h2>
              <ul class="text-gray-500 font-medium">
                <li class="mb-4">
                  <a
                    href="https://github.com/zero-termux/"
                    class="hover:underline"
                    >Github</a
                  >
                </li>
                <li>
                  <a
                    href="https://www.linkedin.com/in/m-abid-falih-08a4952aa?trk=contact-info"
                    class="hover:underline"
                    >Linked</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">
                Admin Center
              </h2>
              <ul class="text-gray-500 font-medium">
                <li class="mb-4">
                  <a href="admin.php" class="hover:underline">Admin Login</a>
                </li>
                <li>
                  <a href="http://wa.me/+6287850730276" class="hover:underline">Chat Admin</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center"
            >© 2024
            <a href="https:/abidflh.my.id" class="hover:underline">AbidShop™</a
            >. All Rights Reserved.
          </span>
        </div>
      </div>
    </footer>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (e) => {
e.preventDefault();

function tampilkanKeranjang() {
  const keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];
   const daftarKeranjang = document.getElementById("daftar-keranjang");
  let totalHarga = 0;

  keranjang.forEach(produk => {
    const produkItem = document.createElement('tr');
    produkItem.innerHTML = `
   <td class="border-spacing-2 border border-blue-700 p-2">${produk.namaProduk}</td>
   <td class="border-spacing-2 border border-blue-700 p-2">(${produk.jumlahKlik})</td>
   <td class="border-spacing-2 border border-blue-700 p-2">Rp.${produk.hargaProduk}jt</td>`;
    daftarKeranjang.appendChild(produkItem);

    // Hitung total harga
    totalHarga += produk.hargaProduk;
  });

  // Tampilkan total harga
  const total = document.getElementById("total-harganya").innerHTML = `Rp.${totalHarga}jt`;
  document.getElementById('harganya').innerText = `Rp.${totalHarga}jt`;
}

// Jalankan fungsi tampilkanKeranjang untuk pertama kali
tampilkanKeranjang();

// Mengambil data pengiriman dari local storage
const dataPengiriman = JSON.parse(localStorage.getItem('dataPengiriman'));

// Memasukkan data pengiriman ke dalam elemen-elemen dengan ID yang sesuai
document.getElementById('nama').innerText = dataPengiriman.nama;
document.getElementById('email').innerText = dataPengiriman.email;
document.getElementById('nomor').innerText = dataPengiriman.telepon;
document.getElementById('alamat').innerText = dataPengiriman.alamat;
document.getElementById('kodepos').innerText = dataPengiriman.kodepos;
document.getElementById('ongkir').innerText = dataPengiriman.ongkir;

document.getElementById('simpan').addEventListener('click', function simpanData(e) {
  e.preventDefault();

  // Mengambil data pengiriman dari local storage
  const dataPengiriman = JSON.parse(localStorage.getItem('dataPengiriman'));

  // Mengambil data keranjang dari local storage
  const keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];

  let totalHarga = 0;
  const barangData = [];

  keranjang.forEach(produk => {
    totalHarga += produk.hargaProduk;
    barangData.push({
      nama_barang: produk.namaProduk,
      jumlah_barang: produk.jumlahKlik
    });
  });

  let printContents = document.getElementById("cetak").innerHTML;
    let originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;

  // Mengirim data ke server menggunakan Fetch API
  fetch('simpan_data_.php', {
    method: 'POST',
    body: new URLSearchParams({
      nama: dataPengiriman.nama,
      email: dataPengiriman.email,
      nomor: dataPengiriman.telepon,
      alamat: dataPengiriman.alamat,
      kode_pos: dataPengiriman.kodepos,
      ongkir: dataPengiriman.ongkir,
      barang_data: JSON.stringify(barangData),
      total_harga: totalHarga
    })
  })
  .then(response => {
    if (response.ok) {
      // Menampilkan alert
      alert('checkout anda berhasil');

      // Menghapus data pengiriman dari local storage
      localStorage.removeItem('keranjang');
      localStorage.removeItem('dataPengiriman');

      // Kembali ke halaman index.php
      window.location.href = 'index.php';
    } else {
      alert('checkout anda gagal');
    }
  });
});

});
    </script>
  </body>
</html>
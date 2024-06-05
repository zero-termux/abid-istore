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
}

// Jalankan fungsi tampilkanKeranjang untuk pertama kali
tampilkanKeranjang();

  const form = document.querySelector('form');

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    const nama = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const telepon = document.getElementById('telepon').value;
    const alamat = document.getElementById('alamat').value;
    const kodepos = document.getElementById('kodepos').value;
    const ongkir = document.getElementById('ongkir').value;

    const dataPengiriman = {
      nama: nama,
      email: email,
      telepon: telepon,
      alamat: alamat,
      kodepos: kodepos,
      ongkir: ongkir,
    };

    // Menyimpan data pengiriman ke dalam local storage
    localStorage.setItem('dataPengiriman', JSON.stringify(dataPengiriman));

    // Redirect ke halaman invoice.php
    window.location.href = "invoice.php";
  });
  
});

document.addEventListener("DOMContentLoaded", (e) =>{
  e.preventDefault();

  const kategoriAll = document.getElementById("all");
  const kategoriLaptop = document.getElementById("laptop");
  const kategoriHp = document.getElementById("hp");
  const kategoriIwatch = document.getElementById("iwatch");
  kategoriAll.addEventListener("click", (e) => {
    filterKategori("all");
  });
  kategoriLaptop.addEventListener("click", (e) => {
    filterKategori("laptop");
  });
  kategoriHp.addEventListener("click", (e) => {
    filterKategori("hp");
  });
  kategoriIwatch.addEventListener("click", (e) => {
    filterKategori("iwatch");
  });

  function filterKategori(kategori) {
    const produk = document.querySelectorAll(".product");
    for (const produkItem of produk) {
      const kategoriProduk = produkItem.getAttribute("data-kategori");
      if (kategori === "all" || kategori === kategoriProduk) {
        produkItem.style.display = "block";
      } else {
        produkItem.style.display = "none";
      }
    }
  }
  
//bagian cari
const searchInput = document.getElementById('search-navbar');
const products = document.querySelectorAll('.product');
const noItem = document.getElementById('noItem');

searchInput.addEventListener('input', () => {
  const searchTerm = searchInput.value.toLowerCase();

  products.forEach((product) => {
    const productTitle = product.querySelector('h5').innerText.toLowerCase();

    if (productTitle.includes(searchTerm)) {
      product.style.display = 'block';
      noItem.classList.add('hidden');
    } else {
      product.style.display = 'none';
      noItem.classList.remove('hidden');
    }
  });
});

// Event listener untuk tombol tambahKeKeranjang
document.querySelectorAll('.tambahKeKeranjang').forEach(button => {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    const namaProduk = this.closest('.product').dataset.namaProduk;
    const hargaProduk = parseInt(this.closest('.product').dataset.hargaProduk);
    let jumlahKlik = parseInt(this.closest('.product').dataset.jumlahKlik);

alert(`${namaProduk} telah ditambahkan ke keranjang`);

    // Cek apakah produk sudah ada di keranjang
    let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];
    const index = keranjang.findIndex(produk => produk.namaProduk === namaProduk);

    if (index !== -1) {
      // Jika produk sudah ada di keranjang, tambah jumlah pemesanannya dan harga produk
      keranjang[index].jumlahKlik += jumlahKlik;
      keranjang[index].hargaProduk = keranjang[index].hargaProduk * keranjang[index].jumlahKlik;
    } else {
      // Jika produk belum ada di keranjang, tambahkan ke keranjang
      keranjang.push({namaProduk, hargaProduk: hargaProduk * jumlahKlik, jumlahKlik});
    }

    // Simpan keranjang ke local storage
    localStorage.setItem('keranjang', JSON.stringify(keranjang));

    // Tampilkan produk yang telah ditambahkan ke keranjang
    tampilkanKeranjang();
  });
});

// Fungsi untuk menampilkan produk yang telah ditambahkan ke keranjang
function tampilkanKeranjang() {
  const keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];
  const isiKeranjang = document.getElementById('isiKeranjang');
  isiKeranjang.innerHTML = '';
  let totalHarga = 0;

  keranjang.forEach(produk => {
    const li = document.createElement('li');
    li.innerHTML = `• ${produk.namaProduk} - <span class="text-blue-700">Rp.${produk.hargaProduk}jt</span> - (${produk.jumlahKlik}) <br>`;
    isiKeranjang.appendChild(li);
    li.classList.add('mb-2');

    // Hitung total harga
    totalHarga += produk.hargaProduk;
  });

  // Tampilkan total harga
  const total = document.getElementById('total').innerHTML = `Total Harga : <span class="text-blue-700">Rp.${totalHarga}jt</span>`;
}

// Jalankan fungsi tampilkanKeranjang untuk pertama kali
tampilkanKeranjang();

});

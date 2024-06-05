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
        <a href="index.php">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"><i class="fa-solid fa-arrow-left"></i></button>
        </a>
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
          <h2 class="text-2xl font-bold">FORMULIR PENGIRIMAN</h2>
          <p class="font-semibold text-gray-700">
            harap isi data anda dengan benar!
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
      
      <!-- bagian form -->
      <div class="form mt-8 mb-8 px-6">
        <form class="max-w-lg mx-auto">
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
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="@gmail.com"
              required
            />
          </div>
          <div class="mb-5">
            <label
              for="telepon"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Nomor Telepon (disrankan sama dengan nomor e-wallet anda) :</label
            >
            <input
              type="tel"
              id="telepon"
              name="telepon"
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
            ></textarea>
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
              name="kodepos"
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
            <select
              id="ongkir"
              name="ongkir"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            >
              <option>Reguler( 11.000 )</option>
              <option>Hemat( 8.000 )</option>
              <option>Gesit( 15.000 )</option>
            </select>
          </div>
          <input
            type="submit"
            name="daftar"
            value="checkout"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" />
        </form>
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
    <script src="./main2.js"></script>
  </body>
</html>

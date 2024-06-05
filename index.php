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
    <nav class="bg-white border-gray-200 fixed top-0 left-0 w-full z-40">
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <h2 class="self-center text-2xl font-bold whitespace-nowrap">
          Abid iShop <i class="fa-solid fa-cart-shopping text-blue-700"></i>
        </h2>

        <div class="flex md:order-2">
          <button
            type="button"
            data-collapse-toggle="navbar-search"
            aria-controls="navbar-search"
            aria-expanded="false"
            class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 me-1"
          >
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
              />
            </svg>
            <span class="sr-only">Search</span>
          </button>
          <div class="relative hidden md:block">
            <div
              class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
            >
              <svg
                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 20"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
              </svg>
              <span class="sr-only">Search icon</span>
            </div>
            <input
              type="text"
              id="search-navbar"
              class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Search..."
            />
          </div>
          <button
            data-collapse-toggle="navbar-search"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-search"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
        </div>
        <div
          class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
          id="navbar-search"
        >
          <div class="relative mt-3 md:hidden">
            <div
              class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
            >
              <svg
                class="w-4 h-4 text-gray-500 dark:text-gray-400"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 20"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
              </svg>
            </div>
            <input
              type="text"
              id="search-navbar"
              class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Search..."
            />
          </div>
          <ul
            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white"
          >
            <li>
              <a
                href="#default-carousel"
                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                aria-current="page"
                >Beranda</a
              >
            </li>
            <li>
              <a
                href="#produk"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
                >Produk</a
              >
            </li>
            <li>
              <a
                href="#drawer-example"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
                type="button"
                data-drawer-target="drawer-example"
                data-drawer-show="drawer-example"
                aria-controls="drawer-example"
                >Keranjang</a
              >
            </li>
            <li>
              <a
                href="payment.php"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0"
                type="button"
                data-drawer-target="drawer-example"
                data-drawer-show="drawer-example"
                aria-controls="drawer-example"
                >Payment</a
              >
            </li>
          </ul>
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

    <center>
      <div class="container relative mx-auto">
        <div class="nav2 sticky top-16 z-50 px-4 py-6">
          <div class="filter inline-flex rounded-md shadow-sm" role="group">
            <button
              id="all"
              type="button"
              class="inline-flex items-center flex-wrap px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700"
            >
              <center>
                <i class="fa-solid fa-grip text-blue-700 text-2xl"></i>
                <br />
                <span class="block text-sm font-medium text-slate-700"
                  >Semua</span
                >
              </center>
            </button>
            <button
              id="laptop"
              type="button"
              class="inline-flex items-center flex-wrap px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700"
            >
              <center>
                <i class="fa-solid fa-laptop text-blue-700 text-2xl"></i>
                <br />
                <span class="block text-sm font-medium text-slate-700"
                  >Macbook</span
                >
              </center>
            </button>
            <button
              id="hp"
              type="button"
              class="inline-flex items-center flex-wrap px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700"
            >
              <center>
                <i class="fa-solid fa-mobile text-blue-700 text-2xl"></i>
                <br />
                <span class="block text-sm font-medium text-slate-700"
                  >iPhone</span
                >
              </center>
            </button>
            <button
              id="iwatch"
              type="button"
              class="inline-flex items-center flex-wrap px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700"
            >
              <center>
                <i class="fa-solid fa-clock text-blue-700 text-2xl"></i>
                <br />
                <span class="block text-sm font-medium text-slate-700"
                  >iWatch</span
                >
              </center>
            </button>
          </div>
        </div>

        <div class="keter px-4 mb-10">
          <div
            id="accordion-color"
            data-accordion="collapse"
            data-active-classes="bg-blue-100"
          >
            <h2 id="accordion-color-heading-1">
              <button
                type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200"
                data-accordion-target="#accordion-color-body-1"
                aria-expanded="true"
                aria-controls="accordion-color-body-1"
              >
                <span>Kenapa harus di abid shop ?</span>
                <svg
                  data-accordion-icon
                  class="w-3 h-3 rotate-180 shrink-0"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 10 6"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5 5 1 1 5"
                  />
                </svg>
              </button>
            </h2>
            <div
              id="accordion-color-body-1"
              class="hidden"
              aria-labelledby="accordion-color-heading-1"
            >
              <div class="p-5 border border-b-0 border-gray-200">
                <p class="mb-2 text-gray-500">
                  Karena hanya di toko kami lah menyediakan iphone, macbook dan
                  iwacth ibox dengan harga yang terjangkau dan kualitas yang
                  tidak perlu diragukan.
                </p>
              </div>
            </div>
            <h2 id="accordion-color-heading-2">
              <button
                type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200"
                data-accordion-target="#accordion-color-body-2"
                aria-expanded="false"
                aria-controls="accordion-color-body-2"
              >
                <span>Apakah abid shop terpercaya ?</span>
                <svg
                  data-accordion-icon
                  class="w-3 h-3 rotate-180 shrink-0"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 10 6"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5 5 1 1 5"
                  />
                </svg>
              </button>
            </h2>
            <div
              id="accordion-color-body-2"
              class="hidden"
              aria-labelledby="accordion-color-heading-2"
            >
              <div class="p-5 border border-b-0 border-gray-200">
                <p class="mb-2 text-gray-500">
                  Anda tidak perlu khawatir kepada kami karena dengan 200+
                  produk terjual dan telah sampai di tangan customer dengan baik
                  tentu saja kami terpercaya.
                </p>
              </div>
            </div>
            <h2 id="accordion-color-heading-3">
              <button
                type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200"
                data-accordion-target="#accordion-color-body-3"
                aria-expanded="false"
                aria-controls="accordion-color-body-3"
              >
                <span>Apakah mudah berbelanja disini ?</span>
                <svg
                  data-accordion-icon
                  class="w-3 h-3 rotate-180 shrink-0"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 10 6"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5 5 1 1 5"
                  />
                </svg>
              </button>
            </h2>
            <div
              id="accordion-color-body-3"
              class="hidden"
              aria-labelledby="accordion-color-heading-3"
            >
              <div class="p-5 border border-t-0 border-gray-200">
                <p class="mb-2 text-gray-500">
                  Berbelanja di abid shop sangat lah mudah selain di website ini
                  kami juga memiliki 10 cabang berbeda di setiap kota dan kami
                  juga menyediakan berbagai macam jenis pembayaran untuk anda.
                </p>
              </div>
            </div>
          </div>
        </div>

        <center>
          <div id="produk" class="mx-auto p-6">
            <h2 class="judul shadow-sm text-3xl font-bold mb-6 text-blue-700">
              Produk Kami :
            </h2>
            <div
              class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
            >
              <!-- Product Card 1 -->
              <div
                id="1"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="iwatch" data-nama-produk="iwatch Series 7" data-harga-produk="3" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/iw7.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                    <span class="namaProduk">Apple Watch Series 7</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal1"
                      data-modal-toggle="modal1"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp<span class="harga">3</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 2 -->
              <div
                id="2"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="iwatch" data-nama-produk="iwatch Series 8" data-harga-produk="6" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/iw8.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">Apple Watch Series 8</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal2"
                      data-modal-toggle="modal2"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700">Rp.<span class="harga">6</span>jt</span>
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 3 -->
              <div
                id="3"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="iwatch" data-nama-produk="iwatch Series Ultra" data-harga-produk="8" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/iwU.jpeg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">Apple Watch Series Ultra</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal3"
                      data-modal-toggle="modal3"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">8</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 4 -->
              <div
                id="4"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="hp" data-nama-produk="iPhone 11 Series" data-harga-produk="4" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ip11.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">iPhone 11 Series</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal4"
                      data-modal-toggle="modal4"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">4</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 5 -->
              <div
                id="5"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="hp" data-nama-produk="iPhone 12 Series" data-harga-produk="8" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ip12.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">iPhone 12 Series</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal5"
                      data-modal-toggle="modal5"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700">Rp.<span class="harga">8</span>jt</span>
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 6 -->
              <div
                id="6"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="hp" data-nama-produk="iPhone 13 Series" data-harga-produk="11" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ip13.jpeg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">iPhone 13 Series</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal6"
                      data-modal-toggle="modal6"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">11</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 7 -->
              <div
                id="7"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="hp" data-nama-produk="iPhone 14 Series" data-harga-produk="16" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ip14.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">iPhone 14 Series</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal7"
                      data-modal-toggle="modal7"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">16</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 8 -->
              <div
                id="8"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="hp" data-nama-produk="iPhone 15 Series" data-harga-produk="18" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ip15.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">iPhone 15 Series</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal8"
                      data-modal-toggle="modal8"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">18</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 9 -->
              <div
                id="9"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="laptop" data-nama-produk="MacBoook Air 13'" data-harga-produk="12" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ma13.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">MacBook Air 13"</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal9"
                      data-modal-toggle="modal9"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">12</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 10 -->
              <div
                id="10"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="laptop" data-nama-produk="MacBoook Air 15'" data-harga-produk="17" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/ma15.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">MacBook Air 15"</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal10"
                      data-modal-toggle="modal10"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">17</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 11 -->
              <div
                id="11"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="laptop" data-nama-produk="MacBoook m2 Pro" data-harga-produk="25" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/m2.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">MacBook m2 Pro</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal11"
                      data-modal-toggle="modal11"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">25</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>

              <!-- Product Card 12 -->
              <div
                id="12"
                class="product w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow"
                data-kategori="laptop" data-nama-produk="MacBoook m3 Pro" data-harga-produk="31" data-jumlah-klik="1"
              >
                <img
                  class="p-8 rounded-t-lg"
                  src="produk/m3.jpg"
                  alt="product image"
                />
                <div class="px-5 pb-5">
                  <h5
                    class="text-xl font-semibold tracking-tight text-gray-900"
                  >
                  <span class="namaProduk">MacBoook m3 Pro</span>
                    <i
                      class="fa-solid fa-eye hover:text-blue-700"
                      data-modal-target="modal12"
                      data-modal-toggle="modal12"
                    ></i>
                  </h5>
                  <div class="flex items-center justify-between mt-4">
                    <span class="text-2xl font-bold text-blue-700"
                      >Rp.<span class="harga">31</span>jt</span
                    >
                    <a
                      href="#"
                      class="tambahKeKeranjang text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                      ><i class="fa-solid fa-cart-arrow-down"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </center>

      <div id="noItem" class="hidden relative p-4 mx-auto">
        <img src="component/noItem.png" width="300px" alt="noItem" />
        <br>
        <h2 class="text-gray-500 font-medium">tidak ada barang yang anda cari</h2>
      </div>

        <div class="rating mt-8 mb-6">
          <div class="flex items-center justify-center">
            <svg
              class="w-4 h-4 text-yellow-300 me-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-4 h-4 text-yellow-300 me-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-4 h-4 text-yellow-300 me-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-4 h-4 text-yellow-300 me-1"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <svg
              class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 22 20"
            >
              <path
                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
              />
            </svg>
            <p
              class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400"
            >
              4.95
            </p>
            <p
              class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400"
            >
              dari
            </p>
            <p
              class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400"
            >
              236
            </p>
          </div>
        </div>
      </div>
    </center>
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

    <!-- awal keranjang -->
    <div id="pembungkus" class="fixed bottom-4 right-2">
      <button
        type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2.5 me-2 mb-2 focus:outline-none"
      >
        <i
          class="fa-solid fa-bag-shopping text-2xl"
          type="button"
          data-drawer-target="drawer-example"
          data-drawer-show="drawer-example"
          aria-controls="drawer-example"
        ></i>
      </button>
    </div>

    <!-- drawer component -->
    <div
      id="drawer-example"
      class="fixed top-0 left-0 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 z-50"
      tabindex="-1"
      aria-labelledby="drawer-label"
    >
      <h2
        id="drawer-label"
        class="inline-flex items-center mb-4 text-2xl font-semibold text-gray-800"
      >
        Keranjang <i class="fa-solid fa-bag-shopping ms-2 text-blue-700"></i>
      </h2>

      <button
        type="button"
        data-drawer-hide="drawer-example"
        aria-controls="drawer-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center"
      >
        <svg
          class="w-3 h-3"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 14 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
          />
        </svg>
        <span class="sr-only">Close menu</span>
      </button>

      <div class="p-2 mt-4 mb-4">
        <ul id="isiKeranjang" class="font-semibold"></ul>
        <h4 id="total" class="text-gray-800 font-semibold text-lg text-center mt-4 border border-blue-700 p-2 rounded-lg">
        </h4>
      </div>
      <a href="checkout.php">
      <button
        type="button"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded text-sm px-4 py-2.5 me-2 mb-2 dark:bg-blue-600 focus:outline-none"
      >
        CheckOut
      </button>
    </a>
    </div>
    <!-- akhir keranjang -->

    <!-- modal1 -->
    <div
      id="modal1"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal1"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Apple Watch Series 7 :</strong> Desain elegan dengan layar
              Retina Always-On besar. Pemantauan kesehatan dan kebugaran
              canggih, termasuk deteksi jatuh dan pemantauan detak jantung.
              Kustomisasi pelacakan aktivitas dan aplikasi beragam. Daya tahan
              baterai yang ditingkatkan. Gaya dan kecanggihan dalam satu
              perangkat.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal2 -->
    <div
      id="modal2"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal2"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Apple Watch Series 8 :</strong> Apple Watch Series 8
              menggabungkan kecanggihan dan estetika, menampilkan layar Retina
              Always-On yang lebih besar untuk pengalaman visual yang memukau.
              Pemantauan kesehatan ditingkatkan dengan teknologi inovatif,
              termasuk deteksi jatuh dan pemantauan detak jantung yang akurat.
              Kustomisasi pelacakan aktivitas dan beragam aplikasi membuatnya
              menjadi mitra kesehatan dan kebugaran terdepan. Daya tahan baterai
              yang luar biasa memastikan keterhubungan tanpa henti.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal3 -->
    <div
      id="modal3"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal3"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Apple Watch Series Ultra :</strong> Apple Watch Series
              Ultra mempersembahkan desain futuristik dan teknologi terdepan.
              Layar yang memikat dan kemampuan premium membedakan seri ini.
              Pemantauan kesehatan tingkat lanjut dan integrasi aplikasi terkini
              membuatnya menjadi pilihan sempurna bagi mereka yang menghargai
              gaya hidup modern.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal4 -->
    <div
      id="modal4"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal4"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>iPhone 11 Series :</strong> iPhone 11 menghadirkan
              teknologi kamera canggih, kinerja handal, dan desain premium.
              Layar Liquid Retina memberikan visual yang brilian, sementara daya
              baterai yang ditingkatkan menjadikannya pilihan terbaik untuk
              penggunaan sehari-hari.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal5 -->
    <div
      id="modal5"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal5"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>iPhone 12 Series :</strong> Dengan kecepatan 5G, layar
              Super Retina XDR, dan desain yang elegan, iPhone 12 adalah simbol
              kecanggihan. Teknologi terdepan dan performa tinggi membuatnya
              menjadi pilihan utama bagi pencinta teknologi.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal6 -->
    <div
      id="modal6"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal6"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>iPhone Series 13 :</strong> iPhone 13 membawa inovasi ke
              tingkat berikutnya dengan teknologi kamera yang luar biasa,
              kinerja canggih, dan desain yang memikat. Pengalaman smartphone
              tingkat lanjut dengan daya tahan baterai yang andal.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal7 -->
    <div
      id="modal7"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal7"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>iPhone Series 14 :</strong> iPhone 14 mengesankan dengan
              desain revolusioner, teknologi terkini, dan performa luar biasa.
              Mewakili puncak inovasi, menjadi pilihan yang memukau bagi mereka
              yang menghargai keunggulan.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal8 -->
    <div
      id="modal8"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal8"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>iPhone Series 15 :</strong> Merupakan puncak inovasi,
              iPhone 15 memadukan kecanggihan tingkat tinggi, pengalaman
              pengguna yang unggul, dan desain yang futuristik. Membawa
              smartphone ke dimensi baru dengan fitur-fitur yang mengesankan.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal9 -->
    <div
      id="modal9"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal9"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Macbook Air 13" :</strong> MacBook Air 13" menawarkan
              harmoni antara keunggulan desain dan kinerja tinggi. Dengan bodi
              ringan dan tipis, laptop ini memberikan pengalaman komputasi yang
              efisien. Layar berkualitas tinggi dan daya tahan baterai yang
              impresif membuatnya ideal untuk produktivitas sehari-hari.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal10 -->
    <div
      id="modal10"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal10"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Macbook Air 15" :</strong> Seri MacBook Air 15" memperluas
              pengalaman komputasi dengan layar yang lebih besar, memberikan
              kejernihan visual yang luar biasa. Performa tinggi dan daya tahan
              baterai yang solid menjadikannya solusi yang sempurna untuk
              tugas-tugas berat dan multitasking.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal11 -->
    <div
      id="modal11"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal11"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Macbook m2 Pro :</strong> Menampilkan chip M2 Pro terbaru,
              MacBook ini menawarkan kecepatan dan kekuatan pemrosesan yang
              mengesankan. Desain yang ramping dan layar berkualitas tinggi
              menciptakan kombinasi optimal antara kinerja tinggi dan
              portabilitas.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- modal12 -->
    <div
      id="modal12"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
          <!-- Modal header -->
          <div
            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
          >
            <h3 class="text-xl font-semibold text-gray-900">
              Keterangan Produk
            </h3>
            <button
              type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
              data-modal-hide="modal12"
            >
              <svg
                class="w-3 h-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 14"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                />
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500">
              <strong>Macbook m3 Pro :</strong> Desain elegan dan performa
              handal menjadi ciri khas MacBook M3 Pro. Chip terbaru dan desain
              ringkas membuatnya ideal untuk penggunaan sehari-hari, memberikan
              kombinasi yang sempurna antara kekuatan dan mobilitas.
            </p>
          </div>
        </div>
      </div>
    </div>
  

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="./main.js"></script>
  </body>
</html>
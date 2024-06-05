<?php include ("config.php"); ?>

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
    
<div id="ctr1">
  <center>
    <div class="judul mt-6 mb-6">
          <h2 class="text-2xl font-bold">LOGIN SEBAGAI ADMIN</h2>
          <p class="font-semibold text-gray-700">
            khusus admin!
          </p>
        </div>
  </center>
  <div class="form mt-8 mb-8 px-6">
    <form class="max-w-lg mx-auto">
     <div class="mb-5">
            <label
              for="usn"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Username Admin :</label
            >
            <input
              type="text"
              id="usn"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="username"
              required
            />
          </div> 
     <div class="mb-5">
            <label
              for="pw"
              class="block mb-2 text-sm font-medium text-gray-900"
              >Password Admin :</label
            >
            <input
              type="password"
              id="pw"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="password"
              required
            />
          </div> 
      <button
            type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
          >
            Submit
          </button>
    </form>
  </div>
</div>  

<div id="ctr2">
  <center>
    <div class="judul mt-6 mb-6">
          <h2 class="text-2xl font-bold">DAFTAR PEMESAN</h2>
          <p class="font-semibold text-gray-700">
            harap untuk cek setiap pemesan
          </p>
    </div>

    <div class="tabel">
      <a class="text-blue-700" href="index.php">[+] Tambah Baru</a>
        <table cellspacing="0" class="table-auto border-separate border-spacing-2 border border-blue-700 mt-6 mb-6">
            <thead class="bg-blue-700 text-white">
              <tr>
                <th width="200px" class="border-spacing-2 border border-white p-2">Id Order</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Nama Pemesan</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Nomor Pemesan</th>
                <th width="200px" class="border-spacing-2 border border-white p-2">Tindakan</th>
              </tr>
            </thead>
            <tbody class="text-center font-semibold text-gray-900">
              <?php
                $sql = "SELECT * FROM daftar_pemesan";
                $query = mysqli_query($db, $sql);
                while ($client = mysqli_fetch_array($query)) {
                  $uniqueId = substr(md5($client['id']), 0, 8);
              echo "<tr>";
              echo "<td class='border-spacing-2 border border-blue-700 p-1 text-blue-700'>". $uniqueId ."</td>";
              echo "<td class='border-spacing-2 border border-blue-700 p-1 text-blue-700'>".$client ['nama']."</td>";
              echo "<td class='border-spacing-2 border border-blue-700 p-1 text-blue-700'>".$client ['nomor']."</td>";
              echo "<td class='border-spacing-2 border border-blue-700 p-1 text-blue-700 hover:text-blue-900'>"; 
              echo "<a href='detail.php?id=".$client ['id']."'>Detail</a> | ";
              echo "<a href='hapus.php?id=".$client ['id']."'>Hapus</a>";
              echo "</td>";
              echo "</tr>";
              }
              ?>
            </tbody>
          </table>
    </div>
    <p class="mb-4">total: <?php echo mysqli_num_rows($query) ?></p>
  </center>
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
                  <a href="https://flowbite.com/" class="hover:underline"
                    >Email</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline"
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
                    href="https://github.com/themesberg/flowbite"
                    class="hover:underline"
                    >Github</a
                  >
                </li>
                <li>
                  <a
                    href="https://discord.gg/4eeurUVvTy"
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
                  <a href="#" id="logout" class="hover:underline">Logout Admin</a>
                </li>
                <li>
                  <a href="#" class="hover:underline">Chat Admin</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center"
            >© 2024
            <a href="https://flowbite.com/" class="hover:underline">AbidShop™</a
            >. All Rights Reserved.
          </span>
        </div>
      </div>
    </footer>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.querySelector("#ctr1 form");
  const logoutButton = document.getElementById("logout");
  const ctr1 = document.getElementById("ctr1");
  const ctr2 = document.getElementById("ctr2");
  ctr2.style.display = 'none';

  // Function to handle login form submission
  function handleLogin(event) {
    event.preventDefault();
    const enteredUsername = document.getElementById("usn").value;
    const enteredPassword = document.getElementById("pw").value;

    if (enteredUsername === "AdminAbid" && enteredPassword === "qwerty123") {
      // Replace alert with a more modern approach
      notify("Login berhasil");
      ctr1.style.display = "none";
      ctr2.style.display = "block";
      localStorage.setItem("isLoggedIn", "true");
    } else {
      notify("Login gagal");
    }
  }

  // Function to handle logout button click
  function handleLogout(event) {
    event.preventDefault();
    const confirmLogout = confirm("Apakah Anda yakin ingin logout?");

    if (confirmLogout) {
      localStorage.removeItem("isLoggedIn");
      window.location.href = "index.php";
      notify("Logout berhasil");
    } else {
      notify("Logout gagal");
    }
  }

  // Add event listeners
  loginForm.addEventListener("submit", handleLogin);
  logoutButton.addEventListener("click", handleLogout);

  // Check if user is logged in
  const isLoggedIn = localStorage.getItem("isLoggedIn");
  if (isLoggedIn) {
    ctr1.style.display = "none";
    ctr2.style.display = "block";
  }
});

// Simple notification function
function notify(message) {
  // You can replace this with a more advanced notification system
  alert(message);
}
</script>
  </body>
</html>
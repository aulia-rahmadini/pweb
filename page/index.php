<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <title>Dashboard</title>
    <style>
      body {
        font-family: "League Spartan", sans-serif;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <nav class="bg-white">
      <div class="container mx-auto mb-1">
        <img
          src="../picts/logocloude.png"
          alt="logo"
          class="w-[120px] h-[120px] mx-auto"
        />
        <div class="w-fit mx-auto">
          <ul class="flex gap-[150px]">
            <li>
              <p>
                Dashboard
              </p>
            </li>
            <li>
              <p>|</p>
            </li>
            <li>
              <a href="http://localhost/pweb/page/treatment.html">Treatment</a>
            </li>
            <li>
              <p>|</p>
            </li>
            <li>
              <a href="http://localhost/pweb/page/skincare.html">Skincare</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <img src="../picts/dbpict1.jpg" alt="dashboard" class="mb-10" />

    <!-- Glow-Worthy Favorites! -->
     <div class="text-center mb-8">
      <p>
        <span class="text-2xl mx-auto">Glow-Worthy Favorites!<span/>
      </p>
    </div>
    <div class="p-4">
      <?php include 'glow-worthy-favorites.php'; ?>
    </div>

    <!-- Treatment-->
    <!-- Treatment Desc -->
    <div class="text-center mt-10">
      <p>
        <span class="text-2xl mx-auto">Best Seller Treatments! <span/>
      </p>
    </div>

    <div class="flex justify-center gap-4 p-4">
      <!-- Card 1 -->
      <div
        class="w-72 p-7 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl overflow-hidden"
      >
        <!-- Image -->
        <img
          class="h-40 w-full object-cover rounded-lg"
          src="../picts/dna-salmon.jpg"
          alt="DNA Salmon"
        />
        <div class="p-2">
          <!-- Heading -->
          <h2 class="font-semibold text-lg mb-2 text-center mt-1">
            DNA Salmon
          </h2>
          <!-- Description -->
          <p class="text-sm text-gray-600">
            Dilakukan dengan cara menyuntikkan serum atau ekstrak DNA Ikan
            Salmon...
          </p>
        </div>
        <!-- CTA -->
        <div class="m-2">
          <a
            role="button"
            href="http://localhost/pweb/page/treatment-sub.html"
            class="mt-4 text-black bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded-md flex justify-center"
          >
            Selengkapnya
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div
        class="w-72 p-7 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl overflow-hidden"
      >
        <!-- Image -->
        <img
          class="h-40 w-full object-cover rounded-lg"
          src="../picts/dna-salmon.jpg"
          alt="DNA Salmon"
        />
        <div class="p-2">
          <!-- Heading -->
          <h2 class="font-semibold text-lg mb-2 text-center mt-1">
            DNA Salmon
          </h2>
          <!-- Description -->
          <p class="text-sm text-gray-600">
            Dilakukan dengan cara menyuntikkan serum atau ekstrak DNA Ikan
            Salmon...
          </p>
        </div>
        <!-- CTA -->
        <div class="m-2">
          <a
            role="button"
            href="#"
            class="mt-4 text-black bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded-md flex justify-center"
          >
            Selengkapnya
          </a>
        </div>
      </div>
      <!-- Card 3 -->
      <div
        class="w-72 p-7 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl overflow-hidden"
      >
        <!-- Image -->
        <img
          class="h-40 w-full object-cover rounded-lg"
          src="../picts/dna-salmon.jpg"
          alt="DNA Salmon"
        />
        <div class="p-2">
          <!-- Heading -->
          <h2 class="font-semibold text-lg mb-2 text-center mt-1">
            DNA Salmon
          </h2>
          <!-- Description -->
          <p class="text-sm text-gray-600">
            Dilakukan dengan cara menyuntikkan serum atau ekstrak DNA Ikan
            Salmon...
          </p>
        </div>
        <!-- CTA -->
        <div class="m-2">
          <a
            role="button"
            href="#"
            class="mt-4 text-black bg-gray-200 hover:bg-gray-300 px-3 py-1 rounded-md flex justify-center"
          >
            Selengkapnya
          </a>
        </div>
      </div>
    </div>

    <!-- About Us -->
    <div class="container mx-auto py-10 px-6">
      <div
        class="bg-[#FFDFE9] flex flex-col grid grid-cols-2 gap-1 justify-center mr-7"
      >
        <div>
          <img src="../picts/about us.jpg" alt="about-us" />
        </div>
        <div class="max-w-3xl mx-auto p-6 text-gray-800">
          <h3 class="text-2xl font-semibold mb-2">Cloudé Beauty Clinic</h3>
          <p class="mt-5 text-base leading-relaxed">
            Cloudé Beauty Clinic adalah pusat kecantikan terpercaya selama lebih
            dari 10 tahun yang telah membantu lebih dari 1.500.000 perempuan
            menemukan kembali kepercayaan diri mereka. Dengan pendekatan yang
            ramah, hasil nyata, dan teknologi terkini, Cloudé hadir untuk
            menjawab kebutuhan Anda tanpa rasa khawatir terhadap hasil yang
            mengecewakan, efek samping, atau biaya yang berlebihan.
          </p>
          <ul class="mt-5 list-inside list-disc hover:list-disc">
            <li>
              Klinik kecantikan terpercaya dengan pengalaman lebih dari 15 tahun
            </li>
            <li>
              Telah membantu 1.500.000 perempuan mengatasi masalah kulit mereka
            </li>
            <li>Tim dokter berlisensi dan profesional</li>
            <li>Perawatan eksklusif yang sesuai kebutuhan</li>
            <li>Produk premium dengan formula terkini</li>
            <li>Didukung alat modern yang sesuai perkembangan teknologi</li>
          </ul>
          <h3 class="text-xl font-medium mt-5">Visi</h3>
          <p class="text-base leading-relaxed">
            Menjadi klinik kecantikan terdepan yang membawa kecantikan dan
            keberanian untuk setiap wanita melalui layanan dan produk terpercaya
            yang memberikan dampak positif di setiap aspek kehidupan.
          </p>
          <h3 class="text-xl font-medium mt-5">Misi</h3>
          <ul class="list-inside space-y-2 list-disc">
            <li>
              Menyediakan perawatan kulit yang aman, efektif, dan berkualitas
              tinggi untuk memenuhi kebutuhan unik setiap wanita.
            </li>
            <li>
              Mengutamakan kepercayaan, kenyamanan, dan kepuasan pelanggan
              melalui layanan yang sepenuh hati.
            </li>
            <li>
              Mendorong setiap wanita untuk bersinar dengan kepercayaan diri
              melalui inovasi produk dan layanan berkualitas.
            </li>
          </ul>
          <p class="font-medium mt-8">
            Cloud Aesthetic Clinic, di mana keindahan dan kepercayaan diri Anda
            adalah prioritas utama kami. ✨
          </p>
          <div class="mr-7">
          <a
            role="button"
            href="#"
            class="mt-5 text-black bg-[#ffff] hover:bg-[#FFBFD3] px-2 py-3 rounded-md flex justify-center"
          >
            Check Our Location
          </a>
        </div>
      </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="bg-[#FFBFD3] text-gray-800">
      <div class="container mx-auto py-14 px-6">
        <div class="grid grid-cols-4 gap-10 justify-items-center">
          <div>
            <a href="#dashboard">
              <img
                src="../picts/logos.png"
                alt="logo-footer"
                class="h-[60px] mb-10"
              />
            </a>

            <div>
              <p>Copyright © 2025</p>
              <p>Cloude All Rights Reserved</p>
            </div>
          </div>
          <div>
            <h3 class="font-semibold text-xl mb-4">About Us</h3>
            <ul>
              <li class="mb-4">
                <p>Back Story</p>
              </li>
              <li class="mb-4">
                <p>Our Location</p>
              </li>
              <li class="mb-4">
                <p>Our Team</p>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="font-semibold text-xl mb-4">Products</h3>
            <ul>
              <li class="mb-4">
                <a href="http://localhost/pweb/page/treatment.html">Treatment</a>
              </li>
              <li class="mb-4">
                <a href="http://localhost/pweb/page/skincare.html">Skincare</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="font-semibold text-xl mb-4">Contact Us</h3>
            <ul>
              <li class="mb-4">
                <p>WhatsApp</p>
              </li>
              <li class="mb-4">
                <p>Email</p>
              </li>
              <li class="mb-4">
                <p>Phone</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

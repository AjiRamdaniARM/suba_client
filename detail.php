<?php session_start(); ?>
<?php include ('config/connect.php'); ?>
<?php
// mendapatkan id_produk dari url
$id_client = $_GET["id_client"];

// query ambil data
$ambil = $conn->query("SELECT * FROM tb_client WHERE id_client='$id_client'");
$detail = $ambil->fetch_assoc();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Client <?php echo $detail['nama_client'] ?></title>
    <link rel="stylesheet" href="css/font.css" />

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> -->
<link rel="stylesheet" href="css/app.css" />
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.23/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="js/tailwind.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 </head>
 <body style="background-color: #1E1E1E">
    <div class="container-lg mx-auto px-4 py-4">
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<!-- Jumbotron -->
<div
  class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat p-12 text-center"
  style="background-image: url('https://drive.google.com/uc?export=view&id=<?php echo $detail['id_poto'] ?>'); height: 400px">
  <div
    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)">
  </div>
</div>
<!-- Jumbotron -->  
<br>
<div class="p-6 sm:p-12 ">
	<div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
		<img src="assets/img/suba.jpg" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
		<div class="flex flex-col">
			<h4 class="text-lg font-semibold text-center md:text-left"><?php echo $detail['nama_client'] ?></h4>
			<p class="dark:text-gray-400 text-center"> <?php echo $detail['alamat_client'] . ',' . $detail['kategori']. ',' . $detail['luas_tanah']?></p>
		</div>
	</div>
	<div class="flex justify-center pt-4 space-x-4 align-center">
		<a  href="https://www.instagram.com/suba_arch/"  class="p-2 font-bold rounded-md dark:text-gray-100 hover:dark:text-yellow-400">
            INSTAGRAM
		</a>
		<a  href="https://www.youtube.com/@suba-arch"  class="p-2 font-bold rounded-md dark:text-gray-100 hover:dark:text-yellow-400">
            YOUTUBE
		</a>
		<a  href="https://www.tiktok.com/@subaarch"  class="p-2 font-bold rounded-md dark:text-gray-100 hover:dark:text-yellow-400">
            TIKTOK
		</a>
	</div>

    <br>
    <div class="text font-bold lg:text-start md:text-center">
        RENDERING EXTERIOR AND INTERIOR 
    </div>
    <br>
    <?php 
$canak = $conn->query("SELECT * FROM tb_poto WHERE id_client='$id_client'");
$poto = $canak->fetch_assoc();

    ?>
    <div class="mx-auto">
    <div class="flex flex-wrap justify-center items-center gap-4">


<div>
<img
  src="https://drive.google.com/uc?export=view&id=<?php echo $poto['id_poto1'] ?>"
  class="h-auto max-w-full"
  alt="<?php echo $detail['kategori'] ?>" />
</div>

<div>
<img
  src="https://drive.google.com/uc?export=view&id=<?php echo $poto['id_poto2'] ?>"
  class="h-auto max-w-full"
  alt="<?php echo $detail['kategori'] ?>" />
</div>

<div>
<img
  src="https://drive.google.com/uc?export=view&id=<?php echo $poto['id_poto3'] ?>"
  class="h-auto max-w-full"
  alt="<?php echo $detail['kategori'] ?>" />
</div>
<div>
<img
  src="https://drive.google.com/uc?export=view&id=<?php echo $poto['id_poto4'] ?>"
  class="h-auto max-w-full"
 alt="<?php echo $detail['kategori'] ?>" />
</div>
<div>
<img
  src="https://drive.google.com/uc?export=view&id=<?php echo $poto['id_poto5'] ?>"
  class="h-auto max-w-full"
 alt="<?php echo $detail['kategori'] ?>" />
</div>
<div>
<img
  src="https://drive.google.com/uc?export=view&id=<?php echo $poto['id_poto6'] ?>"
  class="h-auto max-w-full"
 alt="<?php echo $detail['kategori'] ?>" />
</div>

</div>
    </div>

    <!-- Jumbotron -->
  <div class="px-6 py-12 text-center md:px-12 lg:my-12 lg:text-left">
    <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        <div class="mt-12 lg:mt-0">
          <h1 class="mt-0 mb-12 text-4xl font-bold tracking-tight md:text-5xl xl:text-6xl">
          Desain Rendering Video <br /><span class="text-yellow-500">Suba Arch Studio</span>
          </h1>
          <div class="flex-row md:flex">

            <button type="button" onclick="window.location.href='https://www.youtube.com/@suba-arch'"
              class="inline-block rounded bg-primary px-7 pt-3 pb-2.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
              data-te-ripple-init data-te-ripple-color="light">
              Subscribe
            </button>
          </div>
        </div>
        <div class="mb-12 lg:mb-0">
          <div
            class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden rounded-lg shadow-lg"
            style="padding-top: 56.25%">
            <iframe class="embed-responsive-item absolute top-0 right-0 bottom-0 left-0 h-full w-full"
              src="https://www.youtube.com/embed/<?php echo $detail['video'] ?>?enablejsapi=1&amp;origin=https%3A%2F%2Fmdbootstrap.com"
              allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</div>
    </div>
 </body>
 </html>
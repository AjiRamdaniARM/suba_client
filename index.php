<?php
session_start();
include 'config/connect.php';
$sql =  "SELECT * FROM tb_client WHERE 1";
$all_client = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/font.css" />

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" /> -->
    <link rel="stylesheet" href="css/app.css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
    <script>$(document).ready(function() {
    showdata();
});
function showdata(){
    $.ajax({
        url: './fetch.php',
        method: 'post',
        success: function(result)
        {
            $("#result").html(result);
        }
    });
}
function selectdata(cat){
    $.ajax({
        url: 'select-data.php',
        method: 'post',
        data: 'cat_name=' + cat,
        success: function(result){
            $("#result").html(result);
        }
    })
}
</script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body style="background-color: #1E1E1E">
<div class="container-lg px-10 py-5 mx-auto">
    <div class="flex flex-wrap justify-center items-center">
        
    <div class="text-judul lg:text-6xl text-3xl lg:px-0 px-5 py-5 DM-Sans font-bold text-white lg:w-[10em] text-center lg:text-start">
            Welcome To Halaman Portofolio <span class="text-yellow-500">Suba Arch Studio</span>
        </div>
        
 
<div class="mockup-phone border-warning">
  <div class="camera"></div> 
  <div class="display">
    <div class="artboard artboard-demo phone-1">
    <lottie-player src="https://lottie.host/aa5f650a-2d85-44f5-91dc-654888efeb35/c7poDm12J8.json" background="##fff" speed="1" style="width: 300px; height: 300px" loop controls autoplay direction="1" mode="normal"></lottie-player>

    </div>
  </div>
</div>


</div>

<br>
      <!-- Section: Design Block -->
      <section class="mb-40 ">
        <!-- Navbar -->
     
        <!-- Jumbotron -->
        <div class="bg-neutral-50 py-24 px-6  text-center dark:bg-neutral-900" id="filters">
          <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-6xl">
            Explore the results of Architect services <br /><span class="text-warning">Suba Arch Studio</span>
          </h1>
<select onchange="selectdata(this.options[this.selectedIndex].value)" class="select select-warning  w-full max-w-xs">
  <option value="All">All Style</option>
  <option value="scandinavian">Scandanavian</option>
  <option value="minimalist">Minimalist</option>
  <option value="tropical">tropical</option>
</select>
        </div>
        <!-- Jumbotron -->
      </section>
      <!-- Section: Design Block -->

<div class="container mx-auto">
      <div id="result" class="grid grid-cols-12 gap-4">
<!-- Column -->
<!-- <div  class="col-span-12 md:col-span-6 lg:col-span-3"> -->
   <!-- Card -->
   <!-- <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="h-52 flex flex-col justify-center items-center bg-yellow-600 rounded-t-xl">
      <img src="https://drive.google.com/uc?export=view&id=<?php echo $row['id_poto'] ?>" alt="portofolio">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-yellow-600 dark:text-yellow-500">
         SUBA ARCH
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
          <?php echo $row['nama_client'] ?>
        </h3>
        <p class="mt-3 text-gray-500">
         <?php echo $row['alamat_client'] . ',' . $row['kategori']. ',' . $row['luas_tanah']?>
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="detail.php?id_client=<?php echo $row['id_client']; ?>">
          View Detail Client
        </a>

      </div>
    </div> -->
    <!-- End Card -->
<!-- </div> -->




</div>
</div>
      
    </div>
</body>

</html>


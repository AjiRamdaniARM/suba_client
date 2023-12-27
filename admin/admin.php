
<?php
error_reporting(E_ERROR | E_PARSE);
$query = mysqli_query($conn, "SELECT * FROM tb_client WHERE 1");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<!-- Main modal -->
<div id="crypto-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    KUMPULAN DATA CLIENT
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crypto-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 overflow-y-auto">
                <ul class="my-4 space-y-3 overflow-y-auto">
                <?php 
                $no = 1;
            foreach ($result as $row ) {
            ?>

                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                           <span class="rounded-full bg-yellow-500 px-2"><?php echo $no++ ?></span>
                            <span class="flex-1 ms-3 whitespace-nowrap"><?php echo $row['nama_client'] ?></span>
                            <span class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400"><?php echo $row['kategori'] ?></span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <div>
                    <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        Why do I need to connect with my wallet?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="./css/font.css" />
<div class="aset1 z-[-10] absolute mt-[-5em] lg:mt-[1em]" >
    <img src="./assets/img/aset1.png" class="rotate-180 w-96" alt="aset1">
</div>
<div class="container  mx-auto z-1">
    <div class="flex flex-col justify-center items-center mt-20">
        <div class="text-judul lg:text-7xl text-3xl lg:px-0 px-5 py-5 DM-Sans font-bold text-white w-[11em] text-center">
            Welcome To Halaman Admin Suba Arch Studio
        </div>
        
        <div class="text-center text-white lg:px-0 px-5 lg:text-[15px]  text-[10px] lg:w-[50em] Montserrat">Berdasarkan pengalaman orang-orang yang telah menggunakan <span class="text-yellow-500 font-bold">jasa desain rumah</span>, mereka cenderung mendapatkan <span class="text-yellow-500 font-bold">rumah idaman</span> sesuai dengan kebutuhan dan keinginan mereka. Mulai dari konsep desain, jenis material bangunan, pemanfaatan lahan, dan hal-hal detail lainnya. Bisa anda bayangkan, ketika anda pun dapat memiliki rumah yang nyaman, aman, dan estetik sebagai tempat tinggal anda bersama keluarga tercinta.Jasa Desain Rumah</div>
    
<br>
    <div class="button mx-auto gap-5 flex items-center">
        <button class="bg-yellow-500 font-bold text-black px-10 py-3 rounded-full " onclick="window.location.href='./index.php'">View Beranda</button>
        <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal"  class="bg-black font-bold text-white px-10 py-3 rounded-full "> Client Suba</button>
    </div>
    </div>

</div>


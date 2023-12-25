

<?php
error_reporting(E_ERROR | E_PARSE);
$query = mysqli_query($conn, "SELECT * FROM tb_poto");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<link rel="stylesheet" href="./css/font.css" />
<center>

<div class="container mx-auto">
  <div class="flex flex-wrap items-center justify-center lg:gap-10">

    <div class="font-bold DM-Sans py-5  lg:py-20 text-white text-4xl">DATA POTO RENDER SUBA ARCH STUDIO</div>

    <!-- modal & button tambah client -->
    <div class="button" >
      <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-yellow-500 text-black rounded-full px-5 py-4 hover:bg-white font-bold Montserrat">Upload Poto</button>
    </div>
  </div>

<!-- Tambah poto -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Upload Id Poto
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" novalidate action="./config/upload.php" method="post">
                <div>
                        <label for="floatingInput" class="block mb-2 flex justify-between text-sm font-medium text-gray-900 dark:text-white" >
                            <div>Id Client</div>
                            <a href="" class="text-blue-500">Lupa Id Client?</a>
                        </label>
                        <input type="text" name="id_client" id="floatingInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cth: Harus sesuai dengan Id Client" required>
                    </div>

                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Poto1</label>
                        <input type="text" name="poto1" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cth: 1n3AM5oF3dl0A2QvwUnTVU9Y1to7LBZAT" required>
                    </div>

                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Poto2</label>
                        <input type="text" name="poto2" id="text" placeholder="Cth: 1n3AM5oF3dl0A2QvwUnTVU9Y1to7LBZAT"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Poto3</label>
                        <input type="text" name="poto3" id="text" placeholder="Cth: 1n3AM5oF3dl0A2QvwUnTVU9Y1to7LBZAT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Poto4</label>
                        <input type="text" name="poto4" id="text" placeholder="Cth: 1n3AM5oF3dl0A2QvwUnTVU9Y1to7LBZAT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Poto5</label>
                        <input type="text" name="poto5" id="text" placeholder="Cth: 1n3AM5oF3dl0A2QvwUnTVU9Y1to7LBZAT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id_Poto6</label>
                        <input type="text" name="poto6" id="text" placeholder="Cth: 1n3AM5oF3dl0A2QvwUnTVU9Y1to7LBZAT" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <div class="flex justify-between">
                    </div>
                    <button type="submit" name="selesai" class="w-full text-white bg-blue-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Selesai</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Tidak jadi? <a href="#"
                        data-modal-hide="authentication-modal"
                         class="text-yellow-700 hover:underline dark:text-yellow-500">Keluar</a>
                    </div>
                </form>
     
            </div>
        </div>
    </div>
</div> 
<br>

<div id="animation-carousel" class="relative w-full px-10" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
         <?php 
            foreach ($result as $row ) {
            ?>
        <div class="hidden duration-200 ease-linear" data-carousel-item>
            <img src="https://drive.google.com/uc?export=view&id=<?php echo $row['id_poto1'] ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <?php } ?>
 
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<?php 
            foreach ($result as $row ) {
            ?>


<!-- <img src="" alt=""><img src="https://drive.google.com/uc?export=view&id=<?php echo $row['id_poto1'] ?>" alt="Arsitek"> -->

<!-- edit client -->
<div id="default-modal-edit<?php echo['id_poto'] ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-edit">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal-edit" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal-edit" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>

<!-- delete client -->

<div id="ModalDelete<?php echo $row['id_poto'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" class="ModalDelete hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="ModalDelete">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <form action="./config/delete.php">
                <input type="hidden" value="<?php echo $row['id_client'] ?>" name="id_client">
               
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah kamu yakin ingin menghapus data <?php echo $row['nama_client'] ?></h3>
                <button data-modal-hide="ModalDelete" type="submit" name="delete" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="ModalDelete type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>





    <!-- table data -->
  <div class="flex flex-col py-5  px-5 overflow-x-auto">
  <div class="sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
      <?php
            }
            if (empty($result)) {
                echo " <div class='flex mt-5 items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800' role='alert'>
                <svg class='flex-shrink-0 inline w-4 h-4 me-3' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 20 20'>
                  <path d='M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z'/>
                </svg>
                <span class='sr-only'>Info</span>
                <div>
                  <span class='font-medium'>Tidak Ada Client!</span> Periksa kesalahan pada sistem atau belum memasukkan datanya
                </div>
              </div>";
            } else {
            ?>
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b bg-neutral-50 font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">No</th>
              <th scope="col" class="px-6 py-4">Id Client</th>
              <th scope="col" class="px-6 py-4">Poto 1</th>
              <th scope="col" class="px-6 py-4">Poto 2</th>
              <th scope="col" class="px-6 py-4">Poto 3</th>
              <th scope="col" class="px-6 py-4">Poto 4</th>
              <th scope="col" class="px-6 py-4">Poto 5</th>
              <th scope="col" class="px-6 py-4">Poto 6</th>
              <th scope="col" class="px-6 py-4">Fitur</th>
            </tr>
          </thead>
          <tbody class="text-white">
          <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4"><?php echo $no++ ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_client'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_poto1'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_poto2'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_poto3'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_poto4'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_poto5'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['id_poto6'] ?></td>
              <td class="whitespace-nowrap px-6 py-4">
                <button type="button" data-modal-target="#default-modal-edit<?php echo['id_poto'] ?>"  data-modal-toggle="default-modal-edit" class="bg-yellow-500 px-2 py-2 rounded-full font-bold">Edit</button>
                <button  data-target="#ModalDelete<?php echo $row['id_poto'] ?>" data-modal-toggle="ModalDelete" class="bg-red-500 px-2 py-2 rounded-full font-bold">Delete</button>
                
              </td>
            </tr>
  
            <?php } ?>
          </tbody>
        </table>
      </div>
      <?php
            }
            ?>
    </div>
  </div>
</div>
</div></center>
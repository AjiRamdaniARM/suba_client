<?php

include 'config/connect.php';
if(isset($_POST['request'])){
    $request = $_POST['request'];

    $query = "SELECT * FROM tb_client WHERE kategori = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
}

?>

<?php

if($count) {
    echo "Tidak Ada Data";
}
?>

<!-- Card -->
<?php 
while($row = mysqli_fetch_array($result)){
?>
<div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
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
    </div>
    <!-- End Card -->

<?php } ?>
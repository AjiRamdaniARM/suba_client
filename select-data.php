<?php
include 'config/connect.php';
$catname = $_POST['cat_name'];

if($catname!='All')
{
    $cond = "'$catname'";
}else {
    $cond = 0;
}
$fecth_query = mysqli_query($conn, "SELECT * FROM tb_client WHERE kategori=$cond");
$row = mysqli_num_rows($fecth_query);
if($row>0){
  
while ($res = mysqli_fetch_array($fecth_query))
{

?>
<div  class="col-span-12 md:col-span-6 lg:col-span-3">
   <!-- Card -->
   <div  class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="h-52 flex flex-col justify-center items-center bg-yellow-600 rounded-t-xl">
      <img src="https://drive.google.com/uc?export=view&id=<?php echo $res['id_poto'] ?>" alt="portofolio">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-yellow-600 dark:text-yellow-500">
         SUBA ARCH
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
          <?php echo $res['nama_client'] ?>
        </h3>
        <p class="mt-3 text-gray-500">
         <?php echo $res['alamat_client'] . ',' . $res['kategori']. ',' . $res['luas_tanah']?>
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="detail.php?id_client=<?php echo $res['id_client']; ?>">
          View Detail Client
        </a>

      </div>
    </div>
    <!-- End Card -->
</div>
<?php
}
}
 ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script  src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


    

<?php
error_reporting(E_ERROR | E_PARSE);
$query = mysqli_query($conn, "SELECT * FROM tb_client");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<link rel="stylesheet" href="./css/font.css" />
<center>

<div class="container-fluid w-full h-full bg-white">


<?php 
            foreach ($result as $row ) {
            ?>




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
        <table id="example" class="min-w-full text-left text-sm font-light">
          <thead class="border-b bg-neutral-50 font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">No</th>
              <th scope="col" class="px-6 py-4">Nama Client</th>
              <th scope="col" class="px-6 py-4">Alamat Client</th>
              <th scope="col" class="px-6 py-4">Kategori</th>
              <th scope="col" class="px-6 py-4">Luas Tanah</th>
              <th scope="col" class="px-6 py-4">Link Project</th>
            </tr>
          </thead>
          <tbody class="text-black">
          <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4"><?php echo $no++ ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['nama_client'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['alamat_client'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['kategori'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['luas_tanah'] ?></td>
              <td class="whitespace-nowrap px-6 py-4"><?php echo $row['link_file'] ?></a></td>
              
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
</div>
</div>

</center>


<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
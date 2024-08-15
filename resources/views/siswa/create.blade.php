<!-- Modal Create Siswa -->
<div id="SiswaCreate" class="modal fixed inset-0 bg-gray-500 bg-opacity-75 items-center justify-center hidden">
    <div class="bg-white p-4 rounded-lg w-1/2">
        <h2 class="text-lg font-bold text-center pb-4">Tambah Data Siswa</h2>
        <button type="button" data-dismiss="modal" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">X</button>
        <!-- Formulir atau Konten Modal -->
        <form action="/tambah_siswa" method="POST" class="max-w-sm mx-auto id="SiswaCreate"">
            @csrf
            
            <div class="mb-5">
              <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
              <input type="text" required name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Siswa" required />
            </div>
            <div class="mb-5">
              <label for="ttl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat, Tanggal Lahir</label>
              <input type="date" required name="ttl" id="ttl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <div class="mb-5">
                <label for="sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekolah</label>
                <input type="text" required name="sekolah" id="sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Sekolah" required />
            </div>
            <div class="mb-5">
              <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
              <input type="text" required name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keterangan Siswa" required />
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
    </div>
</div>

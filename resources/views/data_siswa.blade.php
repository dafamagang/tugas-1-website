<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
<div class="min-h-full">
    <nav class="bg-blue-500">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between bg-blue-500 px-4">
          <h1 class="text-2xl font-bold text-white">Data Siswa</h1>
          <div class="relative flex items-center">
            <form class="relative flex items-center" action="/search" method="GET" class="mb-4">
              <input id="input-search" name="query" class="px-4 py-2 rounded-3xl focus:outline-none pr-10" type="text" placeholder="search">
              <button class="absolute top-2 right-2">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                  </svg>
              </button>
            </form>
          </div>
      </div>
      </div>
    </nav>
    <header class="bg-white">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class=" text-3xl font-bold tracking-tight text-slate-600 text-center">Data Siswa Sekolah...</h1>
      </div>
      <div class="flex justify-end mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <button class="bg-blue-700 py-2 px-2 rounded-md text-white font-semibold" data-modal-toggle="tambah-modal" data-modal-target="tambah-modal">
            Tambahkan Data
        </button>
    </div>    
    </header>
    <main>
      <div class="grid grid-cols-4 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 grid-rows-4 gap-2 ">
        @foreach ($data_siswa as $siswa)
          <x-siswa_card :siswa="$siswa"></x-siswa_card>
        @endforeach
      </div>
      <x-popup_modal id="tambah-modal"  title="Tambah data siswa" action="/tambah_siswa"></x-popup_modal>

    </main>
  </div>
  {{-- <script src="js/script.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
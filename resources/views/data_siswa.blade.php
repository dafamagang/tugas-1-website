<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="min-h-full">
    <nav class="bg-blue-500">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <h1 class="text-2xl font-bold text-white">Data Siswa</h1>
            <input class="px-3 py-1 rounded-2xl focus:outline-none" type="search" name="" id="" placeholder="search">
      </div>
    </nav>
    <header class="bg-white">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class=" text-3xl font-bold tracking-tight text-slate-600 text-center">Data Siswa Sekolah...</h1>
      </div>
      <div class="max-w-screen-xl flex justify-end mr-10">
        <button class=" bg-blue-700 py-2 px-2 rounded-md text-white font-semibold" data-toggle="modal" data-target="#SiswaCreate"> Tambahkan Data</button>
      </div>
    </header>
    <main>
      <div class="grid grid-cols-4 mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 grid-rows-4 gap-2 ">
        @foreach ($data_siswa as $siswa)
          <x-siswa_card :siswa="$siswa">
            
          </x-siswa_card>
          
        {{-- <div class=" max-w-xs rounded-lg overflow-hidden shadow-lg bg-white p-4 border flex flex-col">
            <div class="text-slate-700 font-normal"><span class="font-medium">Nama:</span> {{$siswa['nama']}}</div>
            <div class="text-slate-700 font-normal"><span class="font-medium">TTL:</span> {{$siswa['ttl']}}</div>
            <div class="text-slate-700 font-normal"><span class="font-medium">Sekolah:</span> {{$siswa['sekolah']}}</div>
            <div class="text-slate-700 font-normal text-justify line-clamp-3"><span class="font-medium">Keterangan: </span>{{$siswa['keterangan']}}</div>
              <form class="flex justify-evenly gap-2 mt-auto" action="/siswa/{{$siswa['id']}}" method="POST" class="w-2/4">
                @csrf
                @method('DELETE')
                <button 
                onclick="event.preventDefault();" 
                data-toggle="modal" 
                data-target="#SiswaEdit" 
                data-siswa="{{$siswa}}"
                class="w-2/4 py-1 bg-blue-700 text-white font-semibold rounded-md text-center items-center">
                  Edit
              </button>
                  <button type="submit" class="w-2/4 py-1  bg-blue-700 text-white font-semibold rounded-md text-center items-center">Delete</button>
              </form>
        </div>
         --}}
        @endforeach
      </div>
      @include('siswa.create')
      @include('siswa.edit')
    </main>
  </div>
  <script src="js/script.js"></script>
</body>
</html>
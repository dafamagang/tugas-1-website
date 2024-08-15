@props(['siswa'])
<div class=" max-w-xs rounded-lg overflow-hidden shadow-lg bg-white p-4 border flex flex-col">
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
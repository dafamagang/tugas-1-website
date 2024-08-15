@props(['siswa'])
<div class=" max-w-xs rounded-lg overflow-hidden shadow-lg bg-white p-4 border flex flex-col">
    <div class="overflow-x-auto">
        <table class="min-w-full ">
            <tbody class="bg-white">
                <tr>
                    <td class=" text-sm font-medium text-gray-900 py-1 pr-1">
                        Nama:
                    </td>
                    <td class=" text-sm text-gray-500">
                        {{$siswa['nama']}}
                    </td>
                </tr>
                <tr>
                    <td class=" text-sm font-medium text-gray-900 pr-1">
                        TTL:
                    </td>
                    <td class=" text-sm text-gray-500">
                        {{$siswa['tempat_lahir']}}, {{$siswa['tanggal_lahir']}}
                    </td>
                </tr>
                <tr>
                    <td class=" text-sm font-medium text-gray-900 pr-1">
                        Sekolah:
                    </td>
                    <td class=" text-sm text-gray-500">
                        {{$siswa['sekolah']}}
                    </td>
                </tr>
                <tr>
                    <td class=" text-sm font-medium text-gray-900 pr-1">
                        Keterangan:
                    </td>
                    <td class=" text-sm text-gray-500 text-justify line-clamp-3">
                        {{$siswa['keterangan']}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
      <form class="flex justify-evenly gap-2 mt-auto" action="/siswa/{{$siswa['id']}}" method="POST" class="w-2/4">
        @csrf
        @method('DELETE')
        
        <button 
        onclick="event.preventDefault();" 
        data-modal-toggle="edit-modal{{$siswa['id']}}" 
        data-modal-target="edit-modal{{$siswa['id']}}" 
        data-siswa="{{$siswa}}"
        class="w-2/4 py-1 bg-blue-700 text-white font-semibold rounded-md text-center items-center">
          Edit
      </button>
          <button type="submit" class="w-2/4 py-1  bg-blue-700 text-white font-semibold rounded-md text-center items-center">Delete</button>
      </form>
    <x-popup_modal id="edit-modal{{$siswa['id']}}" action="/edit_siswa/{{$siswa['id']}}" siswa="{{$siswa}}"  title="Edit data siswa" method="PUT"></x-popup_modal>
</div>


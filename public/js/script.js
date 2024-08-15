document.addEventListener('DOMContentLoaded', function () {
    const openModalButtons = document.querySelectorAll('[data-toggle="modal"]');
    const closeModalButtons = document.querySelectorAll('[data-dismiss="modal"]');

    const editButtons = document.querySelectorAll('[data-toggle="modal"]');
        
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const siswaData = JSON.parse(this.getAttribute('data-siswa'));

                // Isi form dalam modal dengan data siswa
                document.getElementById('edit-id').value = siswaData.id;
                document.getElementById('edit-nama').value = siswaData.nama;
                document.getElementById('edit-ttl').value = siswaData.ttl;
                document.getElementById('edit-sekolah').value = siswaData.sekolah;
                document.getElementById('edit-keterangan').value = siswaData.keterangan;
            });
        });



    openModalButtons.forEach(button => {
        button.addEventListener('click', function () {
            const target = document.querySelector(this.getAttribute('data-target'));
            target.classList.remove('hidden');
            target.classList.add('flex');
        });
    });

    closeModalButtons.forEach(button => {
        button.addEventListener('click', function () {
            const modal = this.closest('.modal');
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        });
    });

    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('modal')) {
            event.target.classList.remove('flex');
            event.target.classList.add('hidden');
        }
    });
});

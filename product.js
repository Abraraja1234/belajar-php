function pesanBarang(namaProduk) {
    Swal.fire({
        title: 'Pesan Produk',
        text: 'Anda telah memesan ' + namaProduk,
        icon: 'success',
        confirmButtonText: 'OK'
    });
}
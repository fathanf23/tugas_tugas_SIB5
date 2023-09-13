    let frm = document.getElementById('Online');
    let produkPilihan = ["TV", "AC", "Kulkas"];
    let pilih_produk = `<option value ="">Pilihan Produk -----<option> `;
    for (let p in produkPilihan){
        pilih_produk += `<option value="${produkPilihan[p]}">${produkPilihan[p]}</option>`;
    }
    frm.produk.innerHTML = pilih_produk;
    function transaksi() {
        let nama = frm.nama.value;
        let produk = frm.produk.value;
        let jumlah = frm.jumlah.value;
        let harga;
    switch(produk){
        case 'TV' : harga_satuan = 2000000; break;
        case 'AC' : harga_satuan = 3000000; break;
        case 'Kulkas' : harga_satuan = 4000000; break;
        default: harga = 0;
    }
    let hargaKotor = harga * jumlah;
    let diskon;
    if (produk == 'Kulkas' && jumlah >= 3) diskon = 0.3 * hargaKotor;
    else if (produk == 'AC' && jumlah >=3) diskon = 0.2 * hargaKotor;
    else diskon = 0.1 * hargaKotor

    
}
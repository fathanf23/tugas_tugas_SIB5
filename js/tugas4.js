
        function transaksi() {
            let forms = document.getElementById('frm')
            var nama = document.getElementById("nama").value;
            var produk = document.getElementById("produk").value;
            var jumlah = parseInt(document.getElementById("jumlah").value);
            var hargaSatuan;

            switch (produk) {
                case "TV":
                    hargaSatuan = 2000000;
                    break;
                case "AC":
                    hargaSatuan = 3000000;
                    break;
                case "KULKAS":
                    hargaSatuan = 4000000;
                    break;
                default:
                    hargaSatuan = 0;
                    break;
            }

            var hargaKotor = hargaSatuan * jumlah;
            var diskon = 0;
            var pajak = 0;

            if (produk === "KULKAS" && jumlah >= 3) {
                diskon = 0.3 * hargaKotor;
            } else if (produk === "AC" && jumlah >= 3) {
                diskon = 0.2 * hargaKotor;
            } else {
                diskon = 0.1 * hargaKotor;
            }

            pajak = 0.1 * (hargaKotor - diskon);

            var hargaBayar = (hargaKotor - diskon) + pajak;

            var message = "Nama Pelanggan: " + nama + "\n" +
                "Produk yang Dibeli: " + produk + "\n" +
                "Harga Satuan: " + hargaSatuan + "\n" +
                "Jumlah Item Produk yang Dibeli: " + jumlah + "\n" +
                "Harga Kotor: " + hargaKotor + "\n" +
                "Diskon: " + diskon + "\n" +
                "Pajak: " + pajak + "\n" +
                "Harga Bayar: " + hargaBayar;
            alert(message);

            
            let data =  `Nama Pembeli : ${nama}
            <br> Produk Yang DiBeli : ${produk}
            <br> Harga Satuan : ${hargaSatuan}
            <br> Jumlah Item Yang DiBeli : ${jumlah}
            <br> Harga Kotor : ${hargaKotor}
            <br> Diskon : ${diskon}
            <br> PPN/Pajak : ${pajak}
            <br> Harga Bayar Total : ${hargaBayar}
            `

            document.getElementById('hasil').innerHTML = data; 

        }
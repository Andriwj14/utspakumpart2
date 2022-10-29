<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Barang::create([
            'namaBarang' => 'PUMA X MUNICH',
            'harga' => 450000,
            'stok' => 25,
            'photo' => 'munich.jpg',
            'review' => 'PUMA merupakan perusahaan asal Jerman yang bergerak di bidang penyedia pakaian serta perlengkapan olahraga. Pada awal kemunculannya tahun 1924, PUMA didirikan oleh Rudolf dan Adolf Dassler yang membuka perusahaan yang bernama "Gebruder Dassler Schuhfabrik" yang pada awalnya hanya terbatas pada produksi sepatu olahraga saja. Produk pertama mereka dipakai dalam ajang olahraga Olimpiade Berlin tahun 1936. Pada waktu itu, peraih medali emas Olimpiade Jesse Owens memakai sepatu buatan dua bersaudara itu. Dampaknya, sejak saat itu banyak atlet kelas dunia mulai melirik produk buatan Dassler.
            Beberapa tahun berselang, Rudolf Dassler mulai mendaftarkan perusahaannya sendiri yang diberi nama "the PUMA Schuhfabrik Rudolf Dassler" pada tanggal 1 Oktober 1948 dan memisahkan diri dari usaha yang kelola bersama dengan saudaranya. Disaat yang bersamaan, PUMA meluncurkan sepatu olahraga pertamanya yang berlabel "ATOM". Dengan munculnya sepatu olahraga produksi PUMA, membuat para pemain sepak bola nasional Jerman Barat memakai produk tersebut pada pertandingan sepak bola pertama setelah Perang Dunia tahun 1950, termasuk top scorer Herbert Burdenski.
            Tidak butuh waktu terlalu lama bagi Rudolf untuk mengembangkan usahanya. Bekerjasama dengan pada ahli seperti Sepp Herberger, membuat PUMA lebih berinovasi dalam pembuatan sepatu sepak bola. Hingga lahirlah "SUPER ATOMS" tahun 1952 yang merupakan salah satu tonggak kesuksesan Rudolf dalam memproduksi sepatu sepak bola.
            Pada tahun 1954 di mana digelar Liga Sepakbola Jerman, para pemain dari tim pemenang Hanover 96 lebih banyak menggunakan sepatu buatan PUMA terbaru "BRAZIL". Tak hanya terbatas pada pembuatan sepatu sepakbola saja, namun PUMA juga mulai membuat sepatu untuk altet-atlet dari cabang olahraga lain. Pada tahun 1960, PUMA mencatatkan namanya menjadi perusahaan sepatu pertama yang menggunakan teknologi canggih dengan teknik produksi vulkanisir. Produk dengan inovasi terbaru ini ditunjukkan dalam mendukung altet dalam Olimpiade Tokyo pada tahun 1984. Dua tahun berselang, PUMA memutuskan untuk "go public" dengan mencatatkan sahamnya di Munich and Frankfurt Stock Exchanges.'
        ]);

        Barang::create([
            'namaBarang' => 'ORTUSEIGHT',
            'harga' => 100000,
            'stok' => 20,
            'photo' => 'bbs12.webp',
            'review' => 'Ortuseight adalah sebuah brand yang didirikan di bawah PT. Vita Nova Atletik pada Februari 2018. Perusahaan yang bergerak di bidang olahraga ini memiliki banyak tenaga profesional yang sudah berkecimpung belasan tahun di industri olahraga di Indonesia.
            Nama Ortuseight memiliki makna tersendiri yang unik.  Ortus artinya matahari terbit, fajar, atau awal, dan Eight adalah jumlah tim yang memulai perusahaan. Makna tersebut berarti akan selalu ada harapa baru di setiap matahari pagi yang muncul. Makna inilah yang membawa Ortuseight hingga akhirnya mampu menjadi salah satu pemain besar di pasar olahraga Indonesia.
            Rasanya memang sudah lama Indonesia menjadi pasar olahraga untuk merek-merek luar negeri. Padahal selain Ortuseight ada merek lokal lain yang bersaing duluan dengan kompetitor-kompetitor tersebut, seperti Specs. Specs bersaing dengan Adidas, Nike, Reebok, dan Diadora sudah sejak lama. Kualitasnya pun sudah tidak diragukan lagi, dan hal inilah yang membuat Specs bisa berdiri sampai saat ini.
            Specs berdiri sejak tahun 1980, dan memiliki slogan ternama “100 persen buatan Indonesia”. Dengan modelnya yang Indonesia banget, Specs memiliki keunikan tersendiri di hati rakyat Indonesia.'
        ]);

        Barang::create([
            'namaBarang' => 'SPECH',
            'harga' => 500000,
            'stok' => 35,
            'photo' => 'spech.jpg',
            'review' => 'Specs hadir sejak tahun 1980 yang diluncurkan oleh PT Panarub Industry. Pada awalnya, Specs merupakan sepatu untuk jogging dan sempat menguasai pasar sepatu jogging pada saat itu. Seiring dengan berjalannya waktu, Specs mulai fokus untuk memproduksi sepatu untuk olahraga lain seperti futsal dan sepakbola.
            Di awal tahun 2004, Specs mulai membuka toko pertamanya di Pasaraya Grande dan Blok M Plaza agar lebih dikenal oleh masyarakat. Pada tahun itu pula, Specs untuk pertama kali menjadi sponsor bagi tim PERSIKOTA Tangerang. Sedangkan di tahun 2006, 
            Specs berhasil menggandeng Cristian Gonzales sebagai brand ambassador. Bahkan Specs juga mulai melebarkan sayapnya untuk ekspansi menjual ke Malaysia dan Singapura. Dan di tahun 2008, Specs berhasil dinobatkan sebagai pemimpin pasar sepatu futsal di Indonesia.
            Sejak saat itu, Specs mulai mensponsori berbagai kegiatan futsal dan sepakbola. Dan di tahun 2015 Specs sudah melakukan penjualan secara online.'
            
        ]);
    }
}

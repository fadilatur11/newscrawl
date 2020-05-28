<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Dua Perusahaan di Kab Pasuruan Tunda Pembayaran THR',
                'content' => '<p><strong>PASURUAN</strong>, <em>Radar Bromo</em> &#8211; Lebaran telah lewat. Namun, sampai Rabu (27/5) masih ada perusahaan di Kabupaten Pasuruan yang belum membayar THR. Dinas Tenaga Kerja (Disnaker) setempat mencatat, dua perusahaan mem-<em>pending</em> pembayaran THR bagi karyawannya.</p><p>Samsul Arifin, kabid Hubungan Industrial dan Jaminan Sosial Tenaga Kerja (HI dan Jamsostek) di Disnaker Kabupaten Pasuruan mengatakan, sampai kemarin ada 89 perusahaan yang melapor sudah membayar THR. Pembayaran THR dilakukan sebelum Lebaran.</p><p>“Ada 89 perusahaan yang melapor sudah membayar THR sesuai ketentuan. Dan juga dari catatan kami ada empat pengaduan ke Disnaker tentang THR,” terangnya.</p><p>Dari empat pengaduan tersebut, diketahui ada dua perusahaan yang menunda pembayaran THR. Satu perusahaan dari Pasrepan yang sudah membuat Perjanjian Bersama (PB) dengan musyawarah mufakat bahwa perusahaan menunda pembayaran THR.</p><p>“Sudah ada kesepakatan penundaan pembayaran THR antara perusahaan dan karyawan yang dituangkan dengan PB. Sehingga, karyawan mengerti keadaan perusahaan. Namun, tetap kewajiban membayarkan THR paling lambat akhir tahun 2020 ini,” terangnya.</p><p>Sedangkan satu perusahaan lainnya yaitu di Wonorejo, yang saat ini dalam proses musyawarah. Ini, lantaran perusahaan sudah tidak beroperasi per Maret 2020 sejak wabah korona terjadi. Sehingga, selain gaji dan THR sementara belum terbayar dan masih diupayakan untuk musyawarah dan dituangkan dalam PB.</p><p>Dua perusahaan lain kendati sempat diadukan, namun THR sudah dibayarkan sebelum Lebaran. Satu perusahaan di Beji. Di sini, karyawan meminta THR lebih tinggi. Namun, akhirnya disepakati sesuai aturan pemerintah.</p><p>Lalu, satu perusahaan dari Pandaan diadukan karena memberikan THR berbeda bagi karyawan yang <em>work from home</em> (WFH) dan yang masuk normal. Namun, ini dilakukan sesuai kesepakatan.</p><p>Sehingga, total ada 89 perusahaan yang sudah membayarkan THR sebelum Lebaran. Disnaker sendiri terus membuka posko THR Keagamaan sampai 31 Mei.</p><p>“Jadi, kalau ada karyawan yang merasa haknya belum terpenuhi, bisa melaporkan ke kami. Kami buka posko sampai 31 Mei,” ujarnya. <strong>(eka/hn/fun)</strong></p>',
                'image' => 'https://radarbromo.jawapos.com/wp-content/uploads/2020/05/20_PASURUAN_Masih-satu-perusahaan-yang-laporkan-tunda-pembayaran-THR-563x353.jpg',
                'slug' => 'dua-perusahaan-di-kab-pasuruan-tunda-pembayaran-thr',
                'link' => 'https://radarbromo.jawapos.com/utama/28/05/2020/dua-perusahaan-di-kab-pasuruan-tunda-pembayaran-thr/',
                'author' => 'radabromo jawapos',
                'published_at' => time(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}

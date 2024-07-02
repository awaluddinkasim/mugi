<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $daftarPenyakit = [
            [
                'nama' => 'Pulpitis',
                'deskripsi' => 'Pulpitis (radang pulpa gigi) merupakan suatu kondisi peradangan pada pulpa gigi yang terdiri dari jaringan vascular, jaringan ikat, pembuluh darah, dan saraf. Ketika bagian ini mengalami peradangan, anda akan mengalami rasa sakit dari saraf-saraf yang terlibat.',
                'cara_penanganan' => "1. Tergantung dari struktur gigi yang tersisa, apabila struktur gigi yang tersisa masih cukup dan memadai maka dilakukan penambalan.\n2. Pemberian obat berupa anti nyeri apabila datang dalam keadaan nyeri atau sakit.\n3. Apabila struktur gigi yang tersisa tidak memungkinkan untuk melakukan penambalan maka penanganannya adalah pencabutan.",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Gangren Pulpa',
                'deskripsi' => 'Gangren Pulpa merupakan keadaan gigi dimana jaringan pulpa sudah mati sebagai sistem pertahanan pulpa sudah tidak dapat menahan rangsangan sehingga jumlah sel pulpa yang rusak menjadi semakin banyak dan menempati sebagian besar ruang pulpa.',
                'cara_penanganan' => "1. Apabila struktur gigi yang tersisa tidak memungkinkan untuk melakukan penambalan maka penanganannya adalah pencabutan.\n2. Apabila struktur gigi yang tersisa masih cukup dan memadai makan dilakukan perawatan saluran akar dan penambalan.",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Gangren Radix',
                'deskripsi' => 'Gangren Radix merupakan suatu keadaan dimana gigi sudah tinggal akarnya atau mahkota gigi sudah hilang sampai batas garis servikal.',
                'cara_penanganan' => 'Di lakukan pencabutan gigi',
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Abses Periapikal',
                'deskripsi' => 'Abses Periapikal merupakan kantong infeksi di sekitar akar gigi anda. Ini terjadi ketika bakteri menyerang pulpa gigi, biasanya melalui celah atau lubang. Infeksi menyebar hingga ke akar gigi, menyebabkan peradangan dan pembengkakan.',
                'cara_penanganan' => "1. Pemberian obat berupa antibiotik dan analgetik\n2. Penambalan/pencabutan",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Periodontitis Marginalis Kronis',
                'deskripsi' => 'Periodontitis Marginalis Kronis merupakan suatu kondisi dimana karang gigi penyebab resorbsi/pengikisan tulang-tulang alveolar sebagai penyangga gigi.',
                'cara_penanganan' => "1. Pembersihan karang gigi\n2. Apabila gigi sudah goyang maka dilakukan pencabutan",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Gingivitis',
                'deskripsi' => 'Gingivitis (Radang Gusi) merupakan radang yang terjadi pada gusi karena kurangnya perawatan atau pembersihan gigi serta mulut.',
                'cara_penanganan' => 'Pembersihan karang gigi berupa scalling dan rootplanning',
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Ulkus Decubitus',
                'deskripsi' => 'Ulkus Decubitus merupakan merupakan suatu kondisi dimana akar gigi sulung yang menembus gusi dan melukai mulkosa bibir',
                'cara_penanganan' => "1. Apabila waktu tumbuh gigi permanen masih lama makan dilakukan penghalusan ujung akar\n2. Apabila waktu tumbuh gigi permanen sebagai gigi pengganti sudah dekat maka dilakukan pencabutan gigi",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Persitensi Gigi',
                'deskripsi' => 'Persitensi Gigi merupakan keadaan gigi susu/kecil yang tidak tanggal walaupun gigi permanent.dewasa sebagai gantinya sudah mulai tumbuh, terkadang juga gigi susu tidak goyang.',
                'cara_penanganan' => 'Pencabutan gigi susu',
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Kandidiasis Oral',
                'deskripsi' => 'Kandidiasis Oral merupakan suatu kondisi dimana koloni jamur kandida albicans yang meningkat yang disebabkan karena penggunaan antibiotic dalam jangka waktu yang lama dan terjadi pada pasien dengan sistem imunitas yang menurun.',
                'cara_penanganan' => 'Pemberian obat antijamur',
                'jenis' => 'Mulut',
            ],
            [
                'nama' => 'Karies Dentin',
                'deskripsi' => 'Karies Dentin merupakan suatu kondisi dimana gigi berlubang yang disebabkan oleh kebersihan mulut yang buruk.',
                'cara_penanganan' => "1. Penambalan\n2. Pemberian obat antibiotic",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Stomatitis (Sariawan)',
                'deskripsi' => 'Stomatitis (Sariawan) merupakan kondisi yang menyebabkan pembengkakan yang menyakitkan dan luka di dalam mulut. Stomatitis dapat disebabkan oleh penyakit, infeksi, reaksi alergi, makanan atau bahan kimia napas.',
                'cara_penanganan' => "1. Pemberian suplemen vitamin\n2. Konsumsi buah dan sayur\n3. Pemberian analgetic topical",
                'jenis' => 'Mulut',
            ],
            [
                'nama' => 'Abses Submandibula',
                'deskripsi' => 'Abses Submandibula merupakan infeksi bakteri yang disertai penumpukan nanah didasar mulut, rahang bawah, dan leher. Bila dibiarkan, infeksi bisa menyebar ke organ lain dan tumpukan nanah di leher dapat menutupi jalan napas.',
                'cara_penanganan' => "1. Pemberian Obat\n2. Insisi abses dan drainase",
                'jenis' => 'Gigi',
            ],
            [
                'nama' => 'Impaksi Gigi',
                'deskripsi' => 'Impaksi gigi merupakan suatu kondisi saat gigi gagal untuk tumbuh sepenuhnya (menembus) dari gusi. Gigi yang tidak dapat keluar sepenuhnya (tumbuh miring) terjadi karena gigi tumbuh berdempetan atau kurangnya ruang di tulang. Geraham ketiga (gigi bungsu), khususnya di rahang bawah, adalah yang terakhir keluar dan lebih mungkin tumbuh miring.',
                'cara_penanganan' => "1. Pemberian obat\n2. Bedah ringan (Odontektomi)",
                'jenis' => 'Gigi',
            ],
        ];

        foreach ($daftarPenyakit as $penyakit) {
            Penyakit::create($penyakit);
        }
    }
}

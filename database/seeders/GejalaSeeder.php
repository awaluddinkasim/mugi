<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $daftarGejala = [
            ['nama' => 'Sakit gigi yang muncul tiba-tiba dan lama saat malam hari'],
            ['nama' => 'Nyeri saat berbaring atau malam hari'],
            ['nama' => 'Nyeri menjalar sampai telinga dan tenggorokan'],
            ['nama' => 'Nyeri saat gigi tersentuh/mengunyah'],
            ['nama' => 'Gigi sensitif terhadap rangsangan makanan panas dan dingin'],
            ['nama' => 'Gigi berlubang'],
            ['nama' => 'Tidak adanya gejala sakit karena saraf pada pulpa gigi sudah mati (nekrosis)'],
            ['nama' => 'Bengkak dan nyeri pada area sisa akar gigi'],
            ['nama' => 'Bengkak pada area gigi berlubang'],
            ['nama' => 'Warna gigi terlihat kecoklatan/keabu-abuan'],
            ['nama' => 'Bau mulut tak sedap'],
            ['nama' => 'Gigi goyang'],
            ['nama' => 'Sering berdarah saat sikat gigi'],
            ['nama' => 'Bentuk gusi agak membulat'],
            ['nama' => 'Luka pada mulkosa bibir'],
            ['nama' => 'Rasa sakit pada bibir yang luka'],
            ['nama' => 'Gigi bersusun'],
            ['nama' => 'Terdapat bercak putih pada lidah'],
            ['nama' => 'Mulut kering'],
            ['nama' => 'Nyeri pada mulkosa bibir/pipi'],
            ['nama' => 'Luka berwarna putih/kekuningan dengan tepian merah'],
            ['nama' => 'Berlangsung selama 5-14 hari'],
            ['nama' => 'Pembengkakan pada gusi yang meluas sampai ke rahang bawah'],
            ['nama' => 'Sakit kadang disertai demam'],
            ['nama' => 'Sakit pada gigi bungsu'],
            ['nama' => 'Sulit buka mulut'],
            ['nama' => 'Gusi tampak merah'],
            ['nama' => 'Timbul bercak putih/coklat di gigi'],
            ['nama' => 'Perubahan pada bentuk barisan gigi'],
            ['nama' => 'Gigi tanggal'],
            ['nama' => 'Rasa tidak enak pada mulut'],
        ];

        foreach ($daftarGejala as $gejala) {
            Gejala::create($gejala);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Startup;

class StartupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startups = [
            [
                'name' => 'Gojek',
                'industry' => 'Teknologi dan layanan on-demand',
                'founder' => 'Nadiem Makarim',
                'logo' => 'Gojek.png',
                'website' => 'https://www.gojek.com',
                'description' => 'Gojek is a leading Southeast Asian on-demand platform and pioneer of the super app model, 
                providing access to a wide range of services including transportation, food delivery, logistics, and digital payments. Founded in Indonesia in 2010,
                Gojek operates under GoTo Group (the largest digital ecosystem in Indonesia, formed through its merger with Tokopedia).',
            ],
            [
                'name' => 'Tokopedia',
                'industry' => 'E-Commerce',
                'founder' => 'William Tanuwijaya dan Leontinus Alpha Edison',
                'logo' => 'Tokopedia.png',
                'website' => 'https://www.tokopedia.com',
                'description' => 'Tokopedia adalah sebuah perusahaan teknologi asal Indonesia yang mengoperasikan platform lokapasar (marketplace) terbesar di negara tersebut. Didirikan pada 17 Agustus 2009 oleh William Tanuwijaya dan Leontinus Alpha Edison, 
                Tokopedia kini beroperasi di bawah naungan GoTo Group setelah melakukan merger dengan Gojek pada tahun 2021, dengan kepemilikan mayoritas saham oleh TikTok (ByteDance) sejak awal 2024.',
            ],
            [
                'name' => 'Traveloka',
                'industry' => 'Travel dan Teknologi',
                'founder' => 'Ferry Unardi, Derianto Kusuma, dan Albert Zhang',
                'logo' => 'Traveloka.png',
                'website' => 'https://www.traveloka.com',
                'description' => 'Traveloka platform teknologi terkemuka di Asia Tenggara yang mengoperasikan ekosistem super app khusus untuk layanan perjalanan (travel), gaya hidup (lifestyle), dan keuangan digital.',
            ],
            [
                'name' => 'Bukalapak',
                'industry' => 'E-Commerce',
                'founder' => 'Achmad Zaky, Nugroho Herucahyono, dan Fajrin Rasyid',
                'logo' => 'Bukalapak.png',
                'website' => 'https://www.bukalapak.com',
                'description' => 'Bukalapak perusahaan teknologi asal Indonesia yang mengoperasikan platform lokapasar (e-commerce) dan pelopor digitalisasi toko kelontong tradisional melalui jaringan Mitra Bukalapak.',
            ],
            [
                'name' => 'Blibli',
                'industry' => 'E-Commerce',
                'founder' => 'Kusumo Martanto, Martin Hartono, Lisa Widodo, Hendry, dan Lay Ridwan Gautama',
                'logo' => 'Blibli.png',
                'website' => 'https://www.blibli.com',
                'description' => 'Blibli perusahaan teknologi asal Indonesia yang mengoperasikan platform e-commerce dan pelopor ekosistem perdagangan omnichannel serta gaya hidup (lifestyle) terintegrasi.',
            ],
            [
                'name' => 'DANA',
                'industry' => 'Fintech',
                'founder' => 'Vincent Iswara',
                'logo' => 'DANA.png',
                'website' => 'https://www.dana.id',
                'description' => 'DANA merupakan platform  perusahaan teknologi finansial (fintech) asal Indonesia yang menyediakan platform dompet digital (e-wallet) terintegrasi.',
            ],
            [
                'name' => 'Ruangguru',
                'industry' => 'Pendidikan Teknologi',
                'founder' => 'Belva Devara dan Iman Usman',
                'logo' => 'Ruangguru.png',
                'website' => 'https://www.ruangguru.com',
                'description' => 'Ruangguru mengembangkan layanan pendidikan berbasis teknologi untuk membantu proses  secara online dan offline.',
            ],
            [
                'name' => 'Halodoc',
                'industry' => 'Teknologi Kesehatan',
                'founder' => 'Jonathan Sudharta',
                'logo' => 'Halodoc.png',
                'website' => 'https://www.halodoc.com',
                'description' => 'Halodoc menyediakan layanan kesehatan digital yang menghubungkan pengguna dengan tenaga kesehatan.',
            ],
            [
                'name' => 'Xendit',
                'industry' => 'Fintech',
                'founder' => 'Moses Lo',
                'logo' => 'Xendit.png',
                'website' => 'https://www.xendit.co',
                'description' => 'Xendit menyediakan infrastruktur pembayaran digital untuk membantu bisnis menerima dan mengelola pembayaran.',
            ],
            [
                'name' => 'Bibit',
                'industry' => 'Teknologi Finansial',
                'founder' => 'William dan tim pendiri',
                'logo' => 'Bibit.png',
                'website' => 'https://bibit.id',
                'description' => 'Bibit merupakan platform investasi digital yang membantu pengguna mempelajari dan mengakses produk investasi.',
            ],
        ];

        foreach ($startups as $startup) {
            Startup::updateOrCreate(
                ['name' => $startup['name']], $startup);
        }
    }
}

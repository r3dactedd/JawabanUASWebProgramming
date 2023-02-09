<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => 'Ultra Milk UHT Full Cream 1000 ml',
            'desc' => 'Ultra Milk UHT merupakan susu segar alami yang baik untuk diminum sehari-hari. Dikemas dan disterilkan dengan menggunakan teknologi UHT (Ultra High Temperature).',
            'price' => 18000,
            'image' => 'storage/images/ultra milk.webp'
        ]);

        Item::create([
            'name' => 'Bimoli Minyak Goreng 2 Liter',
            'desc' => 'Gunakan minyak goreng dari Bimoli untuk menyempurnakan masakan keluarga yang sudah diproses melalui tahap Pemurnian Multi Proses (PMP) sehingga zat-zat yang bermanfaat bagi kesehatan bisa dipertahankan.',
            'price' => 36000,
            'image' => 'storage/images/bimoli.webp'
        ]);

        Item::create([
            'name' => 'Sania Beras Ramos 5 kg',
            'desc' => 'Beras pilihan yang diproses dan dikemas secara modern sehingga kulaitas dan kandungan nutrisi pada beras terjamin.',
            'price' => 18000,
            'image' => 'storage/images/sania.jpg'
        ]);

        Item::create([
            'name' => 'Sunlight Jeruk Nipis 650 ml',
            'desc' => 'Setiap tetes Sunlight Jeruk Lime 100 mengandung ekstrak jeruk nipis murni yang ampuh untuk membantu menghancurkan kelebihan lemak dan minyak lebih cepat dan lebih mudah. Kini, dilengkapi dengan teknologi Fast Rinse* baru, Sunlight Lime lebih efektif dan 10x lebih cepat dalam menghilangkan lemak.',
            'price' => 20000,
            'image' => 'storage/images/sunlight.jpg'
        ]);

        Item::create([
            'name' => 'Bernardi Kornet Sapi 190 gr',
            'desc' => 'Kornet sapi yang terbuat dari daging sapi asli dan berkualitas menghasilkan rasa yang bermutu.',
            'price' => 43000,
            'image' => 'storage/images/kornet.jpg'
        ]);

        Item::create([
            'name' => 'Aqua Galon 19 liter',
            'desc' => 'Air minum Aqua Galon dengan isi kemasan 19 liter dengan mutu dan kualitas terjamin.',
            'price' => 22000,
            'image' => 'storage/images/aqua.jpg'
        ]);

        Item::create([
            'name' => 'Gulaku 1 kg',
            'desc' => 'Gulaku adalah salah satu merk gula yang paling laris yang dikemas dengan beberapa ukuran yang berbeda sehingga cukup ekonomis untuk dibawa sesuai dengan tujuan.',
            'price' => 26000,
            'image' => 'storage/images/gulaku.jpg'
        ]);

        Item::create([
            'name' => 'Nice Facial Tissue 2 Ply',
            'desc' => 'Nice Facial Tissue memiliki tekstur yang lembut dan aman untuk digunakan pada kulit. Terbuat dari 100% serat alami Virgin Plantation Pulp dan diproses secara higenis menghasilkan tissue halus berkualitas tinggi.',
            'price' => 20000,
            'image' => 'storage/images/tisu.webp'
        ]);
    }
}

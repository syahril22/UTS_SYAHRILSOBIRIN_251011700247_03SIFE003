<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $destinations = [
            [
                'name' => 'Raja Ampat',
                'region' => 'Papua Barat Daya',
                'description' => 'Kepulauan Raja Ampat terkenal dengan air laut yang jernih, pulau-pulau karst, dan keanekaragaman biota laut yang menakjubkan.',
                'image' => 'raja-ampat.jpg',
                'ticket_price' => 500000,
            ],
            [
                'name' => 'Gunung Bromo',
                'region' => 'Jawa Timur',
                'description' => 'Gunung Bromo menawarkan panorama pegunungan, lautan pasir, dan pemandangan matahari terbit yang memukau.',
                'image' => 'bromo.jpg',
                'ticket_price' => 50000,
            ],
            [
                'name' => 'Kawah Ijen',
                'region' => 'Jawa Timur',
                'description' => 'Kawah Ijen memiliki danau kawah berwarna toska dan fenomena api biru yang menjadi daya tarik wisata alam.',
                'image' => 'kawah-ijen.jpg',
                'ticket_price' => 100000,
            ],
            [
                'name' => 'Danau Toba',
                'region' => 'Sumatera Utara',
                'description' => 'Danau Toba merupakan danau vulkanik yang luas dengan panorama perbukitan dan Pulau Samosir di tengahnya.',
                'image' => 'danau-toba.jpg',
                'ticket_price' => 20000,
            ],
            [
                'name' => 'Taman Nasional Komodo',
                'region' => 'Nusa Tenggara Timur',
                'description' => 'Taman Nasional Komodo menawarkan alam kepulauan yang indah, pantai eksotis, dan habitat asli komodo.',
                'image' => 'pulau-komodo.jpg',
                'ticket_price' => 150000,
            ],
            [
                'name' => 'Nusa Penida',
                'region' => 'Bali',
                'description' => 'Nusa Penida memiliki tebing pantai yang dramatis, air laut jernih, dan panorama alam yang terkenal.',
                'image' => 'nusa-penida.jpg',
                'ticket_price' => 25000,
            ],
            [
                'name' => 'Taman Nasional Baluran',
                'region' => 'Jawa Timur',
                'description' => 'Taman Nasional Baluran dikenal dengan savana luas, satwa liar, dan pemandangan alam yang menyerupai Afrika.',
                'image' => 'baluran.jpg',
                'ticket_price' => 20000,
            ],
            [
                'name' => 'Kepulauan Derawan',
                'region' => 'Kalimantan Timur',
                'description' => 'Kepulauan Derawan memiliki pantai berpasir putih, terumbu karang, dan kehidupan bawah laut yang menarik.',
                'image' => 'derawan.jpg',
                'ticket_price' => 35000,
            ],
            [
                'name' => 'Air Terjun Tumpak Sewu',
                'region' => 'Lumajang, Jawa Timur',
                'description' => 'Air Terjun Tumpak Sewu memiliki aliran air yang membentuk tirai melingkar dengan latar tebing hijau yang megah.',
                'image' => 'tumpak-sewu.jpg',
                'ticket_price' => 20000,
            ],
            [
                'name' => 'Pantai Kelingking',
                'region' => 'Nusa Penida, Bali',
                'description' => 'Pantai Kelingking terkenal dengan tebing berbentuk unik, pasir pantai, dan panorama laut biru dari ketinggian.',
                'image' => 'pantai-kelingking.jpg',
                'ticket_price' => 25000,
            ],
            [
                'name' => 'Taman Nasional Wakatobi',
                'region' => 'Sulawesi Tenggara',
                'description' => 'Wakatobi merupakan kawasan wisata bahari dengan terumbu karang dan keanekaragaman hayati laut yang kaya.',
                'image' => 'wakatobi.jpg',
                'ticket_price' => 50000,
            ],
            [
                'name' => 'Gunung Rinjani',
                'region' => 'Nusa Tenggara Barat',
                'description' => 'Gunung Rinjani menawarkan jalur pendakian, panorama pegunungan, dan Danau Segara Anak yang indah.',
                'image' => 'gunung-rinjani.jpg',
                'ticket_price' => 150000,
            ],
        ];

        foreach ($destinations as $destination) {
            Destination::updateOrCreate(
                ['name' => $destination['name']],
                $destination
            );
        }
    }
}

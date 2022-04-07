<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lokasi::create([
            'lokasi' => 'Plumbon',
            'keterangan' => 'Kec. Indramayu, Kab. Indramayu',
        ]);
        
        Lokasi::create([
            'lokasi' => 'Telukagung',
            'keterangan' => 'Kec. Indramayu, Kab. Jatibarang',
        ]);

        Lokasi::create([
            'lokasi' => 'Sindang',
            'keterangan' => 'Kec. Indramayu, Kab. Indramayu',
        ]);

    }
}

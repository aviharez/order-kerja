<?php

use Illuminate\Database\Seeder;
use App\Model\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = new Pegawai([
            'no_badge' => '3851784',
            'nama' => 'Ahmad Memed',
            'kd_pusat_biaya' => '50000110',
            'org_name' => 'Departemen Pengamanan',
            'unit_kerja' => 'Departemen Pengamanan'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851785',
            'nama' => 'Herman',
            'kd_pusat_biaya' => '50002341',
            'org_name' => 'Seksi Pengantongan Shift group D',
            'unit_kerja' => 'Departemen Pengantongan & Prod'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851787',
            'nama' => 'Deni Subena Pangabean',
            'kd_pusat_biaya' => '50000126',
            'org_name' => 'Departemen Pengembangan',
            'unit_kerja' => 'Departemen Pengembangan'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851789',
            'nama' => 'Husni',
            'kd_pusat_biaya' => '50002340',
            'org_name' => 'Seksi Pengantongan Shift Group C',
            'unit_kerja' => 'Departemen Pengantongan & Prod'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851790',
            'nama' => 'Dayat Rustandi',
            'kd_pusat_biaya' => '50000129',
            'org_name' => 'Departemen Riset',
            'unit_kerja' => 'Departemen Riset'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851792',
            'nama' => 'Gani Sutomo',
            'kd_pusat_biaya' => '50000493',
            'org_name' => 'Seksi Pengantongan Shift Group A',
            'unit_kerja' => 'Departemen Pengantongan & Prod'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851793',
            'nama' => 'Budi Utomo',
            'kd_pusat_biaya' => '50002339',
            'org_name' => 'Seksi Pengantongan Shift Group B',
            'unit_kerja' => 'Departemen Pengantongan & Prod'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851794',
            'nama' => 'Toni Subekti',
            'kd_pusat_biaya' => '50000103',
            'org_name' => 'Sekretariat Perusahaan',
            'unit_kerja' => 'Sekretariat Perusahaan'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851797',
            'nama' => 'Abd. Rahman',
            'kd_pusat_biaya' => '50002339',
            'org_name' => 'Seksi Pengantongan Shift Group B',
            'unit_kerja' => 'Departemen Pengantongan & Prod'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851862',
            'nama' => 'Sari Rahmati Gusti',
            'kd_pusat_biaya' => '50000106',
            'org_name' => 'Direktorat SDM & Umum',
            'unit_kerja' => 'Direktorat SDM & Umum'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851871',
            'nama' => 'Ruwet Hadsuseno',
            'kd_pusat_biaya' => '50000803',
            'org_name' => 'Bag Penerimaan & Pengl. Gdg Suku',
            'unit_kerja' => 'Departemen Material'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851872',
            'nama' => 'Bowo Hartono',
            'kd_pusat_biaya' => '50000118',
            'org_name' => 'Departemen Produksi - 1A',
            'unit_kerja' => 'Departemen Produksi - 1A'
        ]);
        $pegawai->save();

        $pegawai = new Pegawai([
            'no_badge' => '3851873',
            'nama' => 'Toha Mahpudin Al Ansori',
            'kd_pusat_biaya' => '50000469',
            'org_name' => 'Bagian Transport',
            'unit_kerja' => 'Departemen Pelayanan Umum'
        ]);
        $pegawai->save();
    }
}

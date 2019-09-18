<?php

use Illuminate\Database\Seeder;
use App\Model\Executor;

class ExecutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $executor = new Executor([
            'id' => 'F1',
            'nama' => 'Pemeliharaan Lapangan Unit Amoniak',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'F2',
            'nama' => 'Pemeliharaan Lapangan Unit Urea',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'F3',
            'nama' => 'Pemeliharaan Lapangan Unit Utilitas',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'F4',
            'nama' => 'Pemeliharaan Lapangan Unit Pengantongan',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'F5',
            'nama' => 'Pemeliharaan Lapangan Pabrik Karung Plastik',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'F6',
            'nama' => 'Pemeliharaan Lapangan Di Luar Pabrik',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'S1',
            'nama' => 'Bengkel Permesinan',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'S2',
            'nama' => 'Bengkel Perpipaan dan Pengelasan',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'S3',
            'nama' => 'Bengkel Pertukangan',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'INP',
            'nama' => 'Inspeksi Teknik',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'G.E',
            'nama' => 'General Engineering',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'JT',
            'nama' => 'Jasa Teknik',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'A2K',
            'nama' => 'Alat-Alat Konstruksi',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'P.E',
            'nama' => 'Proccess Engineering',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'LAB',
            'nama' => 'Laboratorium',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'PRO',
            'nama' => 'Produksi',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'KPK',
            'nama' => 'Keselamatan dan Pemadam Kebakaran',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'PAM',
            'nama' => 'Pengamanan',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'L1',
            'nama' => 'Pemeliharaan Listrik Pabrik',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'L2',
            'nama' => 'Pemeliharaan Listrik Di Luar Pabrik',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'L3',
            'nama' => 'Bengkel Listrik',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'I1',
            'nama' => 'Bengkel Instrumen',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'I2',
            'nama' => 'Pemeliharaan Telkom',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'I3',
            'nama' => 'Pemeliharaan Instrumen Lapangan',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'IPP',
            'nama' => 'Industri Peralatan Pabrik',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'UM',
            'nama' => 'Biro Umum',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'JPI',
            'nama' => 'Unit Jasa Pelayanan Industri',
            'category' => 'Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

        $executor = new Executor([
            'id' => 'RB',
            'nama' => 'Biro Rancang Bangun',
            'category' => 'Non Pabrik',
            'pic' => '',
            'email' => '',
            'no_telp' => ''
        ]);
        $executor->save();

    }
}

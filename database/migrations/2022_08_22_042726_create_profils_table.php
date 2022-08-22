<?php

use App\Models\Bantuan;
use App\Models\Harta;
use App\Models\Kecacatan;
use App\Models\Negeri_mukim;
use App\Models\Negeri_parlimen;
use App\Models\Pendapatan;
use App\Models\Penyakit;
use App\Models\Perbelanjaan;
use App\Models\Profil_kategori;
use App\Models\Simpanan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->longText('nama')->nullable();

            $table->foreignIdFor(Profil_kategori::class);
            $table->foreignIdFor(Info_kampung::class);
            $table->foreignIdFor(Lokaliti::class);
            $table->foreignIdFor(Pendapatan::class);
            $table->foreignIdFor(Kecacatan::class);
            $table->foreignIdFor(Harta::class);
            $table->foreignIdFor(Simpanan::class);
            $table->foreignIdFor(Penyakit::class);
            $table->foreignIdFor(Perbelanjaan::class);
            $table->foreignIdFor(Bantuan::class);
            $table->foreignIdFor(Negeri_mukim::class);
            $table->foreignIdFor(Negeri_parlimen::class);


            $table->string('no_kad_pengenalan')->nullable();
            $table->string('jumlah_pendapatan_per_kapita')->nullable();
            $table->string('jumlah_isi_rumah')->nullable();
            $table->string('status_miskin')->nullable();
            $table->string('status_terkeluar')->nullable();
            $table->string('alamat1')->nullable();
            $table->string('alamat2')->nullable();
            $table->string('alamat3')->nullable();
            $table->string('poskod')->nullable();
            $table->string('longtitude_gps')->nullable();
            $table->string('latitude_gps')->nullable();
            $table->string('no_telefon_tetap')->nullable();
            $table->string('no_telefon_bimbit')->nullable();
            $table->string('tarikh_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('tahun_kelahiran')->nullable();
            $table->string('jantina')->nullable();
            $table->string('kumpulan_etnik')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkahwinan')->nullable();
            $table->string('taraf_pendidikan')->nullable();
            $table->string('maklumat_institusi_pendidikan')->nullable();
            $table->string('taraf_sijil_tertinggi')->nullable();
            $table->string('kemahiran_yang_dimiliki')->nullable();
            $table->string('status_pekerjaan_utama')->nullable();
            $table->string('jenis_pekerjaan')->nullable();
            $table->string('jika_ada_kecacatan')->nullable();
            $table->string('status_produktiviti')->nullable();
            $table->string('punca_pendapatan')->nullable();
            $table->string('kumpulan_perbelanjaan')->nullable();
            $table->string('jenis_bantuan_kebajikan_yang_diterima')->nullable();
            $table->string('jenis_bantuan_kebajikan_yang_diperlukan')->nullable();

            $table->string('user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
};

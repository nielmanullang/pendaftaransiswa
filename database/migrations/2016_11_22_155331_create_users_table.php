<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namalengkap')->nullable();
            $table->string('username')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->date('tempatlahir')->nullable();
            $table->string('tanggallahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('notelpon')->nullable();
            $table->string('nisn')->nullable();
            $table->string('niksiswa')->nullable();
            $table->string('nikayah')->nullable();
            $table->string('nikibu')->nullable();
            $table->string('password')->nullable();
            $table->foreign('role_id', 'fk_253_role_role_id_user')->references('id')->on('roles');
            $table->string('remember_token')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

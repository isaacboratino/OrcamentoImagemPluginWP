<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nome', 80);
            $table->string('email', 120);
            $table->string('celular', 15);
            $table->date('data_cadastro');
            $table->timestamps();

            $table->unique('id');
        });
    }

    /*
    CREATE TABLE IF NOT EXISTS `mydb`.`cliente` (
        `id` INT NOT NULL,
        `nome` VARCHAR(80) NULL,
        `email` VARCHAR(120) NOT NULL,
        `celular` VARCHAR(15) NULL,
        `data_cadastro` DATE NULL,
        PRIMARY KEY (`id`),
        UNIQUE INDEX `id_UNIQUE` (`id` ASC))
        ENGINE = InnoDB
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente');
    }
}

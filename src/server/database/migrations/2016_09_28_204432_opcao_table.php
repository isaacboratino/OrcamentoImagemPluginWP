<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OpcaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 120)->nullable();
            $table->string('descricao_1', 1000)->nullable();
            $table->string('descricao_2', 1000)->nullable();
            $table->string('imagem_url', 2000)->nullable();
            $table->integer('ordem')->nullable();
            $table->string('subopcao', 4)->nullable();
            $table->string('tags', 1000)->nullable();
            $table->char('ativo', 1)->default('S');
            $table->timestamps();

            $table->unique('id');

            $table->integer('opcao_tipo_id')->unsigned();
            $table->foreign('opcao_tipo_id')
                ->references('id')
                ->on('opcao_tipo')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /*
    CREATE TABLE IF NOT EXISTS `mydb`.`opcao` (
        `id` INT NOT NULL,
        `nome` VARCHAR(120) NULL,
        `descricao_1` VARCHAR(1000) NULL,
        `descricao_2` VARCHAR(1000) NULL,
        `imagem_url` VARCHAR(2000) NULL,
        `ordem` INT NULL,
        `tags` VARCHAR(1000) NULL,
        `ativo` CHAR(1) NULL DEFAULT 'S',
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
        Schema::drop('opcao');
    }
}

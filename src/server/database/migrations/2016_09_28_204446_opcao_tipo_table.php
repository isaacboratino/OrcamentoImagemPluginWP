<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OpcaoTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcao_tipo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 80);
            $table->char('ativo', 1)->default('S');
            $table->timestamps();

            $table->unique('id');            
        });
    }

    /*
    CREATE TABLE IF NOT EXISTS `mydb`.`opcao_tipo` (
        `id` INT NOT NULL,
        `nome` VARCHAR(80) NOT NULL,
        `ativo` CHAR(1) NULL DEFAULT 'S',
        `opcao_id` INT NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE INDEX `id_UNIQUE` (`id` ASC),
        UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
        INDEX `fk_produto_tipo_produto1_idx` (`opcao_id` ASC),
        CONSTRAINT `fk_produto_tipo_produto1`
            FOREIGN KEY (`opcao_id`)
            REFERENCES `mydb`.`opcao` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION)
        ENGINE = InnoDB
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opcao_tipo');
    }
}

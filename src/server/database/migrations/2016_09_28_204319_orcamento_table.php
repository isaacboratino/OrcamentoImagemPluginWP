<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrcamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('previsao_nascimento');
            $table->string('nome_bebe', 80);
            $table->string('email', 120);
            $table->string('informacoes_adicionais', 2000);
            $table->string('CEP', 9);
            $table->string('logradouro', 160);
            $table->string('numero', 45);
            $table->string('complemento', 45);
            $table->string('bairro', 80);
            $table->string('municipio', 80);
            $table->char('uf', 2);
            $table->decimal('valor_total', 10, 2);
            $table->timestamps();

            $table->unique('id');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')
                ->references('id')
                ->on('cliente')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /*
    CREATE TABLE IF NOT EXISTS `mydb`.`orcamento` (
        `id` INT NOT NULL,
        `previsao_nascimento` DATETIME NULL,
        `nome_bebe` VARCHAR(80) NULL,
        `informacoes_adicionais` VARCHAR(2000) NULL,
        `CEP` VARCHAR(9) NULL,
        `logradouro` VARCHAR(160) NULL,
        `numero` VARCHAR(45) NULL,
        `complemento` VARCHAR(45) NULL,
        `bairro` VARCHAR(80) NULL,
        `cidade` VARCHAR(80) NULL,
        `uf` CHAR(2) NULL,
        `valor_total` DECIMAL(10,2) NULL,
        `cliente_id` INT NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE INDEX `id_UNIQUE` (`id` ASC),
        INDEX `fk_orcamento_cliente_idx` (`cliente_id` ASC),
        CONSTRAINT `fk_orcamento_cliente`
            FOREIGN KEY (`cliente_id`)
            REFERENCES `mydb`.`cliente` (`id`)
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
        Schema::drop('orcamento');
    }
}

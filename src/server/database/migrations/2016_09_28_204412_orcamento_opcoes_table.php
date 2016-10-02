<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrcamentoOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento_opcoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
            $table->decimal('valor', 10, 2);
            $table->string('observacao', 120);
            $table->timestamps();

            $table->unique('id');

            $table->integer('orcamento_id')->unsigned();
            $table->foreign('orcamento_id')
                ->references('id')
                ->on('orcamento')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->integer('opcao_id')->unsigned();
            $table->foreign('opcao_id')
                ->references('id')
                ->on('opcao')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /*
    CREATE TABLE IF NOT EXISTS `mydb`.`orcamento_opcoes` (
        `quantidade` INT NULL,
        `valor` DECIMAL(10,2) NULL,
        `observacao` VARCHAR(120) NULL,
        `orcamento_id` INT NOT NULL,
        `opcao_id` INT NOT NULL,
        INDEX `fk_orcamento_produtos_orcamento1_idx` (`orcamento_id` ASC),
        INDEX `fk_orcamento_produtos_produto1_idx` (`opcao_id` ASC),
        CONSTRAINT `fk_orcamento_produtos_orcamento1`
            FOREIGN KEY (`orcamento_id`)
            REFERENCES `mydb`.`orcamento` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION,
        CONSTRAINT `fk_orcamento_produtos_produto1`
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
        Schema::drop('orcamento_opcoes');
    }
}

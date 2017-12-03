<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoacaoFixture
 *
 */
class DoacaoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'doacao';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'doador_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Quem vai fornecer', 'precision' => null, 'autoIncrement' => null],
        'endereco' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'data_inicio' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'data_fim' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tipo_doacao_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Sopa (Litros). Comida', 'precision' => null, 'autoIncrement' => null],
        'quantidade' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doacao_status_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Reservado, Ativo ...', 'precision' => null, 'autoIncrement' => null],
        'voluntario_id' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Quem vai pegar', 'precision' => null, 'autoIncrement' => null],
        'data_saida' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Hora que vai pegar', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'doador_id' => ['type' => 'index', 'columns' => ['doador_id'], 'length' => []],
            'tipo_comida_id' => ['type' => 'index', 'columns' => ['tipo_doacao_id'], 'length' => []],
            'doacao_status_id' => ['type' => 'index', 'columns' => ['doacao_status_id'], 'length' => []],
            'voluntario_id' => ['type' => 'index', 'columns' => ['voluntario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'doacao_ibfk_1' => ['type' => 'foreign', 'columns' => ['doador_id'], 'references' => ['doador', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'doacao_ibfk_2' => ['type' => 'foreign', 'columns' => ['tipo_doacao_id'], 'references' => ['doacao_tipo', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'doacao_ibfk_3' => ['type' => 'foreign', 'columns' => ['doacao_status_id'], 'references' => ['doacao_status', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'doacao_ibfk_4' => ['type' => 'foreign', 'columns' => ['voluntario_id'], 'references' => ['voluntario', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'doador_id' => 1,
            'endereco' => 'Lorem ipsum dolor sit amet',
            'data_inicio' => '2017-12-03 02:21:24',
            'data_fim' => '2017-12-03 02:21:24',
            'tipo_doacao_id' => 1,
            'quantidade' => 'Lorem ipsum dolor sit amet',
            'doacao_status_id' => 1,
            'voluntario_id' => 1,
            'data_saida' => '2017-12-03 02:21:24',
            'created' => '2017-12-03 02:21:24',
            'modified' => '2017-12-03 02:21:24'
        ],
    ];
}

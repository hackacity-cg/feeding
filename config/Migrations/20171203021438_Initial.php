<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('doacao')
            ->addColumn('doador_id', 'integer', [
                'comment' => 'Quem vai fornecer',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('endereco', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('data_inicio', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('data_fim', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tipo_doacao_id', 'integer', [
                'comment' => 'Sopa (Litros). Comida',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('quantidade', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('doacao_status_id', 'integer', [
                'comment' => 'Reservado, Ativo ...',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('voluntario_id', 'integer', [
                'comment' => 'Quem vai pegar',
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('data_saida', 'datetime', [
                'comment' => 'Hora que vai pegar',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'doacao_status_id',
                ]
            )
            ->addIndex(
                [
                    'doador_id',
                ]
            )
            ->addIndex(
                [
                    'tipo_doacao_id',
                ]
            )
            ->addIndex(
                [
                    'voluntario_id',
                ]
            )
            ->create();

        $this->table('doacao_status')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => false,
            ])
            ->create();

        $this->table('doacao_tipo')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('doador')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('cpf', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('cnpj', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('telefone', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('endereco', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('numero', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('nivel_feeding', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('situacao_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addIndex(
                [
                    'situacao_id',
                ]
            )
            ->create();

        $this->table('situacao_cadastro')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('voluntario_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('doador_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('situacao_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addIndex(
                [
                    'doador_id',
                ]
            )
            ->addIndex(
                [
                    'situacao_id',
                ]
            )
            ->addIndex(
                [
                    'voluntario_id',
                ]
            )
            ->create();

        $this->table('voluntario')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('cnpj', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('telefone', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('endereco', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('numero', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('situacao_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addIndex(
                [
                    'situacao_id',
                ]
            )
            ->create();

        $this->table('doacao')
            ->addForeignKey(
                'doacao_status_id',
                'doacao_status',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'doador_id',
                'doador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'tipo_doacao_id',
                'doacao_tipo',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'voluntario_id',
                'voluntario',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('doador')
            ->addForeignKey(
                'situacao_id',
                'situacao_cadastro',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('users')
            ->addForeignKey(
                'doador_id',
                'doador',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'situacao_id',
                'situacao_cadastro',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'voluntario_id',
                'voluntario',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('voluntario')
            ->addForeignKey(
                'situacao_id',
                'situacao_cadastro',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('doacao')
            ->dropForeignKey(
                'doacao_status_id'
            )
            ->dropForeignKey(
                'doador_id'
            )
            ->dropForeignKey(
                'tipo_doacao_id'
            )
            ->dropForeignKey(
                'voluntario_id'
            );

        $this->table('doador')
            ->dropForeignKey(
                'situacao_id'
            );

        $this->table('users')
            ->dropForeignKey(
                'doador_id'
            )
            ->dropForeignKey(
                'situacao_id'
            )
            ->dropForeignKey(
                'voluntario_id'
            );

        $this->table('voluntario')
            ->dropForeignKey(
                'situacao_id'
            );

        $this->dropTable('doacao');
        $this->dropTable('doacao_status');
        $this->dropTable('doacao_tipo');
        $this->dropTable('doador');
        $this->dropTable('situacao_cadastro');
        $this->dropTable('users');
        $this->dropTable('voluntario');
    }
}

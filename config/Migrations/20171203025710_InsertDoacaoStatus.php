<?php
use Migrations\AbstractMigration;

class InsertDoacaoStatus extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $data = [
            [
                'id'=> 1,
                'nome' => 'ativo'
            ],
            [
                'id'=> 2,
                'nome' => 'reservado'
            ],
            [
                'id'=> 3,
                'nome' => 'entregue'
            ],
            [
                'id'=> 4,
                'nome' => 'vencido'
            ]
        ];

        $posts = $this->table('doacao_status');
        $posts->insert($data)
            ->save();
    }
}

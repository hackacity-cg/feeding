<?php
use Migrations\AbstractMigration;

class InsertSituacaoCad extends AbstractMigration
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
                'nome' => 'excluido'
            ]
        ];

        $posts = $this->table('situacao_cadastro');
        $posts->insert($data)
            ->save();
    }
}

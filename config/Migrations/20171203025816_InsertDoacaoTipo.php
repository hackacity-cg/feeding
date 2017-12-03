<?php
use Migrations\AbstractMigration;

class InsertDoacaoTipo extends AbstractMigration
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
                'nome' => 'liquido',
                'created' => date('Y-m-d H:i:s'),
                'modified' =>  date('Y-m-d H:i:s')
            ],
            [
                'id'=> 2,
                'nome' => 'solido',
                'created' => date('Y-m-d H:i:s'),
                'modified' =>  date('Y-m-d H:i:s')
            ]
        ];

        $posts = $this->table('doacao_tipo');
        $posts->insert($data)
            ->save();
    }
}

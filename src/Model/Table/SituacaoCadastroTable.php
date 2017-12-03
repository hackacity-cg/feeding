<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SituacaoCadastro Model
 *
 * @method \App\Model\Entity\SituacaoCadastro get($primaryKey, $options = [])
 * @method \App\Model\Entity\SituacaoCadastro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SituacaoCadastro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SituacaoCadastro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SituacaoCadastro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SituacaoCadastro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SituacaoCadastro findOrCreate($search, callable $callback = null, $options = [])
 */
class SituacaoCadastroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('situacao_cadastro');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }
}

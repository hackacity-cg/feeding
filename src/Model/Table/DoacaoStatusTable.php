<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DoacaoStatus Model
 *
 * @property \App\Model\Table\DoacaoTable|\Cake\ORM\Association\HasMany $Doacao
 *
 * @method \App\Model\Entity\DoacaoStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\DoacaoStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DoacaoStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DoacaoStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DoacaoStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DoacaoStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DoacaoStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class DoacaoStatusTable extends Table
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

        $this->setTable('doacao_status');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Doacao', [
            'foreignKey' => 'doacao_status_id'
        ]);
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

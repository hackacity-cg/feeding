<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Voluntario Model
 *
 * @property \App\Model\Table\SituacaoCadastroTable|\Cake\ORM\Association\BelongsTo $SituacaoCadastro
 * @property \App\Model\Table\DoacaoTable|\Cake\ORM\Association\HasMany $Doacao
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Voluntario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Voluntario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Voluntario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Voluntario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Voluntario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Voluntario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Voluntario findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VoluntarioTable extends Table
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

        $this->setTable('voluntario');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SituacaoCadastro', [
            'foreignKey' => 'situacao_id'
        ]);
        $this->hasMany('Doacao', [
            'foreignKey' => 'voluntario_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'voluntario_id'
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
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('cnpj');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('endereco');

        $validator
            ->allowEmpty('numero');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['situacao_id'], 'SituacaoCadastro'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doador Model
 *
 * @property \App\Model\Table\SituacaoCadastroTable|\Cake\ORM\Association\BelongsTo $SituacaoCadastro
 * @property \App\Model\Table\DoacaoTable|\Cake\ORM\Association\HasMany $Doacao
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Doador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Doador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Doador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Doador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doador findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoadorTable extends Table
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

        $this->setTable('doador');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SituacaoCadastro', [
            'foreignKey' => 'situacao_id'
        ]);
        $this->hasMany('Doacao', [
            'foreignKey' => 'doador_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'doador_id'
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
            ->allowEmpty('cpf');

        $validator
            ->allowEmpty('cnpj');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('endereco');

        $validator
            ->allowEmpty('numero');

        $validator
            ->allowEmpty('nivel_feeding');

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

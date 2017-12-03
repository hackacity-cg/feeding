<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doacao Model
 *
 * @property \App\Model\Table\DoadorTable|\Cake\ORM\Association\BelongsTo $Doador
 * @property \App\Model\Table\DoacaoTipoTable|\Cake\ORM\Association\BelongsTo $DoacaoTipo
 * @property \App\Model\Table\DoacaoStatusTable|\Cake\ORM\Association\BelongsTo $DoacaoStatus
 * @property \App\Model\Table\VoluntarioTable|\Cake\ORM\Association\BelongsTo $Voluntario
 *
 * @method \App\Model\Entity\Doacao get($primaryKey, $options = [])
 * @method \App\Model\Entity\Doacao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Doacao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doacao|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doacao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Doacao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doacao findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoacaoTable extends Table
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

        $this->setTable('doacao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Doador', [
            'foreignKey' => 'doador_id'
        ]);
        $this->belongsTo('DoacaoTipo', [
            'foreignKey' => 'tipo_doacao_id'
        ]);
        $this->belongsTo('DoacaoStatus', [
            'foreignKey' => 'doacao_status_id'
        ]);
        $this->belongsTo('Voluntario', [
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
            ->allowEmpty('endereco');

        $validator
            ->dateTime('data_inicio')
            ->allowEmpty('data_inicio');

        $validator
            ->dateTime('data_fim')
            ->allowEmpty('data_fim');

        $validator
            ->allowEmpty('quantidade');

        $validator
            ->dateTime('data_saida')
            ->allowEmpty('data_saida');

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
        $rules->add($rules->existsIn(['doador_id'], 'Doador'));
        $rules->add($rules->existsIn(['tipo_doacao_id'], 'DoacaoTipo'));
        $rules->add($rules->existsIn(['doacao_status_id'], 'DoacaoStatus'));
        $rules->add($rules->existsIn(['voluntario_id'], 'Voluntario'));

        return $rules;
    }
}

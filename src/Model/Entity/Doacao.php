<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doacao Entity
 *
 * @property int $id
 * @property int $doador_id
 * @property string $endereco
 * @property \Cake\I18n\FrozenTime $data_inicio
 * @property \Cake\I18n\FrozenTime $data_fim
 * @property int $tipo_doacao_id
 * @property string $quantidade
 * @property int $doacao_status_id
 * @property int $voluntario_id
 * @property \Cake\I18n\FrozenTime $data_saida
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Doador $doador
 * @property \App\Model\Entity\DoacaoTipo $doacao_tipo
 * @property \App\Model\Entity\DoacaoStatus $doacao_status
 * @property \App\Model\Entity\Voluntario $voluntario
 */
class Doacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}

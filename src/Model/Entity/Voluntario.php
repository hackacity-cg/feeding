<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Voluntario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cnpj
 * @property string $telefone
 * @property string $endereco
 * @property string $numero
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $situacao_id
 *
 * @property \App\Model\Entity\SituacaoCadastro $situacao_cadastro
 * @property \App\Model\Entity\Doacao[] $doacao
 * @property \App\Model\Entity\User[] $users
 */
class Voluntario extends Entity
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

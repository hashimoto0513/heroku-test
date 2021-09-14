<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Card Entity
 *
 * @property int $id
 * @property int|null $CardNumber
 * @property string|null $CardName
 * @property string $color
 * @property int $cost
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $version_id
 * @property int $rarity_id
 *
 * @property \App\Model\Entity\Version $version
 * @property \App\Model\Entity\Rarity $rarity
 */
class Card extends Entity
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
        'CardNumber' => true,
        'CardName' => true,
        'color' => true,
        'cost' => true,
        'created' => true,
        'modified' => true,
        'version_id' => true,
        'rarity_id' => true,
        'version' => true,
        'rarity' => true,
    ];
}

<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $edited
 * @property string|null $tags
 * @property string $slug
 * @property string|null $thumbnail
 * @property string|null $description
 * @property string $body
 */
class Project extends Entity
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
        'title' => true,
        'created' => true,
        'edited' => true,
        'tags' => true,
        'slug' => true,
        'thumbnail' => true,
        'description' => true,
        'body' => true,
    ];
}

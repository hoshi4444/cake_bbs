<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property int $postId
 * @property int $resId
 * @property string $title
 * @property string $name
 * @property string $content
 * @property string|null $img_name
 * @property string|null $img_ext
 * @property int|null $img_size
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Post extends Entity
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
        'postId' => true,
        'resId' => true,
        'title' => true,
        'name' => true,
        'content' => true,
        'img_name' => true,
        'img_ext' => true,
        'img_size' => true,
        'created' => true,
        'modified' => true
    ];
}

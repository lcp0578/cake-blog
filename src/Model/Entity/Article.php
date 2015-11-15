<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity.
 *
 * @property string $id
 * @property string $title
 * @property string $category_id
 * @property \App\Model\Entity\Category $category
 * @property string $tags
 * @property string $keywords
 * @property string $introduce
 * @property int $hits
 * @property bool $is_recommend
 * @property string $photo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $editor
 * @property bool $status
 * @property int $commenced
 * @property \App\Model\Entity\Comment[] $comments
 */
class Article extends Entity
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
        'id' => false,
    ];
}

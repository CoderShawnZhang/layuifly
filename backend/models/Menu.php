<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%menu}}".
 *
 * @property int $id 菜单ID
 * @property string $route 菜单路由
 * @property string $title 菜单标题
 * @property int $status 菜单状态
 * @property string $parent 父级菜单
 * @property string $icon 菜单图标
 * @property string $top 顶级菜单
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%menu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['route', 'title'], 'string', 'max' => 20],
            [['parent', 'icon', 'top'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'route' => 'Route',
            'title' => 'Title',
            'status' => 'Status',
            'parent' => 'Parent',
            'icon' => 'Icon',
            'top' => 'Top',
        ];
    }
}

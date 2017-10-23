<?php

namespace mdm\admin\controllers;

use mdm\admin\components\ItemController;
use yii\rbac\Item;

/**
 * PermissionController implements the CRUD actions for AuthItem model.
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class PermissionController extends ItemController
{

    /**
     * @inheritdoc
     */
    public function labels()
    {
        return[
            'Item' => \Yii::t('rbac-admin','Permission'),
            'Items' => 'Permissions',
            'flag'=>'权限、操作',
        ];
    }

    /**
     * @inheritdoc
     */
    public function getType()
    {
        return Item::TYPE_PERMISSION;
    }
}

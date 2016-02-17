<?php
/**
 * @Created Volodymyr Sitdikov
 * @mail vovasit90@gmail.com
 */

namespace common\components\SimpleAccess;
use yii\filters\AccessControl;
use common\components\SimpleAccess\SimpleAccessRule;


class SimpleAccessControl extends AccessControl {

    public $ruleConfig = ['class' => 'common\components\SimpleAccess\SimpleAccessRule'];

}
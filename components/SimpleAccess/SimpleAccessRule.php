<?php
/**
 * @Created Volodymyr Sitdikov
 * @mail vovasit90@gmail.com
 */

namespace common\components\SimpleAccess;
use yii\filters\AccessRule;


class SimpleAccessRule extends AccessRule {

    protected function matchRole($user)
    {
        if (empty($this->roles)) {
            return true;
        }
        foreach ($this->roles as $role) {
            if ($role === '?') {
                if ($user->getIsGuest()) {
                    return true;
                }
            } elseif ($role === '@') {
                if (!$user->getIsGuest()) {
                    return true;
                }
            } elseif (!$user->getIsGuest()) {
                $identity = $user->identity;
                /** @var $identity SimpleAccessInterface */
                if (strtolower($role) === strtolower($identity->getUserRole())) {
                    return true;
                }
            }
        }

        return false;
    }

}
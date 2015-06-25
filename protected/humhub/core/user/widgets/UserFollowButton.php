<?php

/**
 * HumHub
 * Copyright © 2014 The HumHub Project
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 */

namespace humhub\core\user\widgets;

/**
 * UserFollowButtonWidget
 *
 * @author luke
 * @package humhub.modules_core.user.widgets
 * @since 0.11
 */
class UserFollowButton extends \yii\base\Widget
{

    public $user;

    public function run()
    {
        if ($this->user->isCurrentUser() || \Yii::$app->user->isGuest) {
            return;
        }

        return $this->render('followButton', array('user' => $this->user));
    }

}
<?php

/**
 * NotificationListWidget shows an stream of notifications for an user at the top menu.
 *
 * @author andystrobel
 * @package humhub.modules_core.notification
 * @since 0.5
 */
class NotificationListWidget extends HWidget
{

    /**
     * Runs the notification widget
     */
    public function run()
    {
        if (Yii::app()->user->isGuest)
            return;

        $this->render('list', array());
    }

}

?>
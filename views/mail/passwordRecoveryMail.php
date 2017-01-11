<?php
/**
 * @var $this yii\web\View
* @var $user webvimark\modules\UserManagement\models\User
*/

use yii\helpers\Html;
use webvimark\modules\UserManagement\UserManagementModule;

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['/user-management/auth/password-recovery-receive', 'token' => $user->confirmation_token ]);
$username = Html::encode($user->username);

?>

<?= UserManagementModule::t('front', 'Hello {username}, follow this link to reset your password:', ['username' => $username]) ?>


<?= Html::a(UserManagementModule::t('front', 'Reset password'), $resetLink) ?>
<?php
/**
 * @var $this yii\web\View
* @var $user webvimark\modules\UserManagement\models\User
*/
use yii\helpers\Html;

?>
<?php
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['/user-management/auth/confirm-email-receive', 'token' => $user->confirmation_token]);
$username = Html::encode($user->username);
?>

<?= UserManagementModule::t('front', 'Hello {username}, follow this link to confirm your email:', ['username' => $username]) ?>

<?= Html::a(UserManagementModule::t('front', 'Confirm E-mail'), $resetLink) ?>
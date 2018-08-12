<?php
/**
 * @var $this yii\web\View
* @var $user webvimark\modules\UserManagement\models\User
*/
use yii\helpers\Html;
use webvimark\modules\UserManagement\UserManagementModule;

?>
<?php
$returnUrl = Yii::$app->user->returnUrl == Yii::$app->homeUrl ? null : rtrim(Yii::$app->homeUrl, '/') . Yii::$app->user->returnUrl;

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/user-management/auth/confirm-registration-email', 'token' => $user->confirmation_token, 'returnUrl'=>$returnUrl]);

$website = Yii::$app->urlManager->hostInfo;
?>

<?= UserManagementModule::t('front', 'Hello, you have been registered on {website}', ['website' => $website]) ?>

<br/><br/>
<?= UserManagementModule::t('front', 'Follow this link to confirm your E-mail and activate account:') ?>


<?= Html::a(UserManagementModule::t('front', 'Confirm E-mail'), $confirmLink) ?>
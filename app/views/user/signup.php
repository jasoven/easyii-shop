<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \yii\easyii\models\User;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \yii\easyii\modules\rbac\models\form\Signup */

$this->title = '注册';
//$this->params['breadcrumbs'][] = $this->title;

$user = new User;
?>

<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="up-form text-left">
                    <?php $form = ActiveForm::begin([
                            'id' => 'form-signup',
                        ]); ?>
                        <?= $form->field($model, 'mobile')->textInput(['placeholder'=>$model->getAttributeLabel('mobile')])->label(false) ?>
                        <?= $form->field($model, 'smscode')->widget(yii\easyii\widgets\SMSCodeInput::className(),['validator'=>'reg','placeholder'=>$model->getAttributeLabel('smscode'),'btnCssClass'=>'btn btn-gray'])->label(false) ?>
                        <?= $form->field($model, 'name')->textInput(['placeholder'=>$model->getAttributeLabel('name')])->label(false) ?>
                        <?= $form->field($model, 'sex')->inline()->dropdownList($user->getSexs())->label(false) ?>
                        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>$model->getAttributeLabel('password')])->label(false) ?>
                        <div class="form-group text-center">
                            <?= Html::submitButton('注 册', ['class' => 'btn btn-circle btn-lg btn-brand', 'name' => 'login-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="up-help">
                    <p>已经有帐号？ <?= Html::a('登录', ['user/login']) ?>.</p>
                </div>
            </div>
        </div>
    </div>
</section>


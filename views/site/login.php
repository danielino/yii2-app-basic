

<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<html>
    <head>
        <style type="text/css">
            .form-signin input[type="text"] {
                margin-bottom: 5px;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
            .form-signin .form-control {
                position: relative;
                font-size: 16px;
                height: auto;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .vertical-offset-100 {
                padding-top: 100px;
            }
            .img-responsive {
                display: block;
                max-width: 100%;
                height: auto;
                margin: auto;
            }
            .form-signin.panel {
                margin-bottom: 20px;
                background-color: rgba(255, 255, 255, 0.75);
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            }
        </style>
    </head>
    <body>
        <div class="container ">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">

                    <div class="panel panel-default form-signin">
                        <div class="panel-heading">                                
                            <img src="/img/login.png" class="img-responsive" alt=""/>
                        </div>
                        <div class="panel-body">
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?php //-- use email or username field depending on model scenario --// ?>

                                <?= $form->field($model, 'username')->input('username', 
                                    ['placeholder' => Yii::t('app', 'Enter your username'), 'autofocus' => true])->label(false) ?>

                            <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app', 'Password')])->label(false) ?>

                            <div class="form-group">
                                <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

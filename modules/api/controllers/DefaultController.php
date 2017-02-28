<?php

namespace app\modules\api\controllers;

use yii\rest\Controller;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;

/**
 * Default controller for the `api` module
 */

class DefaultController extends Controller
{
    
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        
        /* token auth */
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
        ];
        
        return $behaviors;
    }
}

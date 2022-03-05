<?php

namespace frontend\modules\add\controllers;

use Yii;
use common\models\Property;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\PropertyImg;
use yii\web\UploadedFile;
use common\models\VwProperties;
use common\models\FileUpload;
use yii\filters\AccessControl;

/**
 * PropertyController implements the CRUD actions for Property model.
 */
class PropertyController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Property models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->goHome();
    }

    /**
     * Displays a single Property model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Property model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Property();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->user_id = Yii::$app->user->id;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            $model->google_lat = '25.305698';
            $model->google_lng = '51.530991';
            $model->status_id = 1;
            if($model->save()){
                return $this->redirect(['step2', 'id' => $model->property_id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    public function actionStep2($id)
    {
        $model = new FileUpload();
        $property = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
            if ($model->validate()) {
                foreach ($model->imageFiles as $file) {
                    $imgName = '';
                    $imgName = time().$file->name;
                    $file->saveAs('uploads/' . $imgName);
                    $imgModel = new PropertyImg();
                    $imgModel->property_id = $id;
                    $imgModel->img = $imgName;
                    $imgModel->save();
                    unset($imgModel);
                }
                $property->description = Yii::$app->request->post('Property')['description'];
                $property->save();
                return $this->redirect(['step3', 'id' => $id]);
            }
        }
        return $this->render('step2', [
            'model' =>$model,
            'property' =>$property
        ]);
    }
    
    public function actionStep3($id)
    {
        $model = VwProperties::findOne($id);
        $imgs = PropertyImg::findAll(['property_id' => $id]);
        
        if (Yii::$app->request->isPost) {
            $img = PropertyImg::findOne(Yii::$app->request->post('property_img_id'));
            $img->is_cover = 1;
            $img->save();
            return $this->redirect(['publish', 'id' => $id]);
        }
        
        return $this->render('step3', [
            'model' =>$model,
            'imgs' => $imgs,
        ]);
    }
    
    public function actionPublish($id)
    {
        return $this->render('publish');
    }
    /**
     * Updates an existing Property model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->property_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Property model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Property model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Property the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Property::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

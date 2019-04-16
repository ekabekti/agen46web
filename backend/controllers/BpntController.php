<?php

namespace backend\controllers;

use Yii;
use app\models\BpntModel;
use app\models\BpntSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\Pagination;
/**
 * BpntController implements the CRUD actions for BpntModel model.
 */
class BpntController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
//			 'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all BpntModel models.
     * @return mixed
     */
    public function actionIndex()
    {
//		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
//        $searchModel = new BpntSearch();
		$limit = 20;
		$offset = ($_GET['page']-1) * $limit;
		
		
//		 build a DB query to get all articles with status = 1
//		$query = BpntModel::find();
//
//		// get the total number of articles (but do not fetch the article data yet)
//		$count = $query->count();
//
//		// create a pagination object with the total count
//		$pagination = new Pagination(['totalCount' => $count]);
//		
//		var_dump($pagination);exit();
//
//		// limit the query using the pagination and retrieve the articles
//		$bpnt = $query->offset($pagination->offset)
//			->limit($pagination->limit)
//			->all();
//		
//		return $bpnt;
//		
		$rows = (new \yii\db\Query())
			->from('bpnt')
			->orderBy([
					'kecamatan' => SORT_ASC,
				])
//			->where(['last_name' => 'Smith'])
			->limit($limit)
			->offset($offset)
			->all();
		$a = json_encode(array('data'=>$rows),true);
		return $a;
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
// $dataProvider->pagination = [
//            'pageSize' => 100
//        ];
//		return $dataProvider;
//		var_dump($searchModel);
//		die();
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//			
//            'dataProvider' => $dataProvider,
//			
//        ]);
    }

    /**
     * Displays a single BpntModel model.
     * @param string $id
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
     * Creates a new BpntModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BpntModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_bpnt]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BpntModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_bpnt]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BpntModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BpntModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return BpntModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BpntModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

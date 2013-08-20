<?php

class KpiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		$allAdmin = User::model()->getAdmin();
		$allSuper = User::model()->getSuperUser();
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('admin','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','delete','update'),
				'users'=>$allSuper,
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','delete','index','update'),
				'users'=>$allAdmin,
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	public function actionCreate()
	{
		$model=new Kpi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kpi']))
		{
			$model->attributes=$_POST['Kpi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	*/
	public function actionCreate()
	{
		$model=new Kpi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kpi']))
		{
			$result = TRUE;
			$transaction=Yii::app()->db->beginTransaction();
			try {
				$countAspect = count($_POST['Kpi']['aspect']);
				$percent = 0;
				//cek percent
				for($x = 0;$x < $countAspect; $x++) {
					$percent += $_POST['Kpi']['percent'][$x];
				}
				if ($percent < 100) $result = FALSE;

				$model->attributes=$_POST['Kpi'];
				if($model->save()) {
					for($x = 0;$x < $countAspect; $x++) {
						$modelLoop	= new KpiAspect;
						$modelLoop->kpi_id=$model->id;
						$modelLoop->aspect=$_POST['Kpi']['aspect'][$x];
						$modelLoop->percent=$_POST['Kpi']['percent'][$x];

						if (! $modelLoop->save()) $result = FALSE;
						//var_dump($modelLoop->getErrors());
					}
			
					if ($result === TRUE) {
						$transaction->commit();
						$url = Yii::app()->createUrl('kpi/view',array('id' => $model->id));
						$this->redirect($url);
					}else { $transaction->rollBack(); }
				}
			} catch (Exception $e) { $transaction->rollBack(); }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kpi']))
		{
			$model->attributes=$_POST['Kpi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Kpi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kpi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kpi']))
			$model->attributes=$_GET['Kpi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Kpi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kpi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/** ---------------------------------------------------------------- ADD FUNCTIONS ---------------------------------------------------------------- **/
	public function getJobs($data)
	{
		$provider = Job::model()->findByPK($data->id);
		return $provider->title;
	}

	public function getAspect($data)
	{
		$count = 0;
		$provider = KpiAspect::model()->findAll('kpi_id =:id',array(':id'=>$data->id,));
		foreach ($provider as $key => $value) { $count++; } return $count;
	}
}

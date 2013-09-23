<?php

class ShowcaseController extends Controller
{
	public function actionIndex()
	{

        $criteria = new CDbCriteria(array());

        $products = new CActiveDataProvider('Product', array(
            'pagination' => array(
                'pageSize' => 5,
            ),
            'criteria' => $criteria,
        ));

        $this->render('index', ['products' => $products]);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
    public function loadModel($id)
    {
        $model=Product::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

}
<?php

namespace app\controllers;

class DemoController extends \yii\web\Controller {

	public function beforeAction($action) {
		$this->enableCsrfValidation = false;
		return parent::beforeAction($action);
	}

	public function actionIndex() {
		return $this->render('index');
	}

	public function actionCreate() {
		$data = null;
		if (isset($_POST['DemoForm'])) {
			$data = $_POST['DemoForm'];
		}
		return $this->render('create', [
			'data' => $data,
		]);
	}

}

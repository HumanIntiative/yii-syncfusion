<?php

/**
* SyncFusion JavaScript Loader
*/
class SyncFusionLoader extends CApplicationComponent
{
	public $theme = 'default-theme';

	public function init()
	{
		$this->registerCoreScript();
	}

	protected function registerCoreScript()
	{
		$clientScript = Yii::app()->clientScript;

		// External
		$assetsDir = 'application.extensions.syncfusionjs';
		$clientScript->addPackage('syncfusionext', array(
			'basePath'=>$assetsDir,
			'js'=>array(
				'external/jquery.easing.1.3.min.js',
				'external/jquery.globalize.min.js',
				'external/jsrender.min.js',
			),
		));

		// Assets
		$assetsDir = 'application.extensions.syncfusionjs.assets';
		$clientScript->addPackage('syncfusion', array(
			'basePath'=>$assetsDir,
			'js'=>array(
				'js/web/ej.web.all.min.js',
				'js/properties.js',
			),
			'css'=>array(
				"css/web/{$this->theme}/ej.web.all.min.css",
				"css/web/{$this->theme}/ej.theme.min.css",
				"css/web/{$this->theme}/ej.widgets.all.min.css",
				"css/web/responsive-css/ej.responsive.css",
			),
		));

		// $clientScript->registerScript('asyncDojo', $this->configScript, CClientScript::POS_HEAD);
		$clientScript->registerPackage('syncfusionext');
		$clientScript->registerPackage('syncfusion');
	}
}
<?php

/** @var GAutoloader $autoloader */
$autoloader = Yii::app()->autoloader->getAutoloader();

$vendorsDir = Yii::getPathOfAlias('application.vendors');
$applicationDir = Yii::getPathOfAlias('application');

$autoloader->addNamespace('Models', $applicationDir . DS . 'models');
$autoloader->addNamespace('Helpers', $applicationDir . DS . 'helpers');
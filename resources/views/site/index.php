<?php

declare(strict_types=1);

use Yii\Extension\Service\ServiceParameter;

/**
 * @var ServiceParameter $serviceParameter
 */

$this->params['breadcrumbs'] = '/';

$this->setTitle('My App');

?>

<h1 class="title"><?= $translator->translate('Hello World') ?></h1>
<p class="subtitle"><?= $translator->translate('My first website with') ?> <strong>Yii 3.0!</strong></p>

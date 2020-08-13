<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created First Application with Yii 1.1.</p>
<p>Yii is a high-performance, component-based PHP framework for developing large-scale Web applications rapidly. It enables maximum reusability in Web programming and can significantly accelerate your Web application development process. The name Yii (pronounced Yee or [ji:]) is an acroynym for "Yes It Is!". This is often the accurate, and most concise response to inquires from those new to Yii:
Is it fast? ... Is it secure? ... Is it professional? ... Is it right for my next project? ... Yes, it is!</p>
<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">hamza</a>,
should you have any questions.</p>

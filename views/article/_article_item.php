<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 11.04.2021
 * Time: 0:48
 */
/** @var $model \app\models\Article */
?>

<div>
    <a href="<?php echo \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title)?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(), 40)?>
    </div>
    <p class="text-muted text-right">
        <small>Created At: <b><?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></b>
            By: <?php echo $model->createdBy->username ?>
        </small>
    </p>
    <hr>
</div>

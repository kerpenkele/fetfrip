<?php $this->beginContent('application.modules_core.activity.views.activityLayout', array('activity' => $activity)); ?>

<?php if ($workspace != null && Wall::$currentType != Wall::TYPE_SPACE): ?>
    <?php echo Yii::t('ActivityModule.views_activities_ActivitySpaceCreated', "%displayName% created the new space %spaceName%", array(
        '%displayName%' => '<a href="' . $user->getUrl() . '">'.CHtml::encode($user->displayName).'</a>',
        '%spaceName%' => '<a href="' . $workspace->getUrl() . '">'. CHtml::encode(Helpers::truncateText($workspace->name, 25)).'</a>'
    )); ?>

<?php else: ?>
    <?php echo Yii::t('ActivityModule.views_activities_ActivitySpaceCreated', "%displayName% created this space.", array(
        '%displayName%' => '<a href="' . $user->getUrl() . '">'.CHtml::encode($user->displayName).'</a>'
    ));
    ?>
<?php endif; ?>

<?php $this->endContent(); ?>


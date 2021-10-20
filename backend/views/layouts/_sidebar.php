<?php
?>
<aside class='shadow'>
    <?php echo \yii\bootstrap4\Nav::widget([
        'options' => [
            'class' => 'list-group d-flex flex-column nav-pills'
        ],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Videos',
                'url' => ['/video/create']
            ]
        ]
    ]) ?>
</aside>
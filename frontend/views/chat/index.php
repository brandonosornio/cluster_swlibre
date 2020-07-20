<div class="panel panel-info">
    <div class="panel-heading">
        <h4>
        <i class="glyphicon glyphicon-comment"></i> Chat
        </h4>
    </div>
    <div class="panel-body padding-0">
        <div class="col-lg-6 padding-0">
        <?php
            echo \sintret\chat\ChatRoom::widget([
                'url' => \yii\helpers\Url::to(['/chat/send-chat']),
                'userModel'=>  \common\models\User::className(),
                'userField'=>'avatar_image'
                ]
            );
        ?>
        </div>
        <div class="col-lg-6">
            <div>
            <h2 class="chat-title">¿Con quien deseas hablar hoy?</h2>
            <p class="chat-detail">
            Puedes interactuar con diferentes personas del mundo, aquellas que conocen
            del software libre y/o sus dependencias, existe una gran comunidad dispuesta
            a ayudarte a conocer Unix, Linux o cualquier código abierto que desees. ¡Solo
            escribe y adentrate!
            </p>
            </div>
            <div class="chat-image">
            </div>
        </div>
    </div>
</div>


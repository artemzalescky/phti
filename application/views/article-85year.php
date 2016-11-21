<?php
?>
<style>
    .news-image{
        display: block;
        position: relative;
        width: 100%;
        height: 500px;
        margin-bottom: 10px;
    }

    .btn {
        position: absolute;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
        margin-top: -5px;
        right: 10px;
    }
</style


<div class="row">
    <div class="col-lg-12 main-news">
        <div class="news-border">
                <h3>Как в «ФТИ НАН Беларуси» прошли торжества, посвященные 85-летию со дня основания института</h3>
                <br>

            <blockquote>
                <p style="font-size: 0.9em">
                    13 мая 2016 г. в конференц-зале «ФТИ НАН Беларуси» прошли торжества, посвященные 85-летию
                    со дня основания института.
                    В мероприятии приняли участие коллектив сотрудников института, приглашенные гости – представители
                    государственных органов, институтов и отделений НАН Беларуси, промышленных предприятий, ветераны Физтеха.
                    С приветственным словом выступили Первый заместитель Председателя Президиума НАН Беларуси академик Чижик С.А.,
                    руководитель аппарата НАН Беларуси академик Витязь П.А., Председатель Государственного комитета по науке и
                    технологиям Республики Беларусь Шумилин А.Г.
                </p>
            </blockquote>

            <?php $ph->
                link_open('news')
                ->image('news/articles/85/1.jpg', [
                    'class' => 'news-image',
                ]);
                echo '<br>';
               $ph->link_open('news')
                    ->image('news/articles/85/2.jpg', [
                        'class' => 'news-image',
                    ]);
                echo '<br>';
                $ph->link_open('news')
                    ->image('news/articles/85/3.jpg', [
                        'class' => 'news-image',
                    ])
            ->tag_close('a'); ?>


            <blockquote>
                <p style="font-size: 0.9em">
                    Директор института Томило В.А. выступил с докладом об историческом пути Физтеха, о видных ученых, оказавших существенное влияние на его становление и развитие, об основных достижениях коллектива института за последние годы.
                </p>
            </blockquote>

            <?php $ph->
                link_open('news')
                ->image('news/articles/85/4.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>

            <blockquote>
                <p style="font-size: 0.9em">
                    Проведено награждение сотрудников, вносящих значительный вклад в успешную деятельность института по всем направлениям.
                    Почетной грамотой НАН Беларуси удостоены заведующий лабораторией к.т.н. ЛАТУШКИНА С.Д., заведующий планово-производственным отделом
                    ЗАМУЛКО С.Г. и ведущий юрисконсульт ЗУЕВА О.В. Заведующему лабораторией д.т.н. КУЗЕЮ А.М. вручен памятный знак «В честь основания
                    Национальной академии наук Беларуси».<br>
                    Почетной грамотой Государственного комитета по науке и технологиям награжден заведующий научно-техническим отделом маркетинга и
                    сопровождения государственных программ ЗАМЫСЛОВ А.С. <br>Высшей аттестационной комиссии Республики Беларусь – заведующий лабораторией, д.т.н.,
                    профессор ВОЛОЧКО А.Т., Министерства промышленности Республики Беларусь – академик ГОРДИЕНКО А.И., заместитель директора к.т.н. МИХЛЮК А.И. и
                    заведующий лабораторией к.т.н. ВЕГЕРА И.И., администрации Первомайского района г. Минска – зaместитель директора по общим вопросам ПОВАРОВ О.Е.

                </p>
            </blockquote>
            <h4>Фоторепортаж с  торжественного собрания:</h4>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/5.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <br>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/6.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <br>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/7.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <br>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/8.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/9.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/10.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/11.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/12.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
            <?php $ph->
                link_open('news')
                ->image('news/articles/85/13.jpg', [
                    'class' => 'news-image',
                ])
                ->tag_close('a');?>
    </div>
</div>
</div>

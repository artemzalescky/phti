<style>
    .carousel-inner-ozt{
        display: block;
        position: relative;
        width: 700px;
        height: 120px;
        margin: 0px auto;
    }

    .carousel-indicators-otz {
        bottom: 20px;
        background-color: #000000;
    }
    .mt {
        margin-top: 50px;
    }
    /* Testimonials Wrap */
    #testimonials {
        display: block;
        position: relative;
        margin-top: 10px;
    }

    /* Contact Wrap */
    #contactwrap {
        background-color: #2f2f2f;
        margin-top: 0px;
        padding-top: 25px;
        padding-bottom: 25px;
    }

    #contactwrap p {
        color: #f2f2f2;
    }

    #contactwrap small {
        font-size: 13px;
    }


    #contactwrap label {
        color: #f2f2f2;
        margin-top: 10px;
    }

    .carousel-indicators {
        position: relative;
        bottom: 20px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none;
    }
    .carousel-indicators {
        margin-top: 30px;
        bottom: 20px;
    }
    .mt {
        margin-top: 50px;
    }
    .carousel-inner{
        display: block;
        position: relative;
        width: 500px;
        height: 100px;
        margin: 0px auto;
    }
    .centered {
        text-align: center
    }
    .centered p {
        color: #ffffff;
        line-height: 1.4em;
        font-size: 1em;
        font-weight: 400;
    }
</style>

<div class="container">

    <h2 class="title text-center title-news"><?= $ph->lang->Label_Recall ?> </h2>
    <h3 class="title text-center title-news-description">  </h3>
    <div id="testimonials">
        <div class="row">
            <div class="col-lg-12 mt">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner-ozt">
                        <div class="item active mb centered">
                            <h3>Дробышевский Павел Сергеевич</h3>
                            <h4>(начальник лаборатории износоусталостных испытаний ОАО «Гомсельмаш»)</h4>
                            <p style="color: #000000; background-color: #ffff00">Семинар прошел на высоком уровне. Способствовал чрезвычайно полезной дискуссии между
                                представителями ведущих предприятий и научной сферы. Доклад Покровского А.И. сделан интересно и
                                информативно. В результате присутствия на данной семинаре была получена важная новая информация о
                                применении бейнитного чугуна в Беларуси и за рубежом.
                                Рекомендации: Просьба ввести в систему проведение подобных семинаров.</p>
                        </div>

                        <div class="item mb centered">
                            <h3>Карась Андрей Николаевичч</h3>
                            <h4>(заместитель главного инженера по подготовке металлургического производства-главный металлург ОАО «МТЗ»)</h4>
                            <p style="color: #000000; background-color: #ffff00">Андрей Николаевич занимается бейнитными чугунами 12 лет.
                                Действительно, за бейнитными чугунами будущее. На сегодняшний день остро стоит вопрос с применением
                                данного материала у конструкторов предприятий. Андрей Николаевич видит тесное сотрудничество по данной
                                тематике с сотрудниками Физико-технического института. На площадях завода можно провести практические
                                работы, а вот исследовать механизм превращения, структуру и свойства можно с привлечение научных
                                сотрудников института. Очень рад возможности присутствия на данном семинаре, где собрались специалисты
                                по данной тематике, так как услышал про новинки, предложения и проблемы.<br>
                                Рекомендации: Более частое проведение подобных семинаров с привлечением конструкторов заводов.</p>
                        </div>

                        <div class="item mb centered">
                            <h3>Гуринович Андрей Сергеевичч</h3>
                            <h4>(начальник отдела термообработки и металлопокрытий управления главного металлурга ОАО «МАЗ»))</h4>
                            <p style="color: #000000; background-color: #ffff00">
                                Семинар проведен на высоком уровне. Проведение подобных семинаров позволит наладить контакты между представителями ведущих заводов
                                Республики Беларусь и академической сферы. МАЗ уже участвовал в подобных работах по чугуну, но, к сожалению, они не были доведены
                                до конца. Проблемой является то, что на сегодняшний день нет отработанной технологии термической обработки бейнитного чугуна.
                                Это очень сложный процесс, который требует полной автоматизации.
                            </p>
                        </div>

                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators-otz">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                </div>

            </div><! --/col-lg-8 -->
        </div><! --/row -->
    </div><! --/testimonials -->
</div>
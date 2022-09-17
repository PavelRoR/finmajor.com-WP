<?php get_header(); ?>
<main>

    <div class="section section--jumbotron">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="section-illustration">
                        <img src="<?php bloginfo('template_url');?>/img/jumbotron/invest-proj.svg"  alt="">

                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <h1 class="section-title">
                        Инвестиционный микс <br />из лучших предложений <br />на рынке
                        <span class="subtitle">
                            Инвестируйте в перспективный бизнес: вкладывайте от $1000 с доходностью выше, чем у банков!
                        </span>
                    </h1>
                    <div class="jumbotron-btn">
                        <a class="btn btn-primary btn-lg"
                            href="https://forms.amocrm.ru/mztxwv?_ga=2.32761406.1863240418.1639111620-1741267351.1639111620"
                            target="_blank">Подать заявку</a>
                        <div class="note">
                            Живите в удовольствие – <br />переходите на пассивный доход!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section--white section--bg-1">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="text-title d-block d-lg-none">Finmajor Invest — инвестиционный маркетплейс для
                        приумножения капитала</div>
                    <div class="section-illustration text-center">
                    <div class="article-video">
                            <iframe src="https://www.youtube.com/embed/GMzpqlZXN1w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <!-- <img src="<?php bloginfo('template_url');?>/img/secondary-block/invest-no-proj-v1.svg" onload="SVGInject(this)" alt=""> -->
                        <!-- <img src="<?php bloginfo('template_url');?>/img/secondary-block/invest-no-proj-v1.svg" alt=""> -->
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text text--14">
                        <div class="text-title d-none d-lg-block">Finmajor Invest — инвестиционный маркетплейс для
                            приумножения капитала</div>
                        <p>Мы создали инвестиционную площадку, где каждый может «с нуля» разобраться в инвестиционных
                            проектах и пройти путь от новичка до опытного инвестора.</p>
                        <p>Теперь весь процесс инвестирования в одном месте!</p>
                        <p>Каждый проект, размещенный на сайте, проходит тщательный финансово-юридический аудит.
                            После он появляется на нашей площадке. Наши партнёры могут «упаковать» его, презентовать
                            широкой аудитории и освещать ход его реализации в информационных лентах.</p>
                        <div class="text-note">
                            Мы ЗА «прозрачное» сотрудничество, поэтому нам важно, чтобы каждый инвестор видел и понимал,
                            как «работают» его деньги.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="text-center">3 принципа, которые лежат в основе нашей деятельности</h2>
            <div class="row row--24 row--scroll row--principle">
                <div class=" col-lg-4">
                    <div class="principle">
                        <div class="principle-img">
                            <img src="<?php bloginfo('template_url');?>/img/principle/1.svg" alt="">
                        </div>
                        <h3>Этика</h3>
                        <div class="text">
                            Мы за честное и долговременное сотрудничество
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="principle">
                        <div class="principle-img">
                            <img src="<?php bloginfo('template_url');?>/img/principle/2.svg" alt="">
                        </div>
                        <h3>Практика</h3>
                        <div class="text">
                            Мы работаем только с экспертами, обладающими большим опытом.
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4">
                    <div class="principle">
                        <div class="principle-img">
                            <img src="<?php bloginfo('template_url');?>/img/principle/3.svg" alt="">
                        </div>
                        <h3>Результат</h3>
                        <div class="text">
                            Здесь вы получите максимум информации о том, как можно заработать
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-primary btn-lg btn-mob-full"
                    href="https://forms.amocrm.ru/mztxwv?_ga=2.32761406.1863240418.1639111620-1741267351.1639111620"
                    target="_blank">Подать заявку</a>
            </div>
        </div>
    </div>

    <div class="section section--blueGrdnt">
        <div class="container">
            <h2 class="text-md-center">
                Сейчас нет активных проектов
                <span class="subtitle text-md-center">
                    Оставьте ваш email, чтобы мы смогли сообщить вам о новых проектах
                </span>
            </h2>

            <?php require('form-0.php');?>
        </div>
    </div>

    <div class="section section--white section--bg-5">
        <div class="container">
            <h2>Направления, которые пользуются спросом среди инвесторов</h2>
            <div class="nav-tabs__scroll">
                <ul class="nav nav-tabs" id="routeTab" role="tablist">
                <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="route1-tab" data-bs-toggle="tab" data-bs-target="#route1"
                            type="button" role="tab" aria-controls="route1" aria-selected="true">Инвестиции в бизнес</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="route2-tab" data-bs-toggle="tab" data-bs-target="#route2"
                            type="button" role="tab" aria-controls="route2" aria-selected="true">Девелопмент и недвижимость</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="route3-tab" data-bs-toggle="tab" data-bs-target="#route3"
                            type="button" role="tab" aria-controls="route3" aria-selected="true">Апарт-отели</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="route4-tab" data-bs-toggle="tab" data-bs-target="#route4"
                            type="button" role="tab" aria-controls="route4" aria-selected="false">Недвижимость в
                            Сочи</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="route5-tab" data-bs-toggle="tab" data-bs-target="#route5"
                            type="button" role="tab" aria-controls="route5" aria-selected="false">IPO</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="route6-tab" data-bs-toggle="tab" data-bs-target="#route6"
                            type="button" role="tab" aria-controls="route6" aria-selected="false">Алгоритмический трейдинг</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="routeTabContent">
                <div class="tab-pane fade show active" id="route1" role="tabpanel" aria-labelledby="route1-tab">
                    <div class="text-title text-title--mob20">Инвестиции в бизнес: пассивный доход от партнёрства </div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="text text--14 mb-0">
                                <p>Многообразие проектов, затрагивающих различные сегменты рынка. От стартапов до корпораций с мировым именем. Это разнообразные решения для потребительского сектора, производственные идеи, ресторанно-гостиничный бизнес, туризм, финансовые инструменты, B2B-сфера, экспорт, предложения с международных рынков и многое другое.</p>
                                <p>Например, инфобизнес, рекламно-маркетинговая деятельность, развитие сети кафе и ресторанов доставки, экспорт значимых товаров и сырья для развивающихся стран и т.д.</p>
                                <div class="text--20 text--900 fw-500">
                                Диапазон доходности варьирует в зависимости от конкретного проекта и сектора рынка, в котором он реализуется. В среднем, от 20 до 50% годовых. Вкладывать и получать доходность можно в любой удобной валюте.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-none d-lg-block">
                            <img src="<?php bloginfo('template_url');?>/img/routeTab/1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="route2" role="tabpanel" aria-labelledby="route2-tab">
                    <div class="text-title text-title--mob20">Девелопмент и недвижимость: самое надёжное направление</div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="text text--14 mb-0">
                                <p>Рынок недвижимости в России сформировался более 30 лет назад, и за это время всегда показывал себя как самое надёжное инвестиционное направление. Как показывает динамика цен на недвижимость, только с 2000 года цены в Москве, например, выросли в 5,5 раз. В кризисные годы цены на жильё давали просадку, но общая динамика в разрезе десятилетий выглядит довольно внушительно. </p>
                                <div class="text--20 text--900 fw-500">
                                Годовая доходность проектов в этой сфере зависит от города, в котором находится объект, а также от текущей экономической ситуации. Как правило, это порядка 20-30% в год. 
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-none d-lg-block">
                            <img src="<?php bloginfo('template_url');?>/img/routeTab/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="route3" role="tabpanel" aria-labelledby="route3-tab">
                    <div class="text-title text-title--mob20">Развитие сети апарт-отелей: беспроигрышная стратегия</div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="text text--14 mb-0">
                                <p>Одно из направлений, которое вызывает особый интерес у инвесторов. Проекты отличаются
                                    быстрым сроком реализации – в пределах 1 года, требуют относительно небольших
                                    вложений и при этом довольно быстро окупаются. Происходит это за счёт нескольких
                                    вариантов использования готовых жилых помещений: для перепродажи и заработка за счёт
                                    разницы рыночной цены или для сдачи в аренду через управляющую компанию, которая
                                    обеспечит непрерывное заселение и стабильный пассивный доход. </p>
                                <div class="text--20 text--900 fw-500">
                                    За последние 2 года наши партнёры запустили 3 проекта по апарт-отелям, которые уже
                                    полностью реализованы. Средняя доходность по этим объектам – 67% годовых в рублях.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-none d-lg-block">
                            <img src="<?php bloginfo('template_url');?>/img/routeTab/3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="route4" role="tabpanel" aria-labelledby="route4-tab">
                    <div class="text-title text-title--mob20">Доходная недвижимость в Сочи: цены и спрос растут!</div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="text text--14 mb-0">
                                <p>Инвестиции в недвижимость Сочи – перспективный тренд последних пяти лет, который за
                                    последний год усилился ажиотажным спросом на жильё в этом этом регионе. На фоне
                                    закрытия ряда туристических заграничных направлений, введения моратория на
                                    строительство многоквартирных домов, а также дефицита свободных для застройки
                                    территорий цены на жильё там стали увеличиваться.</p>
                                <p> Осенью-2020 наметился настоящий «БУМ» на рынке недвижимости. Спрос вырос на 30%, а
                                    цены в некоторых районах «подскочили» до 130%. И динамика только усиливается,
                                    вынуждая риэлторов каждый день индексировать цены на жильё. </p>
                                <div class="text--20 text--900 fw-500">
                                    Средняя доходность проектов – до 100% за год в рублях.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-none d-lg-block">
                            <img src="<?php bloginfo('template_url');?>/img/routeTab/4.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="route5" role="tabpanel" aria-labelledby="route5-tab">
                    <div class="text-title text-title--mob20">IPO: оптимальное соотношение доходности и рисков</div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="text text--14 mb-0">
                                <p>IPO – это первая публичная продажа акций компаний, которые уже достигли определённых
                                    финансовых показателей. Они первый раз выставляют ценные бумаги на продажу, чтобы
                                    привлечь дополнительные инвестиции для развития и повысить узнаваемость на мировом
                                    рынке. Но рынок первичных американских акций закрыт для инвесторов с маленьким
                                    бюджетом (до $100 000 США). У нас на площадке вы сможете найти информацию про
                                    возможности зарабатывать на IPO всего от $1000</p>
                                <div class="text--20 text--900 fw-500">
                                    Средние показатели доходности по таким проектам – не ниже 30% годовых в долларах
                                    США.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-none d-lg-block">
                            <img src="<?php bloginfo('template_url');?>/img/routeTab/5.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="route6" role="tabpanel" aria-labelledby="route6-tab">
                    <div class="text-title text-title--mob20">Алгоритмический трейдинг: тренд, набирающий обороты</div>
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8">
                            <div class="text text--14 mb-0">
                                <p>Одно из популярных направлений в трейдинге. Последнее время всё больше проектов предлагают возможности торговли на различных рынках с помощью компьютерных алгоритмов или программ, которые могут повысить эффективность и доходность процесса торгов. Участие в таких проектах позволяет трейдерам не сидеть круглосуточно перед монитором, а спокойно жить, не опасаясь за баланс своего счёта. </p>
                                <div class="text--20 text--900 fw-500">
                                Преимущества
                                </div>
                                <ul class="list-stylized list-stylized--big list-stylized-2 list-stylized-mob-0">
                                    <li>Способность работать в режиме 24/7.</li>
                                    <li>Самостоятельное контролирование процесса торгов и принятие решений.</li>
                                    <li>Одновременная работа с большим количеством индикаторов и валютных пар.</li>
                                    <li>Действия без эмоций.</li>
                                </ul>
                                <div class="text--20 text--900 fw-500">
                                Средняя доходность – 5-15% в месяц и до 60-180% в год. Степень надёжности этих систем зависит от уровня профессионализма разработчиков – насколько они смогли учесть все особенности рынка. Эксперты относят алготрейдинг к высокорискованным инструментам.   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 d-none d-lg-block">
                            <img src="<?php bloginfo('template_url');?>/img/routeTab/6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Личный кабинет <span class="d-block d-md-inline-block">на FinMajor – это:</span></h2>
            <div class="d-block d-md-none">
                <ul class="list-stylized list-stylized--big">
                    <li>Система, понятная на интуитивном уровне</li>
                    <li>«Прозрачное» управление своими сбережениями</li>
                    <li>Вся важная для вас информация по проектам в одном месте</li>
                    <li>Удобный интерфейс, вобравший в себя лучшие опции мировых онлайн-площадок, необходимые для
                        комфортной работы инвестора</li>
                    <li>Закреплённый за вами личный менеджер, который ответит на все вопросы</li>
                </ul>
                <div class="lk-slider">
                    <div class="swiper mySwiper mySwiper-lk-slider wr_tabs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url');?>/img/lk-slider/1.png" srcset="<?php bloginfo('template_url');?>/img/lk-slider/1@2x.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url');?>/img/lk-slider/1.png" srcset="<?php bloginfo('template_url');?>/img/lk-slider/1@2x.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url');?>/img/lk-slider/1.png" srcset="<?php bloginfo('template_url');?>/img/lk-slider/1@2x.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url');?>/img/lk-slider/1.png" srcset="<?php bloginfo('template_url');?>/img/lk-slider/1@2x.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php bloginfo('template_url');?>/img/lk-slider/1.png" srcset="<?php bloginfo('template_url');?>/img/lk-slider/1@2x.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block">
                <div class="wrap_tabs row align-items-center">
                    <ul class="tabs_caption col-6">
                        <li class="active">Система, понятная на интуитивном уровне </li>
                        <li>«Прозрачное» управление своими вложениями</li>
                        <li>Вся важная для вас информация по проектам в одном месте</li>
                        <li>Удобный интерфейс, вобравший в себя лучшие опции мировых онлайн-площадок, необходимые для
                            комфортной работы инвестора</li>
                        <li>Закреплённый за вами личный менеджер, который ответит на все вопросы</li>
                    </ul>
                    <div class="col-6">
                        <div class="wr_tabs">
                            <div class="tabs_content active">
                                <div class="text-center">
                                    <img src="<?php bloginfo('template_url');?>/img/tabs-lk/1.png" srcset="<?php bloginfo('template_url');?>/img/tabs-lk/1@2x.png" alt=""
                                        class="tabs-image">
                                </div>
                            </div>
                            <div class="tabs_content">
                                <div class="text-center">
                                    <img src="<?php bloginfo('template_url');?>/img/tabs-lk/2.png" srcset="<?php bloginfo('template_url');?>/img/tabs-lk/2@2x.png" alt=""
                                        class="tabs-image">
                                </div>
                            </div>
                            <div class="tabs_content">
                                <div class="text-center">
                                    <img src="<?php bloginfo('template_url');?>/img/tabs-lk/3.png" srcset="<?php bloginfo('template_url');?>/img/tabs-lk/3@2x.png" alt=""
                                        class="tabs-image">
                                </div>
                            </div>
                            <div class="tabs_content">
                                <div class="text-center">
                                    <img src="<?php bloginfo('template_url');?>/img/tabs-lk/4.png" srcset="<?php bloginfo('template_url');?>/img/tabs-lk/4@2x.png" alt=""
                                        class="tabs-image">
                                </div>
                            </div>
                            <div class="tabs_content">
                                <div class="text-center">
                                    <img src="<?php bloginfo('template_url');?>/img/tabs-lk/5.png" srcset="<?php bloginfo('template_url');?>/img/tabs-lk/5@2x.png" alt=""
                                        class="tabs-image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-none d-md-block">
                <h3><a href="#!" data-fancybox data-src="#modal-attantion"
                        class="link-primary link-primary--c700">Удобный Личный кабинет&nbsp;</a>– это ваш главный
                    рабочий инструмент, помогающий ориентироваться в мире инвестиций</h3>
            </div>
        </div>
    </div>

    <div class="section section--white">
        <div class="container">
            <div class="text-title text-center text-title--mob-mb">
                Что можно делать в Личном кабинете
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-7">
                    <div class="d-none d-sm-block text-center">
                        <img src="<?php bloginfo('template_url');?>/img/lk-screen/desk.png" srcset="<?php bloginfo('template_url');?>/img/lk-screen/desk@2x.png" alt="">
                    </div>
                    <!--                <div class="d-block d-sm-none text-center mb-20">-->
                    <!--                    <img src="<?php bloginfo('template_url');?>/img/lk-screen/mob.png" srcset="<?php bloginfo('template_url');?>/img/lk-screen/mob@2x.png" alt="">-->
                    <!--                </div>-->
                </div>
                <div class="col-12 col-md-5">
                    <ul class="list-stylized list-stylized--big list-stylized-mob-0">
                        <li>Выбирать и оценивать проекты для участия</li>
                        <li>Изучать условия участия в проектах</li>
                        <li>Знакомиться с командами проектов</li>
                        <li>Ознакомиться с договорами</li>
                        <li>Инвестировать деньги</li>
                        <li>Получать прибыль и сумму основного вклада</li>
                        <li>Смотреть записи вебинаров</li>
                        <li>Следить за ходом реализации проектов</li>
                        <li>Узнавать новости и отслеживать изменения по проектам</li>
                        <li>Смотреть аналитические данные своего инвестиционного портфеля, а также по каждому проекту в отдельности</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section py-0 section--stripeRev">
        <div class="container">
            <div class="info-block info-block--bg-1">
                <div class="d-block d-lg-flex align-items-center">
                    <div class="info-block__text">
                        <div class="text-title text-center text-lg-start">Зарегистрируйтесь и убедитесь, что
                            инвестировать – это просто!</div>
                        <div class="d-none d-lg-block">
                            <a href="#!" data-fancybox data-src="#modal-attantion"
                                class="btn btn-primary btn-lg">Зарегистрироваться</a>
                        </div>
                    </div>
                    <div class="info-block__img">
                        <img src="<?php bloginfo('template_url');?>/img/info-block/inv-hav-proj-1.svg" alt="">
                    </div>
                    <div class="d-block d-lg-none text-center">
                        <a href="" class="btn btn-primary btn-lg btn--width">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>
                Преимущества сотрудничества с нами
                <span class="subtitle subtitle--mob">
                    Наша цель – сформировать комфортное пространство для обретения финансовой независимости, где все
                    желающие смогут легко разобраться в принципах инвестирования и освоить инвестиционные инструменты.
                </span>
            </h2>
            <div class="row row--24 row--benefit">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/1.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Мы размещаем информацию только о действительно эффективных инвестиционных проектах
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/2.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                С нами работают профессиональные команды, реализующие инвестиционные проекты
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/3.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Наши партнёры проводят аудит каждого проекта перед тем, как он появляется на площадке
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/4.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Мы рассказываем о проектах только с оптимальным соотношением доходности и рисков
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/5.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Надёжность вложений за счёт диверсификации портфеля – участие капитала в различных
                                проектах
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/6.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Весь процесс инвестирования отражается в Личном кабинете
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/7.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Доходность в разы выше банковского депозита
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/8.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Стабильные выплаты прибыли в обозначенные договором сроки
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="benefit">
                        <div class="benefit-icon">
                            <img src="<?php bloginfo('template_url');?>/img/benefit/inv-have-proj/9.svg" alt="">
                        </div>
                        <div class="benefit-text">
                            <div class="text text--14">
                                Возможность стать инвестором даже с небольшим капиталом
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section--white">
        <div class="container">
            <h2 class="text-center">Мы работаем «прозрачно» и на результат!</h2>
            <div class="text-title text-title--mob18 text-center">Механизм работы площадки FinMajor</div>
            <div class="wrap-interactive">
                <div class="interactive-col js--interactive-active">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">01</div>
                            Вы регистрируетесь в&nbsp;Личном кабинете и&nbsp;заполняете данные анкеты
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/1.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="interactive-col">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">02</div>
                            Выбираете инвестиционные проекты, размещённые на&nbsp;площадке и&nbsp;прошедшие
                            финансово-юридический аудит
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/2.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="interactive-col">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">03</div>
                            Заключаете и подписываете напрямую с проектом договор на инвестирование
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/3.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="interactive-col">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">04</div>
                            Инвестируете в проект/проекты средства
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/4.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="interactive-col">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">05</div>
                            Отслеживаете ход реализации проекта в&nbsp;формате новостей, вебинаров, рассылок
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/5.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="interactive-col">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">06</div>
                            Наблюдаете за изменением финансовых показателей проекта
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/6.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="interactive-col">
                    <div class="interactive">
                        <div class="interactive-text">
                            <div class="interactive-count">07</div>
                            По возможности выводите «тело» вклада и проценты в&nbsp;Личном кабинете
                        </div>
                        <div class="interactive-illustration">
                            <img src="<?php bloginfo('template_url');?>/img/interactive/inv-have-proj/7.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Вопрос-ответ</h2>
            <div class="accordion" id="accordionFaq1">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            Что такое FinMajor?
                        </button>
                    </h3>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                        data-bs-parent="#accordionFaq1">
                        <div class="accordion-body">
                            <div class="text text--14">
                                <p>FinMajor – инвестиционный (информационный) маркетплейс, который объединяет в одном месте инвесторов и авторов доходных проектов, а также предоставляет условия для совместной реализации инвестиционных проектов и получения альтернативных (в т.ч. пассивных) источников дохода.</p>
                                <p>Площадка позволяет в удобном формате узнать, как стать инвестором: выбрать интересующий проект, заключить договор, инвестировать деньги, наблюдать в Личном кабинете за ходом реализации проекта, а по завершению проекта (с конечным сроком) или истечению договорных обязательств получить полученную прибыль и/или сумму вклада.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Какие финансовые продукты доступны на площадке?
                        </button>
                    </h3>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                        data-bs-parent="#accordionFaq1">
                        <div class="accordion-body">
                            <div class="text text--14">
                                <p>Любые проекты, относящиеся к разнообразным сферам экономики, которые прошли
                                    финансово-юридический анализ у наших партнёров-экспертов и признаны эффективными.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Как начать работу на площадке?
                        </button>
                    </h3>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionFaq1">
                        <div class="accordion-body">
                            <div class="text text--14">
                                <p>Верификация подразумевает процесс подтверждения личности через предоставление следующих идентификационных данных (паспорт, id), налоговый номер, а также фото документа, подтверждающего личность заявителя. Всё это необходимо для заключения договора.</p>
                                <p>Если вы собираетесь инвестировать от имени юридического лица, то сначала вам всё равно нужно будет зарегистрироваться как физическое лицо и потом добавить аккаунт юридического лица.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item ">
                <h3 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Как начать работу на платформе?
                    </button>
                </h3>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFaq1">
                    <div class="accordion-body">
                        <div class="text text--14">
                            <p>Чтобы начать работу с инвестиционной площадкой, вам нужно пройти регистрацию, а после – верификацию в Личном кабинете инвестора. Верификация подразумевает процесс подтверждения личности через предоставление следующих данных: ФИО, паспортные данные, адрес регистрации и места жительства, ИНН, а также прикрепить фото паспорта. Все это необходимо для заключения договора.</p>
                            <p>Если вы собираетесь инвестировать от имени ИП или юридического лица, то сначала вам всё равно нужно будет зарегистрироваться как физическое лицо и потом добавить аккаунт ИП или юридического лица.</p>
                        </div>
                    </div>
                </div>
            </div> -->
                <div class="accordion-item">
                    <h3 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <span>Гарантируете ли вы защиту <a href="">персональных данных?</a></span>
                        </button>
                    </h3>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                        data-bs-parent="#accordionFaq1">
                        <div class="accordion-body">
                            <div class="text text--14">
                                <p>Любая личная информация, предоставленная инвестором при регистрации, в полном объёме
                                    защищена <a class="link-primary" href="" target="_blank">законом о персональных
                                        данных <svg xmlns="https://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-up-right-circle-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                                        </svg></a> и хранится в защищённом виде. Прочитать политику обработки
                                    персональных данных можно здесь. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-32">
                <a href="./faqs/" class="link-primary link-primary--c700" target="_blank">Показать все</a>
            </div>
        </div>
    </div>

    <div class="section section--white">
        <div class="container">
            <h2>
                Наши новости
                <span class="subtitle subtitle--mob">Самые свежие новости из мира инвестиций</span>
            </h2>
            <div class="row row--blog">
            <?php
                    $the_query = new WP_Query( array(
                        'posts_per_page' => 3,
                        'category_name'  => 'news'
                    ) );
                    while( $the_query->have_posts() ):
                        $the_query->the_post(); ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <a href="<?php the_permalink(); ?>" class="blog-preview" target="_blank">
                    <span class="blog-preview__img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </span>
                    <span class="date"><?php the_date(); ?></span>
                    <h3><?php  
    				if (get_post_meta($post->ID, 'title_exc', true)) {
					 echo get_post_meta($post->ID, 'title_exc', true);
					} ?></h3>
                    <span class="text"><?php the_excerpt(); ?></span>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="text-center mt-32">
                <a href="./news/" class="link-primary link-primary--c700">Показать все новости</a>
            </div>
        </div>
    </div>

    <div class="section py-0 section--stripeRev">
        <div class="container">
            <div class="info-block info-block--bg-1">
                <div class="d-block d-lg-flex align-items-center">
                    <div class="info-block__text">
                        <div class="text-title text-center text-lg-start">
                            Сформируйте свой пассивный доход <br class="d-none d-md-block">с&nbsp;помощью инвестиций!
                            <div class="subtitle d-none d-lg-block">Присоединяйтесь к нашему сообществу и обретите
                                финансовую независимость!</div>
                        </div>
                        <div class="d-none d-lg-block">
                            <a href="https://forms.amocrm.ru/mztxwv?_ga=2.32761406.1863240418.1639111620-1741267351.1639111620"
                                class="btn btn-primary btn-lg" target="_blank">Зарегистрироваться</a>
                        </div>
                    </div>
                    <div class="info-block__img">
                        <img src="<?php bloginfo('template_url');?>/img/info-block/inv-hav-proj-2.svg" alt="">
                    </div>
                    <div class="subtitle d-block d-lg-none pt-0 mb-3 text-center">Присоединяйтесь к нашему сообществу и
                        обретите финансовую независимость!</div>
                    <div class="d-block d-lg-none text-center">
                        <a href="https://forms.amocrm.ru/mztxwv?_ga=2.32761406.1863240418.1639111620-1741267351.1639111620"
                            class="btn btn-primary btn-lg btn--width" target="_blank">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2 class="text-center">Узнавайте первым о новых проектах! </h2>
            <?php $fN='2'; require('form-0.php');?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
<?php get_header(); ?>
<main>

<div class="section">
    <div class="container">
        <h2>Вопрос-ответ</h2>
        <div class="nav-tabs__scroll">
            <ul class="nav nav-tabs" id="faqTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="faq1-tab" data-bs-toggle="tab" data-bs-target="#faq1" type="button" role="tab" aria-controls="faq1" aria-selected="true">Инвесторам</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="faq2-tab" data-bs-toggle="tab" data-bs-target="#faq2" type="button" role="tab" aria-controls="faq2" aria-selected="true">Авторам проектов</button>
                </li>
                <li class="nav-item d-none" role="presentation">
                    <button class="nav-link" id="faq3-tab" data-bs-toggle="tab" data-bs-target="#faq3" type="button" role="tab" aria-controls="faq3" aria-selected="true">Партнёрам</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="faqTabContent">
            <div class="tab-pane fade show active" id="faq1" role="tabpanel" aria-labelledby="faq1-tab">
                <div class="accordion" id="accordionFaq1">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Что такое FinMajor?
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>FinMajor – инвестиционный маркетплейс, который объединяет в одном месте инвесторов и авторов доходных проектов, а также создаёт условия для совместной реализации инвестиционных проектов и получения альтернативных (в т.ч. пассивных) источников дохода.</p>
                                    <p>Площадка позволяет в удобном формате стать инвестором: выбрать интересующий проект, заключить договор, инвестировать деньги, наблюдать в Личном кабинете за ходом реализации проекта, а по завершению проекта (с конечным сроком) или истечению договорных обязательств вывести полученную прибыль и/или сумму вклада. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Какие финансовые продукты доступны на площадке?
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Любые проекты, относящиеся к разнообразным сферам экономики, которые прошли финансово-юридический анализ у наших экспертов и признаны эффективными.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Кто может стать инвестором?
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Инвесторами могут стать совершеннолетние (старше 18 лет) лица, если они соответствует требованиям, устанавливаемым индивидуально для каждого из представленных на сайте проектов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Как начать работу на площадке?
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
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <span>Гарантируете ли вы защиту <a href="">персональных данных?</a></span>
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Любая личная информация, предоставленная инвестором при регистрации, в полном объёме защищена законом о персональных данных и хранится в защищённом виде. Прочитать политику обработки персональных данных можно здесь. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Как начать инвестировать?
                            </button>
                        </h3>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Это очень просто и не займёт много времени. Главное – наличие желания и минимальной суммы для «входа» в проекты.</p>
                                    <ol>
                                        <li>Зарегистрируйтесь на площадке.
                                        <li>Заполните профиль и пройдите верификацию в Личном кабинете, прикрепив фото или скан-копию паспорта.</li>
                                        <li>Дождитесь письма с оповещением об удачном прохождении верификации.</li>
                                        <li> Выберите интересный для вас проект.</li>
                                        <li> Заключите договор и проинвестируйте в проект.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading16">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Какую сумму я могу инвестировать?
                            </button>
                        </h3>
                        <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Минимальная сумма инвестиций зависит от проекта. В каждом проекте свои нижние границы. Так, для проекта IPO – это $1000, для доходной недвижимости – 500 тысяч рублей. Максимальная сумма сделки ограничена финансовыми возможностями инвестора, а также объёмом привлекаемых инвестиций, необходимым для того и иного проекта.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Можно ли досрочно забрать свои вложения?
                            </button>
                        </h3>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Возможно, если это прописано в договоре конкретного проекта.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Как начисляются проценты?
                            </button>
                        </h3>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Принцип начисления дивидендов варьируется от проекта к проекту и зависит от условий функционирования каждого продукта в отдельности. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Как вывести деньги?
                            </button>
                        </h3>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Чтобы вывести деньги со счёта инвестора, нужно зайти в Личный кабинет и  нажать кнопку «Вывод средств». Средства перечисляются на счёт, принадлежащий верифицированному лицу. Далее нажмите кнопку «Подтвердить», после чего вы получите код-подтверждение на электронную почту, указанную при регистрации. После ввода кода ожидайте поступления средств на счёт в течение 5 (пяти) рабочих дней. Как правило, зачисление производится в течение нескольких часов.</p>
                                    <p><b>ВНИМАНИЕ!</b> Перед выводом средств внимательно проверяйте правильность введённых вами реквизитов. Имя владельца счёта должно совпадать с именем, указанным при регистрации.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Нужно ли платить налоги с прибыли от инвестирования?
                            </button>
                        </h3>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Инвестирование в проекты, представленные на площадке FinMajor, может иметь налоговые последствия для инвестора. Так, законодательство большинства стран предусматривает налогообложение полученной инвесторами прибыли. Инвесторы должны самостоятельно проконсультироваться с собственными юридическими, налоговыми или финансовыми советниками, прежде чем принимать решение об инвестировании в тот или иной проект, представленный на площадке FinMajor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Какие есть риски?
                            </button>
                        </h3>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Нужно понимать, что инвестирование, по умолчанию, связано с определёнными рисками. Мы можем говорить только об их минимизации и рекомендовать для использования низкорискованные инвестиционные инструменты. Оптимальная инвестиционная стратегия, выработанная годами и на 100% оправдавшая себя, основана на диверсификации инвестиционного портфеля.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Где можно следить за развитием проекта?
                            </button>
                        </h3>
                        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Все подробности о развитии инвестиционное проекта, в котором вы принимаете участие, можно узнать в наших социальных сетях, а также в своём
                                        <a href="">Личном кабинете.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading14">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Когда можно получить первую прибыль после перечисления инвестиций?
                            </button>
                        </h3>
                        <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Срок выплаты прибыли в разных проектах отличается и зависит от каждого конкретного направления. Подробности по каждому из проектов можно уточнить в карточке проекта в
                                        <a href="">Личном кабинете. </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading15">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Какую минимальную и максимальную доходность можно получить, инвестируя через площадку FinMajor?
                            </button>
                        </h3>
                        <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionFaq1">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Назвать точные пороги минимальной и максимальной доходности не представляется возможным. Всем инвесторам нужно понимать, что любые инвестиции связаны с определённым риском. И, как правило, чем выше доходность проекта, тем выше риски потери части или всего бюджета.</p>
                                    <p> Несмотря на это, хочется отметить, что команда, стоящая за созданием площадки FinMajor – это инвесторы с многолетним опытом, которые выработали собственную инвестиционную стратегию, снижающую уровень риска при любом сценарии развития событий. Кроме этого, мы стараемся подбирать проекты с доходностью не менее 25%, чтобы сотрудничество с нами приносило вам как можно больше прибыли.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="faq2" role="tabpanel" aria-labelledby="faq2-tab">
                <div class="accordion" id="accordionFaq2">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading17">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Что такое FinMajor?
                            </button>
                        </h3>
                        <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionFaq2">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>FinMajor – инвестиционный маркетплейс, который объединяет в одном месте инвесторов и авторов доходных проектов, а также создаёт условия для совместной реализации инвестиционных проектов и получения альтернативных (в т.ч. пассивных) источников дохода.</p>
                                    <p>Площадка позволяет в удобном формате презентовать свой проект на широкое обозрение, привлечь дополнительные инвестиционные средства для его реализации, а также в короткие сроки масштабировать своё дело и получать достойный доход. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading18">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapseOne">
                                Каковы базовые требования к проекту?
                            </button>
                        </h3>
                        <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionFaq2">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <ol>
                                        <li>Политика FinMajor не предусматривает сотрудничества с МФО и производителями алкогольной и табачной продукции, а также с проектами, имеющими признаки финансовой пирамиды.</li>
                                        <li>Минимальный объём выручки составляет 3 млн рублей.</li>
                                        <li>Максимальный объём привлекаемых инвестиций для займов составляет 100 млн рублей.</li>
                                        <li>Компания существует на рынке не менее года.</li>
                                        <li>Среднемесячный оборот не менее 2 млн руб.</li>
                                        <li>Наличие чистой прибыли по РСБУ.</li>
                                        <li>Соотношение долг/чистая прибыль не более 3.</li>
                                        <li>Соотношение долг/выручка не более 0,6.</li>
                                        <li>Наличие положительной динамики выручки период к периоду.</li>
                                        <li>Отсутствие активных арбитражных и исполнительных производств на значительные суммы.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading19">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Какие проекты наиболее интересны для инвесторов?
                            </button>
                        </h3>
                        <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionFaq2">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Как показывает практика, самыми популярными являются проекты по доходной недвижимости. Рынок недвижимости на протяжении многих лет проявляет себя как самое стабильное и перспективное направление для вложения, сбережения и приумножения средств.
                                    </p>
                                    <p>Также людям интересны проекты, связанные с финансовыми и сырьевыми рынками. </p>
                                    <p>Мы уверены: если ваш проект оправдает себя с точки зрения соотношения доходности и риска на фоне привлекательных условий, то он вызовет доверие у инвесторов. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading20">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Какие есть риски для авторов проекта?
                            </button>
                        </h3>
                        <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionFaq2">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Риски для авторов проектов отсутствуют.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading21">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Что произойдёт, если инвесторы не заинтересуются проектом?
                            </button>
                        </h3>
                        <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordionFaq2">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Теоретически, если инвесторы не заинтересуются проектом, то авторы не получат финансирование и, как следствие, не смогут реализовать свой проект. Сотрудничая с площадкой FinMajor на условиях полноценного партнёрства, вы можете быть уверенными, что ваш проект будет профинансирован.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade d-none" id="faq3" role="tabpanel" aria-labelledby="faq3-tab">
                <div class="accordion" id="accordionFaq3">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading22">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                По какому принципу функционирует партнёрская программа?
                            </button>
                        </h3>
                        <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionFaq3">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Партнёрская программа – это многоуровневая система взаимовыгодного сотрудничества. Принцип прост. Вы привлекаете новых инвесторов в проект с помощью реферальной индивидуальной ссылки. Инвесторы вкладывают в проект свои средства, и с каждого перевода вы получаете комиссионное вознаграждение. Каждый привлечённый инвестор может так же, как и вы, зарегистрироваться в нашей партнёрской программе и тоже привлекать инвесторов, получая за это доход. При этом вы тоже будете получать прибыль с привлечённых ими инвесторов. Партнёрская программа может насчитывать до 8-ми уровней иерархии.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading23">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                Как проверить работоспособность партнёрской ссылки?
                            </button>
                        </h3>
                        <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23" data-bs-parent="#accordionFaq3">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Как только вы получите свою партнёрскую реферальную ссылку, перейдите по ней самостоятельно и создайте новый аккаунт. Вы сможете увидеть, что этот аккаунт отобразится у вас в Личном кабинете и будет помечен вашей партнёрской ссылкой.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading24">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                Как можно отслеживать поступление инвестиций от приглашённых инвесторов?
                            </button>
                        </h3>
                        <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#accordionFaq3">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Все бизнес-процессы площадки FinMajor «прозрачны». Наблюдать за процессом привлечения инвесторов и поступлением от них денежных средств можно в Личном кабинете. Там отображаются все аккаунты, зарегистрированные по вашей партнёрской ссылке и прикреплённые к вашему ID, а также все поступающие от них инвестиции.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading25">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                Каким образом можно выводить деньги?
                            </button>
                        </h3>
                        <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#accordionFaq3">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Это можно сделать через формирование заявки из Личного кабинета. Для вашего удобства мы сотрудничаем с рядом платёжных систем: <b>QIWI, Bitcoin, Perfect Money, WebMoney. </b> Также вы можете получать своё вознаграждение на банковскую карту.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading26">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                Каков лимит вывода средств?
                            </button>
                        </h3>
                        <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#accordionFaq3">
                            <div class="accordion-body">
                                <div class="text text--14">
                                    <p>Минимальная сумма для вывода 30 долларов.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>
<?php get_footer(); ?>
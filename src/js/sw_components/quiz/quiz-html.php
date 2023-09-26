<section class="quiz container" id="quiz">
    <div class="quiz__container">
        <div class="quiz__desc">
            <h2 class="quiz__title">
                Ответьте на 5-6 вопросов и получите <br> расчет лестницы
                <span class="text--colored">с точностью 98% за 10 минут!</span>
            </h2>
            <p class="quiz__hint">
                Познакомьтесь с вариантами форм лестниц, типами каркаса и другими <br> параметрами. Выберите подходящий. Если есть вопросы — звоните.
            </p>
            <a href="<?php echo THEME_OPTIONS['phone_href'];?>" class="quiz__phone js-phone"><?php echo THEME_OPTIONS['phone'];?></a>
        </div>
        <picture class="quiz__pic"><img src="<?php echo THEME_STATIC; ?>/img/quiz/hero.png" alt="" class="quiz__img"></picture>
        <form action="<?php echo FORM_URLS['mail'];?>" name="quiz" class="quiz__questions">
          <input type="hidden" name="page" value="<?php the_permalink(); ?>">
          <input type="text" name="phone_number"> 
          <input type="hidden" name="utm_source" value="">
          <input type="hidden" name="utm_medium" value="">
          <input type="hidden" name="utm_campaign" value="">
          <input type="hidden" name="utm_content" value="">
          <input type="hidden" name="utm_term" value="">
          <input type="hidden" name="referer" value="">
          <input type="hidden" name="requestTime" value="">

            <div class="quiz-status">
                <!-- Шаг <span class="quiz-status__step">1/6</span> -->
                <span class="quiz-status__name">Выберите форму лестницы</span>
            </div>
            <div class="swiper quiz-carousel">
                <div class="swiper-pagination quiz-pagination"></div>
                <div class="swiper-wrapper">
                    <div
                      class="swiper-slide quiz-slide quiz-slide--prints quiz-slide--5-answers"
                      data-step-name="Выберите форму лестницы"
                    >
                        <label class="quiz-answer">
                            <input
                              type="radio"
                              name="q1"
                              class="quiz-answer__radio"
                              checked
                              value="Прямой марш"
                              data-value="1"
                            >
                            <span class="quiz-answer__check"></span>
                            <picture class="quiz-answer__pic">
                                <img src="<?php echo THEME_STATIC; ?>/img/quiz/1-1.png" alt="" class="quiz-answer__img">
                            </picture>
                            <span class="quiz-answer__desc">Прямой марш</span>
                        </label>
                        <label class="quiz-answer">
                            <input
                              type="radio"
                              name="q1"
                              class="quiz-answer__radio"
                              value="Г-образная"
                              data-value="2"
                            >
                            <span class="quiz-answer__check"></span>
                            <picture class="quiz-answer__pic">
                                <img src="<?php echo THEME_STATIC; ?>/img/quiz/1-2.png" alt="" class="quiz-answer__img">
                            </picture>
                            <span class="quiz-answer__desc">Г-образная</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q1"
                            class="quiz-answer__radio"
                            value="П-образная"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/1-3.png" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">П-образная</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q1"
                            class="quiz-answer__radio"
                            value="Винтовая"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/1-4.png" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Винтовая</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q1"
                            class="quiz-answer__radio"
                            value="Не решили"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/1-5.svg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Не решили</span>
                        </label>
                    </div>
                    <div
                      class="swiper-slide quiz-slide quiz-slide--3-answers"
                      data-step-name="Выберите тип лестницы"
                      data-condition="q1!=4"
                      >
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q2"
                            class="quiz-answer__radio"
                            value="На металлокаркасе"
                            checked
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/2/metal.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">На металлокаркасе</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q2"
                            class="quiz-answer__radio"
                            value="Консольная"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/2/console.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Консольная</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q2"
                            class="quiz-answer__radio"
                            value="Лестница для дачи"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/2/for-life.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc"> Эконом For Life <br> из дерева </span>
                        </label>
                    </div>
                    <div
                      class="swiper-slide quiz-slide quiz-slide--6-answers"
                      data-step-name="Выберите тип каркаса"
                      data-condition="q1!=4&&q2==1"
                    >
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q3"
                            class="quiz-answer__radio"
                            value="Ломаный косоур"
                            checked
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/3/curve-cosour.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Ломаный косоур</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q3"
                            class="quiz-answer__radio"
                            value="Монокосоур"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/3/monocosour.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Монокосоур</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q3"
                            class="quiz-answer__radio"
                            value="Тетива из листа Perfect"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/3/perfect-string.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Тетива из листа Perfect</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q3"
                            class="quiz-answer__radio"
                            value="Тетива из листа Z"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/3-4.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Тетива из листа Z</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q3"
                            class="quiz-answer__radio"
                            value="Монокосоур из листа"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/3/monocosour-list.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Монокосоур из листа</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q3"
                            class="quiz-answer__radio"
                            value="Закрытый каркас"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/3/closed-carcass.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Закрытый каркас</span>
                        </label>
                    </div>
                    <div
                      class="swiper-slide quiz-slide quiz-slide--5-answers"
                      data-step-name="Выберите материал ступеней"
                      data-condition="q2!=3"
                    >
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q4"
                            class="quiz-answer__radio"
                            value="Ясень"
                            checked>
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/4/ash.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Ясень</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q4"
                            class="quiz-answer__radio"
                            value="Дуб"
                          >
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/4-2.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Дуб</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q4"
                            class="quiz-answer__radio"
                            value="Береза"
                            checked>
                          <span class="quiz-answer__check"></span>
                          <picture class="quiz-answer__pic">
                            <img src="<?php echo THEME_STATIC; ?>/img/quiz/4/birch.jpg" alt="" class="quiz-answer__img">
                          </picture>
                          <span class="quiz-answer__desc">Береза</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q4"
                            class="quiz-answer__radio"
                            value="Без ступеней"
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">Без ступеней</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q4"
                            class="quiz-answer__radio"
                            value="Другой материал"
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">Другой материал</span>
                        </label>
                    </div>
                    <div class="swiper-slide quiz-slide quiz-slide--3-answers" data-step-name="Вам известны размеры проема?">
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q5"
                            class="quiz-answer__radio"
                            value="Да, могу предоставить"
                            checked
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">Да, могу предоставить</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q5"
                            class="quiz-answer__radio"
                            value="Замерю сам, если расскажете как"
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">Замерю сам, если расскажете как</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q5"
                            class="quiz-answer__radio"
                            value="Нужен замерщик"
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">Нужен замерщик</span>
                        </label>
                    </div>

                    <div
                      class="swiper-slide quiz-slide quiz-slide--4-answers"
                      data-step-name="В какой бюджет вы хотели бы уложиться?"
                    >
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q6"
                            class="quiz-answer__radio"
                            value="До 100 тыс."
                            checked>
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">До 100 тыс.</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q6"
                            class="quiz-answer__radio"
                            value="До 300 тыс."
                          >
                        <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">До 300 тыс.</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q6"
                            class="quiz-answer__radio"
                            value="До 500 тыс."
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">До 500 тыс.</span>
                        </label>
                        <label class="quiz-answer">
                          <input
                            type="radio"
                            name="q6"
                            class="quiz-answer__radio"
                            value="Мой бюджет ограничивается моими предпочтениями."
                          >
                          <span class="quiz-answer__check"></span>
                          <span class="quiz-answer__desc">Мой бюджет ограничивается моими предпочтениями.</span>
                        </label>
                    </div>
                    <div class="swiper-slide quiz-slide" data-step-name="Опишите кратко свою задачу и известные вам параметры">
                        <div class="quiz__form-layout">
                            <label class="input input--tel">
                              <input
                                class="input__field"
                                required
                                name="user_tel"
                                type="tel"
                                placeholder="Телефон"
                                maxlength="25"
                                minlength="10"
                                data-value-missing="Напишите телефон"
                                data-value-invalid="Проверьте корректность телефона"
                                autocomplete="tel"
                              >
                            </label>
                             <label class="input input--name">
                              <input
                                class="input__field"
                                name="user_name"
                                type="text"
                                placeholder="Ваше имя"
                                data-value-missing="Напишите имя"
                                data-value-invalid="Что-то не так с введенным именем"
                                autocomplete="name"
                              >
                            </label>
                             <label class="textarea">
                              <textarea class="textarea__field" name="user_message" placeholder="Опишите известные вам параметры проема и прикрепите фото  и схему ниже, если есть"></textarea>
                            </label> <label class="input-attach input-attach--on">
                              <input
                                class="input-attach__field"
                                name="user_file"
                                type="file"
                              >
                              <span class="input-attach__box-icon">
                              <svg class="input-attach__icon">
                                <use xlink:href="<?php echo THEME_STATIC; ?>/img/common/attach.svg#attach" />
                              </svg>
                            </span>
                              <span class="input-attach__text link link--underlined"><span class="link__text">Прикрепить файл</span></span>
                            </label>
                        </div>
                        <button class="quiz__submit button button--secondary button--on" type="submit">Отправить</button>
                    </div>
                </div>
                <div class="swiper-buttons quiz-buttons">
                    <div class="swiper-button-prev quiz-button-prev button button--ghost">Назад</div>
                    <div class="swiper-button-next quiz-button-next button button--secondary button--on">Далее
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.31349 1.34772C7.99807 1.03941 7.99807 0.53954 8.31349 0.231231C8.62891 -0.0770772 9.14032 -0.0770772 9.45574 0.231231L13.7634 4.44176C14.0789 4.75007 14.0789 5.24993 13.7634 5.55824L9.45574 9.76877C9.14032 10.0771 8.62891 10.0771 8.31349 9.76877C7.99807 9.46046 7.99807 8.96059 8.31349 8.65228L11.2424 5.78947H0.807692C0.361617 5.78947 0 5.43601 0 5C0 4.56399 0.361617 4.21053 0.807692 4.21053H11.2424L8.31349 1.34772Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </section>

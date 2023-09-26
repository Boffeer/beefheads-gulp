"use strict"

import Swiper, { Navigation, Autoplay, Pagination, Thumbs, EffectFade } from "swiper";
// import {debounce} from "../utils/helpers.js";


const quizes = document.querySelectorAll('.quiz-carousel');
function togglePrevVisibility(context) {
  if (context.activeIndex == 0) {
    // context.el.querySelector('.quiz-button-prev').style.display = 'none';
    context.el.querySelector('.quiz-buttons').classList.remove('quiz-buttons--not-first-slide')
  } else {
    // context.el.querySelector('.quiz-button-prev').style.display = '';
    context.el.querySelector('.quiz-buttons').classList.add('quiz-buttons--not-first-slide')
  }
}

function changeStepIndex(context) {
  const quiz = context.el;
  const sliderStatusStepEl = quiz.parentElement.querySelector('.quiz-status__step');

  if (sliderStatusStepEl) {
    const TOTAL_STEPS = context.slides.length;
    const CURRENT_STEP = context.activeIndex + 1;
    const STEP_INDEX = ` ${CURRENT_STEP} / ${TOTAL_STEPS}`;

    sliderStatusStepEl.innerText = STEP_INDEX;
  }
}

function changeStepName(context) {
  const quiz = context.el;
  const stepNameEl = quiz.parentElement.querySelector('.quiz-status__name')

  if (stepNameEl) {
    const CURRENT_SLIDE = context.slides[context.activeIndex];
    stepNameEl.innerText = CURRENT_SLIDE.dataset.stepName;
  }
}

function isQuestionFinal(context) {
  return context.activeIndex == context.slides.length - 1;
}

function hideButtonsOnFinalQuestion(context) {
    context.el.querySelector('.quiz-buttons').style.display = 'none';
}

function processQuestionCondition(context, condition) {
  if (condition.includes('!=')) {
    condition = condition.split('!=');
    condition[0] = getQuestionAppearCondition(context, condition[0]);
    return condition[0] != condition[1]
  } else if (condition.includes('==')) {
    condition = condition.split('==');
    condition[0] = getQuestionAppearCondition(context, condition[0]);
    return condition[0] == condition[1]
  }
}

function prepareQuestionCondition(context, condition) {
  if (condition == undefined) return true;
  let mappedConditions;

  if (condition.includes('&&')) {
    let conditions = condition.split('&&'); 
    mappedConditions = conditions.map(condition => {
      return processQuestionCondition(context, condition);
    });
    mappedConditions = Boolean( mappedConditions.reduce((totalAnswer, currentAnswer) => {
      return totalAnswer * currentAnswer;
    }) )
  } else {
    mappedConditions = processQuestionCondition(context, condition);
  }

  return mappedConditions;
}

function getQuestionAppearCondition(context, question) {
  const userCheckedAnswer = context.el.querySelector(`[name="${question}"]:checked`).dataset.value
  return  userCheckedAnswer;
}

quizes.forEach((quiz, index) => {
  const SWIPER_NAME = 'quiz';
  const CURRENT_SWIPER_NAME = `${SWIPER_NAME}-${index}`;

  if (quiz.id == '') {
    quiz.id+= `${CURRENT_SWIPER_NAME}`;
  } else {
    quiz.id+= ` ${CURRENT_SWIPER_NAME}`;
  }

  let carousel = new Swiper(`#${CURRENT_SWIPER_NAME}`, {
    modules: [Navigation, Pagination, EffectFade],
    autoHeight: true,
    allowTouchMove: false,
    spaceBetween: 10,
    slidesPerView: 1,
    slidesPerGroup: 1,
    pagination: {
      el: `#${CURRENT_SWIPER_NAME} .${SWIPER_NAME}-pagination`,
      type: "progressbar",
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    on: {
      init: function() {
        togglePrevVisibility(this);
        this.slides.forEach((slide, index) => {
          slide.dataset.index = index;
          slide.querySelectorAll('.quiz-answer__radio').forEach((answer, index) => {
            answer.dataset.value = index + 1;
          })
        })
      },
      slideChange: function() {

        togglePrevVisibility(this);
        if (!isQuestionFinal(this)) return

        hideButtonsOnFinalQuestion(this);
        this.params.autoHeight = false;
        this.update();
        const wrapper = this.el.querySelector('.swiper-wrapper');
        wrapper.style.height = '';
      },
      slideNextTransitionEnd: function () {
      },
      slidePrevTransitionEnd: function () {
      },
      slideChangeTransitionEnd: function () {
        // changeStepIndex(this);
        changeStepName(this);
      }
    }
  });


  const nextButton = quiz.querySelector(`.${SWIPER_NAME}-button-next`);

  nextButton.addEventListener('click', () => {
    let currentIndex = carousel.activeIndex
    currentIndex++
    let nextSlideCondition = prepareQuestionCondition(carousel, carousel.slides[currentIndex].dataset.condition)

    while(nextSlideCondition == false) {
      carousel.slides[currentIndex].querySelectorAll('.quiz-answer__radio').forEach(input => {
        input.disabled = true
      })
      currentIndex++;
      nextSlideCondition = prepareQuestionCondition(carousel, carousel.slides[currentIndex].dataset.condition)
    }
    carousel.slideTo(currentIndex)
  });

  const prevButton = quiz.querySelector(`.${SWIPER_NAME}-button-prev`);
  prevButton.addEventListener('click', () => {
    let currentIndex = carousel.activeIndex;
    currentIndex--;
    let nextSlideCondition = prepareQuestionCondition(carousel, carousel.slides[currentIndex].dataset.condition)

    while(nextSlideCondition == false) {
      carousel.slides[currentIndex].querySelectorAll('.quiz-answer__radio').forEach(input => {
        input.disabled = false
      })
      currentIndex--;
      nextSlideCondition = prepareQuestionCondition(carousel, carousel.slides[currentIndex].dataset.condition);
    }
    carousel.slideTo(currentIndex)
  });
})

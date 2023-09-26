# Стартер

## Запуск
```bash
npm i
gulp
```
Итоговые файлы будут в папке dist

### Если не работает команда `gulp` после `npm i`
Проверь, что установлен webp-converter@2.2.3
`npm install webp-converter@2.2.3 --save-dev`




## Как упрощает HTML
Есть типа шаблонизатор `gulp-file-include`. Можно вставлять одни html файлы в другой `@@include('tpls/header.html',{})`

## SCSS

## JS


## Есть страницы песочницы, откуда ты можешь взять готовые компоненты, секции и библиотеки
- _demo-libs.html
- _demo-components.html
- _demo-sections.html

---

## Не решил что с этим делать
- Решение проблемы кеширования файлов (`gulp-version-number`)
- Автоматическая замена тегов img на picture для использования webp (`gulp-webp-html-nosvg`)
- Препроцессор SASS (`gulp-sass`, `sass`)
- Минимизация CSS (`gulp-clean-css`, `gulp-rename`)
- Автопрефиксы для CSS (`gulp-autoprefixer`)
- Объединение одинаковых медиа-запросов в один (`gulp-group-css-media-queries`)
- Возможность использования webp изображений указанных в теге background-img (`gulp-webpcss`)

### JavaScript
- Синтаксис ES6 для JavaScript (`webpack-stream`, `webpack`)

### Медиа
- Оптимизация и сжатие изображений (`gulp-imagemin`)
- Конвертация в webp (`gulp-webp`) — ненадежная, потому что другие картинки много весят

## Что еще можно сделать
- Добавить отдельную задачу для компиляции изображений
- Общие плагины объединить в один файл
- Создание svg-спрайта
- Конвертация шрифтов из ttf и otf в woff и woff2

## Что еще есть
1. `gulp convertImages` — оптимизирует картинки и помещает их в папку convert-images
2. `prod`
3. `prodCopyImages`

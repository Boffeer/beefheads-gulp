```html
<h1 class="home__title">Делаем ремонт в коммерческой недвижимости от офисов до производс</h1>
```
```js
const homeTitle = document.querySelector(".home__title");
const typeWriterSetup = [
     {
            text: "Делаем ремонт в старом фонде, не отвлекая вас от жизни и бизнеса",
            find: "старом фонде",
            replace: "первичном фонде",
        },
     {
            text: "Делаем ремонт в первичном фонде, не отвлекая вас от жизни и бизнеса",
            find: "первичном фонде, не отвлекая вас от жизни и бизнеса",
            replace: "коммерческой недвижимости от офисов до производств",
        },
     {
            text: "Делаем ремонт в коммерческой недвижимости от офисов до производств",
            find: "Делаем ремонт в коммерческой недвижимости от офисов до производств",
            replace: "Строим дома и делаем в них ремонт, не отвлекая вас от жизни и бизнеса",
        },
     {
            text: "Строим дома и делаем в них ремонт, не отвлекая вас от жизни и бизнеса",
            find: "Строим дома и делаем в них ремонт, не отвлекая вас от жизни и бизнеса",
            replace: "Делаем ремонт в старом фонде, не отвлекая вас от жизни и бизнеса",
        },
                ];
let typeWriterIndex = 0;

function findStringsDiffsIndexes(typeWriterItem) {
    let s1 = typeWriterItem.text;
    let find = typeWriterItem.find;
    let s1First, s1Last;
    s1First = s1.indexOf(find);
    s1Last = s1First + find.length;
    return [s1First, s1Last];
}

function replaceStringDiffs(typeWriterItem, replaceIndexes) {
    let str = typeWriterItem.text;
    let indexStart = replaceIndexes[0];
    let indexEnd = replaceIndexes[1];
    let replace = typeWriterItem.replace;
    let find = typeWriterItem.find;

    let findLength = typeWriterItem.find.length;
    let replaceLength = replace.length;

    return {
        indexStart,
        indexEnd,
        findLength,
        replaceLength,
        str,
        replace,
    };
}
let indexes = findStringsDiffsIndexes(typeWriterSetup[typeWriterIndex]);
let typeWriterState = replaceStringDiffs(
    typeWriterSetup[typeWriterIndex],
    indexes
);
homeTitle.innerHTML = typeWriterSetup[typeWriterIndex].text;

let cursorPosition = 0;
// #region
function typeWriterErase(state) {
    if (state.indexEnd > state.indexStart) {
        state.indexEnd--;
        let toReplace = homeTitle.innerHTML.split("");
        toReplace.splice(state.indexEnd, 1);
        homeTitle.innerHTML = toReplace.join("");
        state.replaceLength--;
        setTimeout(() => typeWriterErase(state), 25);
    } else {
        indexes = findStringsDiffsIndexes(typeWriterSetup[typeWriterIndex]);
        typeWriterState = {
            ...replaceStringDiffs(typeWriterSetup[typeWriterIndex], indexes),
            typeText: state.replace,
            counter: 0,
        };
        setTimeout(() => typeWriterWrite(typeWriterState), 1000);
    }
}

function typeWriterWrite(state) {
    if (typeWriterIndex >= typeWriterSetup.length - 1) {
        typeWriterIndex = -1;
    }
    if (state.counter - 1 < state.indexEnd + 2) {
        let toReplace = homeTitle.innerHTML.split("");
        toReplace.splice(state.indexStart, 0, state.typeText[state.counter]);
        homeTitle.innerHTML = toReplace.join("");
        state.indexStart++;
        state.counter++;
        setTimeout(() => typeWriterWrite(state), 30);
    } else {
        typeWriterIndex++;
        indexes = findStringsDiffsIndexes(typeWriterSetup[typeWriterIndex]);
        typeWriterState = {
            ...replaceStringDiffs(typeWriterSetup[typeWriterIndex], indexes),
            typeText: state.replace,
            counter: 0,
        };

        setTimeout(() => {
            typeWriterErase(typeWriterState);
        }, 2000);
    }
}
setTimeout(() => {
    typeWriterErase(typeWriterState);
}, 2000);
// #endregion
```

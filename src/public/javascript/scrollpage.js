let cords = ['scrollX','scrollY'];
// Перед закрытием записываем в локалсторадж window.scrollX и window.scrollY как scrollX и scrollY
window.addEventListener('unload', e => cords.forEach(cord => localStorage[cord] = window[cord]));
// Прокручиваем страницу к scrollX и scrollY из localStorage (либо 0,0 если там еще ничего нет)
window.scroll(...cords.map(cord => localStorage[cord]));


function scrollButton(){
    const scrollPage = document.getElementById('btnScroll');
    
    
    scrollPage.onclick = function() {
        window.scrollBy(0,+750); 
    } 
}

scrollButton();
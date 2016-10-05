function addClass(element, stringClass){
    let classes = element.className;

    classes = classes.split(' ');
    if(classes.indexOf(stringClass) == -1){
        classes.push(stringClass);
    }
    classes = classes.join(' ');
    element.className = classes;
}
function removeClass(element, stringClass){
    let classes = element.className;
    classes = classes.split(' ');
    if(classes.indexOf(stringClass) > -1){
        classes.splice(classes.indexOf(stringClass), 1);
    }
    classes = classes.join(' ');
    element.className = classes;
}
function ajustTopbar(elements){
    if(window.pageYOffset > 30){
        for(let i = 0; i < elements.length; i++){
            addClass(elements[i], "smaller");
        }
    }else{
        for(let i = 0; i < elements.length; i++) {
            removeClass(elements[i], 'smaller');
        }
    }
}
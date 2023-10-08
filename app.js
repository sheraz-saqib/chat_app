const search_input = document.getElementById('search_input'),
search_cross = document.querySelector('.search_cross');



search_input.addEventListener('input',()=>{
    if(search_input.value.length > 0){
search_cross.style.display = 'block'
    }
    else{
       search_cross.style.display = 'none' 
    }
})
search_cross.addEventListener('click',()=>{
    search_input.value = ''
    search_cross.style.display = 'none' 
})


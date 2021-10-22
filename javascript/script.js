const searchwrapper = document.querySelector(".search-box");
const inputbox = searchwrapper.querySelector("input");
const suggbox = searchwrapper.querySelector(".autocom-box");

inputbox.onkeyup = (e)=>{
    let userData = e.target.value;
    let emptyArray = [];
    if(userData){
        emptyArray = suggestions.filter((data)=>{
               return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
               return data = '<li>' + data + '<li>';
        });
        console.log(emptyArray);
        searchwrapper.classList.add("active")
    }
}

function showSuggetions(list){
    let listData;
    if(!list.length){

    }else{
        listData = list.join('');
    }
    suggbox.innerHTML = listData;
}
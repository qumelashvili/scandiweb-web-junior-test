const typeSwitcher = document.getElementById("productType");
const selectOutput = document.getElementsByClassName("select-output");
const typeInputs = document.querySelectorAll(".option");


function removeActive(){
    for(var input of typeInputs){
        input.classList.remove("active");
    }
}

const handleChange = () => {
    removeActive();
    const selectedType = typeSwitcher.value;
    
    if(selectedType === "dvd"){
        document.querySelector(".option-dvd").classList.add("active");
    }
    else if(selectedType === "furniture"){
        document.querySelector(".option-furniture").classList.add("active");
    }
    else if(selectedType === "book"){
        document.querySelector(".option-book").classList.add("active");
    }
}

typeSwitcher.addEventListener('change', handleChange);

console.log("Loading Successful !!");
window.onload = function(){ 
    
    var hEditElements = document.querySelectorAll("#h-edit")
    hEditElements.forEach(function(elem){
        elem.addEventListener("click", hEditOnClick)
    })
    function hEditOnClick(){
        var dataAtt =  document.getElementById("data-"+this.getAttribute("value"))
        var dataEditAtt =  document.getElementById("dataEdit-"+this.getAttribute("value"))
        var putSubmit = document.getElementById("h-put-submit-"+this.getAttribute('value'))
        var putDelete = document.getElementById("h-put-delete-"+this.getAttribute('value'))
        
        //Can use "toggle" to achieve the function
        if (dataEditAtt.style.display != "block") {
            dataAtt.style.display = "none";
            dataEditAtt.style.display = "block";
            putDelete.style.display = "none";
            putSubmit.style.display = "inline-block";
            this.textContent = "Cancel";
            this.classList.toggle("btn-warning");
            this.classList.toggle("btn-danger");
        } else {
            dataEditAtt.style.display = "none";
            dataAtt.style.display = "block";
            putSubmit.style.display = "none";
            putDelete.style.display = "inline-block";
            this.textContent = "Edit";
            this.classList.toggle("btn-warning");
            this.classList.toggle("btn-danger");
        }
    }    
};
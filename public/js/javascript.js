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
        // var deleteSubmit = document.getElementById("h-delete-submit-"+this.getAttribute('value'))
        
        //Can use "toggle" to achieve the function
        if (dataEditAtt.style.display != "block") {
            dataAtt.style.display = "none";
            dataEditAtt.style.display = "block";
            putSubmit.style.display = "inline-block";
            // deleteSubmit.style.display = "none";
            this.textContent = "Cancel";
            this.classList.toggle("btn-warning");
            this.classList.toggle("btn-danger");
        } else {
            dataAtt.style.display = "block";
            dataEditAtt.style.display = "none";
            putSubmit.style.display = "none";
            // deleteSubmit.style.display = "inline-block";
            this.textContent = "Edit";
            this.classList.toggle("btn-warning");
            this.classList.toggle("btn-danger");
        }
    }    
};
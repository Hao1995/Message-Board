console.log("Loading Successful !!");
window.onload = function(){ 
    // var getTest = document.getElementById('h-edit').onclick = function() {
    //     this.style.backgroundColor = "red";
    //     console.log("value >> ",this.getAttribute("value"))
    //     console.log("Edited Successful !!!");
    // };
    
    var hEditElements = document.querySelectorAll("#h-edit")
    hEditElements.forEach(function(elem){
        elem.addEventListener("click", hEditOnClick)
    })
    function hEditOnClick(){
        var dataAtt =  document.getElementById("data-"+this.getAttribute("value"))
        var dataEditAtt =  document.getElementById("dataEdit-"+this.getAttribute("value"))

        if (dataEditAtt.style.display != "block") {
            dataAtt.style.display = "none";
            dataEditAtt.style.display = "block";
        } else {
            dataAtt.style.display = "block";
            dataEditAtt.style.display = "none";
        }
    }    
};
console.log("Loading Successful !!");

$(document).ready(function(){ 

    $("[id=h-edit]").click(function(){
        var dataAtt = $("#data-"+$(this).attr("value"))
        var dataEditAtt = $("#dataEdit-"+$(this).attr("value"))
        var putSubmit = $("#h-put-submit-"+$(this).attr("value"))
        var rowLeft = $(".h-row-left-"+$(this).attr("value"))
        var rowRight = $(".h-row-right-"+$(this).attr("value"))

        if(dataEditAtt.css("display") != "block"){
            dataAtt.css("display","none");
            dataEditAtt.css("display","block");
            putSubmit.css("display","inline-block");
            $(this).text("Cancel");
            $(this).toggleClass("btn-warning");
            $(this).toggleClass("btn-danger");
        }else{
            dataAtt.css("display","block");
            dataEditAtt.css("display","none");
            putSubmit.css("display","none");
            $(this).text("Edit");
            $(this).toggleClass("btn-warning");
            $(this).toggleClass("btn-danger");
        }
    })
});
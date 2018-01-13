console.log('Loading Successful !!');

$(document).ready(function () {
    var flag = true;
    $('[id=h-edit]').click(function () {
        // if (flag) {
            const hEdit = $(this).attr('value');
            const dataDisplay = $('#data-' + hEdit);
            const dataEdit = $('#dataEdit-' + hEdit);
            const putSubmit = $('#h-put-submit-' + hEdit);
            const rowLeft = $('.h-row-left-' + hEdit);
            const rowRight = $('.h-row-right-' + hEdit);
            // $('#h-level-1  option[value="1"]').prop("selected", true);
        // }       

        // $('select.someclass option:first').attr('disabled', true);
        

        dataDisplay.toggleClass('h-display-none');
        dataEdit.toggleClass('h-display-none');
        putSubmit.toggleClass('h-display-none');
        $(this).toggleClass('h-put-submit');
        $(this).toggleClass('btn-warning');
        $(this).toggleClass('btn-danger');
    });
    
});

console.log('Loading Successful !!');

$(document).ready(function () {
    $('[id=h-edit]').click(function () {
        const hEdit = $(this).attr('value');
        const dataDisplay = $('#data-' + hEdit);
        const dataEdit = $('#dataEdit-' + hEdit);
        const putSubmit = $('#h-put-submit-' + hEdit);
        const rowLeft = $('.h-row-left-' + hEdit);
        const rowRight = $('.h-row-right-' + hEdit);

        dataDisplay.toggleClass('h-display-none');
        dataEdit.toggleClass('h-display-none');
        putSubmit.toggleClass('h-display-none');
        $(this).toggleClass('h-put-submit');
        $(this).toggleClass('btn-warning');
        $(this).toggleClass('btn-danger');
    });
});

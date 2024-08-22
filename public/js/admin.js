$(document).ready(function () {

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('.trash').click(function () {
        var modelEndPoint = $(this).data('model-end-point');
        var modelId = $(this).data('model-id');
        

        $(this).closest('tr').remove();

        $.ajax({
            url: '/admin/' + modelEndPoint + '/' + modelId,
            type: 'DELETE',
            headers: {
                'X-CSRF-Token': csrfToken
            },
            success: function (response) { },
            error: function (xhr, status, error) { }
        });

    });


    $('.sidebarToggle').on('click', function() {
        $('#sidebar').toggleClass('active');
        $('.main-content').toggleClass('active');
    });

    
});
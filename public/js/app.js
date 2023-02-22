$(function () {
    $("#sort tbody").sortable({
        placeholder: "drop",
        stop: function (e, ui) {
            console.log($("#tasks").serialize());
            $.ajax({
                type: "POST",
				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                url: '/reorder-tasks',
                data: $("#sort :input").serialize(),
                // success: success,
                // dataType: dataType,
            });
        },
    });
    $("#sort tbody").disableSelection();
});

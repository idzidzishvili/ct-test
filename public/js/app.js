$(function () {
    $("#sort tbody").sortable({
        placeholder: "drop",
        stop: function (e, ui) {
            console.log($("#tasks").serialize());
            $.ajax({
                type: "POST",
				headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                url: '/reorder-tasks',
                data: $("#sort :input[type='hidden']").serialize(),
                // success: success,
                // dataType: dataType,
            });
        },
    });
    $("#sort tbody").disableSelection();


    $("[data-bs-toggle='modal']").click(function(){
        let action = $(this).attr("data-action");
        let id = $(this).attr("data-id");
        $('#confirm-task-delete').attr('action', `${action}/${id}`)
    });

    
    $('#projects').on('change', function() {
        $.ajax({
            url: '/get-tasks',
            method: 'get',
            data: { projectid: this.value },
            success: function (response) {
                if (response.status == "success") {
                    $('#tasks').html('');
                    response.tasks.forEach((task, i)=> {
                        date1 = new Date(task.created_at);
                        $('#tasks')
                        .append($('<tr/>')
                            .append($('<td/>').append(i+1))
                            .append($('<td/>').append(task.name))
                            .append($('<td/>').append(fmt(date1, 'YYYY-MM-DD hh:mm:ss')))
                        )
                    });                 
                }
            }
        });
    });


    function fmt(date, format = 'YYYY-MM-DD hh:mm:ss') {
        const pad2 = (n) => n.toString().padStart(2, '0');      
        const map = {
          YYYY: date.getFullYear(),
          MM: pad2(date.getMonth() + 1),
          DD: pad2(date.getDate()),
          hh: pad2(date.getHours()),
          mm: pad2(date.getMinutes()),
          ss: pad2(date.getSeconds()),
        };      
        return Object.entries(map).reduce((prev, entry) => prev.replace(...entry), format);
    }


});





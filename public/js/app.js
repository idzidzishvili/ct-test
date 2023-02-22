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
        let taskid = $(this).attr("data-id");
        $('#confirm-task-delete').attr('action', 'tasks/'+taskid)
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
                    $('#tasks')
                       .append($('<tr/>')
                          .append($('<td/>').append(i+1))
                          .append($('<td/>').append(task.name))
                          .append($('<td/>').append(task.created_at))
                       )
                 });                 
              }
           }
        });
     });


});





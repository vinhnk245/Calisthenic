$(document).ready(function() {
    var level = $('#getLevel').attr('data-id');
    $('#levelName').text("Level " + level);
    var day = 1;
    var stt = 1;

    $('#btnAddExercise').attr("href","add_exercise_level.php?level=" + level);

    getExercise();

    $('select').on('change', function() {
        stt = 1; //reset stt
        day = this.value;
        getExercise();
    });


    function getExercise() {
        $.ajax({
            url: "../controller/exercise/GetExerciseByDay.php",
            data: {
                day: day,
                level: level
            },
            type: "GET",
            success: function(res) {
                var arrayExercise = $.parseJSON(res);
                $('#table tbody tr').remove();
                $.each(arrayExercise, function(index, value) {
                    setupUI(stt, value.id, value.name, value.urlYT, value.set, value.rep, value.breakTime);
                    stt++;
                });

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });
    }

    function setupUI(stt, id, name, urlYT, set, rep, breakTime) {
        $('#table')
            .append($('<tr>')
                .append($('<th>').append(stt))
                .append($('<td>').append(name))
                .append($('<td>').append('<a target="_blank" href="' + urlYT + '">' + urlYT + '</a>'))
                .append($('<td>').append(set))
                .append($('<td>').append(rep))
                .append($('<td>').append(breakTime))
                .append($('<td>').append('<button class="btn btn-danger" id="btnDelete" data-id="' + id + '"><i class="fa fa-trash-o"></i></button>'))
            );
    }
    $("body").delegate("#btnDelete", "click", function() {
        var id = $(this).attr('data-id');
        deleteExercise(id);
    });

    function deleteExercise(id) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "../controller/exercise/DeleteTraining.php",
                        data: {
                            id: id,
                            level: level,
                            day: day
                        },
                        type: "POST",
                        success: function(res) {
                            stt = 1;
                            getExercise();
                        },
                        error: function(xhr, status, errorThrown) {
                            console.log(errorThrown + status + xhr);
                        }
                    });
                }
            });
    }

})
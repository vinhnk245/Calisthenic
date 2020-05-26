$(document).ready(function() {
    var level = $('#getLevel').attr('data-id');
    $('#title').text(" Add exercise to level " + level);
    var day = 1;
    var exerciseId = 1;
    var arrayId = [];
    var isExist = false;

    $('#selectDay').on('change', function() {
        day = this.value;
    });

    $('#selectExercise').on('change', function() {
        exerciseId = this.value;
    });

    $('#btnSave').click(function() {

        // alert();
        if (isEmpty()) {
            // alert("Please fill in the blank.");
            swal({
                title: "",
                text: "Please fill in the blank.",
                icon: "warning"
            })
        } else if (!isNumeric($('#setInp').val())) {
            // alert("Set must be a number");
            swal({
                title: "",
                text: "Set must be a number",
                icon: "warning"
            })
        } else if (!isNumeric($('#repInp').val())) {
            // alert("Rep must be a number");
            swal({
                title: "",
                text: "Rep must be a number.",
                icon: "warning"
            })
        } else if (!isNumeric($('#breakTimeInp').val())) {
            // alert("Break time must be a number");
            swal({
                title: "",
                text: "Break time must be a number",
                icon: "warning"
            })
        } else {
            //lay ds exercise, kiem tra trung
            $.ajax({
                url: "../controller/exercise/GetExerciseByDay.php",
                data: {
                    level: level,
                    day: day
                },
                type: "GET",
                success: function(res) {
                    arrayExercise = $.parseJSON(res);
                    $.each(arrayExercise, function(index, value) {
                        arrayId.push(value.id);
                    })

                    $.each(arrayId, function(index, value) {
                        if (exerciseId == value) {
                            isExist = true;
                        }
                    })

                    if (isExist == true) {
                        // alert("This exercise already exist in day " + day);
                        swal({
                            title: "",
                            text: "This exercise already exist in day " + day,
                            icon: "warning"
                        })
                        isExist = false;
                    } else {
                        addExerciseToLevel();
                    }

                },
                error: function(xhr, status, errorThrown) {
                    console.log(errorThrown + status + xhr);
                }

            });
        }
    })


    //add exercise vào select
    $.ajax({
        url: "../controller/exercise/GetAllExercise.php",
        type: "GET",
        success: function(res) {
            var arrayExercise = $.parseJSON(res);
            $.each(arrayExercise, function(index, value) {
                var o = new Option(value.name, value.id);
                $(o).html(value.name);
                $("#selectExercise").append(o);
            });

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    function isNumeric(s) {
        var re = new RegExp("^[0-9]+$");
        return re.test(s);
    }

    function isEmpty() {
        if ($('#setInp').val().trim() < 1 || $('#repInp').val().trim() < 1 || $('#breakTimeInp').val().trim() < 1) {
            return true;
        }
        return false;
    }

    function addExerciseToLevel() {
        $.ajax({
            url: "../controller/exercise/AddExerciseLevel.php",
            data: {
                level: level,
                day: day,
                set: $('#setInp').val(),
                rep: $('#repInp').val(),
                exerciseId: exerciseId,
                breakTime: $('#breakTimeInp').val()
            },
            type: "POST",
            success: function(res) {
                if (res != "success") {
                    swal({
                        title: "Opps :(",
                        text: "Add failed!",
                        icon: "warning"
                    });
                } else {
                    swal({
                            title: "Success",
                            text: "Added!",
                            icon: "success"
                        })
                        .then((value) => {
                            var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_level.php?level=" +level));
                            window.location.href = url.href;
                        });
                }
            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }

        });
    }

})
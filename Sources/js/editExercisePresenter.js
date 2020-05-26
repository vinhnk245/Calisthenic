$(document).ready(function() {
    var id = $('#getExerciseId').attr("data-id");

    init(id);

    $('#btnSave').click(function() {
        var yt = new RegExp('^https://www.youtube.com/embed/[A-z0-9-_]{11}$');
        if ($('#name').val().trim().length < 1) {
            // alert('Fill in the blank');
            swal({
                title: "",
                text: "Fill in the blank",
                icon: "warning"
            })
        } else if (!yt.test($('#linkYT').val())) {
            // alert("Link youtube does not match!");
            swal({
                title: "",
                text: "Link youtube does not match!",
                icon: "warning"
            })
        } else {
            var name = $('#name').val();
            var linkYT = $('#linkYT').val();

            var idLinkYT = linkYT.split("/");

            updateExercise(name, idLinkYT[4]);
        };
    })


    //lay thong tin exercise
    function init() {
        $.ajax({
            url: "../controller/exercise/GetExerciseById.php",
            data: {
                id: id
            },
            type: "POST",
            success: function(res) {
                var exercise = $.parseJSON(res);
                if (exercise.name != null) {
                    $('#name').val(exercise.name);
                    $('#linkYT').val(exercise.linkYoutube);
                } else {
                    $('.content').html('<div style="color:#fff; font-size:30px"><p><strong>Opps :(</strong></p>Not found 404</div>');

                }

            },
            error: function(xhr, status, errorThrown) {
                console.log("a:" + errorThrown + status + xhr);
            }
        });
    }

    function updateExercise(name, linkYT) {
        $.ajax({
            url: "../controller/exercise/UpdateExercise.php",
            data: {
                id: id,
                name: name,
                linkYT: linkYT
            },
            type: "POST",
            success: function(res) {
                if (res != "fail") {
                    swal({
                            title: "Success",
                            text: "Edited",
                            icon: "success"
                        })
                        .then((value) => {
                            var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_exercise.php"));
                            window.location.href = url.href;
                        });
                } else {
                    swal({
                        title: "Opps :(",
                        text: "Something went wrong",
                        icon: "warning"
                    })
                }

            },
            error: function(xhr, status, errorThrown) {
                console.log("a:" + errorThrown + status + xhr);
            }
        });
    }

    $('#btnCancelExercise').click(function() {
        var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_exercise.php"));
        window.location.href = url.href;
    })

})
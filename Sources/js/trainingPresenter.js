$(document).ready(function() {
    var level = $('#btnGetLevel').attr('data-id');
    var day = $('#btnGetDay').attr('data-id');
    var userID = $('#btnGetUserID').attr('data-id');
    var arrayExercise;
    var pos = 0;
    var dayTrained;

    $("#dayNumber").text("Day " + day);

    $.ajax({
        url: "../controller/exercise/GetExerciseByDay.php",
        data: {
            level: level,
            day: day
        },
        type: "GET",
        success: function(res) {
            arrayExercise = $.parseJSON(res);
            console.log(arrayExercise);
            setupUI();

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }

    });

    $.ajax({
        url: "../controller/exercise/GetDayTrained.php",
        data: {
            level: level,
            userID: userID
        },
        type: "POST",
        success: function(res) {
            dayTrained = res.split(",");

            // chỉnh màu nút 
            $("#btnGroup button").each(function() {
                var currentBtnID = $(this);
                $.each(dayTrained, function(index, value) {
                    // alert(currentBtnID.attr('data-id') + "=" + value);
                    if (currentBtnID.attr('data-id') == value) {
                        currentBtnID.css("background-color", "#3d5c5c");
                    }
                    if(currentBtnID.data('id')==day) currentBtnID.css("background-color", "#1a8cff");
                });
            });
        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }

    });



    $("#btnGroup").on("click", "button", function(event) {
        var dayClicked = $(this).attr('data-id');
        //chuyển trang
        var url = new URL(window.location.href);
        url.searchParams.set('level', level);
        url.searchParams.set('day', dayClicked);
        window.location.href = url.href;
    });

    $("#btnPrevious").click(function() {
        pos--;
        setupUI();

    });

    $("#btnNext").click(function() {
        pos++;
        setupUI();

    });

    $('#btnFinishTraining').click(function() {
        $.ajax({
            url: "../controller/exercise/UpdateDayTrained.php",
            data: {
                level: level,
                userID: userID,
                dayTrained: day
            },
            type: "POST",
            success: function(res) {
                if (res.trim() == "success") {
                    alert("Good job!");
                    var url = new URL(window.location.href);
                    url.searchParams.set('level', level);
                    url.searchParams.set('day', ++day);
                    window.location.href = url.href;
                }
            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });
    });

    function setupUI() {
        $('#btnPrevious').css("display", "block");
        $('#btnNext').css("display", "block");
        $('#btnFinishTraining').css("display", "none");

        if (pos == 0) $('#btnPrevious').css("display", "none");
        if (pos == arrayExercise.length - 1) {
            $('#btnNext').css("display", "none");
            $('#btnFinishTraining').css("display", "inline-block");
        }

        $("#nameTraining").text(arrayExercise[pos].name);
        $("#setTraining").text(arrayExercise[pos].set);
        $("#repTraining").text(arrayExercise[pos].rep);
        $("#breaksTraining").text(arrayExercise[pos].breakTime);
        $(".actualyoutube iframe").remove();
        $('<iframe height="315" width="100%" frameborder="0" allowfullscreen></iframe>')
            .attr("src", arrayExercise[pos].urlYT)
            .appendTo(".actualyoutube");
    }
})
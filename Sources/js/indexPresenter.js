$(document).ready(function() {
    var userID = $('#modalLevel').attr("data-id");

    //cập nhật kết quả tập modal box
    $.ajax({
        url: "../controller/exercise/GetProgressTraining.php",
        type: "POST",
        data: {
            userID: userID
        },
        success: function(res) {
            var arrayProgressTraining = $.parseJSON(res);
            $("#selectLevel1").attr("href", "training.php?level=1&day=" + (parseInt(arrayProgressTraining[0].dayTrained, 10) + 1));
            $("#selectLevel2").attr("href", "training.php?level=2&day=" + (parseInt(arrayProgressTraining[1].dayTrained, 10) + 1));
            $("#selectLevel3").attr("href", "training.php?level=3&day=" + (parseInt(arrayProgressTraining[2].dayTrained, 10) + 1));

            $("#resultLevel1").text(arrayProgressTraining[0].dayTrained + "/12");
            $("#resultLevel2").text(arrayProgressTraining[1].dayTrained + "/12");
            $("#resultLevel3").text(arrayProgressTraining[2].dayTrained + "/12");

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });
});
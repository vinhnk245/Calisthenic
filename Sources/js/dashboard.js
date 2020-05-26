$(document).ready(function() {
    
    $.ajax({
        url: "../controller/dashboard/dashboard.php",
        data: null,
        success: function(res) {

            var result = res.split(',');
            var countUser = result[0];
            var countPost = result[1];
            var countExercise = result[2];

            $("#countUser").text(countUser);
            $("#countPost").text(countPost);
            $("#countExercise").text(countExercise);

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });
});
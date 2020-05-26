$(document).ready(function() {
    var cat = $("#container").attr('data-id');
    var arrayPost;
    var number_of_pages;
    var limit = 3;

    $.ajax({
            url: "../controller/post/GetTotalPagesCat.php",
            data: {
                cat: cat,
                limit : limit
            },
            type: "POST",
            success: function(res) {
                number_of_pages = res;
                setupBootpag();
            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });

     $.ajax({
            url: "../controller/post/GetPostByCategory.php",
            data: {
                cat: cat,
                page: 1,
                limit : limit
            },
            type: "POST",
            success: function(res) {
                arrayPost = $.parseJSON(res);
                $("#content").empty();
                if (arrayPost.length == 0) {
                    $("#content").html('<div class="alert alert-dark" role="alert"><h4 class="alert-heading">Opps :(</h4><p>There are no post to display. Please come back later ...</p></div>');
                } else {
                    $.each(arrayPost, function(index, value) {
                        $("#content").append(setupUI(value.id, value.title, value.shortContent, value.image));
                    });
                }

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });

    function setupUI(id, title, shortContent, image) {
        var postUI = '<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-4 offset-md-0 mt-3 mb-3 hvr-hang">' +
            '<div class="card colorPost">' +
            '<img class="card-img-top cursorPointer" data-id="' + id + '" alt="Bootstrap Thumbnail First" src="../' + image + '" />' +
            '<div class="card-block">' +
            '<h5 class="card-title text-info hvr-wobble-top cursorPointer mt-3 mb-3" data-id="' + id + '">' +
            title +
            '</h5>' +
            '<p class="card-text">' +
            shortContent +
            '</p>' +
            '<a class="btn btn-danger btn-detail cursorPointer" data-id="' + id + '">Detail</a>' +
            '</div>' +
            '</div>' +
            '</div>';
        return postUI;
    }

    $("body").delegate(".cursorPointer", "click", function() {
        var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/view/detail_post.php?cat=" + cat + "&id=" + $(this).attr('data-id')));
        window.location.href = url.href;
    });

    //boot pag
    function setupBootpag(){
        $('#pag').bootpag({
        total: number_of_pages,
        maxVisible: 5,
        page: 1
    }).on("page", function(event, /* page number here */ num) {
        $.ajax({
            url: "../controller/post/GetPostByCategory.php",
            data: {
                cat: cat,
                page: num,
                limit:limit
            },
            type: "POST",
            success: function(res) {
                arrayPost = $.parseJSON(res);
                $("#content").empty();
                if (arrayPost.length == 0) {
                    $("#content").html('<div class="alert alert-dark" role="alert"><h4 class="alert-heading">Opps :(</h4><p>There are no post to display. Please come back later ...</p></div>');
                } else {
                    $.each(arrayPost, function(index, value) {
                        $("#content").append(setupUI(value.id, value.title, value.shortContent, value.image));
                    });
                }

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });

    });

    $('#pag li').addClass('page-item');
    $('#pag a').addClass('page-link');
    }
    
});
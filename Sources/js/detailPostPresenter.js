$(document).ready(function() {
    var postID = $('#getPostId').attr("data-id");
    var cat = $('#getCatId').attr("data-id");
    var arrayPost;

    $.ajax({
        url: "../controller/post/GetDetailPost.php",
        type: "POST",
        data: {
            postID: postID
        },
        success: function(res) {
            var post = $.parseJSON(res);

            if (post.id != null) {
                setupUI(post);
            } else {
                $('#container').html('<div style="color:#fff; font-size:30px"><p><strong>Opps :(</strong></p>Not found 404</div>');
            }
        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    function setupUI(post) {
        $(".actualyoutube iframe").remove();
        $('<iframe class="video-detail-post"></iframe>')
            .attr("src", post.linkYoutube)
            .appendTo(".actualyoutube");
        $('#postTitle').text(post.title);
        $('#postContent').html(post.content);
    }

    //related post
     $.ajax({
        url: "../controller/post/GetRandomPostByCategory.php",
        data: {
            cat: cat,
            postID: postID
        },
        type: "POST",
        success: function(res) {
            arrayPost = $.parseJSON(res);
            if (arrayPost.length == 0) {
                $("#relatedPost").html('<div class="alert alert-dark" role="alert"><h4 class="alert-heading">Opps :(</h4><p>There are no post to display. Please come back later ...</p></div>');
            } else {
                $.each(arrayPost, function(index, value) {
                    $("#relatedPost").append(setupUIRelatedPost(value.id, value.title, value.shortContent, value.image));
                });
            }

        },
        error: function(xhr, status, errorThrown) {
            console.log(errorThrown + status + xhr);
        }
    });

    function setupUIRelatedPost(id, title, shortContent, image) {
        var postUI = '<div class="col-10 offset-1 col-sm-5 offset-sm-1 col-md-3 offset-md-0 mt-3 mb-3 hvr-hang">' +
            '<div class="card colorPost">' +
            '<img class="card-img-top" alt="Related post" src="../' + image + '" />' +
            '<div class="card-block">' +
            '<h5 class="card-title text-info">' +
            title +
            '</h5>' +
            '<p class="card-text">' +
            shortContent +
            '</p>' +
            '<a target="_blank" class="btn btn-danger btn-detail" data-id="' + id + '">Detail</a>' +
            '</div>' +
            '</div>' +
            '</div>';
        return postUI;
    }

    $("body").delegate(".card-block a", "click", function() {
        var url = new URL(window.location.href);
        url.searchParams.set('id', $(this).attr('data-id'));
        window.location.href = url.href;
    });
});
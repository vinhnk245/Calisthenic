$(document).ready(function() {
    var number_of_pages;
    var cat = "all";
    var stt = 1;
    var limit = 3;

    getTotalPages();
    getPost(1);

    $('#input-search').on('input', function() {
        console.log("in search");
        var keyword = $(this).val();
        stt = 1;
        if (keyword.trim().length == 0) {

            getPost(1);
            getTotalPages();
        } else {


            $.ajax({
                url: "../controller/post/FindPost.php",
                data: {
                    cat: cat,
                    keyword: keyword
                },
                type: "POST",
                success: function(res) {
                    var arrayPost = $.parseJSON(res);
                    console.log("length: " + arrayPost.length);
                    $('#table tbody tr').remove();
                    $('#pag').off();
                    $('#pag ul').remove();
                    if (arrayPost.length == 0) {

                    } else {
                        stt = 1;
                        console.log(stt);
                        $.each(arrayPost, function(index, value) {
                            console.log("loop:" + stt);
                            setupUI(stt, value.id, value.title, value.shortContent, value.image, value.cat, value.linkYoutube);
                            stt++;
                        });
                    }

                },
                error: function(xhr, status, errorThrown) {
                    console.log(errorThrown + status + xhr);
                }
            });
        }

    });

    $('select').on('change', function() {
        stt = 1; //reset stt
        cat = this.value;
        getPost(1);
        getTotalPages();
    });

    //setup UI
    function setupUI(index, id, title, shortContent, image, cat, linkYoutube) {
        $('#table')
            .append($('<tr>')
                .append($('<th class="widthSTT">').append(index))
                .append($('<td>').append('<span><img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="../' + image + '" /></span>'))
                .append($('<td>').append('<h5>' + title + '</h5><br>' + shortContent + '<br>Youtube: <a target="_blank" href="' + linkYoutube + '">' + linkYoutube + '</a>'))
                .append($('<td class="widthCate">').append(cat))
                .append($('<td class="width2btn">').append('<button class="btn btn-info" id="btnEditPost" onclick="editPost(' + id + ')";><i class="fa fa-pencil"></i></button> <button class="btn btn-danger" id="btnDeletePost" onclick="deletePost(' + id + ');"><i class="fa fa-trash-o"></i></button>'))
            );
    }



    //get total page
    function getTotalPages() {
        $.ajax({
            url: "../controller/post/GetTotalPagesCat.php",
            data: {
                cat: cat,
                limit: limit
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
    }

    //get post
    function getPost(num) {
        $.ajax({
            url: "../controller/post/GetPostByCategory.php",
            data: {
                cat: cat,
                page: num,
                limit: limit
            },
            type: "POST",
            success: function(res) {
                var arrayPost = $.parseJSON(res);
                $('#table tbody tr').remove();
                if (arrayPost.length == 0) {

                } else {
                    $.each(arrayPost, function(index, value) {
                        setupUI(stt, value.id, value.title, value.shortContent, value.image, value.cat, value.linkYoutube);
                        stt++;
                    });
                }

            },
            error: function(xhr, status, errorThrown) {
                console.log(errorThrown + status + xhr);
            }
        });

    }

    // $("body").delegate("#btnDeletePost", "click", function() {

    //    var idPost = $("#table tr .widthSTT").attr("data-id");
    //    alert(idPost);

    // });



    //boot pag
    function setupBootpag() {
        $('#pag').off();
        $('#pag ul').remove();

        $('#pag').bootpag({
            total: number_of_pages,
            maxVisible: 5,
            page: 1
        }).on("page", function(event, /* page number here */ num) {
            stt = (num - 1) * limit + 1; //reset stt
            // alert(stt);
            getPost(num);
        });

        $('#pag li').addClass('page-item');
        $('#pag a').addClass('page-link');

    }
})



function deletePost(idPost) {
    swal({
            title: "Are you sure?",
            text: "Delete this post?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({

                    url: "../controller/post/DeletePost.php",
                    data: { postID: idPost },
                    type: "POST",
                    success: function(res) {
                        location.reload();

                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(errorThrown + status + xhr);
                    }
                });
            }
        });

};

function editPost(idPost) {
    var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/edit_post.php?id=" + idPost));
    window.location.href = url.href;
};
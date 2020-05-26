$(document).ready(function() {
    var cat;
    var id = $('#getIdPost').attr('data-id');

    $('select').on('change', function() {
        cat = this.value;
    });

    init(id);

    //check image
    $("#imgInp").change(function() {
        var inp = this;

        var file = this.files[0];
        var fileType = file["type"];
        var ValidImageTypes = ["image/jpeg", "image/png", "image/jpg"];
        if ($.inArray(fileType, ValidImageTypes) < 0) {
            // invalid file type code goes here.
            alert("Image not valid!");
            $("#imgInp").val('');
            $("#imgPost").addClass("hide");
        } else {
            readURL(inp);
        }
    })

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#imgPost").removeClass("hide");
                $('#imgPost').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#btnSave').click(function() {
        var content = tinyMCE.activeEditor.getContent();
        if (isContentEmpty()) {
            alert("Please fill in the blank.");
        } else {
            var yt = new RegExp('^https://www.youtube.com/embed/[A-z0-9-_]{11}$');
            if (!yt.test($('#linkYT').val())) {
                alert("Link youtube does not match!");
            } else if ($("#imgInp").val() == '') {
                var title = $('#title').val();
                var linkYT = $('#linkYT').val();
                var shortContent = $('#shortContent').val();
                var content = tinyMCE.activeEditor.getContent();

                var idLinkYT = linkYT.split("/");
                editPost(id, title, idLinkYT[4], shortContent, content, cat);
            } else {
                var file_data = $('#imgInp').prop('files')[0];
                var form_data = new FormData();
                form_data.append('fileToUpload', file_data);

                $.ajax({
                    url: '../utils/upload.php', // point to server-side PHP script 
                    dataType: 'text', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(res) {
                        if (res == "false") {
                            swal({
                                title: "Opps :(",
                                text: "Upload image failed.",
                                icon: "warning"
                            });
                        } else {
                            var title = $('#title').val();
                            var linkYT = $('#linkYT').val();
                            var shortContent = $('#shortContent').val();
                            var content = tinyMCE.activeEditor.getContent();
                            var image = res;

                            var idLinkYT = linkYT.split("/");

                            editPostWithNewImage(id, title, idLinkYT[4], shortContent, content, image, cat);

                        }
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(errorThrown + status + xhr);
                    }

                });
            }


        }
    })

    function editPostWithNewImage(id, title, linkYT, shortContent, content, image, cat) {

        $.ajax({
            url: "../controller/post/EditPost.php",
            data: {
                id: id,
                title: title,
                linkYT: linkYT,
                shortContent: shortContent,
                content: content,
                image: image,
                cat: cat
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
                            var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_post.php"));
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

    function editPost(id, title, linkYT, shortContent, content, cat) {

        $.ajax({
            url: "../controller/post/EditPost.php",
            data: {
                id: id,
                title: title,
                linkYT: linkYT,
                shortContent: shortContent,
                content: content,
                cat: cat
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
                            var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_post.php"));
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

    function isContentEmpty() {
        if ($('#title').val().trim().length < 1 || $('#linkYT').val().trim().length < 1 || $('#shortContent').val().trim().length < 1 ||
            (tinyMCE.activeEditor.getContent()).trim().length < 1) return true;
        return false;
    }

    function init(postId) {
        $.ajax({
            url: "../controller/post/GetDetailPost.php",
            data: {
                postID: postId
            },
            type: "POST",
            success: function(res) {
                var post = $.parseJSON(res);
                if (post.id != null) {
                    $('#title').val(post.title);
                    $('#linkYT').val(post.linkYoutube);
                    $('#shortContent').val(post.shortContent);

                    $('#contentPost').html(post.content);
                    tinymce.init({
                        selector: '#contentPost',
                        height: 300,
                        menubar: false
                    });

                    $('select').val(getCat(post.catId)).change();

                    //set image
                    $("#imgPost").removeClass("hide");
                    $('#imgPost').attr('src', "../" + post.image);
                    $("#divImage input").val("fgg");




                } else {
                    $('.content').html('<div style="color:#fff; font-size:30px"><p><strong>Opps :(</strong></p>Not found 404</div>');
                }
            },
            error: function(xhr, status, errorThrown) {
                console.log("a:" + errorThrown + status + xhr);
            }
        });
    }

    function getCat(catId) {
        switch (catId) {
            case '1':
                return "bicep";
            case '2':
                return "tricep";
            case '3':
                return "forearms";
            case '4':
                return "shoulder";
            case '5':
                return "abs";
            case '6':
                return "cardio";
            case '7':
                return "chest";
            case '8':
                return "leg";
            case '9':
                return "back";
            case '10':
                return "nutrition";

        }
    }

     $('#btnCancelPost').click(function(){
        var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_post.php"));
        window.location.href = url.href;
    })
})
$(document).ready(function() {
    var cat = "bicep";

    tinymce.init({
        selector: '#contentPost',
        height: 300,
        menubar: false
    });

    $('select').on('change', function() {
        cat = this.value;
        alert(cat);
    });

    //check image
    $("#imgInp").change(function() {
        var inp = this;

        var file = this.files[0];
        var fileType = file["type"];
        var ValidImageTypes = ["image/jpeg", "image/png", "image/jpg"];
        if ($.inArray(fileType, ValidImageTypes) < 0) {
            // invalid file type code goes here.
            // alert("not valid");
            swal({
                title: "",
                text: "Image not valid.",
                icon: "warning"
            });
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
            // alert("Please fill in the blank.");
            swal({
                title: "",
                text: "Please fill in the blank.",
                icon: "warning"
            });
        } else {
        	var yt = new RegExp('^https://www.youtube.com/embed/[A-z0-9-_]{11}$');
            if (!yt.test($('#linkYT').val())) {
            	// alert("Link youtube does not match!");
                swal({
                    title: "",
                    text: "Link youtube does not match!",
                    icon: "warning"
                });
            } else if ($("#imgInp").val() == '') {
                // alert("Insert a image");
                swal({
                    title: "",
                    text: "Insert a image.",
                    icon: "warning"
                });
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

                            createNewPost(title,idLinkYT[4],shortContent,content,image,cat);

                        }
                    },
                    error: function(xhr, status, errorThrown) {
                        console.log(errorThrown + status + xhr);
                    }

                });
            }


        }
    })

    function createNewPost(title,linkYT,shortContent,content,image,cat){

    	 $.ajax({
            url: "../controller/post/CreatePost.php",
            data: {
                title: title,
                linkYT: linkYT,
                shortContent : shortContent,
                content:content,
                image:image,
                cat:cat
            },
            type: "POST",
            success: function(res) {
            	 if (res != "fail") {
                    swal({
                            title: "Success",
                            text: "",
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
                console.log("a:"+errorThrown + status + xhr);
            }
        });
    }

    function isContentEmpty() {
        if ($('#title').val().trim().length < 1 || $('#linkYT').val().trim().length < 1 || $('#shortContent').val().trim().length < 1 ||
            (tinyMCE.activeEditor.getContent()).trim().length < 1) return true;
        return false;
    }

    $('#btnCancelPost').click(function(){
        var url = new URL(window.location.replace("http://localhost:8080/Calisthenics/Sources/admin/manage_post.php"));
        window.location.href = url.href;
    })
})
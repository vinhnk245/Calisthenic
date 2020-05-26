<?php 
	 include_once("../config/core.php");

    if(isset($_GET["id"]) && isset($_GET["cat"])) {
        $postID = $_GET["id"];
        $cat = $_GET["cat"];
    }else{
        header("Location: {$home_url}index.php");
    } 

	require "header.php";
 ?>
	<div id="container">
		<div data-id="<?php echo $cat?>" id="getCatId" style="display:none;"></div>
		<div class="row mb-5" data-id="<?php echo $postID ?>" id="getPostId">
			<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-10 offset-md-1 mt-3">
				<div class="mb-5 actualyoutube" style="border-radius: 6px;">
					<!-- <iframe class="video-detail-post" src="https://www.youtube.com/embed/iJKV5miglAg">
		            </iframe> -->
				</div>
				<h2 class="text-center text-info mb-3" id="postTitle">Title Post...</h2>
				<p class="text-light" id="postContent">Ngày xưa tôi rất ít nói,ít tiếp xúc vì tôi ngại và không mở lòng chính vì vậy tôi thích nhạc rap,nó giúp tôi nói hết những gì mình muốn nói nhưng không thành lời.Nhưng khi bước chân vào thế giới rap tôi mới biết đây là 1 nơi thực sự để lại nhiều điều lo nghĩ,1 nơi sát phạt nhau bằng mọi ngôn từ,thậm chí là dao búa ngoài đời,bạn sẽ không biết điều gì xảy ra khi bạn lăng mạ 1 ai đó không phải là Internet Gangster,bạn sẽ được lên "thớt" mỗi ngày nếu bạn chấp nhận 1 cuộc Beef nào đó,đôi khi cha mẹ bạn cũng sẽ bị lôi vào như 1 thứ để làm trò đùa cho thiên hạ,kể cả những chuyện riêng tư , mọi thứ đều không thể nói trước nhưng khi tôi nhận ra thì chính là lúc tôi bị cuốn sâu vào rồi,tôi không tự dứt ra được.Bạn thân và gia đình khuyên tôi nên tập thân thiện với mọi người để họ không hiểu sai về mình dù mình không phải là người như họ nghĩ,và tôi đã làm thế.Nhưng sau 1 thời gian như thế tôi mới hiểu ra rằng thà để họ hiểu sai về mình cũng được vì mình càng nói càng mắc sai lầm,càng ít nói họ càng ít biết về mình và không làm tổn hại đến bản thân.Tôi thật sự rất nản và tôi đang rất muốn từ bỏ con đường này,cứ mỗi đêm tôi lại suy nghĩ rồi đặt ra câu hỏi rằng 5 năm qua tôi đã và đang cố gắng vì điều gì,và rồi tôi không có câu trả lời thoả đáng cho mình...tôi mệt mỏi, thật sự rất mệt mỏi.Thật khó khăn khi nói những lời này nhưng chắc cũng không lâu nữa đâu tôi sẽ nói tạm biệt các bạn,có lẽ là sau khi hoàn thành những gì tôi chưa thực hiện,những gì tôi có thể làm khi chơi Rap Game tôi đã làm hết sức rồi,còn những chuyện to hơn,xa hơn tôi xin dành lại cho những người có tiềm năng và may mắn hơn.Đã đến lúc phải nghĩ đến 1 việc khác để lo cho gia đình mình sau này,Rap không thể giải quyết hết mọi mối lo về cơm,áo,gạo,tiền,tôi không nói chung Rap thế giới,tôi đang nói về sự chèn ép ở Việt Nam,mặc dù tôi đã thay đổi được phần nào trong cách suy nghĩ của người lớn,tôi vui vì điều đó và tôi biết các bạn cũng thế nhưng rất tiếc 1 mình tôi thì không thể nào làm thay đổi mọi thứ, tôi xin lỗi....Dù thế nào đi nữa tôi sẽ ráng xong hết những bài mình còn giữ để gửi hết những thông điệp về cuộc sống,những điều tôi ghi nhận về nó cho mọi người.Ngủ ngon,tôi quý tất cả các bạn.</p>
			</div>
		</div>

		<div class="row mt-3 mb-3">
			<div class="col-md-10 offset-md-1 mt-3" >
				<div class="row">
					<h4 class="text-secondary col-10 offset-1 col-sm-10 offset-sm-1 offset-md-0">Related posts</h4>
				</div>
				<div class="row" id="relatedPost">
					<!-- <div class="col-10 offset-1 col-sm-5 offset-sm-1 col-md-3 offset-md-0 mt-3 mb-3 hvr-hang">
						<div class="card colorPost">
							<img class="card-img-top" alt="Bootstrap Thumbnail First" src="image/infor/hoavinh.jpg" />
							<div class="card-block">
								<h5 class="card-title text-info">
									Title
								</h5>
								<p class="card-text">
									Short content...
								</p>
								<a href="detail_post.php" target="_blank" class="btn btn-danger btn-detail">Detail</a>
							</div>
						</div>
					</div>
					<div class="col-10 offset-1 col-sm-5 offset-sm-0 col-md-3 offset-md-0 mt-3 mb-3 hvr-hang">
						<div class="card colorPost">
							<img class="card-img-top" alt="Bootstrap Thumbnail First" src="image/infor/hoavinh.jpg" />
							<div class="card-block">
								<h5 class="card-title text-info">
									Title
								</h5>
								<p class="card-text">
									Short content...
								</p>
								<a href="detail_post.php" target="_blank" class="btn btn-danger btn-detail">Detail</a>
							</div>
						</div>
					</div>
					<div class="col-10 offset-1 col-sm-5 offset-sm-1 col-md-3 offset-md-0 mt-3 mb-3 hvr-bob">
						<div class="card colorPost">
							<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="image/test/twoplank.jpg" />
							<div class="card-block">
								<h5 class="card-title text-info">
									Title
								</h5>
								<p class="card-text">
									Short content...
								</p>
								<a class="btn btn-danger btn-detail">Detail</a>
							</div>
						</div>
					</div>
					<div class="col-10 offset-1 col-sm-5 offset-sm-0 col-md-3 offset-md-0 mt-3 mb-3 hvr-hang">
						<div class="card colorPost">
							<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="image/infor/hoavinh.jpg" />
							<div class="card-block">
								<h5 class="card-title text-info">
									Title
								</h5>
								<p class="card-text">
									Short content...
								</p>
								<a class="btn btn-danger btn-detail">Detail</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
 <?php 
	require"footer.php"
 ?>
 <script type="text/javascript" src="../js/detailPostPresenter.js"></script>
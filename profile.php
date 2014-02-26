<?php 
	$title = "Profil de Honoré HOUNWANOU";
	require "includes/header.php"; 
?>	
	
	<div id="left_block">
		<img id="profile_img" src="img/me.png" alt="" />
		<div id="infos_user" style="padding-left: 5px">
			<div id="updates">
				<span class="blue">1025</span> <br/> POSTS
			</div>
			<div id="friends_number">
				<span class="blue">758</span> <br/> AMIS
			</div>
		</div>
		<div id="search">
			 Rechercher des amis
			<input type="search" />
		</div>

		<div id="friends">
			Amis <br/>
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
			<img src="img/unknown.png" alt="" />
			<img src="img/me.png" alt="" />
		</div>
	</div>

	<div id="right_block">
		<h1>Fil d'actualités</h1>
		<h3>Quoi de neuf <strong>Honoré Hounwanou</strong>?</h3>
		<form id="update_form">
			<textarea name="" id="" style="width: 650px; height: 50px"></textarea><br/>
			<div id="options">
				<button class="btn btn-success">Publier</button>
				<span style="float: right; padding-right: 5px">
					<a href="#" title="Publier un enregistrement audio"><i class="icon-music"></i></a>&nbsp;
					<a href="#" title="Charger une photo"><i class="icon-picture"></i></a>&nbsp;
					<a href="#" title="Prendre une photo depuis sa webcam"><i class="icon-camera"></i></a>
				</span>
			</div>
		</form>

		<div id="feeds">
			<div class="feed">
				<div class="feed_author">
					<img src="img/me.png" alt="" class="img-little" style="width:70px"/>
				</div>
				<div class="feed_content">
					<strong>Honoré Hounwanou</strong> <span style="float:right;"><a href="#"><i class="icon-trash"></i></a></span>
					<p>
						J'adore la programmation mon bro' <a href="#">Aziz Yerima</a>
					</p>
					 <p class="muted">Il y a quelques instants <i class="icon-time"></i></p>
					 <div class="separator"></div>
					 <p class="muted" style="padding:5px;">Aziz Yerima, Lamine Mbodj aiment ça</p>
					 <div class="separator"></div>
					 <p><span class="like"><i class="icon-thumbs-up"></i>&nbsp;<a href="#" class="o_comment">J'aime</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
					 <span class="comment"><i class="icon-comment"></i>&nbsp;<a href="#" class="o_comment">Commenter</a></span></p>
					 <div class="comments">
					 	<div class="comment">
						 	<span style="float:left;margin-right: 5px;"><img src="img/aziz.jpg" alt="" class="img-little" style="height:45px; width: 50px;"></span>
							<p><a href=""><strong>Aziz Yérima</strong></a>&nbsp;Moi également lool</p>
							<p class="muted">Il y a 2 minutes <i class="icon-time"></i> - <a href="#"><small>J'aime</small></a></p>
						</div>
						<div class="comment">
						 	<span style="float:left;margin-right: 5px;"><img src="img/me.png" alt="" class="img-little" style="height:45px; width: 50px;"></span>
							<textarea  style="width:482px;height:42px"></textarea>
							<button class="btn btn-info">Commenter</button>
						</div>
					 </div>
				</div>
			</div>
			<div class="feed">
				<div class="feed_author">
					<img src="img/aziz.jpg" alt="" class="img-little" style="width:70px" />
				</div>
				<div class="feed_content">
					<strong>Aziz Yerima</strong> <span style="float:right;"><a href="#"><i class="icon-trash"></i></a></span>
					<p>
						Je t'aime mon bébé <a href="#">Mariama Fall</a><br/>
					 	See U later ma puce :)
					</p>
					 <p class="muted">Il y a 2 minutes <i class="icon-time"></i></p>
					 <div class="separator"></div>
					 <p><span class="like"><i class="icon-thumbs-up"></i>&nbsp;<a href="#" class="o_comment">J'aime</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
					 <span class="comment"><i class="icon-comment"></i>&nbsp;<a href="#" class="o_comment">Commenter</a></span></p>
				</div>
			</div>
			<div class="feed">
				<div class="feed_author">
					<img src="img/unknown.png" alt="" class="img-little" style="width:70px"/>
				</div>
				<div class="feed_content">
					<strong>Lamine Mbodj</strong> <span style="float:right;"><a href="#"><i class="icon-trash"></i></a></span>
					<p>
						<a href="#">Oumi</a> et moi c'est pour la vie!!!<br/>
					 	Hummm les jaloux...
					</p>
					 <p class="muted">Il y a un jour <i class="icon-time"></i></p>
					 <div class="separator"></div>
					 <p><span class="like"><i class="icon-thumbs-up"></i>&nbsp;<a href="#" class="o_comment">J'aime</a></span>&nbsp;&nbsp;&nbsp;&nbsp;
					 <span class="comment"><i class="icon-comment"></i>&nbsp;<a href="#" class="o_comment">Commenter</a></span></p>
				</div>
			</div>
		</div>
	</div>

	

<?php require "includes/footer.php"; ?>
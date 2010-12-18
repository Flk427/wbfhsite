		<div id="leftbar">
			<div style="height: 5px; background: #cccc30; float: left; margin-top: 25px; margin-bottom: 15px;"></div>
			<h1><?php trp('Game moments'); ?></h1>
			<object width="240" height="180">
				<param name="movie" value="http://www.youtube.com/v/GHhzQfqCHGQ?fs=1&amp;hl=ru_RU">
				<param name="allowFullScreen" value="true">
				<param name="allowscriptaccess" value="always">
				<embed src="http://www.youtube.com/v/GHhzQfqCHGQ?fs=1&amp;hl=ru_RU" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" style="width:240px; height:180px"></embed>
			</object>

<!--
<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/3jK2j28Sj3Y?fs=1&amp;hl=ru_RU"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/3jK2j28Sj3Y?fs=1&amp;hl=ru_RU" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
-->

			<!-- управление отображением тем форума или новостей -->
			<div style="float: left; margin-top: 20px; border-bottom: 1px solid #656500;">
				<div id="forum_selector" onclick="showForum()"><div style="float: left;"><?php trp('On the forum'); ?></div><img src="images/ico_forum.gif" style="float: right;"></div>
				<div id="news_selector" onclick="showNews()"><?php trp('News'); ?></div>
			</div>
			<div id="forum_topics">
				<div class="forum_topic">
					<h2>15.07.2010</h2>
					<a href="#">планы на открытую бету 1.68</a>
				</div>
				<div class="forum_topic">
					<h2>15.07.2010</h2>
					<a href="#">обсуждение проекта нового сайта wbfree.net</a>
				</div>
				<div id="all_topics">
					<a href="http://forum.wbfree.net/"><?php trp('All discussions'); ?></a>
				</div>
			</div>
			<div id="news_topics">
				Новостя...
			</div>

		</div> <!--leftbar-->

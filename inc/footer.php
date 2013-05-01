			</div>
			<div id="secondary" class="group">
				<!-- <form id="search" action="<?php echo $path; ?>/search" method="get">
					<div>
						<input type="text" name="q" value="<?php if($searchQuery){ echo s($searchQuery); } ?>" />
					</div>
				</form>-->
				<?php echo displayMonths(); ?>
				<?php echo displayCategories(); ?>
			</div></div>
		</div>
		<div id="footer" class="group">
			&copy; <?php echo date("Y") . " <a href=\"http://twitter.com/" . s($config['twitter_screenname']) . "\">" . s($author['realname']) . "</a>"; ?>, powered by <a href="http://pongsocket.com/tweetnest/">Tweet Nest</a>
		</div>
	</div>
</body>
</html>
<?php if($startTime){ echo "<!-- " . round((microtime(true) - $startTime), 5) . " s -->\n"; } ?>
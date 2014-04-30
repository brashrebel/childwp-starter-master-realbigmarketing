<div id="big-menu"> 
	<ul>
		<li id="rr-link" class="top-link">
			<a href="<?php echo get_site_url(); ?>/service/"><span class="fa fa-gear"></span></a>
			<div id="real-results" class="row real-big-nav">
				<div class="large-4 column">
					<?php if (dynamic_sidebar('real_results_1')) : else : endif; ?>
				</div>
				<div class="large-4 column">
					<?php if (dynamic_sidebar('real_results_2')) : else : endif; ?>
				</div>
				<div class="large-4 column">
					<?php if (dynamic_sidebar('real_results_3')) : else : endif; ?>
				</div>
			</div>
		</li>
		<li id="bi-link" class="top-link">
			<a href="<?php echo get_permalink(926); ?>"><span class="fa fa-bulb"></span></a>
			<div id="big-ideas" class="row real-big-nav">
				<div class="large-4 column">
					<?php if (dynamic_sidebar('big_ideas_1')) : else : endif; ?>
				</div>
				<div class="large-4 column">
					<?php if (dynamic_sidebar('big_ideas_2')) : else : endif; ?>
				</div>
				<div class="large-4 column">
					<?php if (dynamic_sidebar('big_ideas_3')) : else : endif; ?>
				</div>
			</div>
		</li>
	</ul>
</div>
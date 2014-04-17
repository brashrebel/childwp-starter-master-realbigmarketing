<div id="big-menu"> 
	<ul>
		<li id="rr-link" class="top-link">
			<a href="#"><span class="fa fa-gear"></span>Real Results</a>
			<div id="real-results" class="row real-big-nav">
				<div class="small-2 large-4 column">
					<?php if (dynamic_sidebar('real_results_1')) : else : endif; ?>
				</div>
				<div class="small-4 large-4 column">
					<?php if (dynamic_sidebar('real_results_2')) : else : endif; ?>
				</div>
				<div class="small-6 large-4 column">
					<?php if (dynamic_sidebar('real_results_3')) : else : endif; ?>
				</div>
			</div>
		</li>
		<li id="bi-link" class="top-link">
			<a href="#"><span class="fa fa-bulb"></span>Big Ideas</a>
			<div id="big-ideas" class="row real-big-nav">
				<div class="small-2 large-4 column">
					<?php if (dynamic_sidebar('big_ideas_1')) : else : endif; ?>
				</div>
				<div class="small-4 large-4 column">
					<?php if (dynamic_sidebar('big_ideas_2')) : else : endif; ?>
				</div>
				<div class="small-6 large-4 column">
					<?php if (dynamic_sidebar('big_ideas_3')) : else : endif; ?>
				</div>
			</div>
		</li>
	</ul>
</div>
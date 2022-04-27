<div class="tabs column large">
	<div class="tab">
		<button id="defaultOpen" class="tablinks" onclick="openCity(event, 'accordion-children')">孩子们</button>
		<button class="tablinks" onclick="openCity(event, 'accordion-adults')">大人</button>
		<button class="tablinks" onclick="openCity(event, 'accordion-extra')">课外活动</button>
	</div>

	<div id="accordion-children" class="tabcontent">
		<?php import('accordion-children'); ?>
	</div>

	<div id="accordion-adults" class="tabcontent">
		<?php import('accordion-adults'); ?>
	</div>

	<div id="accordion-extra" class="tabcontent">
		<?php import('accordion-extra'); ?>
	</div>

</div>
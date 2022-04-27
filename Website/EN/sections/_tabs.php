<div class="tabs column large">
	<div class="tab">
		<button id="defaultOpen" class="tablinks" onclick="openCity(event, 'accordion-children')">Kids</button>
		<button class="tablinks" onclick="openCity(event, 'accordion-adults')">Adults</button>
		<button class="tablinks" onclick="openCity(event, 'accordion-extra')">Extracurricular</button>
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
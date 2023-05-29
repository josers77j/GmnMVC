<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
			<?php

			if ($_SESSION["role"] == "Usuario") {
				echo '
				<li class="active">
						<a href="inicio">
							<i class="fa fa-home"></i>
							<span>Inicio</span>
						</a>
				</li>
				
				';
			}

			if ($_SESSION["role"] == "Administrador") {
				echo '
					<li class="active">
						<a href="inicio">
							<i class="fa fa-home"></i>
							<span>Inicio</span>
						</a>
					</li>

					<li>
						<a href="usuarios">
							<i class="fa fa-user"></i>
							<span>Usuarios</span>
						</a>
					</li>

			';
			}

			?>
		</ul>

	</section>

</aside>
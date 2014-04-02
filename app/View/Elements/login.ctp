<?php if ($authUser): ?>

<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hej, <?php echo $authUser['User']['username']; ?><b class="caret"></b></a>
	<ul class="dropdown-menu">
		<li>
		<?php
		echo $this->Html->link(
			'Orderhistorik',
			array('controller' => 'orders', 'action' => 'history')
		);
		?>
		</li>
		<li class="divider"></li>
		<li>
		<?php
		echo $this->Html->link(
			'Logga ut',
			array('controller' => 'users', 'action' => 'logout')
		);
		?>
		</li>
	</ul>
</li>

<?php else: ?>

<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Logga in<b class="caret"></b></a>
	<ul class="dropdown-menu">
		<li>
		<form action="/utique/users/login" method="post" id="UserLoginForm" class="navbar-form" role="form">
			<div class="form-group">
				<input name="data[User][username]" type="text" placeholder="Användarnamn" id="UserUsername" class="form-control nav-dropdown-form">
			</div>
			
			<div class="form-group">
				<input name="data[User][password]" type="password" placeholder="Lösenord" id="UserPassword" class="form-control nav-dropdown-form">
			</div>
			
			<button type="submit" class="btn btn-success nav-dropdown-form">Logga in</button>
		</form>
		</li>
	</ul>
</li>

<?php endif; ?>
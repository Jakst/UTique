<?php $this->set('title_for_layout', 'Om Utique'); ?>
<div class="container window">
	<h1>Om Utique</h1>
	<p>Utique grundades i Singapore år 2014 efter den otroligt höga efterfrågan på unika t-shirtar. Med en t-shirt från Utique slipper du dyka upp på festen i samma t-shirt som någon annan. Vi som jobbar på Utique är:</p>
		
	<div class="row bordered-pictures">
		<div class="col-md-4 ">
			<?php echo $this->Html->image('jakob.jpg', 							
				array(
					'alt' => 'Jakob Ståhl', 
					'class' => 'img-responsive'));?>
			<h3>Jakob Ståhl</h3>
			<p>Jakob är programmeringstalangen på Utique. Han kodar bäst med en McChicken i handen.</p>
		</div>
		<div class="col-md-4">
			<?php echo $this->Html->image('sofie.jpg',
				array(
					'alt' => 'Sofie Nilsson', 
					'class' => 'img-responsive'));?>
			<h3>Sofie Nilsson</h3>
			<p>Hjärnan och planeraren. Lämnar caramel-frappuccinospår efter sig.</p>
		</div>
		<div class="col-md-4">
			<?php echo $this->Html->image('ylva.jpg',
				array(
					'alt' => 'Ylva Johansson', 
					'class' => 'img-responsive'));?>
			<h3>Ylva Johansson</h3>
			<p>Det kreativa geniet. Ses ständigt med en påse chokladtäckta russin.</p>
		</div>
	</div>
</div>
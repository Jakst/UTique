<?php
class InventoryItemsController extends AppController {
	public function check_inventory(){
			$cart = $this->Session->read('Cart');
			$data['InventoryItem'] = Hash::combine($this->InventoryItem->find('all'), '{n}.InventoryItem.id', '{n}.InventoryItem');

			foreach ($cart as $id => $tee):
				foreach ($tee['sizes'] as $size => $item):
					$item_id = $item['item_id'];
					if(($data['InventoryItem'][$item_id]['amount'] - $item['amount']) < 0){
						$errorMessage = "Tyv�rr finns det bara ".$data['InventoryItem'][$item_id]['amount']." kvar i lager av t-shirt ".$tee['Tee']['name']." i storlek ".$size.". Var god �ndra din best�llning.";
						$this->Session->setFlash($errorMessage, 'flash/error');
						$this->redirect(array('controller' => 'carts', 'action' => 'view'));
						//$this->redirect(array('controller' => 'carts', 'action' => 'view', 'errorMessage' => $errorMessage));
					}
				endforeach;
			endforeach;
			
			$this->redirect(array('controller' => 'orders', 'action' => 'create_order'));
	}
}
?>

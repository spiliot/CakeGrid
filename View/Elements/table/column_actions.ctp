<?php
	foreach($actions as $title => $action):
		if (isset($action['options']['type'])) {
			if ($action['options']['type'] === 'postLink') {
				$confirmMessage = false;
				if (isset($action['options']['confirmMessage'])) {
					$confirmMessage = $action['options']['confirmMessage'];
					unset($action['options']['confirmMessage']);
				}
				echo $this->Form->postLink($title, $action['url'], $action['options'] + array('class' => 'cg_action'), $confirmMessage) . ' ';	
			}
		} else {
			echo $this->Html->link($title, $action['url'], $action['options'] + array('class' => 'cg_action')). ' ';	
		}
	endforeach; 
?> 
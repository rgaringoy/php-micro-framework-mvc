<?php

class About extends Controller {

	public function who($name = '', $name2 ='') {

		echo $name . ' ' . $name2;
	}
}
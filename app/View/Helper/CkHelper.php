<?php
class CkHelper extends AppHelper{

	var $helpers = Array('Html', 'Js');
	
	function load($id) {
		$did = '';
		foreach (explode('.', $id) as $v) {
			$did .= ucfirst($v);
		}
		
		// appel de CKEDITOR et CKFINDER avec configuration par défaut.
		$code = "var editor = CKEDITOR.replace( '".$did."');";
		$code .= "CKFinder.setupCKEditor(editor, '/js/ckfinder');";
		
	return $this->Html->scriptBlock($code);
	}

}
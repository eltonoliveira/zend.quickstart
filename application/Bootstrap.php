<?php
/**
 * Classe de bootstrap.
 * 
 * @tutorial 
 * 
 *
 * @author Elton D. de Oliveira
 * @category Application
 * @package Application   
 * @name Bootstrap
 * @access public
 * @version 0.0.1
 * @license GPL (http://www.fsf.org/)
 * @copyright copyleft
 *
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/** -------------------------------------------------------------------------------------------------------------------------- */
	
	/**
	 * Configura o doctype do sistema
	 * 
	 * <code>
	 * <?php
	 * 
	 * ?>	
	 * </code>
	 * 
	 * @tutorial Configura o doctype do sistema
	 * 
	 * @author Elton D. de Oliveira
	 * @name _initDocType
	 * @access protected
	 * @return void
	 * 
	 */
	protected function _initDocType()
	{
		$this->bootstrap('view');
		$view = $this->getResource('view');
		$view->doctype('XHTML1_STRICT');
	}

	/** -------------------------------------------------------------------------------------------------------------------------- */
}


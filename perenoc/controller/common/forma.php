<?php
namespace Opencart\Catalog\Controller\Common;
class Header extends \Opencart\System\Engine\Controller {
	public function index(): string {



		//$data['configuration__block'] = $this->load->controller('common/configuration__block');

		return $this->load->view('common/new_uslugi');
	}
}

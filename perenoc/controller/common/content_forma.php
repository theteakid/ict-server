<?php
namespace Opencart\Catalog\Controller\Common;
class ControllerContentForma extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$data['analytics'] = [];
		return $this->load->view('common/new_uslugi', $data);
	}
}

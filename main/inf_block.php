<?php
namespace Opencart\Catalog\Controller\Common;
class InfBlock extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$data = [];
		$this->response->setOutput($this->load->view('common/inf_block', $data));
	}
}
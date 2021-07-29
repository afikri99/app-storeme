<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Komentar extends ResourceController
{
	protected $modelName = 'App\Models\KomentarModels';
	protected $format    = 'json';

	// get all
	// GET baseurl/komentar/
	public function index()
	{
		return $this->respond($this->model->findAll(), 200);
	}

	// get by id
	// GET baseurl/komentar/$id
	public function show($id = NULL)
	{
		$get = $this->model->getKomentar($id);
		if ($get) {
			$code = 200;
			$response = [
				'data' => $get,
			];
		} else {
			$code = 404;
			$msg = ['pesan' => 'Not Found'];
			$response = [
				'data' => $msg,
			];
		}
		return $this->respond($response, $code);
	}

	// add new data
	// POST baseurl/komentar/
	public function create()
	{
		$postId = $this->request->getPost('postId');
		$name = $this->request->getPost('name');
		$Email = $this->request->getPost('Email');
		$body = $this->request->getPost('body');

		$data = [
			'postId' => $postId,
			'name' => $name,
			'Email' => $Email,
			'body' => $body
		];

		$create = $this->model->insertKomentar($data);
		if ($create) {
			$msg = ['pesan' => 'Komentar berhasil disimpan'];
			$response = [
				'data' => $msg,
			];
			return $this->respond($response, 200);
		}
	}

	// delete data
	// DELETE baseurl/komentar/$id
	public function delete($id = NULL)
	{
		$del = $this->model->deleteKomentar($id);
		if ($del) {
			$code = 200;
			$msg = ['pesan' => 'Komentar berhasil dihapus'];
			$response = [
				'data' => $msg,
			];
		} else {
			$code = 404;
			$msg = ['pesan' => 'Not Found'];
			$response = [
				'data' => $msg,
			];
		}
		return $this->respond($response, $code);
	}

	// update
	// PUT baseurl/komentar/$id
	public function update($id = NULL)
	{
		$data = $this->request->getRawInput();

		$upd = $this->model->updateKomentar($data, $id);
		if ($upd) {
			$msg = ['pesan' => 'Komentar berhasil diupdate'];
			$response = [
				'data' => $msg,
			];
			return $this->respond($response, 200);
		}
	}
}

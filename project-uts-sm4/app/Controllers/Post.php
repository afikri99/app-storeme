<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Post extends ResourceController
{
	protected $modelName = 'App\Models\PostModels';
	protected $format    = 'json';

	// get all
	// GET baseurl/post
	public function index()
	{
		return $this->respond($this->model->findAll(), 200);
	}

	// get by id
	// GET baseurl/post/$id
	public function show($id = NULL)
	{
		$comments = new \App\Models\KomentarModels();

		$get = $this->model->getPost($id);
		$getcomment = $this->model->getComment($id);
		if ($get) {
			$code = 200;
			$response = [
				'data' => $get,
				'comments' => $getcomment,
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
	// POST baseurl/post/
	public function create()
	{
		$title = $this->request->getPost('title');
		$body = $this->request->getPost('body');
		$gambar = $this->request->getPost('gambar');

		$data = [
			'UserId' => 1,
			'Title' => $title,
			'body' => $body,
			'gambar' => $gambar,
		];

		$create = $this->model->insertPost($data);
		if ($create) {
			$msg = ['pesan' => 'Post berhasil disimpan'];
			$response = [
				'data' => $msg,
			];
			return $this->respond($response, 200);
		}
	}

	// delete data
	// DELETE baseurl/post/$id
	public function delete($id = NULL)
	{
		$del = $this->model->deletePost($id);
		if ($del) {
			$code = 200;
			$msg = ['pesan' => 'Post berhasil dihapus'];
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
	// PUT baseurl/post/$id
	public function update($id = NULL)
	{
		$data = $this->request->getRawInput();

		$upd = $this->model->updatePost($data, $id);
		if ($upd) {
			$msg = ['pesan' => 'Post berhasil diupdate'];
			$response = [
				'data' => $msg,
			];
			return $this->respond($response, 200);
		}
	}
}

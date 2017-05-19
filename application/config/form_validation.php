<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'DanhMuc' => array(
		array(
		'field' => 'TenDanhMuc',
		'label' => 'Tên Danh Mục',
		'rules' => 'required|min_length[6]|max_length[50]'
		),
		array(
		'field' => 'MaDanhMucCha',
		'label' => 'Mã Danh Mục Cha',
		'rules' => 'required'
		),
	),
);

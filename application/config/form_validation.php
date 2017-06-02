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

	'TacGia' => array(
		array(
		'field' => 'TenTacGia',
		'label' => 'Tên Tác Giả',
		'rules' => 'required|min_length[6]|max_length[100]'
		),
	),

	'LoaiTaiNguyen' =>array(
		array(
		'field' => 'TenTaiNguyen',
		'label' => 'Tên Loại Tài Nguyên',
		'rules' => 'required|min_length[6]|max_length[100]'
		),
	),

	'Sach' =>array(
		array(
		'field' => 'TenSach',
		'label' => 'Tên Sách',
		'rules' => 'required|min_length[6]|max_length[100]'
		),
		array(
		'field' => 'MaTacGia',
		'label' => 'Mã Tác Giả',
		'rules' => 'required'
		),
		array(
		'field' => 'ThoiGianPhatHanh',
		'label' => 'Thời Gian Phát Hành',
		'rules' => 'required'
		),
		array(
		'field' => 'MieuTaNgan',
		'label' => 'Miêu Tả Ngắn',
		'rules' => 'required'
		),
		array(
		'field' => 'MieuTaDai',
		'label' => 'Miêu Tả Dài',
		'rules' => 'required|min_length[6]|max_length[1000]'
		),
	),
	'TaiNguyenSach' =>array(
		array(
		'field' => 'TenTaiNguyen',
		'label' => 'Tên Tài Nguyên',
		'rules' => 'required'
		),
		array(
		'field' => 'DuongDan',
		'label' => 'Đường Dẫn',
		'rules' => 'required'
		)
	),
);

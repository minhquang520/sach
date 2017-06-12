<?php
	class ModelChung extends CI_Model
	{
		// Ten table mặc định
    	var $table = '';
    	// Gán table cần xử lý
    	public function set_table($tableName) {
    		$this->table = $tableName;
    	}

    	/**
		* Lay thong tin cua row tu id
		* $id: Khóa chính muốn lấy thông tin
		*/
		public function get_info($id)
		{
		    if (!$id)
		    {
		        return FALSE;
		    }
		    $where = array();
		    $where['id'] = $id;
		    return $this->get_info_rule($where);
		}
		public function get_info_by_slug($slug)
		{
		    if (!$slug)
		    {
		        return FALSE;
		    }
		    $where = array();
		    $where['slug'] = $slug;
		    return $this->get_info_rule($where);
		}
		/**
		 * Lay thong tin cua row tu dieu kien
		 * $where: Mảng điều kiện
		 */
		
		public function get_info_rule($where = array())
		{
		    $this->db->where($where);
		    $query = $this->db->get($this->table);
		    if ($query->num_rows())
		    {
		        return $query->row();
		    }
		    return FALSE;
		}
		public function CapNhat($id, $data) {
	    	if (!$id)
		    {
		        return FALSE;
		    }
		    $where = array();
		    $where['id'] = $id; 
        	return $this->update_rule($where, $data);
	    }
		/**
		* Cap nhat row tu dieu kien
		* $where: điều kiện
		*/
		public function update_rule($where, $data)
		{
		    if (!$where)
		    {
		        return FALSE;
		    }
		    $this->db->where($where);//thêm điều kiện
		    if($this->db->update($this->table, $data))//cập nhật dữ liệu
		    {
		        return TRUE;
		    }
		    return FALSE;
		}
		public function TaoMoi($data) {
			if($this->db->insert($this->table, $data))
			{ 
				$insert_id = $this->db->insert_id();
				return $insert_id; 
			}
			else { 
				return FALSE; 
			}
		}
	    
	    /**
		*Xoa row tu id
		*/
		function delete($id)
		{
		    if (!$id)
		            {
		        return FALSE;
		    }
		    if(is_numeric($id))//nếu $id là số
		    {
		        $where = array('id' => $id);
		    }else
		    {
		                    //id nằm trong chuoi các id truyền vào
		        $where =  "id IN (".$id.") ";
		    }
		    return $this->del_rule($where, $id);
		}
		 
		/**
		* Xoa row tu dieu kien
		*/
		public function del_rule($where, $id)
		{
		    if (!$where)
		    {
		        return FALSE;
		    }
		    $row = $this->get_info($id);

		    $this->db->where($where);//thêm điều kiện
		    if($this->db->delete($this->table))//thực hiện xóa
		    {
		        return TRUE;
		    }
		    return FALSE;
		}

		/**
		* Lay danh sach
		*/
		function get_list($input = array())
		{
		            //gắn các tùy chọn nếu có
		    return $this->get_list_set_input($input);
		    
		}
		 
		/**
		* Gan cac thuoc tinh trong input khi lay danh sach
		*/
		public function get_list_set_input($input)
		{
		     // Select
			 if (isset($input['select']))
			 {
			      $this->db->select($input['select']);
			 }
		    // Thêm điều kiện cho câu truy vấn truyền qua biến $input['where']
		 
		    if ((isset($input['where'])) && $input['where'])
		    {
		        $this->db->where($input['where']);
		    }
            // Thêm sắp xếp dữ liệu thông qua biến $input['order'] (ví dụ $input['order'] = array('id','DESC'))
		    if (isset($input['order'][0]) && isset($input['order'][1]))
		    {
		        $this->db->order_by($input['order'][0], $input['order'][1]);
		    }
		    else
		    {
		        //mặc định sẽ sắp xếp theo id giảm dần
		        $this->db->order_by('id', 'desc');
		    }
		 
		    // Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] (ví dụ $input['limit'] = array('10' ,'0'))
		    if (isset($input['limit'][0]) && isset($input['limit'][1]))
		    {
		        $this->db->limit($input['limit'][0], $input['limit'][1]);
		    }    
			
			//thuc hien truy van du lieu
		    $query = $this->db->get($this->table);
		            //tra ve du lieu
		    return $query->result();
		}
		public function toASCII($str) {
	        if(!$str) return false;
	        $utf8 = array(
	        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
	        'd'=>'đ|Đ',
	        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	        'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
	        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
	        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
	        'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
	                                        );
	        foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
	        return $str;
    	}

	}
?>
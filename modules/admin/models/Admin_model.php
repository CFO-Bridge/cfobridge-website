<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	public function check_admin_exists($username, $pass)
	{
	   	$res = $this->db->get_where('admin_master', array('username' => $username));
		if ($res->num_rows() == 1) {
		  	$row = $res->row_array();
			$password = $row['password'];
			if (password_verify($pass, $password)) {
				return true;
			} else {
				return false;
			}
		}
		return FALSE;
	}
	function add_blog($data)
	{
		$this->db->insert('blogs', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_event($data)
	{
		$this->db->insert('events', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_event($data,$where)
	{
		$this->db->update('events', $data,$where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_testimonial($data)
	{
		$this->db->insert('testimonials', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_testimonial($data, $where)
	{
		$this->db->update('testimonials', $data, $where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_teammember($data)
	{
		$this->db->insert('team_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_teammember($data, $where)
	{
		$this->db->update('team_master', $data, $where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_industry($data)
	{
		$this->db->insert('industry_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_industry($data, $where)
	{
		$this->db->update('industry_master', $data, $where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_client($data)
	{
		$this->db->insert('client_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	function add_clientNew($data)
	{
		$this->db->insert('client_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	function update_client($data, $where)
	{
		$this->db->update('client_master', $data, $where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	function update_clientNew($data, $where)
	{
		$this->db->update('client_master', $data, $where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	} 

	function add_home_banner($data)
	{
		$this->db->insert('home_banner_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_home_banner($data, $where)
	{
		$this->db->update('home_banner_master', $data, $where);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_service($data)
	{
		$this->db->insert('service_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_service($data, $where)
	{
		$this->db->where($where);
		$this->db->update('service_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_location($data)
	{
		$this->db->insert('location_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_location($data, $where)
	{
		$this->db->where($where);
		$this->db->update('location_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_exservice($data)
	{
		$this->db->insert('exservice_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_exservice($data, $where)
	{
		$this->db->where($where);
		$this->db->update('exservice_master', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function add_homefaq($data)
	{
		$this->db->insert('home_faq', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function update_homefaq($data, $where)
	{
		$this->db->where($where);
		$this->db->update('home_faq', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function updateblog($data, $where)
	{
		$this->db->where($where);
		$this->db->update('blogs', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	function getblogs()
	{
		$this->db->order_by('id', 'desc');
		$qry = $this->db->get('blogs');
		
		return $qry->result_array();
	}
	function getevents()
	{
		$this->db->order_by('id', 'desc');
		$qry = $this->db->get('events');
		
		return $qry->result_array();
	}
	function gethomefaqs()
	{
		//$this->db->order_by('id', 'desc');
		$qry = $this->db->get('home_faq');
		
		return $qry->result_array();
	}
	function gethomefaqbyid($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('home_faq');
		
		return $qry->row_array();
	}
	function geteventbyid($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('events');
		
		return $qry->row_array();
	}
	
	function getdocumentslist()
	{
		$this->db->order_by('d.id', 'desc');
		$this->db->select('d.*,t.name as team');
		$this->db->from('downloads_master d');
		$this->db->join('team_master t','t.id = d.teamid','left');
		$qry = $this->db->get();
		
		return $qry->result_array();
	}
	
	function getdocumentslistTest()
	{
		$this->db->order_by('d.id', 'desc');
		$this->db->select('d.*,t.name as team');
		$this->db->from('downloads_master_test d');
		$this->db->join('team_master t','t.id = d.teamid','left');
		$qry = $this->db->get();
		
		return $qry->result_array();
	}
	
	function getdownloadfile($id)
	{
		$qry = $this->db->get_where('downloads_master',['id'=>$id]);
		
		return $qry->row_array();
	}
	
	function getdownloadfileTest($id)
	{
		$qry = $this->db->get_where('downloads_master_test',['id'=>$id]);
		
		return $qry->row_array();
	}
	
	function add_downloadfile($data)
	{
	    $this->db->insert('downloads_master',$data);
	    if($this->db->affected_rows()>0)
	    {
	        return true;
	    }
	    return false;
	}
	
	function add_downloadfileTest($data)
	{
	    $this->db->insert('downloads_master_test',$data);
	    if($this->db->affected_rows()>0)
	    {
	        return true;
	    }
	    return false;
	}
	
	function update_downloadfile($data,$where)
	{
	    $this->db->update('downloads_master',$data,$where);
	    if($this->db->affected_rows()>0)
	    {
	        return true;
	    }
	    return false;
	}
	
	function update_downloadfileTest($data,$where)
	{
	    $this->db->update('downloads_master_test',$data,$where);
	    if($this->db->affected_rows()>0)
	    {
	        return true;
	    }
	    return false;
	}
	
	function getblog($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('blogs');
		return $qry->row_array();
		
	}
	function gettestimonial($serviceid)
	{
		$this->db->order_by('t.id', 'desc');
		$this->db->select('t.*,i.image');
		$this->db->from('testimonials t');
		$this->db->join('images_master i', 'i.id = t.image','left');
		$qry = $this->db->where('t.serviceid',$serviceid)->get();
		if ($qry->num_rows() > 0)
			return $qry->result_array();
		return false;
	}
	function getindustries()
	{
		$this->db->order_by('t.id', 'desc');
		$this->db->select('t.*,i.image');
		$this->db->from('industry_master t');
		$this->db->join('images_master i', 'i.id = t.image_home_card','left');
		$qry = $this->db->get();
		if ($qry->num_rows() > 0)
			return $qry->result_array();
		return false;
	}
	function getteammembers()
	{
		$this->db->order_by('t.orderby', 'asc');
		$this->db->select('t.*,i.image');
		$this->db->from('team_master t');
		$this->db->join('images_master i', 'i.id = t.image', 'left');
		$qry = $this->db->get();
		if ($qry->num_rows() > 0)
			return $qry->result_array();
		return false;
	}
	function getclients()
	{
		$this->db->order_by('t.orderby', 'asc');
		$this->db->select('t.*,i.image');
		$this->db->from('client_master t');
		$this->db->join('images_master i', 'i.id = t.image', 'left');
		$qry = $this->db->get();
		if ($qry->num_rows() > 0)
			return $qry->result_array();
		return false;
	}

	function getclientsNew()
	{
		$this->db->order_by('t.orderby', 'asc');
		$this->db->select('t.*,i.image');
		$this->db->from('client_master t');
		$this->db->join('images_master i', 'i.id = t.image', 'left');
		$qry = $this->db->get();
		if ($qry->num_rows() > 0)
			return $qry->result_array();
		return false;
	}

	function gethomebanners()
	{
		$this->db->order_by('t.orderby', 'asc');
		$this->db->select('t.*,i.image');
		$this->db->from('home_banner_master t');
		$this->db->join('images_master i', 'i.id = t.image', 'left');
		$qry = $this->db->get();
		if ($qry->num_rows() > 0)
			return $qry->result_array();
		return false;
	}
	function getjobenquiry()
	{
		$this->db->from('career_master c');
		$this->db->order_by('c.id', 'desc');
		$qry = $this->db->get();
		return $qry->result_array();
	}
	function getcontactenquiry($form=false)
	{
		if($form)
		$this->db->where('form',$form);
		$this->db->order_by('id', 'desc');
		
		$qry = $this->db->get('contact_master');
		return $qry->result_array();
	}
	function getcategory($type = false)
	{
		if ($type)
			$this->db->where('type', $type);
		$this->db->order_by('id', 'desc');
		$this->db->where('is_deleted', 0);
		$qry = $this->db->get('category_master');
		return $qry->result_array();
	}
	
	function gettopic()
	{
		$this->db->where('is_deleted', 0);
		$qry = $this->db->get('topic_master');
		return $qry->result_array();
	}

	function getsubcategory()
	{
		$this->db->where('is_deleted', 0);
		$qry = $this->db->get('subcategories');
		return $qry->result_array();
	}

	
	
	function getcounters()
	{
		$qry = $this->db->get('counter_master');
		return $qry->result_array();
	}
	function getjobs()
	{
		$this->db->from('jobs_master j');
		$this->db->order_by('id', 'desc');
		$qry = $this->db->get();
		return $qry->result_array();
	}
	function getservicebyid($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('service_master');
		return $qry->row_array();
	}
	function getexservicebyid($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('exservice_master');
		return $qry->row_array();
	}
	function checkservicenameexist($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('service_master');
		if($qry->num_rows() > 0)
		{
			return true;
		}
		return false;
	}
	function checklocationnameexist($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('location_master');
		if($qry->num_rows() > 0)
		{
			return true;
		}
		return false;
	}
	function checkexservicenameexist($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('exservice_master');
		if($qry->num_rows() > 0)
		{
			return true;
		}
		return false;
	}
	function checkindustrynameexist($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('industry_master');
		if($qry->num_rows() > 0)
		{
			return true;
		}
		return false;
	}
	function getparentservicebyid($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('parent_service');
		return $qry->row_array();
	}
	function getjobbyid($where)
	{
		$this->db->where($where);
		$qry = $this->db->get('jobs_master');
		return $qry->row_array();
	}
	function gettestimonialbyid($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('testimonials');
		return $qry->row_array();
	}
	function getteambyid($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('team_master');
		return $qry->row_array();
	}
	function getindustrybyid($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('industry_master');
		return $qry->row_array();
	}
	function getclientbyidNew($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('client_master');
		return $qry->row_array();
	}
	function gethomebannerbyid($id)
	{
		$this->db->where('id', $id);
		$qry = $this->db->get('home_banner_master');
		return $qry->row_array();
	}
	public function getpageslist()
	{
		$this->db->select('id,label');
		$q = $this->db->get('seo_master');
		return $q->result_array();
	}
	public function getlocations()
	{
		$q = $this->db->get('location_master');
		return $q->result_array();
	}
	function getservice()
	{
		$this->db->order_by('s.id', 'desc');
		$this->db->select('s.*,i.image');
		$this->db->from('service_master s');
		$this->db->join('images_master i', 'i.id =s.image_home_card','left');
		$qry = $this->db->get();
		return $qry->result_array();
	}
	function getexservice()
	{
		$this->db->order_by('s.id', 'desc');
		$this->db->select('s.*,i.image');
		$this->db->from('exservice_master s');
		$this->db->join('images_master i', 'i.id =s.image_home_card','left');
		$qry = $this->db->get();
		return $qry->result_array();
	}
	
	function getimageslist($postData = null)
	{
		$response = array();
		## Read value
		$draw = $postData['draw'];
		$start = $postData['start'];
		$rowperpage = $postData['length']; // Rows display per page
		$columnIndex = $postData['order'][0]['column']; // Column index
		$columnName = $postData['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $postData['order'][0]['dir']; // asc or desc
		$searchValue = $postData['search']['value']; // Search value
		## Search 
		$searchQuery = "";
		if ($searchValue != '') {
			$searchQuery = " (image like '%" . $searchValue . "%'  ) ";
		}
		## Total number of records without filtering
		$this->db->select('count(*) as allcount');
		$this->db->from('images_master');
		$records = $this->db->get()->result();
		$totalRecords = $records[0]->allcount;
		## Total number of record with filtering
		$this->db->select('count(*) as allcount');
		if ($searchQuery != '')
			$this->db->where($searchQuery);
		$this->db->from('images_master');
		$records = $this->db->get()->result();
		$totalRecordwithFilter = $records[0]->allcount;
		## Fetch records
		// $this->db->select('*');
		if ($searchQuery != '')
			$this->db->where($searchQuery);
		$this->db->order_by('id', 'desc');
		$this->db->limit($rowperpage, $start);
		$this->db->from('images_master');
		$records = $this->db->get()->result();
		$data = array();
		$i = 1;
		$url = base_url('uploads/images/');
		foreach ($records as $record) {
			$image = "<img src='$url$record->image' style='border-radius: 0;' />";
			$copyBtn = "<button class='btn btn-info copy-link-btn' data-link='$url$record->image'><i class='fa fa-copy'></i> Copy</button>";

			$alt = "<a href='javascript:void(0)' class='edit-image' data-id='$record->id' data-text='$record->alt_text' data-nname='$record->image' data-oname='$record->image' ><i class='fa fa-edit'></i> $record->alt_text</a>";
			$delete = "<a href='javascript:void(0)' class='text-danger delete-btn' data-id='$record->id'><i class='fa fa-trash'></i></a>";
			$data[] = array(
				"id" => $i,
				"name" => $record->image,
				"image" => $image,
				"copyBtn" => $copyBtn,
				"alt" => $alt,
				"delete" => $delete,
			);
			$i++;
		}
		## Response
		$response = array(
			"draw" => intval($draw),
			"iTotalRecords" => $totalRecords,
			"iTotalDisplayRecords" => $totalRecordwithFilter,
			"aaData" => $data
		);
		return $response;
	}


	function getcontactenquiries($postData = null)
{
    $response = array();
    ## Read value
    $draw = $postData['draw'];
    $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
    $searchValue = $postData['search']['value']; // Search value
    $startDate = $postData['startDate']; // Start date for date range filter
    $endDate = $postData['endDate']; // End date for date range filter

    ## Search 
    $searchQuery = "";
    if ($searchValue != '') {
        $searchQuery = " (name LIKE '%" . $searchValue . "%' OR email LIKE '%" . $searchValue . "%' OR phone LIKE '%" . $searchValue . "%') ";
    }

    ## Date range filter
    if ($startDate != '' && $endDate != '') {
        if ($searchQuery != '') {
            $searchQuery .= " AND ";
        }

        $searchQuery .= " (created_at BETWEEN '" . date('Y-m-d',strtotime($startDate)) . "' AND '" . date('Y-m-d',strtotime($endDate)) . "') ";
    }

    ## Total number of records without filtering
    $this->db->select('count(*) as allcount');
    $this->db->from('contact_master');
    $records = $this->db->get()->result();
    $totalRecords = $records[0]->allcount;

    ## Total number of record with filtering
    $this->db->select('count(*) as allcount');
    if ($searchQuery != '')
        $this->db->where($searchQuery);
    $this->db->from('contact_master');
    $records = $this->db->get()->result();
    $totalRecordwithFilter = $records[0]->allcount;

    ## Fetch records
    if ($searchQuery != '')
        $this->db->where($searchQuery);
    $this->db->order_by('id', 'desc');
    $this->db->limit($rowperpage, $start);
    $this->db->from('contact_master');
    $records = $this->db->get()->result();
    $data = array();
    $i = 1;
    foreach ($records as $record) {
        $link = !empty($record->link) ? "<a href='" . $record->link . "' target='blank'>link</a>" : '-';
        $formType  = $record->form == 'ftool' ? 'Finance Tool' : ($record->form == 'ctform' ? 'Contact Form' : ($record->form == 'download' ? 'Download Form' : 'Landing Page'));

        $data[] = array(
            "id" => $i,
            "name" => $record->name,
            "email" => $record->email,
            "phone" => $record->phone,
            "type" => $record->type,
            "company" => $record->company,
            "message" => $record->message,
            "form" => $formType,
            "page" => $link,
            "utm_source" => $record->utm_source,
            "utm_medium" => $record->utm_medium,
            "utm_campaign" => $record->utm_campaign,
            "utm_term" => $record->utm_term,
            "utm_content" => $record->utm_content,
            "created_at" => date('d-M-Y | h:i A', strtotime($record->created_at)),
        );
        $i++;
    }
    ## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );
    return $response;
}

	function getpageheaderbyid($id)
	{
		$this->db->where('id', $id);
		$this->db->select('header,footer');
		$q = $this->db->get('seo_master');
		if ($q->num_rows() > 0) {
			return $q->row_array();
		}
		return false;
	}
	function getgallery_logos($type = 1)
	{
		$this->db->select('i.*,gm.id as imid');
		$this->db->from('images_master i');
		$this->db->join('gallery_logo_master gm', 'gm.imageid=i.id');
		$this->db->where('gm.type', $type);
		$qry = $this->db->get();
		if ($qry->num_rows() > 0) {
			return $qry->result_array();
		}
		return false;
	}
	function getlocationgallery($locationid)
	{
		$this->db->select('i.*,gm.id as imid');
		$this->db->from('images_master i');
		$this->db->join('location_gallery gm', 'gm.imageid=i.id');
		$this->db->where('gm.locationid', $locationid);
		$qry = $this->db->get();
		if ($qry->num_rows() > 0) {
			return $qry->result_array();
		}
		return false;
	}
	
}

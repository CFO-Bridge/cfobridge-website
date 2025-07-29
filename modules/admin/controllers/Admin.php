<?php
class Admin extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('upload');
		if (!$this->session->userdata('AdminLogin')) {
			return redirect(base_url('admin/login'));
		}
	}
	public function index()
	{
		redirect(base_url('admin/blogslist'));
		$this->load->view('common/header');
		$this->load->view('index');
		$this->load->view('common/footer');
	}
	public function blogslist()
	{
		$data['list'] = $this->admin_model->getblogs();
		$this->load->view('common/header', $data);
		$this->load->view('blogs-list');
		$this->load->view('common/footer');
	}
	public function addlocation()
	{
		$this->load->view('common/header');
		$this->load->view('add-location');
		$this->load->view('common/footer');
	}
	public function editlocation($id)
	{
		$data = $this->db->get_where('location_master', array('id' => $id))->row_array();
		$this->load->view('common/header', $data);
		$this->load->view('edit-location');
		$this->load->view('common/footer');
	}
	public function eventslist()
	{
		$data['list'] = $this->admin_model->getevents();
		$this->load->view('common/header', $data);
		$this->load->view('events-list');
		$this->load->view('common/footer');
	}
	public function testimonialslist($serviceid = 0)
	{
		$data['serviceid'] = $serviceid;
		$data['list'] = $this->admin_model->gettestimonial($serviceid);
		$this->load->view('common/header', $data);
		$this->load->view('testimonials-list');
		$this->load->view('common/footer');
	}
	public function newsletteremails()
	{
		$data['list'] = $this->db->get('newsletter_master')->result_array();
		$this->load->view('common/header', $data);
		$this->load->view('newsletter-list');
		$this->load->view('common/footer');
	}
	public function teammemberslist()
	{
		$data['list'] = $this->admin_model->getteammembers();
		$this->load->view('common/header', $data);
		$this->load->view('team-list');
		$this->load->view('common/footer');
	}
	public function industrylist()
	{
		$data['list'] = $this->admin_model->getindustries();
		$this->load->view('common/header', $data);
		$this->load->view('industry-list');
		$this->load->view('common/footer');
	}
	public function clientlist()
	{
		$data['list'] = $this->admin_model->getclients();
		$this->load->view('common/header', $data);
		$this->load->view('client-list');
		$this->load->view('common/footer');
	}

	public function clientlistNew()
	{
		$data['list'] = $this->admin_model->getclientsNew();
		$this->load->view('common/header', $data);
		$this->load->view('client-list-new');
		$this->load->view('common/footer');
	}
	public function downloadfileslist()
	{
		$data['list'] = $this->admin_model->getdocumentslist();
		$this->load->view('common/header', $data);
		$this->load->view('downloads-list');
		$this->load->view('common/footer');
	}
	public function downloadfileslistTest()
	{
		$data['list'] = $this->admin_model->getdocumentslistTest();
		$this->load->view('common/header', $data);
		$this->load->view('downloads-listTest');
		$this->load->view('common/footer');
	}
	public function homebannerlist()
	{
		$data['list'] = $this->admin_model->gethomebanners();
		$this->load->view('common/header', $data);
		$this->load->view('homebanner-list');
		$this->load->view('common/footer');
	}
	public function logolist()
	{
		$data['list'] = $this->admin_model->getgallery_logos(1);
		$this->load->view('common/header', $data);
		$this->load->view('logo-list');
		$this->load->view('common/footer');
	}
	public function gallerylist()
	{
		$data['list'] = $this->admin_model->getgallery_logos(2);
		$this->load->view('common/header', $data);
		$this->load->view('gallery-list');
		$this->load->view('common/footer');
	}
	public function locationgallery($locationid)
	{
		$data['locationid'] = $locationid;
		$data['list'] = $this->admin_model->getlocationgallery($locationid);
		$this->load->view('common/header', $data);
		$this->load->view('location-gallery-list');
		$this->load->view('common/footer');
	}
	public function header_footer_data()
	{
		$data['pages'] = $this->admin_model->getpageslist();
		$this->load->view('common/header', $data);
		$this->load->view('seo_text');
		$this->load->view('common/footer');
	}
	public function imageslist()
	{
		$this->load->view('common/header');
		$this->load->view('images-list');
		$this->load->view('common/footer');
	}
	public function jobenquirylist()
	{
		$data['list'] = $this->admin_model->getjobenquiry();
		$this->load->view('common/header', $data);
		$this->load->view('jobenquiry');
		$this->load->view('common/footer');
	}
	public function addblog()
	{
		$this->load->view('common/header');
		$this->load->view('add-blog');
		$this->load->view('common/footer');
	}
	public function addevent()
	{
		$this->load->view('common/header');
		$this->load->view('add-event');
		$this->load->view('common/footer');
	}

	public function adddocument()
	{
		$data['teams'] = $this->admin_model->getteammembers();
		$this->load->view('common/header', $data);
		$this->load->view('add-downloadfile');
		$this->load->view('common/footer');
	}

	public function adddocumentTest()
	{
		$data['teams'] = $this->admin_model->getteammembers();
		$this->load->view('common/header', $data);
		$this->load->view('add-downloadfileTest');
		$this->load->view('common/footer');
	}

	public function editdownloadsfile($id)
	{
		$data = $this->admin_model->getdownloadfile($id);
		$data['teams'] = $this->admin_model->getteammembers();

		$this->load->view('common/header', $data);

		$this->load->view('edit-downloadfile');
		$this->load->view('common/footer');
	}

	public function editdownloadsfileTest($id)
	{
		$data = $this->admin_model->getdownloadfileTest($id);
		$data['teams'] = $this->admin_model->getteammembers();
		$data['topics'] = $this->admin_model->gettopic();
		$this->load->view('common/header', $data);

		$this->load->view('edit-downloadfileTest');
		$this->load->view('common/footer');
	}


	public function addtestimonial($serviceid = 0)
	{
		$data['serviceid'] = $serviceid;
		$this->load->view('common/header', $data);
		$this->load->view('add-testimonial');
		$this->load->view('common/footer');
	}
	public function addteammember()
	{
		$this->load->view('common/header');
		$this->load->view('add-team');
		$this->load->view('common/footer');
	}
	public function addindustry()
	{
		$this->load->view('common/header');
		$this->load->view('add-industry');
		$this->load->view('common/footer');
	}
	public function addclient()
	{
		$data['category'] = $this->admin_model->getcategory(3);
		$this->load->view('common/header', $data);
		$this->load->view('add-client');
		$this->load->view('common/footer');
	}

	public function addclientNew()
	{
		$data['category'] = $this->admin_model->getcategory(3);
		$this->load->view('common/header', $data);
		$this->load->view('add-client-new');
		$this->load->view('common/footer');
	}

	public function addhomebanner()
	{
		$this->load->view('common/header');
		$this->load->view('add-home-banner');
		$this->load->view('common/footer');
	}
	public function homefaq()
	{
		$data['list'] = $this->admin_model->gethomefaqs();
		$this->load->view('common/header', $data);
		$this->load->view('home-faq');
		$this->load->view('common/footer');
	}
	public function addhomefaq()
	{

		$this->load->view('common/header');
		$this->load->view('add-homefaq');
		$this->load->view('common/footer');
	}
	public function edithomefaq($id)
	{
		$data = $this->admin_model->gethomefaqbyid($id);
		$this->load->view('common/header', $data);
		$this->load->view('edit-homefaq');
		$this->load->view('common/footer');
	}
	public function edittestimonial($id)
	{
		if (empty($id))
			redirect(base_url('testimonialslist'));
		$data = $this->admin_model->gettestimonialbyid($id);
		$this->load->view('common/header', $data);
		$this->load->view('edit-testimonial');
		$this->load->view('common/footer');
	}
	public function addteam()
	{
		$this->load->view('common/header');
		$this->load->view('add-testimonial');
		$this->load->view('common/footer');
	}
	public function editteam($id)
	{
		if (empty($id))
			redirect(base_url('teammemberslist'));
		$data = $this->admin_model->getteambyid($id);
		$this->load->view('common/header', $data);
		$this->load->view('edit-team');
		$this->load->view('common/footer');
	}
	public function editindustry($id)
	{
		if (empty($id))
			redirect(base_url('industrylist'));
		$data = $this->admin_model->getindustrybyid($id);
		$this->load->view('common/header', $data);
		$this->load->view('edit-industry');
		$this->load->view('common/footer');
	}
	public function editclient($id)
	{
		if (empty($id))
			redirect(base_url('clientlist'));
		$data = $this->admin_model->getclientbyid($id);
		$data['category'] = $this->admin_model->getcategory(3);
		$this->load->view('common/header', $data);
		$this->load->view('edit-client');
		$this->load->view('common/footer');
	}

	public function editclientNew($id)
	{
		if (empty($id))
			redirect(base_url('clientlistNew'));
		$data = $this->admin_model->getclientbyidNew($id);
		$data['category'] = $this->admin_model->getcategory(3);
		$this->load->view('common/header', $data);
		$this->load->view('edit-client-new');
		$this->load->view('common/footer');
	}

	public function edithomebanner($id)
	{
		if (empty($id))
			redirect(base_url('homebannerlist'));
		$data = $this->admin_model->gethomebannerbyid($id);
		$this->load->view('common/header', $data);
		$this->load->view('edit-home-banner');
		$this->load->view('common/footer');
	}
	public function addservice()
	{
		$this->load->view('common/header');
		$this->load->view('add-service');
		$this->load->view('common/footer');
	}
	public function newaddservice()
	{
		$this->load->view('common/header');
		$this->load->view('new-add-service');
		$this->load->view('common/footer');
	}
	public function addexservice()
	{
		$this->load->view('common/header');
		$this->load->view('add-ex-service');
		$this->load->view('common/footer');
	}
	public function parentservice()
	{
		$id = 1;
		$data = $this->admin_model->getparentservicebyid(['id' => $id]);
		$this->load->view('common/header', $data);
		$this->load->view('parent-service');
		$this->load->view('common/footer');
	}
	public function addjob()
	{
		$this->load->view('common/header');
		$this->load->view('add-job');
		$this->load->view('common/footer');
	}
	public function editjob($id = 0)
	{
		$data = $this->admin_model->getjobbyid(['id' => $id]);
		$this->load->view('common/header', $data);
		$this->load->view('edit-job');
		$this->load->view('common/footer');
	}
	public function editservice($id)
	{
		$data = $this->admin_model->getservicebyid(['id' => $id]);
		$this->load->view('common/header', $data);
		$this->load->view('edit-service');
		$this->load->view('common/footer');
	}
	public function neweditservice($id)
	{
		$data = $this->admin_model->getservicebyid(['id' => $id]);
		$this->load->view('common/header', $data);
		$this->load->view('new-edit-service');
		$this->load->view('common/footer');
	}
	public function editexservice($id)
	{
		$data = $this->admin_model->getexservicebyid(['id' => $id]);
		$this->load->view('common/header', $data);
		$this->load->view('edit-exservice');
		$this->load->view('common/footer');
	}
	public function editblog($id)
	{
		$data = $this->admin_model->getblog(['id' => $id]);
		$this->load->view('common/header', $data);
		$this->load->view('edit-blog');
		$this->load->view('common/footer');
	}
	public function editevent($id)
	{
		$data = $this->admin_model->geteventbyid($id);
		$this->load->view('common/header', $data);
		$this->load->view('edit-event');
		$this->load->view('common/footer');
	}
	public function categorylist($page = false)
	{
		$data['page'] = $page;
		$data['list'] = $this->admin_model->getcategory($page);
		$this->load->view('common/header', $data);
		$this->load->view('category');
		$this->load->view('common/footer');
	}

	public function topiclist()
	{

		$data['list'] = $this->admin_model->gettopic();
		$this->load->view('common/header', $data);
		$this->load->view('topic');
		$this->load->view('common/footer');
	}

	public function subcategorylist()
	{

		$data['list'] = $this->admin_model->getsubcategory();
		$this->load->view('common/header', $data);
		$this->load->view('subcategory');
		$this->load->view('common/footer');
	}

	public function counterslist()
	{
		$data['list'] = $this->admin_model->getcounters();
		$this->load->view('common/header', $data);
		$this->load->view('counters');
		$this->load->view('common/footer');
	}
	public function jobslist()
	{
		$data['list'] = $this->admin_model->getjobs();
		$this->load->view('common/header', $data);
		$this->load->view('jobs-list');
		$this->load->view('common/footer');
	}
	public function contactslist()
	{
		$data['list'] = $this->admin_model->getcontactenquiry('ctform');
		$data['pageType'] = '';
		$this->load->view('common/header', $data);
		$this->load->view('contact-list');
		$this->load->view('common/footer');
	}
	public function allcontactslist()
	{
		$data['list'] = $this->admin_model->getcontactenquiry();
		$data['totalenquiries'] = $this->db->count_all_results("contact_master");
		$data['contactenquiries'] = $this->db->where("form", "ctform")->count_all_results("contact_master");
		$data['downloadenquiries'] = $this->db->where("form", "download")->count_all_results("contact_master");
		$data['landingenquiries'] = $this->db->where("form", "leform")->count_all_results("contact_master");
		$data['financialenquiries'] = $this->db->where("form", "ftool")->count_all_results("contact_master");
		$data['googleenquiries'] = $this->db->where("utm_source <>", "-")->count_all_results("contact_master");
		$this->load->view('common/header', $data);
		$this->load->view('all-contact-list');
		$this->load->view('common/footer');
	}
	public function landingenquiry()
	{
		$data['list'] = $this->admin_model->getcontactenquiry('leform');
		$data['pageType'] = 'landing';
		$this->load->view('common/header', $data);
		$this->load->view('contact-list');
		$this->load->view('common/footer');
	}
	public function downloadformenq()
	{
		$data['list'] = $this->admin_model->getcontactenquiry('download');
		$data['pageType'] = '';
		$this->load->view('common/header', $data);
		$this->load->view('contact-list');
		$this->load->view('common/footer');
	}
	public function ftoolcontactslist()
	{
		$data['list'] = $this->admin_model->getcontactenquiry('ftool');
		$this->load->view('common/header', $data);
		$this->load->view('financetool-contact');
		$this->load->view('common/footer');
	}
	public function servicelist()
	{
		$data['list'] = $this->admin_model->getservice();
		$this->load->view('common/header', $data);
		$this->load->view('servicelist');
		$this->load->view('common/footer');
	}
	public function locationlist()
	{
		$data['list'] = $this->admin_model->getlocations();
		$this->load->view('common/header', $data);
		$this->load->view('locationlist');
		$this->load->view('common/footer');
	}
	public function exservicelist()
	{
		$data['list'] = $this->admin_model->getexservice();
		$this->load->view('common/header', $data);
		$this->load->view('ex-servicelist');
		$this->load->view('common/footer');
	}
	function updateparentservice()
	{
		$heading_banner = $this->input->post('inner_banner_heading');
		$image_banner = $this->input->post('inner_banner_image');
		$heading_about = $this->input->post('about_heading');
		$description_about = $this->input->post('about_short_description');
		$image_about = $this->input->post('about_image');
		$heading_so_unique = $this->input->post('so_unique_heading');
		$souiqueArr = $this->input->post('so_unique');
		$sounique_exist = $this->input->post('sounique_exist');
		$heading_faq = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');
		$id = $this->input->post('id');
		$page_header = htmlentities($this->input->post('page_header'));
		$so_unique_dtArr = [];
		for ($i = 0; $i <= count($sounique_exist); $i++) {
			if (!empty($sounique_exist[$i]['heading']))
				$so_unique_dtArr[] = ['heading' => $sounique_exist[$i]['heading'], 'description' => $sounique_exist[$i]['description'], 'image' => $sounique_exist[$i]['image']];
		}
		for ($i = 0; $i <= count($souiqueArr); $i++) {
			if (!empty($souiqueArr[$i]['heading']))
				$so_unique_dtArr[] = ['heading' => $souiqueArr[$i]['heading'], 'description' => $souiqueArr[$i]['description'], 'image' => $souiqueArr[$i]['image']];
		}
		if (!empty($faqArr))
			for ($i = 0; $i <= count($faqArr); $i++) {
				if (!empty($faqArr[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
			}
		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}
		$data = array('heading_banner' => $heading_banner, 'image_banner' => $image_banner, 'heading_about' => $heading_about, 'description_about' => $description_about, 'image_about' => $image_about, 'heading_so_unique' => $heading_so_unique, 'card_json_so_unique' => json_encode($so_unique_dtArr), 'heading_faq' => $heading_faq, 'card_json_faq' => json_encode($faq_dtArr), 'page_header' => $page_header);
		$this->db->update('parent_service', $data, ['id' => $id]);
		if ($this->db->affected_rows() > 0) {
			$res['msg'] = '<p class="alert alert-success">Parent Service Updated</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}


	function insertupdatelocation()
	{
		$title = $this->input->post('title');
		$heading_s1 = $this->input->post('heading_s1');
		$description_s1 = $this->input->post('description_s1');
		$image_s1 = $this->input->post('image_s1');

		$heading_s2 = $this->input->post('heading_s2');
		$description_s2 = $this->input->post('description_s2');
		$repeater_s2 = $this->input->post('repeater_s2');
		$repeater_s2exist = $this->input->post('repeater_s2exist');

		$heading_s3 = $this->input->post('heading_s3');
		$description_s3 = $this->input->post('description_s3');
		$repeater_s3 = $this->input->post('repeater_s3');
		$repeater_s3exist = $this->input->post('repeater_s3exist');

		$heading_s4 = $this->input->post('heading_s4');
		$description_s4 = $this->input->post('description_s4');

		$heading_s5 = $this->input->post('heading_s5');
		$description_s5 = $this->input->post('description_s5');
		$repeater_s5 = $this->input->post('repeater_s5');
		$repeater_s5exist = $this->input->post('repeater_s5exist');

		$faq_heading = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');
		$id = $this->input->post('id');
		$page_header = $this->input->post('page_header');
		$slug = $this->cleanString($title);
		if (!empty($id)) {
			$checkwhere = ['slug' => $slug, 'id !=' => $id];
		} else {
			$checkwhere = ['slug' => $slug];
		}
		$check = $this->admin_model->checklocationnameexist($checkwhere);
		if ($check) {
			$res['msg'] = '<p class="alert alert-danger">Location Already Exist!</p>';
			$res['status'] = false;
			echo json_encode($res);
			exit;
		}

		$repeater_s2Arr = [];
		$repeater_s3Arr = [];
		$repeater_s5Arr = [];
		$faq_dtArr = [];
		for ($i = 0; $i <= count($repeater_s2); $i++) {
			if (!empty($repeater_s2[$i]['heading']))
				$repeater_s2Arr[] = ['heading' => $repeater_s2[$i]['heading'], 'description' => $repeater_s2[$i]['description']];
		}
		if (!empty($repeater_s2exist))
			for ($i = 0; $i <= count($repeater_s2exist); $i++) {
				if (!empty($repeater_s2exist[$i]['heading']))
					$repeater_s2Arr[] = ['heading' => $repeater_s2exist[$i]['heading'], 'description' => $repeater_s2exist[$i]['description']];
			}
		for ($i = 0; $i <= count($repeater_s3); $i++) {
			if (!empty($repeater_s3[$i]['heading']))
				$repeater_s3Arr[] = ['heading' => $repeater_s3[$i]['heading'], 'description' => $repeater_s3[$i]['description'], 'btnlabel' => $repeater_s3[$i]['btnlabel'], 'btnlink' => urlencode($repeater_s3[$i]['btnlink'])];
		}
		if (!empty($repeater_s3exist))
			for ($i = 0; $i <= count($repeater_s3exist); $i++) {
				if (!empty($repeater_s3exist[$i]['heading']))
					$repeater_s3Arr[] = ['heading' => $repeater_s3exist[$i]['heading'], 'description' => $repeater_s3exist[$i]['description'], 'btnlabel' => $repeater_s3exist[$i]['btnlabel'], 'btnlink' => urlencode($repeater_s3exist[$i]['btnlink'])];
			}
		for ($i = 0; $i <= count($repeater_s5); $i++) {
			if (!empty($repeater_s5[$i]['heading']))
				$repeater_s5Arr[] = ['heading' => $repeater_s5[$i]['heading'], 'description' => $repeater_s5[$i]['description'], 'image' => $repeater_s5[$i]['image']];
		}
		if (!empty($repeater_s5exist))
			for ($i = 0; $i <= count($repeater_s5exist); $i++) {
				if (!empty($repeater_s5exist[$i]['heading']))
					$repeater_s5Arr[] = ['heading' => $repeater_s5exist[$i]['heading'], 'description' => $repeater_s5exist[$i]['description'], 'image' => $repeater_s5exist[$i]['image']];
			}


		if (!empty($faqArr))
			for ($i = 0; $i <= count($faqArr); $i++) {
				if (!empty($faqArr[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
			}
		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}

		$data = ["title" => $title, "slug" => $slug, "heading_s1" => $heading_s1, "description_s1" => $description_s1, "image_s1" => $image_s1, "heading_s2" => $heading_s2, "description_s2" => $description_s2, "repeater_s2" => json_encode($repeater_s2Arr), "heading_s3" => $heading_s3, "description_s3" => $description_s3, "repeater_s3" => json_encode($repeater_s3Arr), "heading_s4" => $heading_s4, "description_s4" => $description_s4, "heading_s5" => $heading_s5, "description_s5" => $description_s5, "repeater_s5" => json_encode($repeater_s5Arr), 'faq_heading' => $faq_heading, 'faqArr' => json_encode($faq_dtArr), 'page_header' => htmlentities($page_header)];

		if (!empty($id)) {
			$result = $this->admin_model->update_location($data, ['id' => $id]);
		} else {
			$result = $this->admin_model->add_location($data);
		}
		if ($result) {
			$res['msg'] = '<p class="alert alert-success">Location Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}

	function insertupdateservice()
	{
		$title_home_card = $this->input->post('title_home_card');
		$description_home_card = $this->input->post('description_home_card');
		$image_home_card = $this->input->post('image_home_card');
		$title_service_card = $this->input->post('title_service_card');
		$heading_service_card = $this->input->post('heading_service_card');
		$description_service_card = $this->input->post('description_service_card');
		$heading_banner = $this->input->post('inner_banner_heading');
		$description_banner = $this->input->post('inner_banner_description');
		$banner_counterLabelArr = $this->input->post('inner_banner_counterLabel');
		$banner_counterImageArr = $this->input->post('inner_banner_counterImage');
		$banner_counterArr = $this->input->post('inner_banner_counter');
		$image_banner = $this->input->post('inner_banner_image');
		$keybenefits_heading = $this->input->post('keybenefits_heading');
		$keybenefits = $this->input->post('keybenefits');
		$keybenefits_exist = $this->input->post('keybenefits_exist');
		$serviceworks_heading = $this->input->post('serviceworks_heading');
		$serviceworks_image = $this->input->post('serviceworks_image');
		$serviceworks = $this->input->post('serviceworks');
		$serviceworks_exist = $this->input->post('serviceworks_exist');
		$heading_about = $this->input->post('about_heading');
		$description_about = $this->input->post('about_short_description');
		$image_about = $this->input->post('about_image');
		$heading_wedo = $this->input->post('wedo_heading');
		$description_left_wedo = $this->input->post('wedo_left_description');
		$description_right_wedo = $this->input->post('wedo_right_description');
		$wedoArr = $this->input->post('wedo');
		$wedo_exist = $this->input->post('wedo_exist');
		$heading_so_unique = $this->input->post('so_unique_heading');
		$souiqueArr = $this->input->post('so_unique');
		$sounique_exist = $this->input->post('sounique_exist');
		$heading_faq = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');
		$id = $this->input->post('id');
		$page_header = htmlentities($this->input->post('page_header'));
		$slug = $this->cleanString($title_home_card);
		if (!empty($id)) {
			$checkwhere = ['slug' => $slug, 'id !=' => $id];
		} else {
			$checkwhere = ['slug' => $slug];
		}
		$check = $this->admin_model->checkservicenameexist($checkwhere);
		if ($check) {
			$res['msg'] = '<p class="alert alert-danger">Service Already Exist!</p>';
			$res['status'] = false;
			echo json_encode($res);
			exit;
		}

		$wedo_dtArr = [];
		$so_unique_dtArr = [];
		$faq_dtArr = [];
		$bannerCounterArr = [];
		$keybenefitsArr = [];
		for ($i = 0; $i <= count($banner_counterLabelArr); $i++) {
			if (!empty($banner_counterLabelArr[$i]))
				$bannerCounterArr[] = ['label' => $banner_counterLabelArr[$i], 'count' => $banner_counterArr[$i], 'image' => $banner_counterImageArr[$i]];
		}
		for ($i = 0; $i <= count($keybenefits); $i++) {
			if (!empty($keybenefits[$i]['heading']))
				$keybenefitsArr[] = ['heading' => $keybenefits[$i]['heading'], 'description' => $keybenefits[$i]['description']];
		}
		if (!empty($keybenefits_exist))
			for ($i = 0; $i <= count($keybenefits_exist); $i++) {
				if (!empty($keybenefits_exist[$i]['heading']))
					$keybenefitsArr[] = ['heading' => $keybenefits_exist[$i]['heading'], 'description' => $keybenefits_exist[$i]['description']];
			}
		for ($i = 0; $i <= count($serviceworks); $i++) {
			if (!empty($serviceworks[$i]['heading']))
				$serviceworksArr[] = ['heading' => $serviceworks[$i]['heading'], 'description' => $serviceworks[$i]['description']];
		}
		if (!empty($serviceworks_exist))
			for ($i = 0; $i <= count($serviceworks_exist); $i++) {
				if (!empty($serviceworks_exist[$i]['heading']))
					$serviceworksArr[] = ['heading' => $serviceworks_exist[$i]['heading'], 'description' => $serviceworks_exist[$i]['description']];
			}

		for ($i = 0; $i <= count($wedoArr); $i++) {
			if (!empty($wedoArr[$i]['heading']))
				$wedo_dtArr[] = ['heading' => $wedoArr[$i]['heading'], 'description' => $wedoArr[$i]['description'], 'image' => $wedoArr[$i]['image']];
		}
		if (!empty($wedo_exist))
			for ($i = 0; $i <= count($wedo_exist); $i++) {
				if (!empty($wedo_exist[$i]['heading']))
					$wedo_dtArr[] = ['heading' => $wedo_exist[$i]['heading'], 'description' => $wedo_exist[$i]['description'], 'image' => $wedo_exist[$i]['image']];
			}
		for ($i = 0; $i <= count($souiqueArr); $i++) {
			if (!empty($souiqueArr[$i]['heading']))
				$so_unique_dtArr[] = ['heading' => $souiqueArr[$i]['heading'], 'description' => $souiqueArr[$i]['description'], 'image' => $souiqueArr[$i]['image']];
		}
		if (!empty($sounique_exist))
			for ($i = 0; $i <= count($sounique_exist); $i++) {
				if (!empty($sounique_exist[$i]['heading']))
					$so_unique_dtArr[] = ['heading' => $sounique_exist[$i]['heading'], 'description' => $sounique_exist[$i]['description'], 'image' => $sounique_exist[$i]['image']];
			}
		if (!empty($faqArr))
			for ($i = 0; $i <= count($faqArr); $i++) {
				if (!empty($faqArr[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
			}
		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}
		$data = array(
			'title_home_card' => $title_home_card,
			'description_home_card' => $description_home_card,
			'image_home_card' => $image_home_card,
			'title_service_card' => $title_service_card,
			'heading_service_card' => $heading_service_card,
			'description_service_card' => $description_service_card,
			'heading_banner' => $heading_banner,
			'description_banner' => $description_banner,
			'image_banner' => $image_banner,
			'bannerCounterArr' => json_encode($bannerCounterArr),
			'heading_about' => $heading_about,
			'description_about' => $description_about,
			'image_about' => $image_about,
			'keybenefits_heading' => $keybenefits_heading,
			'keybenefitsArr' => json_encode($keybenefitsArr),
			'serviceworks_heading' => $serviceworks_heading,
			'serviceworks_image' => $serviceworks_image,
			'serviceworksArr' => json_encode($serviceworksArr),
			'slug' => $slug,
			'heading_we_do' => $heading_wedo,
			'description_left_we_do' => $description_left_wedo,
			'description_right_we_do' => $description_right_wedo,
			'heading_so_unique' => $heading_so_unique,
			'card_json_we_do' => json_encode($wedo_dtArr),
			'card_json_so_unique' => json_encode($so_unique_dtArr),
			'heading_faq' => $heading_faq,
			'card_json_faq' => json_encode($faq_dtArr),
			'page_header' => $page_header
		);
		//echo json_encode($data);exit;
		if (!empty($id)) {
			$result = $this->admin_model->update_service($data, ['id' => $id]);
		} else {
			$result = $this->admin_model->add_service($data);
		}
		if ($result) {
			$res['msg'] = '<p class="alert alert-success">Service Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function insertupdateexservice()
	{
		//echo json_encode($_POST);exit;
		$title_home_card = $this->input->post('title_home_card');
		$description_home_card = $this->input->post('description_home_card');
		$image_home_card = $this->input->post('image_home_card');
		$title_service_card = $this->input->post('title_service_card');
		$heading_service_card = $this->input->post('heading_service_card');
		$description_service_card = $this->input->post('description_service_card');
		$heading_banner = $this->input->post('inner_banner_heading');
		$image_banner = $this->input->post('inner_banner_image');
		$heading_about = $this->input->post('about_heading');
		$description_about = $this->input->post('about_short_description');
		$image_about = $this->input->post('about_image');
		$heading_wedo = $this->input->post('wedo_heading');
		$wedoArr = $this->input->post('wedo');
		$wedo_exist = $this->input->post('wedo_exist');
		$heading_so_unique = $this->input->post('so_unique_heading');
		$souiqueArr = $this->input->post('so_unique');
		$sounique_exist = $this->input->post('sounique_exist');

		$task_heading = $this->input->post('task_heading');
		$task_description = $this->input->post('task_description');
		$task_image = $this->input->post('task_image');
		$taskArr = $this->input->post('task');
		$task_exist = $this->input->post('task_exist');

		$outcomes_heading = $this->input->post('outcomes_heading');
		$outcomesArr = $this->input->post('outcomes');
		$outcomes_exist = $this->input->post('outcomes_exist');

		$heading_faq = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');
		$id = $this->input->post('id');
		$page_header = htmlentities($this->input->post('page_header'));
		$slug = $this->cleanString($title_home_card);
		if (!empty($id)) {
			$checkwhere = ['slug' => $slug, 'id !=' => $id];
		} else {
			$checkwhere = ['slug' => $slug];
		}
		$check = $this->admin_model->checkexservicenameexist($checkwhere);
		if ($check) {
			$res['msg'] = '<p class="alert alert-danger">Service Already Exist!</p>';
			$res['status'] = false;
			echo json_encode($res);
			exit;
		}

		$wedo_dtArr = [];
		$so_unique_dtArr = [];
		$task_dtArr = [];
		$faq_dtArr = [];
		for ($i = 0; $i <= count($taskArr); $i++) {
			if (!empty($taskArr[$i]['heading']))
				$task_dtArr[] = ['point' => $taskArr[$i]['heading']];
		}
		if (!empty($task_exist))
			for ($i = 0; $i <= count($task_exist); $i++) {
				if (!empty($task_exist[$i]['heading']))
					$task_dtArr[] = ['point' => $task_exist[$i]['heading']];
			}

		for ($i = 0; $i <= count($wedoArr); $i++) {
			if (!empty($wedoArr[$i]['point']))
				$wedo_dtArr[] = ['point' => $wedoArr[$i]['point']];
		}
		if (!empty($wedo_exist))
			for ($i = 0; $i <= count($wedo_exist); $i++) {
				if (!empty($wedo_exist[$i]['point']))
					$wedo_dtArr[] = ['point' => $wedo_exist[$i]['point']];
			}
		for ($i = 0; $i <= count($outcomesArr); $i++) {
			if (!empty($outcomesArr[$i]['heading']))
				$outcomes_dtArr[] = ['heading' => $outcomesArr[$i]['heading'], 'image' => $outcomesArr[$i]['image']];
		}
		if (!empty($outcomes_exist))
			for ($i = 0; $i <= count($outcomes_exist); $i++) {
				if (!empty($outcomes_exist[$i]['heading']))
					$outcomes_dtArr[] = ['heading' => $outcomes_exist[$i]['heading'], 'image' => $outcomes_exist[$i]['image']];
			}
		for ($i = 0; $i <= count($souiqueArr); $i++) {
			if (!empty($souiqueArr[$i]['heading']))
				$so_unique_dtArr[] = ['heading' => $souiqueArr[$i]['heading'], 'description' => $souiqueArr[$i]['description'], 'image' => $souiqueArr[$i]['image']];
		}
		if (!empty($sounique_exist))
			for ($i = 0; $i <= count($sounique_exist); $i++) {
				if (!empty($sounique_exist[$i]['heading']))
					$so_unique_dtArr[] = ['heading' => $sounique_exist[$i]['heading'], 'description' => $sounique_exist[$i]['description'], 'image' => $sounique_exist[$i]['image']];
			}
		if (!empty($faqArr))
			for ($i = 0; $i <= count($faqArr); $i++) {
				if (!empty($faqArr[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
			}
		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}
		$data = array(
			'title_home_card' => $title_home_card,
			'description_home_card' => $description_home_card,
			'image_home_card' => $image_home_card,
			'title_service_card' => $title_service_card,
			'heading_service_card' => $heading_service_card,
			'description_service_card' => $description_service_card,
			'heading_banner' => $heading_banner,
			'image_banner' => $image_banner,
			'heading_about' => $heading_about,
			'description_about' => $description_about,
			'image_about' => $image_about,
			'slug' => $slug,
			'heading_we_do' => $heading_wedo,
			'heading_so_unique' => $heading_so_unique,
			'outcomes_json' => json_encode($outcomes_dtArr),
			'card_json_we_do' => json_encode($wedo_dtArr),
			'task_json' => json_encode($task_dtArr),
			'card_json_so_unique' => json_encode($so_unique_dtArr),
			'task_heading' => $task_heading,
			'task_description' => $task_description,
			'task_image' => $task_image,
			'outcomes_heading' => $outcomes_heading,
			'heading_faq' => $heading_faq,
			'card_json_faq' => json_encode($faq_dtArr),
			'page_header' => $page_header
		);
		//echo json_encode($data);exit;
		if (!empty($id)) {
			$result = $this->admin_model->update_exservice($data, ['id' => $id]);
		} else {
			$result = $this->admin_model->add_exservice($data);
		}
		if ($result) {
			$res['msg'] = '<p class="alert alert-success">Service Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function insertlogogallery()
	{
		$type = $this->input->post('type');
		$image = explode(',', $this->input->post('image'));
		foreach ($image as $img) {
			$this->db->insert('gallery_logo_master', ['type' => $type, 'imageid' => $img]);
		}
		echo true;
		exit;
	}
	function insertlocationgallery()
	{
		$locationid = $this->input->post('locationid');
		$image = explode(',', $this->input->post('image'));
		foreach ($image as $img) {
			$this->db->insert('location_gallery', ['locationid' => $locationid, 'imageid' => $img]);
		}
		echo true;
		exit;
	}
	function insertupdatetestimonial()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$details = $this->input->post('details');
		$image = $this->input->post('image');
		$id = $this->input->post('id');
		/* $videoupload = $this->videoupload();
		if($videoupload)
		{
			$video = $videoupload;
		}else{
			$video = $this->input->post('exist_video');
		} */
		$video = $this->input->post('link');
		$video = !empty($video) ? urlencode($video) : '';
		$data = array('title' => $title, 'image' => $image, 'detail' => $details, 'description' => $description, 'video' => $video);
		if (!empty($id)) {
			$qry = $this->admin_model->update_testimonial($data, ['id' => $id]);
		} else {
			$data['serviceid'] = $this->input->post('serviceid') ?? 0;
			$qry = $this->admin_model->add_testimonial($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Testimonial Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function insertupdateteam()
	{
		$title = $this->input->post('title');
		$details = $this->input->post('description');
		$name = $this->input->post('name');
		$link = urlencode($this->input->post('link'));
		$image = $this->input->post('image');
		$industry = $this->input->post('industry');
		$education = $this->input->post('education');
		$location = $this->input->post('location');
		$companies = $this->input->post('companies');
		$experience = $this->input->post('experience');
		$orderby = $this->input->post('orderby');
		$id = $this->input->post('id');
		$slug = $this->cleanString($name);
		$data = array('title' => $title, 'image' => $image, 'details' => $details, 'name' => $name, 'orderby' => $orderby, 'link' => $link, 'education' => $education, 'location' => $location, 'experience' => $experience, 'companies' => $companies, 'industry' => $industry, 'slug' => $slug);
		if (!empty($id)) {
			$qry = $this->admin_model->update_teammember($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_teammember($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Team Member Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function insertupdatehomefaq()
	{
		$heading = $this->input->post('heading');
		$description = $this->input->post('description');
		$id = $this->input->post('id');

		$data = array('heading' => $heading, 'description' => $description);
		if (!empty($id)) {
			$qry = $this->admin_model->update_homefaq($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_homefaq($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">FAQ Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function insertupdateindustry()
	{
		$title_home_card = $this->input->post('title_home_card');
		$image_home_card = $this->input->post('image_home_card');
		$heading_banner = $this->input->post('inner_banner_heading');
		$image_banner = $this->input->post('inner_banner_image');
		$heading_about = $this->input->post('about_heading');
		$description_about = $this->input->post('about_short_description');
		$image_about = $this->input->post('about_image');
		$heading_help = $this->input->post('help_heading');
		$helpArr = $this->input->post('help');
		$help_exist = $this->input->post('helpexist');
		$heading_faq = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');
		$id = $this->input->post('id');
		$page_header = htmlentities($this->input->post('page_header'));
		$slug = $this->cleanString($title_home_card);
		if (!empty($id)) {
			$checkwhere = ['slug' => $slug, 'id !=' => $id];
		} else {
			$checkwhere = ['slug' => $slug];
		}
		$check = $this->admin_model->checkindustrynameexist($checkwhere);
		if ($check) {
			$res['msg'] = '<p class="alert alert-danger">Industry Already Exist!</p>';
			$res['status'] = false;
			echo json_encode($res);
			exit;
		}
		$help_dtArr = [];
		$faq_dtArr = [];
		for ($i = 0; $i <= count($helpArr); $i++) {
			if (!empty($helpArr[$i]['heading']))
				$help_dtArr[] = ['heading' => $helpArr[$i]['heading'], 'description' => $helpArr[$i]['description'], 'image' => $helpArr[$i]['image']];
		}
		if (!empty($help_exist))
			for ($i = 0; $i <= count($help_exist); $i++) {
				if (!empty($help_exist[$i]['heading']))
					$help_dtArr[] = ['heading' => $help_exist[$i]['heading'], 'description' => $help_exist[$i]['description'], 'image' => $help_exist[$i]['image']];
			}
		for ($i = 0; $i <= count($faqArr); $i++) {
			if (!empty($faqArr[$i]['heading']))
				$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
		}
		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}
		$data = array('title_home_card' => $title_home_card, 'image_home_card' => $image_home_card, 'heading_banner' => $heading_banner, 'image_banner' => $image_banner, 'heading_about' => $heading_about, 'description_about' => $description_about, 'image_about' => $image_about, 'slug' => $slug, 'heading_help' => $heading_help, 'heading_faq' => $heading_faq, 'card_json_help' => json_encode($help_dtArr), 'card_json_faq' => json_encode($faq_dtArr), 'page_header' => $page_header);
		//echo json_encode($data);exit;
		if (!empty($id)) {
			$result = $this->admin_model->update_industry($data, ['id' => $id]);
		} else {
			$result = $this->admin_model->add_industry($data);
		}
		if ($result) {
			$res['msg'] = '<p class="alert alert-success">Industry Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}

	function insertupdatedownloadfile()
	{
		$title = $this->input->post('title');
		$shortdescription = $this->input->post('sdescription');
		$description = $this->input->post('description');
		$orderby = $this->input->post('orderby');
		$id = $this->input->post('id');
		$teamid = $this->input->post('teamid');
		$slug = $this->cleanString($title);
		$file = $this->pdfupload();
		if (empty($file)) {
			$file = $this->input->post('efile');
		}
		$data = array('title' => $title, 'file' => $file, 'short_description' => $shortdescription, 'description' => htmlentities($description), 'orderby' => $orderby, 'teamid' => $teamid, 'slug' => $slug);
		if (!empty($id)) {
			$qry = $this->admin_model->update_downloadfile($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_downloadfile($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Document Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}


	function insertupdatedownloadfileTest()
	{
		$title = $this->input->post('title');
		$shortdescription = $this->input->post('sdescription');
		$description = $this->input->post('description');
		$orderby = $this->input->post('orderby');
		$id = $this->input->post('id');
		$teamid = $this->input->post('teamid');
		$topicid = $this->input->post('topicid');
		$slug = $this->cleanString($title);
		$file = $this->pdfupload();
		$image = $this->input->post('image');
		$abt_author = $this->input->post('abt_author');
		if (empty($file)) {
			$file = $this->input->post('efile');
		}
		$data = array('title' => $title, 'file' => $file, 'short_description' => $shortdescription, 'description' => htmlentities($description), 'orderby' => $orderby, 'teamid' => $teamid, 'topicid' => $topicid, 'slug' => $slug, 'side_img' => $image, 'abt_author' => htmlentities($abt_author));
		if (!empty($id)) {
			$qry = $this->admin_model->update_downloadfileTest($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_downloadfileTest($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Document Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}

	function insertupdateevents()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$content = $this->input->post('content');
		$tags = $this->input->post('tags');
		$author = $this->input->post('author');
		$id = $this->input->post('id');
		$date = $this->input->post('date');
		$time = $this->input->post('time');
		$image = $this->input->post('image');
		$link = urlencode($this->input->post('link'));
		$slug = $this->cleanString($title);
		$date = !empty($date) ? date('Y-m-d', strtotime($date)) : date('Y-m-d');
		$time = !empty($time) ? date('H:i', strtotime($time)) : date('H:i');
		$data = array('title' => $title, 'author' => $author, 'content' => htmlentities($content), 'description' => $description, 'tags' => htmlentities($tags), 'slug' => $slug, 'date' => $date, 'time' => $time, 'link' => $link, 'image' => $image);
		if (!empty($id)) {
			$qry = $this->admin_model->update_event($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_event($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Event Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}

	function insertupdateclient()
	{
		$title = $this->input->post('title');
		$categoryid = $this->input->post('categoryid');
		$details = $this->input->post('description');
		$shortdescription = $this->input->post('shortdescription');
		$link = urlencode($this->input->post('link'));
		$image = $this->input->post('image');
		$orderby = $this->input->post('orderby');
		$id = $this->input->post('id');
		$data = array('title' => $title, 'image' => $image, 'details' => $details, 'short_description' => $shortdescription, 'orderby' => $orderby, 'link' => $link, 'categoryid' => $categoryid);
		if (!empty($id)) {
			$qry = $this->admin_model->update_client($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_client($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Client Logo Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}

	function insertupdateclientNew()
	{
		$title = $this->input->post('title');
		$categoryid = $this->input->post('categoryid');
		$details = $this->input->post('description');
		$shortdescription = $this->input->post('shortdescription');
		$link = urlencode($this->input->post('link'));
		$image = $this->input->post('image');
		$orderby = $this->input->post('orderby');
		$id = $this->input->post('id');
		$data = array('title' => $title, 'image' => $image, 'details' => $details, 'short_description' => $shortdescription, 'orderby' => $orderby, 'link' => $link, 'categoryid' => $categoryid);
		if (!empty($id)) {
			$qry = $this->admin_model->update_clientNew($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_clientNew($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Client Logo Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}

	function insertupdatehomebanner()
	{
		$title = $this->input->post('title');
		$shortdescription = $this->input->post('shortdescription');
		$image = $this->input->post('image');
		$mimage = $this->input->post('mimage');
		$orderby = $this->input->post('orderby');
		$theme = $this->input->post('themecolor');
		$ctalink = urlencode($this->input->post('ctalink'));
		$ctabtn = $this->input->post('ctabtn');
		$id = $this->input->post('id');
		$data = array('title' => $title, 'image' => $image, 'mob_image' => $mimage, 'short_description' => $shortdescription, 'orderby' => $orderby, 'theme' => $theme, 'cta_btn' => $ctabtn, 'cta_link' => $ctalink);
		if (!empty($id)) {
			$qry = $this->admin_model->update_home_banner($data, ['id' => $id]);
		} else {
			$qry = $this->admin_model->add_home_banner($data);
		}
		if ($qry) {
			$res['msg'] = '<p class="alert alert-success">Home Banner Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function insertblog()
	{
		$title = $this->input->post('title');
		$type = $this->input->post('type');
		$tags = $this->input->post('tags');
		$description = $this->input->post('description');
		$author = $this->input->post('author');
		$publisher = $this->input->post('publisher');
		$authorprofile = urlencode($this->input->post('authorprofile'));
		$link = urlencode($this->input->post('link'));
		$date = $this->input->post('date');
		$date = empty($date) ? date('Y-m-d') : date('Y-m-d', strtotime($date));
		$contents = htmlentities($this->input->post('content'));
		$page_header = htmlentities($this->input->post('page_header'));
		$blogschema = htmlentities($this->input->post('blogschema'));
		$image = $this->input->post('image');
		$slug = $this->cleanString($title);

		$heading_faq = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');

		$faq_dtArr = [];

		if (!empty($faqArr))
			for ($i = 0; $i <= count($faqArr); $i++) {
				if (!empty($faqArr[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
			}

		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}

		$data = array(
			'type' => $type,
			'title' => $title,
			'tags' => $tags,
			'content' => $contents,
			'blogschema' => $blogschema,
			'author' => $author,
			'authorprofile' => $authorprofile,
			'publisher' => $publisher,
			'posted' => $date,
			'image' => $image,
			'slug' => $slug,
			'description' => $description,
			'link' => $link,
			'page_header' => $page_header,
			'heading_faq' => $heading_faq,
			'card_json_faq' => json_encode($faq_dtArr)
		);

		if ($this->admin_model->add_blog($data)) {
			$res['msg'] = '<p class="alert alert-success">Post Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-danger">Error</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function updateblog()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$tags = $this->input->post('tags');
		$description = $this->input->post('description');
		$author = $this->input->post('author');
		$date = $this->input->post('date');
		$date = empty($date) ? date('Y-m-d') : date('Y-m-d', strtotime($date));
		$contents = htmlentities($this->input->post('content'));
		$blogschema = htmlentities($this->input->post('blogschema'));
		$image = $this->input->post('image');
		$publisher = $this->input->post('publisher');
		$authorprofile = urlencode($this->input->post('authorprofile'));
		$link = urlencode($this->input->post('link'));
		$slug = $this->cleanString($title);
		$page_header = htmlentities($this->input->post('page_header'));

		$heading_faq = $this->input->post('faq_heading');
		$faqArr = $this->input->post('faq');
		$faq_exist = $this->input->post('faqexist');

		$faq_dtArr = [];

		if (!empty($faqArr))
			for ($i = 0; $i <= count($faqArr); $i++) {
				if (!empty($faqArr[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faqArr[$i]['heading'], 'description' => $faqArr[$i]['description']];
			}

		if (!empty($faq_exist))
			for ($i = 0; $i <= count($faq_exist); $i++) {
				if (!empty($faq_exist[$i]['heading']))
					$faq_dtArr[] = ['heading' => $faq_exist[$i]['heading'], 'description' => $faq_exist[$i]['description']];
			}


		$data = array(
			'title' => $title,
			'tags' => $tags,
			'content' => $contents,
			'author' => $author,
			'authorprofile' => $authorprofile,
			'blogschema' => $blogschema,
			'publisher' => $publisher,
			'posted' => $date,
			'image' => $image,
			'slug' => $slug,
			'description' => $description,
			'link' => $link,
			'page_header' => $page_header,
			'heading_faq' => $heading_faq,
			'card_json_faq' => json_encode($faq_dtArr)
		);





		if ($this->admin_model->updateblog($data, ['id' => $id])) {
			$res['msg'] = '<p class="alert alert-success">Post Updated</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;


	}
	function insert_update_category()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$page = $this->input->post('type');
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->update('category_master', ['name' => $name]);
		} else {
			$this->db->insert('category_master', ['name' => $name, 'type' => $page]);
		}
		echo true;
		exit;
	}

	function insert_update_topic()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->update('topic_master', ['name' => $name]);
		} else {
			$this->db->insert('topic_master', ['name' => $name]);
		}
		echo true;
		exit;
	}

	function insert_update_subcategory()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$category_id = $this->input->post('category_id');

		$data = [
			'name' => $name,
			'category_id' => $category_id
		];

		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->update('subcategories', $data);
		} else {
			$this->db->insert('subcategories', $data);
		}

		echo true;
		exit;
	}


	function insert_update_counter()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('name');
		$count = $this->input->post('count');
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->update('counter_master', ['title' => $title, 'count' => $count]);
		} else {
			$this->db->insert('counter_master', ['title' => $title, 'count' => $count]);
		}
		echo true;
		exit;
	}
	function insert_update_job()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$content = $this->input->post('content');
		$slug = $this->cleanString($title);
		$data = ['slug' => $slug, 'title' => $title, 'description' => $description, 'content' => htmlentities($content)];
		if (!empty($id)) {
			$this->db->where('id', $id);
			$this->db->update('jobs_master', $data);
		} else {
			$this->db->insert('jobs_master', $data);
		}
		if ($this->db->affected_rows() > 0) {
			$res['msg'] = '<p class="alert alert-success">Job Submitted</p>';
			$res['status'] = true;
		} else {
			$res['msg'] = '<p class="alert alert-warning">No Change</p>';
			$res['status'] = false;
		}
		echo json_encode($res);
		exit;
	}
	function cleanString($string)
	{
		$string = str_replace(' ', '-', trim($string)); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
		return strtolower(preg_replace('/-+/', '-', $string)); // Replaces multiple hyphens with single one.
	}
	function cleanImagename($string)
	{
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
		$string = preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
		return strtolower(preg_replace('/-+/', '-', $string)); // Replaces multiple hyphens with single one.
	}
	function generateRandomString($length = 4)
	{
		return substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyz', ceil($length / strlen($x)))), 1, $length);
	}
	function blogstatus()
	{
		$id = $this->input->post('id');
		if ($this->input->post('status') == 1) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array('is_active' => $status);
		$where = array('id' => $id);
		$this->admin_model->updateblog($data, $where);
		echo json_encode(true);
		exit;
	}
	function eventstatus()
	{
		$id = $this->input->post('id');
		if ($this->input->post('status') == 1) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array('is_active' => $status);
		$where = array('id' => $id);
		$this->admin_model->update_event($data, $where);
		echo json_encode(true);
		exit;
	}
	function jobstatus()
	{
		$id = $this->input->post('id');
		if ($this->input->post('status') == 1) {
			$status = 0;
		} else {
			$status = 1;
		}
		$data = array('is_active' => $status);
		$where = array('id' => $id);
		$this->db->update('jobs_master', $data, $where);
		echo json_encode(true);
		exit;
	}
	function blog_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('blogs', ['id' => $id]);
		echo true;
		exit;
	}
	function homefaqdelete()
	{
		$id = $this->input->post('id');
		$this->db->delete('home_faq', ['id' => $id]);
		echo true;
		exit;
	}
	function deletedownloadsfile()
	{
		$id = $this->input->post('id');
		$this->db->delete('downloads_master', ['id' => $id]);
		echo true;
		exit;
	}

	function deletedownloadsfileTest()
	{
		$id = $this->input->post('id');
		$this->db->delete('downloads_master_test', ['id' => $id]);
		echo true;
		exit;
	}

	function event_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('events', ['id' => $id]);
		echo true;
		exit;
	}
	function deletetestimonials()
	{
		$id = $this->input->post('id');
		$this->db->delete('testimonials', ['id' => $id]);
		echo true;
		exit;
	}
	function deleteclient()
	{
		$id = $this->input->post('id');
		$this->db->delete('client_master', ['id' => $id]);
		echo true;
		exit;
	}

	function deleteclientNew()
	{
		$id = $this->input->post('id');
		$this->db->delete('client_master', ['id' => $id]);
		echo true;
		exit;
	}

	function deleteteam()
	{
		$id = $this->input->post('id');
		$this->db->delete('team_master', ['id' => $id]);
		echo true;
		exit;
	}
	function deleteindustry()
	{
		$id = $this->input->post('id');
		$this->db->delete('industry_master', ['id' => $id]);
		echo true;
		exit;
	}
	function deletehomebanner()
	{
		$id = $this->input->post('id');
		$this->db->delete('home_banner_master', ['id' => $id]);
		echo true;
		exit;
	}
	function imagedelete()
	{
		$id = $this->input->post('id');
		$this->db->delete('images_master', ['id' => $id]);
		echo true;
		exit;
	}
	function logo_gallery_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('gallery_logo_master', ['id' => $id]);
		echo true;
		exit;
	}
	function locationgallerydelete()
	{
		$id = $this->input->post('id');
		$this->db->delete('location_gallery', ['id' => $id]);
		echo true;
		exit;
	}
	function job_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('jobs_master', ['id' => $id]);
		echo true;
		exit;
	}
	function service_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('service_master', ['id' => $id]);
		echo true;
		exit;
	}
	function exservice_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('exservice_master', ['id' => $id]);
		echo true;
		exit;
	}
	function category_delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('category_master', ['is_deleted' => 1]);
		echo true;
		exit;
	}

	function topic_delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('topic_master', ['is_deleted' => 1]);
		echo true;
		exit;
	}

	function subcategory_delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('subcategories', ['is_deleted' => 1]);
		echo true;
		exit;
	}

	function counter_delete()
	{
		$id = $this->input->post('id');
		$this->db->delete('counter_master', ['id' => $id]);
		echo true;
		exit;
	}
	function getheaderfooter()
	{
		$id = $this->input->post('id');
		$data = $this->admin_model->getpageheaderbyid($id);
		$data['header'] = html_entity_decode($data['header']);
		$data['footer'] = html_entity_decode($data['footer']);
		echo json_encode($data);
		exit;
	}
	function headerfooterupdate()
	{
		$id = $this->input->post('id');
		$data['footer'] = htmlentities($this->input->post('footer'));
		$data['header'] = htmlentities($this->input->post('header'));
		$this->db->update('seo_master', $data, ['id' => $id]);
		echo true;
		exit;
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	function updateimagetext()
	{
		$id = $this->input->post('id');
		$val = $this->input->post('alt_text');
		$nname = $this->input->post('nname');
		$oname = $this->input->post('oname');
		if ($nname != $oname) {
			$dir = './uploads/images/';
			rename($dir . $oname, $dir . $nname);
			$data = ['image' => $nname, 'alt_text' => $val];
		} else {
			$data = ['alt_text' => $val];
		}
		$this->db->update('images_master', $data, ['id' => $id]);
		echo true;
		exit;
	}
	function getallimages($page = false, $name = false)
	{
		$limit = 20;
		$offset = ($page - 1) * $limit;
		if ($name) {
			$this->db->like('image', $name);
		}
		$this->db->limit($limit, $offset);
		$this->db->order_by('id desc');
		$this->db->select('id,image');
		$qry = $this->db->get('images_master');
		if ($qry->num_rows() > 0) {
			echo json_encode($qry->result_array());
			exit;
		}
		echo json_encode([]);
		exit;
	}
	function changeadminpassword()
	{
		$pass = $this->input->post('password');
		$password = password_hash($pass, PASSWORD_DEFAULT);
		$this->db->where(['id' => 1]);
		$this->db->update('admin_master', ['password' => $password]);
		echo true;
		exit;
	}
	function imageupload()
	{
		if (!empty($_FILES['image']['name'])) {
			$config['upload_path'] = './uploads/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|svg|webp';
			$config['encrypt_name'] = FALSE;
			$this->upload->initialize($config);
			$files = $_FILES['image'];
			$_FILES['image']['name'] = $this->cleanImagename($files['name']);
			$_FILES['image']['type'] = $files['type'];
			$_FILES['image']['tmp_name'] = $files['tmp_name'];
			$_FILES['image']['error'] = $files['error'];
			$_FILES['image']['size'] = $files['size'];
			$this->upload->do_upload('image');
			$image_data = $this->upload->data();
			$image = $image_data['file_name'];
			$this->db->insert('images_master', ['image' => $image]);
			echo true;
		}
		exit;
	}
	public function clear_all_cache()
	{
		$cache_path = 'application/cache/';
		$handle = opendir($cache_path);
		while (($file = readdir($handle)) !== FALSE) {
			//Leave the directory protection alone
			if ($file != '.htaccess' && $file != 'index.html') {
				@unlink($cache_path . '/' . $file);
			}
		}
		closedir($handle);
	}
	function pdfupload()
	{
		if (!empty($_FILES['file']['name'])) {
			$config['upload_path'] = './uploads/pdf/';
			$config['allowed_types'] = '*';
			$config['encrypt_name'] = FALSE;
			$this->upload->initialize($config);
			$files = $_FILES['file'];
			$_FILES['image']['name'] = $this->cleanImagename($files['name']);
			$_FILES['image']['type'] = $files['type'];
			$_FILES['image']['tmp_name'] = $files['tmp_name'];
			$_FILES['image']['error'] = $files['error'];
			$_FILES['image']['size'] = $files['size'];
			$this->upload->do_upload('image');
			$image_data = $this->upload->data();
			$image = $image_data['file_name'];
			return $image;
		}
		return false;
	}
	function videoupload()
	{
		if (!empty($_FILES['file']['name'])) {
			$config['upload_path'] = './uploads/videos/';
			$config['allowed_types'] = '*';
			$config['encrypt_name'] = FALSE;
			$this->upload->initialize($config);
			$files = $_FILES['file'];
			$_FILES['image']['name'] = $this->cleanImagename($files['name']);
			$_FILES['image']['type'] = $files['type'];
			$_FILES['image']['tmp_name'] = $files['tmp_name'];
			$_FILES['image']['error'] = $files['error'];
			$_FILES['image']['size'] = $files['size'];
			$this->upload->do_upload('image');
			$image_data = $this->upload->data();
			$image = $image_data['file_name'];
			return $image;
		}
		return false;
	}
	function getimageslist()
	{
		$postData = $this->input->post();
		$data = $this->admin_model->getimageslist($postData);
		echo json_encode($data);
		exit;
	}

	function getcontactenquiries()
	{
		$postData = $this->input->post();
		$data = $this->admin_model->getcontactenquiries($postData);
		echo json_encode($data);
		exit;
	}

	/* function getcontactenquiriesstats()
	{
		$startDate = $this->input->post('startDate');
		$endDate = $this->input->post('endDate');
		if(!empty($startDate) && !empty($endDate))
		{
		$this->db->where("created_at >=", $startDate);
		$this->db->where("created_at <=", $endDate);
		}
		$data['totalenquiries'] = $this->db->count_all_results("contact_master");
		$data['contactenquiries'] = $this->db->where("form","ctform")->count_all_results("contact_master");
		$data['downloadenquiries'] = $this->db->where("form","download")->count_all_results("contact_master");
		$data['landingenquiries'] = $this->db->where("form","leform")->count_all_results("contact_master");
		$data['financialenquiries'] = $this->db->where("form","ftool")->count_all_results("contact_master");
		echo json_encode($data);
		exit;

	} */
	function getcontactenquiriesstats()
	{
		$startDate = $this->input->post('startDate');
		$endDate = $this->input->post('endDate');

		if (!empty($startDate) && !empty($endDate)) {
			$startDate = date('Y-m-d', strtotime($startDate));
			$endDate = date('Y-m-d', strtotime($endDate));
		}
		// Initialize the data array
		$data = array();

		// Apply date range condition if start date and end date are not empty
		if (!empty($startDate) && !empty($endDate)) {
			$this->db->where("created_at >=", $startDate);
			$this->db->where("created_at <=", $endDate);
		}

		// Get total enquiries count
		$data['totalenquiries'] = $this->db->count_all_results("contact_master");

		// Get count for contact form enquiries
		if (!empty($startDate) && !empty($endDate)) {
			$this->db->where("created_at >=", $startDate);
			$this->db->where("created_at <=", $endDate);
		}
		$this->db->where("form", "ctform");
		$data['contactenquiries'] = $this->db->count_all_results("contact_master");

		// Get count for download form enquiries
		if (!empty($startDate) && !empty($endDate)) {
			$this->db->where("created_at >=", $startDate);
			$this->db->where("created_at <=", $endDate);
		}
		$this->db->where("form", "download");
		$data['downloadenquiries'] = $this->db->count_all_results("contact_master");

		// Get count for landing page enquiries
		if (!empty($startDate) && !empty($endDate)) {
			$this->db->where("created_at >=", $startDate);
			$this->db->where("created_at <=", $endDate);
		}
		$this->db->where("form", "leform");
		$data['landingenquiries'] = $this->db->count_all_results("contact_master");

		// Get count for financial tool enquiries
		if (!empty($startDate) && !empty($endDate)) {
			$this->db->where("created_at >=", $startDate);
			$this->db->where("created_at <=", $endDate);
		}
		$this->db->where("form", "ftool");
		$data['financialenquiries'] = $this->db->count_all_results("contact_master");

		// Output the data as JSON
		echo json_encode($data);
		exit;
	}

	function changeservicestatus()
	{
		$id = $this->input->post('id');
		$qry = $this->db->query("update service_master set is_active = (CASE is_active WHEN 1 THEN 0 ELSE 1 END) where id =$id ");
		if ($qry) {
			echo true;
		} else {
			echo false;
		}
		exit;
	}
	function changelocationstatus()
	{
		$id = $this->input->post('id');
		$qry = $this->db->query("update location_master set is_active = (CASE is_active WHEN 1 THEN 0 ELSE 1 END) where id =$id ");
		if ($qry) {
			echo true;
		} else {
			echo false;
		}
		exit;
	}
	function changeexservicestatus()
	{
		$id = $this->input->post('id');
		$qry = $this->db->query("update exservice_master set is_active = (CASE is_active WHEN 1 THEN 0 ELSE 1 END) where id =$id ");
		if ($qry) {
			echo true;
		} else {
			echo false;
		}
		exit;
	}
	function changeindustrystatus()
	{
		$id = $this->input->post('id');
		$qry = $this->db->query("update industry_master set is_active = (CASE is_active WHEN 1 THEN 0 ELSE 1 END) where id =$id ");
		if ($qry) {
			echo true;
		} else {
			echo false;
		}
		exit;
	}


}

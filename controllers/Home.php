<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . "libraries/phpmailer/PHPMailer.php");
require_once(APPPATH . "libraries/phpmailer/Exception.php");
require_once(APPPATH . "libraries/phpmailer/SMTP.php");

require_once(APPPATH . "libraries/sendinblue/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->library('upload');
		if (!empty($this->input->get('utm_source'))) {
			$utm_source = $this->input->get('utm_source');
			$utm_medium = $this->input->get('utm_medium');
			$utm_campaign = $this->input->get('utm_campaign');
			$utm_term = $this->input->get('utm_term');
			$utm_content = $this->input->get('utm_content');
			$this->session->set_userdata('utm_source', $utm_source);
			$this->session->set_userdata('utm_medium', $utm_medium);
			$this->session->set_userdata('utm_campaign', $utm_campaign);
			$this->session->set_userdata('utm_term', $utm_term);
			$this->session->set_userdata('utm_content', $utm_content);

		}
	}
	public function index()
	{
		$this->addcache();
		$data['head_foot'] = $this->home_model->get_header_footer('home');

		$data['banners'] = $this->home_model->get_home_banners();
		$data['pghome'] = true;
		$data['servicehomecard'] = $this->home_model->getservicehomecard();
		$data['exservicehomecard'] = $this->home_model->getexservicehomecard();
		$data['industry'] = $this->home_model->getindustriescard();
		$data['homefaq'] = $this->home_model->gethomefaq();
		$data['casestudies'] = $this->home_model->getblogs(3, false);
		$this->load->view('common/header', $data);
		$this->load->view('index');
		$this->load->view('common/footer');
	}
	public function events()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('home');

		$data['events'] = $this->home_model->getevents();
		$this->load->view('common/header', $data);
		$this->load->view('events');
		$this->load->view('common/footer');
	}

	public function ctobridge()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('cto-bridge');
		$this->load->view('common/header', $data);
		$this->load->view('common/ctobridgecont');
	}

	public function kfwcorp()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('kfwcorp');
		$this->load->view('common/header', $data);
		$this->load->view('common/kfw');
	}
	public function videos()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('videos');
		$this->load->view('common/header', $data);
		$this->load->view('videos/index');
		$this->load->view('common/footer');
	}
	public function gallery_media()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('videos');
		$this->load->view('common/header', $data);
		$this->load->view('gallery-media/index');
		$this->load->view('common/footer');
	}
	public function location($slug)
	{

		$data['pserv'] = $this->home_model->getinnerlocationbyslug($slug);
		if (!$data['pserv']) {
			redirect(base_url());
		}
		if (!empty($data['pserv']['repeater_s5'])) {
			$features = json_decode($data['pserv']['repeater_s5'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['repeater_s5'] = $sounique;
		}
		$data['page_header'] = $data['pserv']['page_header'];
		$data['gallery'] = $this->home_model->getimageslist(2);
		$this->load->view('common/header', $data);
		$this->load->view('location');
		$this->load->view('common/footer');
	}
	public function thankyou()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('home');

		$this->load->view('common/header', $data);
		$this->load->view('thankyou');
		$this->load->view('common/footer');
	}
	public function landing()
	{
		$this->session->set_userdata('landing-page', true);
		$data['head_foot'] = $this->home_model->get_header_footer('home');

		$this->load->view('common/header', $data);
		$this->load->view('landing-page');
		$this->load->view('common/footer');
	}
	public function downloads()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('downloads');
		$data['teams'] = $this->home_model->getteamnamelist();
		$this->load->view('common/header', $data);
		$this->load->view('download');
		$this->load->view('common/footer');
	}

	public function testDownloads()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('home');
		$data['teams'] = $this->home_model->getteamnamelist();
		$data['topics'] = $this->home_model->gettopiclist();
		$this->load->view('common/header', $data);
		$this->load->view('test-download');
		$this->load->view('common/footer');
	}
	public function accounts($slug)
	{

		$data['head_foot'] = $this->home_model->get_header_footer('services');
		$data['pserv'] = $this->home_model->getinnerexservicebyslug($slug);
		if (!$data['pserv']) {
			redirect(base_url());
		}
		if (!empty($data['pserv']['outcomes_json'])) {
			$features = json_decode($data['pserv']['outcomes_json'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading']];
			}
			$data['pserv']['outcomes_json'] = $sounique;
		}
		if (!empty($data['pserv']['card_json_so_unique'])) {
			$features = json_decode($data['pserv']['card_json_so_unique'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_so_unique'] = $sounique;
		}
		$data['page_header'] = $data['pserv']['page_header'];

		$this->load->view('common/header', $data);
		$this->load->view('accounts');
		$this->load->view('common/footer');
	}
	public function service()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('home');
		$this->load->view('common/header', $data);
		$this->load->view('service');
		$this->load->view('common/footer');
	}
	public function downloadInner($slug)
	{
		$data['head_foot'] = $this->home_model->get_header_footer('downloads');
		$data['doc'] = $this->home_model->getdownloadbyslug($slug);
		if (!$data['doc']) {
			redirect(base_url("downloads"));
		}
		$this->load->view('common/header', $data);
		$this->load->view('download-inner');
		$this->load->view('common/footer');
	}

	public function downloadInnerTest($slug)
	{

		$data['head_foot'] = $this->home_model->get_header_footer('home');
		$data['doc'] = $this->home_model->getdownloadbyslugTest($slug);
		$data['nearby_downloads'] = $this->home_model->getNearbyDownloadsTest($slug);
		if (!$data['doc']) {
			redirect(base_url("test-download"));
		}
		$this->load->view('common/header', $data);
		$this->load->view('download-page');
		$this->load->view('common/footer');
	}

	public function eventsInner($slug = false)
	{


		$data['head_foot'] = $this->home_model->get_header_footer('home');
		$data['event'] = $this->home_model->geteventbyslug($slug);
		if (!$data['event']) {
			redirect(base_url("events"));
		}
		$this->load->view('common/header', $data);
		$this->load->view('events-inner');
		$this->load->view('common/footer');
	}
	public function parentservice()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('services');
		$data['services'] = $this->home_model->getserviceforparentcard();
		$data['exservices'] = $this->home_model->getexserviceforparentcard();
		$data['pserv'] = $this->home_model->getparentservicebyid();
		if (!empty($data['pserv']['card_json_so_unique'])) {
			$features = json_decode($data['pserv']['card_json_so_unique'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_so_unique'] = $sounique;
		}
		$data['page_header'] = $data['pserv']['page_header'];

		$this->load->view('common/header', $data);
		$this->load->view('parent-service');
		$this->load->view('common/footer');
	}
	/* public function innerservice()
	{
		$slug = $this->uri->segment(2);
		$data['head_foot'] = $this->home_model->get_header_footer('services');
		$data['pserv'] = $this->home_model->getinnerservicebyslug($slug);
		if(!$data['pserv'])
		{
		redirect(base_url());
		}
		if (!empty($data['pserv']['card_json_we_do'])) {
			$features = json_decode($data['pserv']['card_json_we_do'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_we_do'] = $sounique;
		}
		if (!empty($data['pserv']['card_json_so_unique'])) {
			$features = json_decode($data['pserv']['card_json_so_unique'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_so_unique'] = $sounique;
		}
			$data['page_header'] = $data['pserv']['page_header'];
		$this->load->view('common/header', $data);
		$this->load->view('inner-service');
		$this->load->view('common/footer');
	} */
	public function innerservice($slug)
	{
		$data['head_foot'] = $this->home_model->get_header_footer('services');
		$data['pserv'] = $this->home_model->getinnerservicebyslug($slug);
		if (!$data['pserv']) {
			redirect(base_url());
		}

		$data['testimonials'] = $this->home_model->gettestimonials($data['pserv']['id']);
		if (!empty($data['pserv']['bannerCounterArr'])) {
			$features = json_decode($data['pserv']['bannerCounterArr'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'count' => $ft['count'], 'label' => $ft['label']];
			}
			$data['pserv']['bannerCounterArr'] = $sounique;
		}
		if (!empty($data['pserv']['card_json_we_do'])) {
			$features = json_decode($data['pserv']['card_json_we_do'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_we_do'] = $sounique;
		}
		if (!empty($data['pserv']['card_json_so_unique'])) {
			$features = json_decode($data['pserv']['card_json_so_unique'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_so_unique'] = $sounique;
		}
		$data['page_header'] = $data['pserv']['page_header'];
		$this->load->view('common/header', $data);
		$this->load->view('services/inner-service-new_above');
		$this->load->view('common/glreview');
		$this->load->view('services/inner-service-new_below');
		$this->load->view('common/footer');
	}

	public function innerindustry($slug)
	{

		$data['head_foot'] = $this->home_model->get_header_footer('services');
		$data['pserv'] = $this->home_model->getindustrybyslug($slug);
		if (!$data['pserv']) {
			redirect(base_url());
		}
		if (!empty($data['pserv']['card_json_help'])) {
			$features = json_decode($data['pserv']['card_json_help'], true);
			$sounique = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$sounique[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['pserv']['card_json_help'] = $sounique;
		}
		$data['page_header'] = $data['pserv']['page_header'];
		$this->load->view('common/header', $data);
		$this->load->view('industry');
		$this->load->view('common/footer');
	}

	public function team()
	{
		$name = $this->input->get('name');
		$location = $this->input->get('location');
		$industry = $this->input->get('industry');
		$data['industry'] = $this->home_model->getteamindustrylist();
		$data['location'] = $this->home_model->getteamlocationlist();
		$data['team'] = $this->home_model->getteamlist(0, $name, $location, $industry);
		$data['head_foot'] = $this->home_model->get_header_footer('team');
		$this->load->view('common/header', $data);
		$this->load->view('team');
		$this->load->view('common/footer');
	}
	public function innerteam($slug)
	{

		$data['head_foot'] = $this->home_model->get_header_footer('team');
		$data['team'] = $this->home_model->getteambyslug($slug);
		$data['downloaddocs'] = $this->home_model->getdownloadsbyteam($data['team']['id']);
		$this->load->view('common/header', $data);
		$this->load->view('team-inner');
		$this->load->view('common/footer');
	}

	public function testimonials()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('testimonial');
		$data['testimonials'] = $this->home_model->gettestimonials();
		$this->load->view('common/header', $data);
		$this->load->view('testimonials');
		$this->load->view('common/footer');
	}

	public function about()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('about');
		$data['counters'] = $this->home_model->getcounters();
		$this->load->view('common/header', $data);
		$this->load->view('about');
		$this->load->view('common/footer');
	}
	public function media()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('newsmedia');
		$this->load->view('common/header', $data);
		$this->load->view('media-coverage');
		$this->load->view('common/footer');
	}
	public function finance_tool()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('finance-tool');
		$this->load->view('common/header', $data);
		$this->load->view('finance-tool');
		$this->load->view('common/footer');
	}
	/* public function blogs()
	{
		$search = $this->input->get('search');

		$data['blogs'] = $this->home_model->getblogs(1,$limit=false,$search);
		$data['bbtype'] = 1;
		$this->load->view('common/header', $data);
		$this->load->view('blog-listing');
		$this->load->view('common/footer');
	} */
	public function blogview($slug)
	{

		$data['rec'] = $this->home_model->getsingleblog(['slug' => $slug]);
		if (!$data['rec']) {
			$this->output->set_status_header('404');
			redirect(base_url());
		}
		$data['blogs'] = $this->home_model->getblogs(1, 6);

		$data['page_header'] = $data['rec']['page_header'];
		$data['blogschema'] = $data['rec']['blogschema'];
		$data['author'] = $data['rec']['author'];
		$data['publisher'] = $data['rec']['publisher'];

		$page_schema = '<script type="application/ld+json">' . json_encode([
			"@context" => "https://schema.org",
			"@type" => "Article",
			"headline" => $data['rec']['title'],
			"image" => base_url('uploads/images/' . $data['rec']['image']),
			"author" => [
				"@type" => "Person",
				"name" => $data['rec']['author']
			],
			"publisher" => [
				"@type" => "Organization",
				"name" => !empty($data['rec']['publisher']) ? $data['rec']['publisher'] : 'CFO Bridge',
				"logo" => [
					"@type" => "ImageObject",
					"url" => base_url('assets/images/logo.png')
				]
			],
			"datePublished" => $data['rec']['posted'],
			"dateModified" => date('Y-m-d', strtotime($data['rec']['created_at'])),
			"mainEntityOfPage" => base_url('resources/' . $data['rec']['slug'])
		], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';


		$data['page_schema'] = $page_schema;

		$faq_items = json_decode($data['rec']['card_json_faq'], true);

		if (!empty($faq_items)) {
			$faq_schema = [
				"@context" => "https://schema.org",
				"@type" => "FAQPage",
				"mainEntity" => []
			];

			foreach ($faq_items as $item) {
				$faq_schema['mainEntity'][] = [
					"@type" => "Question",
					"name" => $item['heading'],
					"acceptedAnswer" => [
						"@type" => "Answer",
						"text" => $item['description']
					]
				];
			}

			$data['faq_schema'] = '<script type="application/ld+json">' .
				json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) .
				'</script>';
		} else {
			$data['faq_schema'] = '';
		}

		$this->load->view('common/header', $data);
		$this->load->view('blog-inner');
		$this->load->view('common/footer');
	}
	public function career()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('career');
		$data['jobs'] = $this->home_model->getjobs();
		$data['gallery'] = $this->home_model->getimageslist(2);
		$this->load->view('common/header', $data);
		$this->load->view('career');
		$this->load->view('common/footer');
	}
	public function awards()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('career');
		$data['awards'] = $this->home_model->getawardslist();
		$this->load->view('common/header', $data);
		$this->load->view('awards');
		$this->load->view('common/footer');
	}
	public function resources()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('career');
		$this->load->view('common/header', $data);
		$this->load->view('resources');
		$this->load->view('common/footer');
	}
	public function privacy()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('career');
		$this->load->view('common/header', $data);
		$this->load->view('privacy-policy');
		$this->load->view('common/footer');
	}
	public function clients()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('client');
		$data['category'] = $this->home_model->getcategorylist(3);
		$data['subcategories'] = $this->home_model->getsubcategorylist();
		$this->load->view('common/header', $data);
		$this->load->view('clients');
		$this->load->view('common/footer');
	}
	public function clients_demo()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('client');
		$data['category'] = $this->home_model->getcategorylist(3);
		$this->load->view('common/header', $data);
		$this->load->view('clients-demo');
		$this->load->view('common/footer');
	}
	public function tnc()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('career');
		$this->load->view('common/header', $data);
		$this->load->view('terms-and-conditions');
		$this->load->view('common/footer');
	}
	public function privacy_policy()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('career');
		$this->load->view('common/header', $data);
		$this->load->view('privacy-policy');
		$this->load->view('common/footer');
	}
	public function articles()
	{

		$search = $this->input->get('search');

		$data['head_foot'] = $this->home_model->get_header_footer('blog');
		$data['data'] = $this->home_model->getblogs(1, false, $search);
		$data['heading'] = 'Blogs';
		$data['bbtype'] = true;
		$this->load->view('common/header', $data);
		$this->load->view('case-studies');
		$this->load->view('common/footer');
	}
	public function case_studies()
	{
		$search = $this->input->get('search');

		$data['head_foot'] = $this->home_model->get_header_footer('case');
		$data['data'] = $this->home_model->getcasestudy(3, false, $search);
		$data['heading'] = "Case Studies";
		$data['bbtype'] = true;
		$this->load->view('common/header', $data);
		$this->load->view('case-studies');
		$this->load->view('common/footer');
	}
	public function news_media()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('newsmedia');
		$data['data'] = $this->home_model->getblogs(2, $limit = false);
		$data['heading'] = "News & Media";
		$this->load->view('common/header', $data);
		$this->load->view('news-media');
		$this->load->view('common/footer');
	}
	public function contact()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('contact');
		$this->load->view('common/header', $data);
		$this->load->view('contact-us');
		$this->load->view('common/footer');
	}
	public function request()
	{

		$data['head_foot'] = $this->home_model->get_header_footer('contact');
		$this->load->view('common/header', $data);
		$this->load->view('request-a-demo');
		$this->load->view('common/footer');
	}
	public function jobview($slug)
	{

		$data = $this->home_model->getsinglejob(['slug' => $slug]);
		$this->load->view('common/header', $data);
		$this->load->view('job');
		$this->load->view('common/footer');
	}
	public function serviceview($slug)
	{

		$data = $this->home_model->getservicebyslug(['slug' => $slug]);
		// echo json_encode($data); exit;
		if (empty($data)) {
			redirect(base_url());
		}
		if (!empty($data['features'])) {
			$features = json_decode($data['features'], true);
			$nfeatures = [];
			foreach ($features as $ft) {
				$image = $this->home_model->getimagebyid($ft['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$nfeatures[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $ft['heading'], 'description' => $ft['description']];
			}
			$data['nfeatures'] = $nfeatures;
		}

		if (!empty($data['multiple_points'])) {
			$multiple_points = json_decode($data['multiple_points'], true);
			$nmpoints = [];
			foreach ($multiple_points as $mp) {
				$image = $this->home_model->getimagebyid($mp['image']);
				if ($image) {
					$img = $image['image'];
					$alt = $image['alt_text'];
				} else {
					$img = '';
					$alt = '';
				}
				$nmpoints[] = ['image' => $img, 'alt_text' => $alt, 'heading' => $mp['heading']];
			}
			$data['nmpoints'] = $nmpoints;
		}
		if (!empty($data['clientel_logo'])) {
			$logo = explode(',', $data['clientel_logo']);
			foreach ($logo as $lg) {
				$clientlogo[] = $this->home_model->getimagebyid($lg);
			}
			$data['clientlogo'] = $clientlogo;
		}
		if ($data['category'] == 0) {
			$data['innerpt'] = $this->home_model->getsubservicesbymainservice($data['id']);
		}
		$data['casestudies'] = $this->home_model->getblogs(3, 3);
		$this->load->view('common/header', $data);
		$this->load->view('service');
		$this->load->view('common/footer');
	}
	public function no_page_found()
	{

		$this->load->view('common/header');
		$this->load->view('page-not-found');
		$this->load->view('common/footer');
	}
	function getcategory()
	{
		$data = $this->home_model->getcategorylist();
		echo json_encode($data);
		exit;
	}

	function getteamlist()
	{
		$data = $this->home_model->getteamlist();
		echo json_encode($data);
		exit;
	}
	function getimagesall()
	{
		$type = $this->input->post('type');
		$data = $this->home_model->getimageslist($type);
		echo json_encode($data);
		exit;
	}
	function getgalleryimages()
	{
		$offset = $this->input->post('offset');
		$data = $this->home_model->getgalleryimages($offset);
		echo json_encode($data);
		exit;
	}

		public function getclientslogos_dem()
	{
		$categoryid = $this->input->post('category_id');
		$subcategoryid = $this->input->post('subcategory_id');

		$this->db->select('i.image, i.alt_text, g.link, g.title');
		$this->db->from('images_master i');
		$this->db->join('client_master_d g', 'g.image = i.id');

		if (!empty($categoryid)) {
			$this->db->where('g.categoryid', $categoryid);
		}

		if (!empty($subcategoryid)) {
			$this->db->where('g.subcategoryid', $subcategoryid);
		}

		$query = $this->db->get();
		$data = $query->result_array();

		foreach ($data as &$row) {
			$row['link'] = urldecode($row['link']);
		}

		echo json_encode($data);
		exit;
	}

	public function getclientslogos()
	{
		$categoryid = $this->input->post('category_id');
		$subcategoryid = $this->input->post('subcategory_id');
		$no_pagination = $this->input->post('no_pagination'); // Check for no_pagination flag

		$this->db->select('i.image, i.alt_text, g.link, g.title, g.categoryid, g.subcategoryid');
		$this->db->from('images_master i');
		$this->db->join('client_master g', 'g.image = i.id');

		if (!empty($categoryid)) {
			$this->db->where('g.categoryid', $categoryid);
		}
		if (!empty($subcategoryid)) {
			$this->db->where('g.subcategoryid', $subcategoryid);
		}

		// Only apply pagination if not requesting all records
		if (empty($no_pagination)) {
			$page = (int) $this->input->post('page');
			$limit = (int) $this->input->post('limit');

			if ($limit <= 0)
				$limit = 18;
			if ($page <= 0)
				$page = 1;
			$offset = ($page - 1) * $limit;

			$total = $this->db->count_all_results('', false); // Get count without resetting query
			$this->db->limit($limit, $offset);
		}

		$query = $this->db->get();
		$data = $query->result_array();

		foreach ($data as &$row) {
			$row['link'] = urldecode($row['link']);
		}

		// If requesting all records, just return the data
		if (!empty($no_pagination)) {
			echo json_encode([
				'clients' => $data
			]);
		} else {
			echo json_encode([
				'clients' => $data,
				'total' => $total ?? count($data),
			]);
		}
		exit;
	}

	public function getclientslogos_d()
	{
		$categoryid = $this->input->post('category_id');
		$subcategoryid = $this->input->post('subcategory_id');
		$getAll = $this->input->post('all');

		if ($getAll) {
			// Return all clients organized by category and subcategory
			$this->db->select('i.image, i.alt_text, g.link, g.title, g.categoryid, g.subcategoryid');
			$this->db->from('images_master i');
			$this->db->join('client_master g', 'g.image = i.id');
			$query = $this->db->get();
			$data = $query->result_array();

			foreach ($data as &$row) {
				$row['link'] = urldecode($row['link']);
			}

			echo json_encode([
				'clients' => $data,
				'total' => count($data),
			]);
			exit;
		}

		$page = (int) $this->input->post('page');
		$limit = (int) $this->input->post('limit');

		if ($limit <= 0)
			$limit = 18;
		if ($page <= 0)
			$page = 1;

		$offset = ($page - 1) * $limit;

		// Count with JOIN
		$this->db->from('images_master i');
		$this->db->join('client_master g', 'g.image = i.id');
		if (!empty($categoryid)) {
			$this->db->where('g.categoryid', $categoryid);
		}
		if (!empty($subcategoryid)) {
			$this->db->where('g.subcategoryid', $subcategoryid);
		}
		$total = $this->db->count_all_results();

		// Now fetch paginated data
		$this->db->select('i.image, i.alt_text, g.link, g.title');
		$this->db->from('images_master i');
		$this->db->join('client_master g', 'g.image = i.id');
		if (!empty($categoryid)) {
			$this->db->where('g.categoryid', $categoryid);
		}
		if (!empty($subcategoryid)) {
			$this->db->where('g.subcategoryid', $subcategoryid);
		}
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		$data = $query->result_array();

		foreach ($data as &$row) {
			$row['link'] = urldecode($row['link']);
		}

		echo json_encode([
			'clients' => $data,
			'total' => $total,
		]);
		exit;
	}



	function gettestimonials()
	{
		$data = $this->home_model->gettestimonials();
		echo json_encode($data);
		exit;
	}
	function getdownloadslist()
	{
		$tid = $this->input->post('tid');
		$data = $this->home_model->getdownloads($tid);

		echo json_encode($data);
		exit;
	}

	function getdownloadslistTest()
	{
		$tid = $this->input->post('tid');
		$data = $this->home_model->getdownloadsTest($tid);

		echo json_encode($data);
		exit;
	}


	function getdownloadslistT()
	{
		$tid = $this->input->post('tid');
		$data = $this->home_model->getdownloadsT($tid);

		echo json_encode($data);
		exit;
	}

	public function getdownloadslistD()
	{
		$month = $this->input->post("month");
		$year = $this->input->post("year");

		// empty strings → NULL
		$month = $month ?: null;
		$year = $year ?: null;

		$data = $this->home_model->getdownloadsD($month, $year);
		echo json_encode($data);
		exit;
	}

	function getjobs()
	{
		$search = $this->input->post('search');
		$data = $this->home_model->getjobs($search);
		echo json_encode($data);
		exit;
	}
	function getservices()
	{
		$data = $this->home_model->getservices();
		echo json_encode($data);
		exit;
	}
	function getfeaturedservices()
	{
		$data = $this->home_model->getfeaturedservices();
		echo json_encode($data);
		exit;
	}
	function getservicemenu()
	{
		$menuft = "<ul class='ft-list'>";
		$menu = "<div class='cc-drop-main-wrap'><ul>";
		$url = base_url('service/');
		$parentm = $this->home_model->getserviceformenu(0);
		if ($parentm) {
			$count = 0;
			$count2 = 0;
			foreach ($parentm as $pm) {
				$active = $count == 0 ? 'active' : '';
				$menuft .= " <li>
			<a href='" . $url . $pm['slug'] . "'>
				" . $pm['name'] . "
			</a></li>";
				$menu .= " <li><a href='" . $url . $pm['slug'] . "' class='h-drop " . $active . "' data-slug='" . $url . $pm['slug'] . "' data-target='#d" . $count . "'>
				<div class='ic'>
					<img src='' alt=''>
				</div>
				<span>" . $pm['name'] . "</span>
			</a></li>";
				$count++;
			}
			$menu .= "</ul>";
			$menu .= "<div class='cc-dr'>";
			foreach ($parentm as $pm) {
				$childm = $this->home_model->getserviceformenu($pm['id']);
				if ($childm) {
					$menu .= "<ul id='d" . $count2 . "' class='custom-scrollbar'>";
					foreach ($childm as $cm) {
						$menu .= "	<li>
					<a href='" . $url . $cm['slug'] . "'>
						<span>" . $cm['name'] . "</span>
					</a>
				</li>";
					}
					$menu .= "</ul>";
				}
				$count2++;
			}
			$menu .= "</div>";
		}
		$menu .= "</div>";
		$menuft .= "</ul>";
		$data['desk'] = $menu;
		$data['ft'] = $menuft;
		$data['mob'] = $this->getservicemenuMobile();
		echo json_encode($data);
		exit;
	}
	function getservicemenuMobile()
	{
		$count = 1;
		$ncount = 2;
		$menu = "";
		$url = base_url('service/');
		$arraow = base_url('assets/images/drop.svg');
		$parentm = $this->home_model->getserviceformenu(0);
		if ($parentm) {
			foreach ($parentm as $pm) {
				$menu .= "<li class='has-mob-drop'>
			<a href='" . $url . $pm['slug'] . "' >
				" . $pm['name'] . " 
			</a>";
				$childm = $this->home_model->getserviceformenu($pm['id']);
				if ($childm) {
					$menu .= "<span class='drop' data-bs-toggle='collapse' href='#col$ncount'><img src='$arraow'></span>";
				}
				if ($childm) {
					$menu .= "<ul id='col$ncount' class='collapse'>";
					foreach ($childm as $cm) {
						$menu .= "	<li>
		<a href='" . $url . $cm['slug'] . "'>
			" . $cm['name'] . "
		</a>
	</li>";
					}
					$menu .= "</ul>";
				}
				$menu .= " </li>";
				$ncount++;
			}
		}
		return $menu;
	}
	function insertcareer()
	{
		/* 	$secretKey  = '6LdXhIAjAAAAACY2r--ZePb5-EfGF_Ed1IOHavGc';
			if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
				$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
				// Decode JSON data of API response 
				$responseData = json_decode($verifyResponse);
			} else {
				$res['msg'] = 'Captcha Failed';
				$res['status'] = false;
				echo json_encode($res);
				exit;
			}
			if (!$responseData->success) {
				$res['msg'] = 'Captcha Failed';
				$res['status'] = false;
				echo json_encode($res);
				exit;
			} */
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('cemail');
		$data['phone'] = $this->input->post('phone');
		$data['applied_for'] = $this->input->post('position');
		$data['city'] = $this->input->post('city');
		$data['coverletter'] = $this->input->post('coverletter');
		$data['linkedin'] = $this->input->post('linkedin');
		$data['experience'] = $this->input->post('experience');
		$data['last_role'] = $this->input->post('last_role');
		$data['last_company'] = $this->input->post('last_company');
		if (!empty($_FILES['resume']['name'])) {
			$config['upload_path'] = './uploads/resumes/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx';
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			$files = $_FILES['resume'];
			$_FILES['image']['name'] = $files['name'];
			$_FILES['image']['type'] = $files['type'];
			$_FILES['image']['tmp_name'] = $files['tmp_name'];
			$_FILES['image']['error'] = $files['error'];
			$_FILES['image']['size'] = $files['size'];
			$this->upload->do_upload('resume');
			$image_data = $this->upload->data();
			$data['resume'] = $image_data['file_name'];
		}
		$this->db->insert('career_master', $data);
		if ($this->db->affected_rows() > 0) {
			$msg = "<table>
<tr><th>Name : </th><td>" . $data['name'] . "</td></tr>
<tr><th>Email : </th><td>" . $data['email'] . "</td></tr>
<tr><th>Phone : </th><td>" . $data['phone'] . "</td></tr>
<tr><th>Experience : </th><td>" . $data['experience'] . " years</td></tr>
<tr><th>Last Role : </th><td>" . $data['last_role'] . "</td></tr>
<tr><th>Last Company : </th><td>" . $data['last_company'] . "</td></tr>
</table>";
			$sub = "New Job Enquiry Received";
			$emailArr = array(
				array('email' => 'vidya@cfobridge.com'),
				array('email' => 'rohan@cfobridge.com'),
				array('email' => 'princy@cfobridge.com'),
				array('email' => 'stella@cfobridge.com')
			);
			$this->sendEmailApi($emailArr, $msg, $sub);
			$res['status'] = true;
			$res['msg'] = 'Form Submitted';
		} else {
			$res['status'] = false;
			$res['msg'] = 'Please try after some time.';
		}
		echo json_encode($res);
		exit;
	}
	function insertcontact()
	{
		/* $secretKey  = '6LdXhIAjAAAAACY2r--ZePb5-EfGF_Ed1IOHavGc';
		if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
			$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
			// Decode JSON data of API response 
			$responseData = json_decode($verifyResponse);
		} else {
			$res['msg'] = 'Captcha Failed';
			$res['status'] = false;
			echo json_encode($res);
			exit;
		}
		if (!$responseData->success) {
			$res['msg'] = 'Captcha Failed';
			$res['status'] = false;
			echo json_encode($res);
			exit;
		} */
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['message'] = $this->input->post('message');
		$data['type'] = $this->input->post('type');
		$data['company'] = $this->input->post('company');
		$download = $this->input->post('download');
		$data['link'] = $this->input->post('url');
		$data['form'] = $this->input->post('formt');

		if (empty($data['form'])) {
			$data['form'] = 'ctform';
		}
		if (!empty($download)) {
			$res['download'] = true;
			$data['form'] = 'download';
		} else {
			$res['download'] = false;
		}
		$url = "";
		if (!empty($data['link'])) {
			$url = "<tr><th>Service : <th><td>" . $data['link'] . "</td></tr>";
		}
		$data['utm_source'] = $this->session->userdata('utm_source');
		$data['utm_medium'] = $this->session->userdata('utm_medium');
		$data['utm_campaign'] = $this->session->userdata('utm_campaign');
		$data['utm_term'] = $this->session->userdata('utm_term');
		$data['utm_content'] = $this->session->userdata('utm_content');
		$data['privacy_checked'] = $this->input->post('privacychecked') ?? 0;
		$data['whatsapp_checked'] = $this->input->post('whatsappchecked') ?? 0;
		$data['not_job_checked'] = $this->input->post('notjobchecked') ?? 0;
		$this->db->insert('contact_master', $data);
		if ($this->db->affected_rows() > 0) {
			$msg = "<table>
		<tr><th>Name : <th><td>" . $data['name'] . "</td></tr>
		<tr><th>Email : <th><td>" . $data['email'] . "</td></tr>
		<tr><th>Phone : <th><td>" . $data['phone'] . "</td></tr>
		<tr><th>Area of Interest : <th><td>" . $data['type'] . "</td></tr>
		<tr><th>Message : <th><td>" . $data['message'] . "</td></tr>
		$url
		</table>";
			$sub = "New Enquiry Received";
			$emailArr = array(
				array('email' => 'vidya@cfobridge.com'),
				array('email' => 'rohan@cfobridge.com'),
				array('email' => 'princy@cfobridge.com')

			);
			$SingleemailArr = array(
				array('email' => $data['email'])

			);
			$this->sendEmailApi($emailArr, $msg, $sub);
			//$this->sendEmailApi($SingleemailArr,['name'=>$data['name']], "Thank you for contacting CFO Bridge",true);
			$this->mailchimpcreateemail($data['email'], $data['name']);
			$res['status'] = true;
			$res['msg'] = '<p class="alert alert-success">Form Submitted</p>';
		} else {
			$res['status'] = false;
			$res['msg'] = '<p class="alert alert-warning">Please try after some time.</p>';
		}
		echo json_encode($res);
		exit;
	}
	function subscribeformsubmit()
	{
		$email = $this->input->post('email');
		$sub = "New Email for Newsletter";
		$msg = "Email : $email";
		$this->db->insert('	newsletter_master', ['email' => $email]);
		$emailArr = array(
			array('email' => 'vidya@cfobridge.com'),
			array('email' => 'rohan@cfobridge.com'),
			array('email' => 'princy@cfobridge.com')

		);
		$this->sendEmailApi($emailArr, $msg, $sub);
		$this->mailchimpcreateemail($email, "");
		$res['status'] = true;
		$res['msg'] = '<p class="alert alert-success">Form Submitted</p>';
		echo json_encode($res);
		exit;
	}

	function mailchimpcreateemail($email, $name)
	{
		$this->load->helper('mailchimp');
		createmailchimpcontact($email, $name);
		return true;
	}

	function sendEmail($email, $msg, $sub, $emailer = false)
	{
		if ($emailer) {
			$msg = $this->load->view('emailer', $msg, true);
		}
		$mail = new PHPMailer();
		$headers = '';
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->CharSet = "UTF-8";
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->Username = "cfobridge12@gmail.com";
		$mail->Password = "Cfo@2012";
		$mail->Host = "smtp.gmail.com";
		$mail->Mailer = "smtp";
		$mail->SetFrom("no-reply@cfobridge.com", "CFO Bridge");
		$mail->AddAddress($email);
		$mail->AddAddress('rohan@cfobridge.com');
		$mail->AddAddress('vidya@cfobridge.com');
		$mail->AddAddress('princy@cfobridge.com');
		$mail->Subject = $sub;
		$mail->WordWrap = 40;
		$mail->MsgHTML($msg);
		$mail->IsHTML(true);
		if (!$mail->Send()) {
			return true;
		}
		return true;
	}


	function getjobcontents()
	{
		$id = $this->input->post('id');
		$qry = $this->db->select('content')->get_where('jobs_master', ['id' => $id]);
		if ($qry->num_rows() > 0) {
			$row = $qry->row_array();
			$res['status'] = true;
			$res['content'] = html_entity_decode($row['content']);
			echo json_encode($res);
		}
		exit;
	}


	function sendEmailApi($emails, $msg, $subject, $emailer = false)
	{

		if ($emailer) {
			$msg = $this->load->view('emailer', $msg, true);
		}

		$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

		$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
			new GuzzleHttp\Client(),
			$config
		);
		$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
		$sendSmtpEmail['subject'] = $subject;
		$sendSmtpEmail['htmlContent'] = $msg;
		$sendSmtpEmail['sender'] = array('name' => 'CFO Bridge', 'email' => 'noreply@cfobridge.com');
		$sendSmtpEmail['to'] = $emails;
		$sendSmtpEmail['replyTo'] = array('email' => 'info@cfobridge.com', 'name' => 'CFO Bridge');
		$sendSmtpEmail['headers'] = array('Some-Custom-Name' => 'unique-id-1234');
		//$sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

		try {
			$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
			return true;
		} catch (Exception $e) {
			return true;
		}

	}



	function addcache()
	{
		$this->output->cache(1440);
		return true;
	}
}

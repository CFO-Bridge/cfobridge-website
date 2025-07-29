<?php defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model
{
  function getproducts()
  {
   
    $this->db->select('slug,name,short_description');
    $qry = $this->db->get_where('products', ['is_active' => 1, 'category' => 0]);
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function gethomefaq()
  {
    $qry = $this->db->get('home_faq');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getfeaturedproducts()
  {
    $this->db->select('p.slug,p.name,p.short_description,i.image,i.alt_text');

    $this->db->from('products p');
    $this->db->join('images_master i', 'i.id=p.fimage','left');
    $this->db->where(['p.is_active' => 1, 'p.fproduct' => 1]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function get_home_banners()
  {
    $this->db->select('h.title,h.short_description,h.theme,h.cta_btn as ctb,h.cta_link as ctl,i.image,i.alt_text,im.image as mob_image');
    $this->db->order_by('h.orderby','asc');
    $this->db->from('home_banner_master h');
    $this->db->join('images_master i', 'i.id=h.image','left');
    $this->db->join('images_master im', 'im.id=h.mob_image','left');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getsetingrec($name)
  {
    $qry = $this->db->get_where('settings_master',['name' =>$name]);
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  function getsubproductsbymainproduct($id)
  {
    $this->db->select('p.slug,p.name,p.short_description,i.image,i.alt_text');

    $this->db->from('products p');
    $this->db->join('images_master i', 'i.id=p.fimage');
    $this->db->where(['p.is_active' => 1, 'p.category' => $id]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function get_header_footer($page)
  {
    $this->db->where('page', $page);
    $this->db->select('header,footer');
    $q = $this->db->get('seo_master');
    if ($q->num_rows() > 0) {
      return $q->row_array();
    }
    return false;
  }
  function getblogs($type, $limit = false,$search=false)
  {
    if ($limit)
      $this->db->limit($limit);
    if (!empty($search))
     $this->db->like('b.title',$search);
    $this->db->order_by('b.id desc')->select('b.id,b.title,b.description,b.slug,b.posted,i.image,i.alt_text,b.link');
    $this->db->from('blogs b');
    $this->db->join('images_master i', 'i.id=b.image');
    $this->db->where(['b.is_active' => 1, 'b.type' => $type]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

    function getcasestudy($type, $limit = false,$search=false)
  {
    if ($limit)
      $this->db->limit($limit);
    if (!empty($search))
     $this->db->like('b.title',$search);
    $this->db->order_by('b.id desc')->select('b.id,b.title,b.description,b.slug,b.posted,i.image,i.alt_text,b.link');
    $this->db->from('blogs b');
    $this->db->join('images_master i', 'i.id=b.image');
    $this->db->where(['b.is_active' => 1, 'b.type' => $type]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

  function getevents()
  {
   
    $this->db->select('b.id,b.title,b.description,b.time,b.slug,b.date,i.image,i.alt_text,b.link');
    $this->db->from('events b');
    $this->db->join('images_master i', 'i.id=b.image');
    $this->db->where(['b.is_active' => 1]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getdownloads($teamid)
  {
    if($teamid)
    {
      $this->db->where(['teamid' => $teamid]);
    }
    $this->db->select('title,short_description,slug,file,created_at');
   $qry = $this->db->get('downloads_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  
  
  function getdownloadsTest($teamid)
  {
    if (!empty($teamid)) {  
      $this->db->where(['d.teamid' => $teamid]);  
    }

    $this->db->select('d.title, d.short_description, d.slug, d.file, i.image, i.alt_text');
    $this->db->from('downloads_master_test d');
    $this->db->join('images_master i', 'i.id = d.side_img', 'left');
    $this->db->order_by('created_at', 'DESC'); 

    $qry = $this->db->get();  

    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  
  function getdownloadsT($topicid)
  {
    if (!empty($topicid)) {  
      $this->db->where(['d.topicid' => $topicid]);  
    }

    $this->db->select('d.title, d.short_description, d.slug, d.file, i.image, i.alt_text');
    $this->db->from('downloads_master_test d');
    $this->db->join('images_master i', 'i.id = d.side_img', 'left');
    $this->db->order_by('created_at', 'DESC'); 

    $qry = $this->db->get();  

    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  


public function getdownloadsD($month = null, $year = null)
{
    if ($month && $year) {
        $this->db->where('MONTH(d.created_at)', $month);
        $this->db->where('YEAR(d.created_at)',  $year);
    }

    $this->db->select('d.title, d.short_description, d.slug, d.file,
                       i.image, i.alt_text');
    $this->db->from('downloads_master_test d');
    $this->db->join('images_master i', 'i.id = d.side_img', 'left');
    $this->db->order_by('d.created_at', 'DESC');

    $q = $this->db->get();
    return ($q->num_rows() ? $q->result_array() : []);
}

  
  
  function getdownloadbyslug($slug)
  {
    $this->db->where(['slug' => $slug]);
   $qry = $this->db->get('downloads_master');
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  
  function getdownloadbyslugTest($slug)
  {
    $this->db->select('d.*, i.image, i.alt_text');
    $this->db->from('downloads_master_test d');
    $this->db->join('images_master i', 'i.id = d.side_img', 'left');
    $this->db->where('d.slug', $slug);

    $qry = $this->db->get();

    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  
  public function getNearbyDownloadsTest($slug)
  {
    $this->db->select("
        main.id AS id,
        GROUP_CONCAT(neighbors.slug ORDER BY ABS(main.id - neighbors.id) SEPARATOR ', ') AS nearby_slugs,
        GROUP_CONCAT(neighbors.title ORDER BY ABS(main.id - neighbors.id) SEPARATOR ', ') AS nearby_titles
    ");
    $this->db->from("downloads_master_test main");
    $this->db->join("downloads_master_test neighbors", "main.id != neighbors.id", "inner");
    $this->db->where('main.slug', $slug);
    $this->db->group_by("main.id");

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result_array(); // Returns an array of results
    }
    return false;
  }
  
  function geteventbyslug($slug)
  {
   
    $this->db->select('b.*,i.image,i.alt_text,b.link');
    $this->db->from('events b');
    $this->db->join('images_master i', 'i.id=b.image');
    $this->db->where(['b.is_active' => 1,'b.slug' => $slug]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  
  function getteamlist($limit=0,$name=false,$location=false,$industry=false)
  {
    if(!empty($limit))
    $this->db->limit($limit);

    if($name)
    $this->db->like('t.name',$name);
    if($location)
    $this->db->like('t.location',$location);
    if($industry)
    $this->db->like('t.industry',$industry);
    $this->db->order_by("CASE WHEN t.orderby = 0 THEN 1 ELSE 0 END", 'asc', false);
    $this->db->order_by('t.orderby', 'asc');
    $this->db->select('t.name,t.title,t.details,t.link,t.slug,i.image,i.alt_text');
    $this->db->from('team_master t');
    $this->db->join('images_master i', 'i.id=t.image', 'left');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  
    function gettopiclist()
  {
    $this->db->select('id,name');
    $qry = $this->db->get('topic_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

  function getteamnamelist()
  {
    $this->db->select('id,name');
    $this->db->order_by("CASE WHEN orderby = 0 THEN 1 ELSE 0 END", 'asc', false);
    $this->db->order_by('orderby', 'asc');
    $qry = $this->db->get('team_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

  function getteamindustrylist()
  {
    $this->db->select('industry');
    $this->db->group_by('industry');
    $qry = $this->db->get('team_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getteamlocationlist()
  {
    $this->db->select('location');
    $this->db->group_by('location');
    $qry = $this->db->get('team_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

  function getteambyslug($slug)
  {
    $this->db->select('t.*,i.image,i.alt_text');
    $this->db->from('team_master t');
    $this->db->join('images_master i', 'i.id=t.image', 'left');
    $this->db->where('t.slug',$slug);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  function getdownloadsbyteam($tid)
  {
      $this->db->select('slug,title,short_description,file');
      $qry = $this->db->get_where('downloads_master',['teamid'=>$tid]);
      if($qry->num_rows()>0)
      {
          return $qry->result_array();
      }
      return false;
  }
  
  function getdownloadsbyteamTest($tid)
  {
    $this->db->select('slug,title,short_description,file');
    $qry = $this->db->get_where('downloads_master_test', ['teamid' => $tid]);
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  
  function getservicehomecard()
  {
    $this->db->select('t.title_home_card,t.description_home_card,t.slug,i.image,i.alt_text');
    $this->db->from('service_master t');
    $this->db->join('images_master i', 'i.id=t.image_home_card', 'left');
    $this->db->where('t.is_active',1);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getexservicehomecard()
  {
    $this->db->select('t.title_home_card,t.description_home_card,t.slug,i.image,i.alt_text');
    $this->db->from('exservice_master t');
    $this->db->join('images_master i', 'i.id=t.image_home_card', 'left');
    $this->db->where('t.is_active',1);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getserviceforparentcard()
  {
    $this->db->select('title_service_card as title,heading_service_card as heading,description_service_card as description,slug');
    $this->db->where('is_active',1);
    $qry = $this->db->get('service_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getexserviceforparentcard()
  {
    $this->db->select('title_service_card as title,heading_service_card as heading,description_service_card as description,slug');
    $this->db->where('is_active',1);
    $qry = $this->db->get('exservice_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getparentservicebyid()
	{
		$this->db->where('t.id', 1);
    $this->db->select('t.*,i.image as image_banner ,i.alt_text as alt_text_banner,j.image as image_about ,j.alt_text as alt_text_about');
    $this->db->from('parent_service t');
    $this->db->join('images_master i', 'i.id=t.image_banner', 'left');
    $this->db->join('images_master j', 'j.id=t.image_about', 'left');
		$qry = $this->db->get();
		return $qry->row_array();
	}
  function getinnerservicebyslug($slug)
	{
		$this->db->where(['t.slug'=>$slug,'t.is_active'=>1]);
    $this->db->select('t.*,i.image as image_banner ,i.alt_text as alt_text_banner,j.image as image_about ,j.alt_text as alt_text_about,k.image as serviceworks_image ,k.alt_text as serviceworks_alt_text');
    $this->db->from('service_master t');
    $this->db->join('images_master i', 'i.id=t.image_banner', 'left');
    $this->db->join('images_master j', 'j.id=t.image_about', 'left');
    $this->db->join('images_master k', 'k.id=t.serviceworks_image', 'left');
		$qry = $this->db->get();
		return $qry->row_array();
	}
  function getinnerexservicebyslug($slug)
	{
		$this->db->where(['t.slug'=>$slug,'t.is_active'=>1]);
    $this->db->select('t.*,i.image as image_banner ,i.alt_text as alt_text_banner,j.image as image_about ,j.alt_text as alt_text_about,k.image as task_image,k.alt_text as alt_text_task');
    $this->db->from('exservice_master t');
    $this->db->join('images_master i', 'i.id=t.image_banner', 'left');
    $this->db->join('images_master j', 'j.id=t.image_about', 'left');
    $this->db->join('images_master k', 'k.id=t.task_image', 'left');
		$qry = $this->db->get();
		return $qry->row_array();
	}
  function getinnerlocationbyslug($slug)
	{
		$this->db->where(['t.slug'=>$slug,'t.is_active'=>1]);
    $this->db->select('t.*,i.image as image_s1 ,i.alt_text as image_s1_alttext');
    $this->db->from('location_master t');
    $this->db->join('images_master i', 'i.id=t.image_s1', 'left');
    $qry = $this->db->get();
		return $qry->row_array();
	}
  function getlocationlistforheader()
  {
    $this->db->select("title,slug")->where("is_active",1);
    $qry = $this->db->get("location_master");
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getindustriescard()
  {
    $this->db->select('t.title_home_card,t.slug,i.image,i.alt_text');
    $this->db->from('industry_master t');
    $this->db->join('images_master i', 'i.id=t.image_home_card', 'left');
    $this->db->where('t.is_active',1);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getindustrybyslug($slug)
  {
    $this->db->select('t.*,i.image as image_banner ,i.alt_text as alt_text_banner,j.image as image_about ,j.alt_text as alt_text_about');
    $this->db->from('industry_master t');
    $this->db->join('images_master i', 'i.id=t.image_banner', 'left');
    $this->db->join('images_master j', 'j.id=t.image_about', 'left');
    $this->db->where(['t.is_active'=>1,'t.slug'=>$slug]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  function getclientslist()
  {
    $this->db->order_by('t.orderby asc');
    $this->db->select('t.title,t.short_description,t.link,i.image,i.alt_text');
    $this->db->from('client_master t');
    $this->db->join('images_master i', 'i.id=t.image', 'left');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getawardslist()
  {
    $this->db->order_by('t.orderby asc');
    $this->db->select('t.title,t.short_description,t.link,i.image,i.alt_text,t.date');
    $this->db->from('award_master t');
    $this->db->join('images_master i', 'i.id=t.image', 'left');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getsingleblog($where)
  {
    $this->db->where($where);
    $this->db->where(['is_active' => 1]);
    $this->db->select('b.*,i.image,i.alt_text');
    $this->db->from('blogs b');
    $this->db->join('images_master i', 'i.id=b.image');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  function getjobs($key = false)
  {
    if ($key)
      $this->db->like('title', $key);
    $this->db->select('id,title,description,slug');
    $qry = $this->db->get_where('jobs_master', ['is_active' => 1]);
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getsinglejob($where)
  {
    $this->db->where($where);
    $qry = $this->db->get_where('jobs_master', ['is_active' => 1]);
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  function getcategorylist($where=false)
  {
    if($where)
    $this->db->where('type',$where);
    $this->db->select('id,name');
    $qry = $this->db->get_where('category_master', ['is_deleted' => 0]);
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }

function getsubcategorylist()
{
  
    $this->db->select('id, name, category_id');
    $qry = $this->db->get_where('subcategories', ['is_deleted' => 0]);

    if ($qry->num_rows() > 0) {
        return $qry->result_array();
    }
    return false;
}


  function getcounters()
  {
    $qry = $this->db->get('counter_master');
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getimageslist($type = 1)
  {
    $this->db->select('i.image,i.alt_text');
    $this->db->from('images_master i');
    $this->db->join('gallery_logo_master g', 'g.imageid=i.id');
    $this->db->where(['type' => $type]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getgalleryimages($offset = 1)
  {
    $this->db->limit(6, $offset);
    $this->db->select('i.image,i.alt_text');
    $this->db->from('images_master i');
    $this->db->join('gallery_logo_master g', 'g.imageid=i.id');
    $this->db->where(['type' => 2]);
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getclientbycatid($id=false)
  {
    if($id)
    $this->db->where('categoryid', $id);
    
    $this->db->select('i.image,i.alt_text,g.link');
    $this->db->from('images_master i');
    $this->db->join('client_master g', 'g.image=i.id');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }


  public function getsubcategories()
{
    return $this->db->get('subcategories')->result_array();
}

public function getcategories()
{
    return $this->db->get('category_master')->result_array();
}
  function getclientbysubcatid($id = false)
{
    if ($id) {
        $this->db->where('subcategoryid', $id);
    }

    $this->db->select('i.image, i.alt_text, g.link');
    $this->db->from('images_master i');
    $this->db->join('client_master g', 'g.image = i.id');
    $qry = $this->db->get();

    if ($qry->num_rows() > 0) {
        return $qry->result_array();
    }

    return false;
}

  function gettestimonials($limit=false)
  {
    if($limit)
    $this->db->limit($limit);
    $this->db->select('t.title,t.detail,t.description,t.video,i.image,i.alt_text');
    $this->db->from('testimonials t');
    $this->db->join('images_master i', 'i.id=t.image','left');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getproductformenu($type = 0)
  {
    $this->db->select('id,name,slug,category');
    $qry = $this->db->get_where('products', ['is_active' => 1, 'category' => $type]);
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getproductbycat($id)
  {
    $this->db->select('id,name,slug,short_description');
    $qry = $this->db->get_where('products', ['is_active' => 1, 'category' => $id]);
    if ($qry->num_rows() > 0) {
      return $qry->result_array();
    }
    return false;
  }
  function getimagebyid($id)
  {
    $qry = $this->db->get_where('images_master', ['id' => $id]);
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
  function getcategoryname($id)
  {
    $this->db->select('name');
    $qry = $this->db->get_where('category_master', ['id' => $id]);
    if ($qry->num_rows() > 0) {
      $r = $qry->row_array();
      return $r['name'];
    }
    return false;
  }
  function getproductbyslug($where)
  {
    $this->db->where($where);
    $this->db->select('p.*,i.image,i.alt_text,ij.image as image2,ij.alt_text as alt_text2,k.image as image3,k.alt_text as alt_text3, c.image as cover, c.alt_text as cover_alttext,sim.image as simage2');
    $this->db->from('products p');
    $this->db->join('images_master i', 'i.id=p.image', 'left');
    $this->db->join('images_master ij', 'ij.id=p.image2', 'left');
    $this->db->join('images_master k', 'k.id=p.image3', 'left');
    $this->db->join('images_master c', 'c.id=p.cover', 'left');
    $this->db->join('images_master sim', 'sim.id=p.simage2', 'left');
    $qry = $this->db->get();
    if ($qry->num_rows() > 0) {
      return $qry->row_array();
    }
    return false;
  }
}

<?php

/**
 * @file
 * Contains Drupal\cgi_related_media\Controller\MediaController.
 */

namespace Drupal\cgi_related_media\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Site\Settings;


class MediaController extends ControllerBase {

  public function renderRelatedMediaPage() {
	
  // SQL to fetch content type data based on type

  $query = db_query("SELECT c.field_category_target_id cid, n.nid, tfd.name AS type, n.title, b.body_value, i.field_cgi_image_target_id AS fid, fm.uri, fm.filename, n.created
  FROM node__field_category c
  JOIN node_field_data n ON n.nid = c.entity_id
  LEFT JOIN node__body b ON b.entity_id = n.nid
  LEFT JOIN node__field_cgi_image i ON i.entity_id = n.nid
  LEFT JOIN file_managed fm ON fm.fid = i.field_cgi_image_target_id
  LEFT JOIN taxonomy_term_field_data tfd ON tfd.tid = c.field_category_target_id
  ORDER BY c.field_category_target_id,n.changed DESC");
 
 // Assign to key pair for match records.
  $data = array();
    foreach ($query as $row) {
    $data[$row->cid][$row->nid]['title'] = $row->title;

    if(!empty($row->uri)){

      $real_path = \Drupal::service('file_system')->realpath($row->uri);

      $imageSRC = file_create_url($row->uri);
      
      $data[$row->cid][$row->nid]['uri'] = $imageSRC;
    }
    
    $data[$row->cid][$row->nid]['filename'] = $row->filename;
    $data[$row->cid][$row->nid]['body'] = $row->body_value;
    $data[$row->cid][$row->nid]['created'] = date('l dS \o\f F Y h:i:s A', $row->created);
    $data[$row->cid][$row->nid]['type'] = $row->type;

  }
  
  // Call REST URL

  $response = file_get_contents('http://drupal-8-9-1.dd:8083/blog_feed.json');
  
  $blogFeedData = json_decode($response, TRUE);

  
  $cgiCategory = Settings::get('cgi');


  $blog = array();
    return [
      '#theme' => 'media_overview_page',
      '#mediaAnnouncement' => $data[$cgiCategory['mediaannouncement']],
      '#brochure' =>$data[$cgiCategory['brochure']],
      '#whitePaper' =>$data[$cgiCategory['whitePaper']],
      '#blogFeed' =>$blogFeedData['blogs'],
    ];
  }
 }
 


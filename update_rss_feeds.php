<?php
	ini_set('max_execution_time', 3600);
	
	include 'summarize_article.php';
	include 'extract_from_rss.php';
	
	// Clear our database
	clearRSSDatabase ();
	
	// Initialize our RSS scraper
	$collectRSSFeed = new CollectRSSFeed ();
	
	// Setup our RSS URL Array
	$rss_array = $collectRSSFeed->setupRSSArray ();
		
	// Extract the latest articles from RSS feeds
	$collectRSSFeed->parseRSSFeed ( $rss_array );
?>
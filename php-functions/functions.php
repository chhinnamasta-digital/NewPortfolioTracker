<?php
    session_start();
    include("connection.php");

	function domain_url()
	{
		if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on')
		{
			$url="https";
		}
		else
		{
			$url="http";
		}
		$url.="://".$_SERVER['HTTP_HOST']."/JMCKDS-new/NewPortfolioTracker/";
		return $url;  
		 
	}
    function selectPageText($conn, $pageId, $text_type){
        $pageTextSelect = "SELECT * FROM page_text WHERE page_id = '$pageId' AND text_type = '$text_type' ORDER BY text_order";
        $pageTextQuery = mysqli_query($conn, $pageTextSelect);
        $pageTextNumRows = mysqli_num_rows($pageTextQuery);

        $textArray = [];
        $textArrayIndex = 0;

        if($pageTextNumRows != 0){
            while($pageTextFetch = mysqli_fetch_array($pageTextQuery)){
                $text_ = nl2br($pageTextFetch['text']);
                $textArray[$textArrayIndex] = $text_;
            }
            return $textArray;
        }
    }
    $url_ = domain_url();

    
?>
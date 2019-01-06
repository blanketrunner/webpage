<?php
//SS9 get_cities.php
    switch($_REQUEST['state'])
    {
        case "VIC":
        $cities = array('Please Select City', '1', '2', '3');
        break;
        
		case "TAS":
        $cities = array('Please Select City', '1', '2', '3');
        break;
        
        case "ACT":
        $cities = array('Please Select City', '1', '2', '3');
        break;

        case "NSW":
        $cities = array('Please Select City', '1', '2', '3');
        break;  
        
        default :
        $cities = false;
        break;
    }
    if($cities) echo "<b>City:</b>"."<select name='city'><option>".
            implode('</option><option>',$cities).
            '</option></select>';
?>

<?php
//SS9 get_cities.php
    switch($_REQUEST['country'])
    {
        case "au":
        $state = array('Please Select State', 'SA', 'QLD', 'ACT', 'NT', 'TAS', 'VIC', 'WA', 'NSW');
        break;
        
		case "cn":
        $state = array('Please Select State', 'Beijing', 'Chengdu', 'Dongguan', 'Guangzhou', 'Hangzhou', 'Shanghai', 'Tianjin', 'Urumqi');
        break;
        
        case "uk":
        $state = array('Please Select State', 'Birmingham', 'Glasgow', 'Leeds', 'Liverpool', 'London', 'Manchester', 'Newcastle', 'Nottingham');
        break;

        case "us":
        $state = array('Please Select State', 'Chicago', 'Dallas', 'Houston', 'Los Angeles', 'Miami', 'New York State', 'Philadelphia', 'Washington, D.C.');
        break;  
        
        default :
        $state = false;
        break;
    }
    if($state) echo "</b><b>State:</b>"."<select name='states'><option>".
            implode('</option><option>',$state).
            '</option></select>';
?>

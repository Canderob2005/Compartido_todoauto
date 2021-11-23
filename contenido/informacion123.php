 <?php

$mysql_host     = 'localhost';   # use your mysql host host (ussually 127.0.0.1)
$mysql_user     = 'u317430902_canderob';            # use your mysql user
$mysql_pass     = 'camara';            # use your mysql password here
$mysql_database = 'u317430902_todoAuto'; # use your mysql databas here

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Información clientes</title>
</head>

<body>

 <?php


# where we get all articles with empty friendly url
$query = mysqli_query($link, "SELECT * 
                              FROM clientes  WHERE friendly_url = '' ");

# for each article with empty friendly_url 
while($row = mysqli_fetch_assoc($query)){
    
    # get friendly url from title
    $new_friendly_url = $vl_url_string = friendly_seo_string($row['nombreNegocio']);
    
    $counter = 1;
    $intial_friendly_url = $new_friendly_url;
    
    # while we not found unique friendly url
    while(mysqli_num_rows(mysqli_query($link, "SELECT * 
                                               FROM clientes 
                                               WHERE friendly_url = '$new_friendly_url' "))){
                                                   
        # if friendly url is already used by other article 
        # -> increase counter until we find free url
        $counter++;  
        
        # we reapeat this until url-2 url-3 url-4..... until we find not used url for articles
        $new_friendly_url = "{$intial_friendly_url}-{$counter}";
        } # END while
    
        
    # once we found friendly url we set it to articles table, 
    # then we can  use it to build our frinedly url
    mysqli_query($link, "UPDATE clientes 
                         SET friendly_url = '{$new_friendly_url}' 
                         WHERE id = '{$row['id']}' ");
    
    } # END while


/**
 * function, receives string, returns seo friendly version for that strings, 
 *     sample: 'Hotels in Buenos Aires' => 'hotels-in-buenos-aires'
 *    - converts all alpha chars to lowercase
 *    - converts any char that is not digit, letter or - into - symbols into "-"
 *    - not allow two "-" chars continued, converte them into only one syngle "-"
 */
function friendly_seo_string($vp_string){
    
    $vp_string = trim($vp_string);
    
    $vp_string = html_entity_decode($vp_string);
    
    $vp_string = strip_tags($vp_string);
    
    $vp_string = strtolower($vp_string);
    
    $vp_string = preg_replace('~[^ a-z0-9_.]~', ' ', $vp_string);
    
    $vp_string = preg_replace('~ ~', '-', $vp_string);
    
    $vp_string = preg_replace('~-+~', '-', $vp_string);
        
    return $vp_string;
    } # friendly_seo_string()

?> 

</body>
</html>
<?php

$elementSetMetadata = array(
        'name' => 'Contributor Information',
        'description' => "Stores information about the contributor of an item. To be used in conjunction with the 'contribution' plugin",
        'record_type' => 'Item'
    );

$elements = array(
    array(
        'label' => 'Contributor Name',
        'name' => 'contributorName',
        'description' => 'Name of the  contributer'
    ),
    
    array(
        'label' => 'Contributor Zip',
        'name' => 'contributorZip',
        'description' => 'Zip code of the  contributer'
    ),
    
    array(
        'label' => 'Contributor Age',
        'name' => 'contributorAge',
        'description' => 'Age of the contributer'
    ),
    
    array(
        'label' => 'Contributor Ethnicity',
        'name' => 'contributorEthnicity',
        'description' => 'Ethnicity or race of the contributer'
    ),
     
     array(
        'label' => 'Contributor Gender',
        'name' => 'contributorGender',
        'description' => 'Gender of the contributer'
    ),
    
     array(
        'label' => 'Contributor Twitter Handle',
        'name' => 'contributorTwitter',
        'description' => 'Twitter Handle of the contributer'
    )
 );
 
 ?>
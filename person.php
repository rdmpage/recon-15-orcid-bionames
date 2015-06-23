<?php

// Given ORCID and DOI, match to BioNames author in article list

require_once (dirname(__FILE__) . '/lib.php');
require_once (dirname(__FILE__) . '/fingerprint.php');


$orcid = '0000-0001-8380-0692';
$doi = '10.1111/j.1475-4983.2009.00879.x';

$doi = '10.1002/mmnd.200800007';
$orcid = '0000-0002-6914-1026';

// Fetch ORCID
$url = 'http://pub.orcid.org/v1.2/' . $orcid . '/orcid-profile';

$json = get($url, '', 'application/json');
$obj = json_decode($json);


// Process
$target = new stdclass;

$target->name = '';

$personal_details = $obj->{'orcid-profile'}->{'orcid-bio'}->{'personal-details'};

if (isset($personal_details->{'given-names'}))
{
	$target->name = $personal_details->{'given-names'}->{'value'};
}

if (isset($personal_details->{'family-name'}))
{
	$target->name .= $personal_details->{'family-name'}->{'value'};
}

if (isset($personal_details->{'credit-name'}))
{
	$target->credit_name = $personal_details->{'credit-name'}->{'value'};
}

if (isset($personal_details->{'other-names'}))
{
	foreach ($personal_details->{'other-names'}->{'other-name'} as $other_name)
	{
		$target->other_names[] = $other_name->value;
	}
}



// fetch article
$json = get('http://bionames.org/api/id/doi/' . $doi);
$reference = json_decode($json);

// match

$min_d = 100;
$hit = -1;

$n = count($reference->author);
for ($i = 0; $i < $n; $i++)
{
	if (isset($target->name))
	{
		$d = levenshtein(finger_print($reference->author[$i]->name), finger_print($target->name));
	
		if ($d < $min_d)
		{
			$min_d = $d;
			$hit = $i;
		}
	}
	
	if (isset($target->credit_name))
	{
		$d = levenshtein(finger_print($reference->author[$i]->name), finger_print($target->credit_name));
	
		if ($d < $min_d)
		{
			$min_d = $d;
			$hit = $i;
		}
	}

}

print_r($target);


echo $hit . ' ' . $reference->author[$hit]->name . "\n";



?>
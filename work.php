<?php

require_once (dirname(__FILE__) . '/lib.php');


// get works for an author and try to match... 

//--------------------------------------------------------------------------------------------------
function reference2openurl($reference)
{
	$openurl = '';
	$openurl .= 'ctx_ver=Z39.88-2004&rft_val_fmt=info:ofi/fmt:kev:mtx:journal';
	//$openurl .= '&genre=article';
	
	if (isset($reference->authors))
	{
		foreach ($reference->authors as $author)
		{
			$openurl .= '&rft.au=' . urlencode($author);
		}	
	}
	$openurl .= '&rft.atitle=' . urlencode($reference->title);
	$openurl .= '&rft.jtitle=' . urlencode($reference->secondary_title);
	if (isset($reference->issn))
	{
		$openurl .= '&rft.issn=' . $reference->issn;
	}
	if (isset($reference->series))
	{
		$openurl .= '&rft.series=' . $reference->series;
	}
	$openurl .= '&rft.volume=' . $reference->volume;
	
	if (isset($reference->issue))
	{
		$openurl .= '&amp;rft.issue=' . $reference->issue;
	}		
	
	
	if (isset($reference->spage))
	{
		$openurl .= '&rft.spage=' . $reference->spage;
	}
	if (isset($reference->epage))
	{
		$openurl .= '&rft.epage=' . $reference->epage;
	}
	if (isset($reference->pagination))
	{
		$openurl .= '&rft.pages=' . $reference->pagination;
	}
	$openurl .= '&rft.date=' . $reference->year;
	if (isset($reference->lsid))
	{
		$openurl .= '&rft_id=' . $reference->lsid;
	}
	
	if (isset($reference->doi))
	{
		$openurl .= '&rft_id=info:doi/' . $reference->doi;
	}
	
	
	if (isset($reference->url))
	{
		if (preg_match('/http:\/\/hdl.handle.net\//', $reference->url))
		{
			$openurl .= '&rft_id=' . $reference->url;
		}
	}	

	return $openurl;
}

$json='{
    "put-code": "15544935",
    "work-title": {
        "title": {
            "value": "The tantulocarid genus Arcticotantalus removed from Basipodellidae into Deoterthridae (Crustacea: Maxillopoda) after the description of a new species from Greenland, with first live photographs and an overview of the class."
        },
        "subtitle": null,
        "translated-title": null
    },
    "journal-title": {
        "value": "Zootaxa"
    },
    "short-description": null,
    "work-citation": {
        "work-citation-type": "BIBTEX",
        "citation": "@article{RID:022515073842-6,\ntitle = {The tantulocarid genus Arcticotantalus removed from Basipodellidae into Deoterthridae (Crustacea: Maxillopoda) after the description of a new species from Greenland, with first live photographs and an overview of the class.},\njournal = {Zootaxa},\nyear = {2009},\nauthor = {Knudsen, Steen Wilhelm and  Kirkegaard, Maja and  Olesen, Jorgen},\nvolume = {2035},\npages = {41-68}\n}"
    },
    "work-type": "JOURNAL_ARTICLE",
    "publication-date": {
        "year": {
            "value": "2009"
        },
        "month": null,
        "day": null,
        "media-type": null
    },
    "work-external-identifiers": null,
    "url": null,
    "work-contributors": {
        "contributor": [
            {
                "contributor-orcid": null,
                "credit-name": {
                    "value": "Knudsen, Steen Wilhelm",
                    "visibility": "PUBLIC"
                },
                "contributor-email": null,
                "contributor-attributes": null
            },
            {
                "contributor-orcid": null,
                "credit-name": {
                    "value": "Kirkegaard, Maja",
                    "visibility": "PUBLIC"
                },
                "contributor-email": null,
                "contributor-attributes": null
            },
            {
                "contributor-orcid": null,
                "credit-name": {
                    "value": "Olesen, Jorgen",
                    "visibility": "PUBLIC"
                },
                "contributor-email": null,
                "contributor-attributes": null
            }
        ]
    },
    "work-source": {
        "value": null,
        "uri": "http://orcid.org/0000-0003-1377-5676",
        "path": "0000-0003-1377-5676",
        "host": "orcid.org"
    },
    "source": null,
    "created-date": null,
    "last-modified-date": null,
    "language-code": null,
    "country": null,
    "visibility": "PUBLIC"
}';
                    
//echo $json;     

$json='{
    "message-version": "1.1",
    "orcid-profile": {
        "orcid": null,
        "orcid-id": null,
        "orcid-identifier": {
            "value": null,
            "uri": "http://orcid.org/0000-0003-0428-9940",
            "path": "0000-0003-0428-9940",
            "host": "orcid.org"
        },
        "orcid-deprecated": null,
        "orcid-preferences": {
            "locale": "EN"
        },
        "orcid-history": {
            "creation-method": "WEBSITE",
            "completion-date": null,
            "submission-date": {
                "value": 1424867445291
            },
            "last-modified-date": {
                "value": 1425474905074
            },
            "claimed": {
                "value": true
            },
            "source": null,
            "deactivation-date": null,
            "verified-email": null,
            "verified-primary-email": null,
            "visibility": null
        },
        "orcid-bio": {
            "personal-details": {
                "given-names": {
                    "value": "Steen"
                },
                "family-name": {
                    "value": "Knudsen"
                },
                "credit-name": null,
                "other-names": null
            },
            "biography": null,
            "researcher-urls": null,
            "contact-details": {
                "email": [],
                "address": {
                    "country": {
                        "value": "DK",
                        "visibility": "PUBLIC"
                    }
                }
            },
            "keywords": null,
            "external-identifiers": {
                "external-identifier": [
                    {
                        "orcid": null,
                        "external-id-orcid": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0001-7707-4137",
                            "path": "0000-0001-7707-4137",
                            "host": "orcid.org"
                        },
                        "external-id-common-name": {
                            "value": "ResearcherID"
                        },
                        "external-id-reference": {
                            "value": "C-1072-2015"
                        },
                        "external-id-url": {
                            "value": "http://www.researcherid.com/rid/C-1072-2015"
                        },
                        "external-id-source": null,
                        "source": null
                    }
                ],
                "visibility": "PUBLIC"
            },
            "delegation": null,
            "applications": null,
            "scope": null
        },
        "orcid-activities": {
            "affiliations": null,
            "orcid-works": {
                "orcid-work": [
                    {
                        "put-code": "15544930",
                        "work-title": {
                            "title": {
                                "value": "Revision of the fish family Kyphosidae (Teleostei: Perciformes)"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Zootaxa"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-1,\ntitle = {Revision of the fish family Kyphosidae (Teleostei: Perciformes)},\njournal = {Zootaxa},\nyear = {2013},\nauthor = {Knudsen, Steen Wilhelm and  Clements, Kendall D.},\nvolume = {3751},\nnumber = {1},\npages = {1-101}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2013"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen Wilhelm",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Clements, Kendall D.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544929",
                        "work-title": {
                            "title": {
                                "value": "Kyphosus gladius, a new species of sea chub from Western Australia (Teleostei: Kyphosidae), with comments on Segutilum klunzingeri Whitley"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Zootaxa"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-2,\ntitle = {Kyphosus gladius, a new species of sea chub from Western Australia (Teleostei: Kyphosidae), with comments on Segutilum klunzingeri Whitley},\njournal = {Zootaxa},\nyear = {2013},\nauthor = {Knudsen, Steen Wilhelm and  Clements, Kendall D.},\nvolume = {3599},\npages = {1-18}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2013"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen Wilhelm",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Clements, Kendall D.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544932",
                        "work-title": {
                            "title": {
                                "value": "A checklist of the fish fauna of Greenland waters."
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Zootaxa"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-4,\ntitle = {A checklist of the fish fauna of Greenland waters.},\njournal = {Zootaxa},\nyear = {2010},\nauthor = {Moller, Peter R. and  Nielsen, Jorgen G. and  Knudsen, Steen W. and  Poulsen, Jan Y. and  Sunksen, Kaj and  Jorgensen, Ole A.},\nvolume = {2378},\npages = {1-84}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2010"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Moller, Peter R.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Nielsen, Jorgen G.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen W.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Poulsen, Jan Y.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Sunksen, Kaj",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Jorgensen, Ole A.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544931",
                        "work-title": {
                            "title": {
                                "value": "A checklist of the fish fauna of Greenland waters"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Zootaxa"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-3,\ntitle = {A checklist of the fish fauna of Greenland waters},\njournal = {Zootaxa},\nyear = {2010},\nauthor = {Moller, Peter R. and  Nielsen, Jorgen G. and  Knudsen, Steen W. and  Poulsen, Jan Y. and  Sunksen, Kaj and  Jorgensen, Ole A.},\nnumber = {2378},\npages = {1-84}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2010"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Moller, Peter R.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Nielsen, Jorgen G.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen W.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Poulsen, Jan Y.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Sunksen, Kaj",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Jorgensen, Ole A.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544935",
                        "work-title": {
                            "title": {
                                "value": "The tantulocarid genus Arcticotantalus removed from Basipodellidae into Deoterthridae (Crustacea: Maxillopoda) after the description of a new species from Greenland, with first live photographs and an overview of the class."
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Zootaxa"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-6,\ntitle = {The tantulocarid genus Arcticotantalus removed from Basipodellidae into Deoterthridae (Crustacea: Maxillopoda) after the description of a new species from Greenland, with first live photographs and an overview of the class.},\njournal = {Zootaxa},\nyear = {2009},\nauthor = {Knudsen, Steen Wilhelm and  Kirkegaard, Maja and  Olesen, Jorgen},\nvolume = {2035},\npages = {41-68}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2009"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen Wilhelm",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Kirkegaard, Maja",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Olesen, Jorgen",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544934",
                        "work-title": {
                            "title": {
                                "value": "The tantulocarid genus Arcticotantalus removed from Basipodellidae into Deoterthridae (Crustacea: Maxillopoda) after the description of a new species from Greenland, with first live photographs and an overview of the class"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Zootaxa"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-5,\ntitle = {The tantulocarid genus Arcticotantalus removed from Basipodellidae into Deoterthridae (Crustacea: Maxillopoda) after the description of a new species from Greenland, with first live photographs and an overview of the class},\njournal = {Zootaxa},\nyear = {2009},\nauthor = {Knudsen, Steen Wilhelm and  Kirkegaard, Maja and  Olesen, Jorgen},\nnumber = {2035},\npages = {41-68}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2009"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen Wilhelm",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Kirkegaard, Maja",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Olesen, Jorgen",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544933",
                        "work-title": {
                            "title": {
                                "value": "Higher and lower-level relationships of the deep-sea fish order Alepocephaliformes (Teleostei: Otocephala) inferred from whole mitogenome sequences"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Biological Journal of the Linnean Society"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-9,\ntitle = {Higher and lower-level relationships of the deep-sea fish order Alepocephaliformes (Teleostei: Otocephala) inferred from whole mitogenome sequences},\njournal = {Biological Journal of the Linnean Society},\nyear = {2009},\nauthor = {Poulsen, Jan Y. and  Moller, Peter R. and  Lavoue, Sebastien and  Knudsen, Steen W. and  Nishida, Mutsumi and  Miya, Masaki},\nvolume = {98},\nnumber = {4},\npages = {923-936}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2009"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": null,
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Poulsen, Jan Y.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Moller, Peter R.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Lavoue, Sebastien",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen W.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Nishida, Mutsumi",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Miya, Masaki",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544936",
                        "work-title": {
                            "title": {
                                "value": "Careproctus kidoi, a new Arctic species of snailfish (Teleostei : Liparidae) from Baffin Bay"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Ichthyological Research"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073842-8,\ntitle = {Careproctus kidoi, a new Arctic species of snailfish (Teleostei : Liparidae) from Baffin Bay},\njournal = {Ichthyological Research},\nyear = {2008},\nauthor = {Knudsen, Steen Wilhelm and  Moller, Peter Rask},\nvolume = {55},\nnumber = {2},\npages = {175-182}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2008"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": {
                            "work-external-identifier": [
                                {
                                    "work-external-identifier-type": "DOI",
                                    "work-external-identifier-id": {
                                        "value": "10.1007/s10228-007-0034-x"
                                    }
                                }
                            ],
                            "scope": null
                        },
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, Steen Wilhelm",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Moller, Peter Rask",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    },
                    {
                        "put-code": "15544937",
                        "work-title": {
                            "title": {
                                "value": "Phylogeny of the snailfishes (Teleostei : Liparidae) based on molecular and morphological data"
                            },
                            "subtitle": null,
                            "translated-title": null
                        },
                        "journal-title": {
                            "value": "Molecular Phylogenetics and Evolution"
                        },
                        "short-description": null,
                        "work-citation": {
                            "work-citation-type": "BIBTEX",
                            "citation": "@article{RID:022515073843-7,\ntitle = {Phylogeny of the snailfishes (Teleostei : Liparidae) based on molecular and morphological data},\njournal = {Molecular Phylogenetics and Evolution},\nyear = {2007},\nauthor = {Knudsen, S. W. and  Moller, P. R. and  Gravlund, P.},\nvolume = {44},\nnumber = {2},\npages = {649-666}\n}"
                        },
                        "work-type": "JOURNAL_ARTICLE",
                        "publication-date": {
                            "year": {
                                "value": "2007"
                            },
                            "month": null,
                            "day": null,
                            "media-type": null
                        },
                        "work-external-identifiers": {
                            "work-external-identifier": [
                                {
                                    "work-external-identifier-type": "DOI",
                                    "work-external-identifier-id": {
                                        "value": "10.1016/j.ympev.2007.04.005"
                                    }
                                }
                            ],
                            "scope": null
                        },
                        "url": null,
                        "work-contributors": {
                            "contributor": [
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Knudsen, S. W.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Moller, P. R.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                },
                                {
                                    "contributor-orcid": null,
                                    "credit-name": {
                                        "value": "Gravlund, P.",
                                        "visibility": "PUBLIC"
                                    },
                                    "contributor-email": null,
                                    "contributor-attributes": null
                                }
                            ]
                        },
                        "work-source": {
                            "value": null,
                            "uri": "http://orcid.org/0000-0003-1377-5676",
                            "path": "0000-0003-1377-5676",
                            "host": "orcid.org"
                        },
                        "source": null,
                        "created-date": null,
                        "last-modified-date": null,
                        "language-code": null,
                        "country": null,
                        "visibility": "PUBLIC"
                    }
                ],
                "scope": null
            },
            "funding-list": null
        },
        "orcid-internal": null,
        "type": "USER",
        "group-type": null,
        "client-type": null
    },
    "orcid-search-results": null,
    "error-desc": null
}';               
                    
$obj = json_decode($json);

//print_r($obj);

//exit();


$orcid = '0000-0003-0428-9940';
$orcid = '0000-0002-7101-9767'; // me
$orcid = '0000-0002-2513-4828';
$orcid = '0000-0002-3426-8342';
$orcid = '0000-0002-9873-1033';

$url = 'http://pub.orcid.org/v1.2/' . $orcid . '/orcid-profile';

$json = get($url, '', 'application/orcid+json');
$obj = json_decode($json);

echo $json;

$works = $obj->{'orcid-profile'}->{'orcid-activities'}->{'orcid-works'}->{'orcid-work'};

$found = array();

foreach ($works as $work)
{

	//print_r($work);exit();

	$reference = new stdclass;

	$reference->title = $work->{'work-title'}->{'title'}->value;
	$reference->secondary_title = $work->{'journal-title'}->value;

	$bibtext = $work->{'work-citation'}->citation;

	//echo $bibtext;

	if (preg_match('/year = \{(?<year>[0-9]{4})\}/', $bibtext, $m))
	{
		$reference->year = $m['year'];
	}
	if (preg_match('/volume = \{(?<volume>.*)\}/Uu', $bibtext, $m))
	{
		$reference->volume = $m['volume'];
	}

	// pages = {41-68}
	if (preg_match('/pages = \{(?<pages>.*)\}/Uu', $bibtext, $m))
	{
		$pages = $m['pages'];
		if (preg_match('/(?<spage>\d+)-(?<epage>\d+)/', $pages, $mm))
		{
			$reference->spage = $mm['spage'];
			$reference->epage = $mm['epage'];
		}
		else
		{	
			$reference->pages = $pages;
		}
	}
	
	if (isset($work->{'work-external-identifiers'}))
	{
		foreach ($work->{'work-external-identifiers'}->{'work-external-identifier'} as $identifier)
		{
			if ($identifier->{'work-external-identifier-type'} == 'DOI')
			{
				$reference->doi = $identifier->{'work-external-identifier-id'}->value;
			}
		}
	}

	print_r($reference);
	
	if(isset($reference->doi))
	{
		$url = 'http://bionames.org/api/id/doi/' . $reference->doi;

		//$url = 'http://bionames.org/api/openurl?' . reference2openurl($reference);
		//echo reference2openurl($reference);
	
		$json = get($url);
		echo $json;
		
		$h = json_decode($json);
		
	}
}


?>
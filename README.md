# crossref-event-hackathon

Playing with [CrossRef event data](https://www.eventdata.crossref.org/guide/index.html) at [WikiCite 2017](https://meta.wikimedia.org/wiki/WikiCite_2017), see also [etherpad](https://etherpad.wikimedia.org/p/WikiCite17Day3EventData).

## Getting a stream

To get 100 events for GBIF DOIs (prefix **10.15468**):

https://query.eventdata.crossref.org/events?rows=100&filter=prefix%3A10.15468

## Getting events for one DOI

Events involving GBIF backbone

https://query.eventdata.crossref.org/events?filter=work:10.15468/39omei


## Events

The things that mentions a DOI is the subject, the DOI it mentions is the object.

## Relationships

### is_previous_version_of

DOIs for articles and GBIF datasets for that data are linked by **is_previous_version_of** relationship.


### is_part_of

For example, the Zootaxa DOI https://doi.org/10.11646/zootaxa.4263.2.8 is linked to Zenodo DOIs (e.g., https://doi.org/10.5281/zenodo.573168) via this relationship (e.g., figures extracted by Plaza)

## Example events

### GBIF DOI linked to paper DOI

This paper has a CrossRef DOI **10.5431/aramit5205**

Lissner, J., & Bosmans, R. (2016, September 30). Description of a newGibbaranea(Araneae: Araneidae) from the Western Mediterranean. Arachnologische Mitteilungen. Arachnologische Gesellschaft e.v. https://doi.org/10.5431/aramit5205

This event [003fcaa7-af8a-458a-b584-3aabd2c8924b](https://query.eventdata.crossref.org/events/003fcaa7-af8a-458a-b584-3aabd2c8924b) links the GBIF download DOI [10.15468/dl.28rkpl](https://doi.org/10.15468/dl.28rkpl) to the article  [10.5431/aramit5205](https://doi.org/10.5431/aramit5205).

```
{
	"license": "https://creativecommons.org/publicdomain/zero/1.0/",
	"obj_id": "https://doi.org/10.5431/aramit5205",
	"source_token": "28276d12-b320-41ba-9272-bb0adc3466ff",
	"occurred_at": "2017-03-24T18:53:08Z",
	"subj_id": "https://doi.org/10.15468/dl.28rkpl",
	"id": "003fcaa7-af8a-458a-b584-3aabd2c8924b",
	"terms": "https://doi.org/10.13003/CED-terms-of-use",
	"message_action": "create",
	"source_id": "datacite",
	"timestamp": "2017-03-25T04:26:38Z",
	"relation_type_id": "references"
}
```

Ah, now I see. The paper 10.5431/aramit5205 doesn't mention GBIF, but the GBIF dataset [Description of a new Gibbaranea (Araneae: Araneidae) from the Western Mediterranean](http://www.gbif.org/dataset/753fbf2c-beb9-4ee0-a9a5-50e3198be373) has the same DOI and also the alternative identifier [10.15468/ijsonr](http://dx.doi.org/doi:10.15468/ijsonr)

```
<dataset>
<alternateIdentifier>doi:10.5431/aramit5205</alternateIdentifier>
<alternateIdentifier>doi:10.15468/ijsonr</alternateIdentifier>
<alternateIdentifier>FFB60C131215FF9FFFFAFFA0EA6DFFE9</alternateIdentifier>
</dataset>
```

So, anyone downloading this dataset will generate an event linking the article DOI to a GBIF data. We can get these same links via the [GBIF API](http://api.gbif.org/v1/occurrence/download/dataset/753fbf2c-beb9-4ee0-a9a5-50e3198be373).


## Citations



## Citations in journal metadata

The GBIF Backbone is cited by  http://dx.doi.org/10.1007/s10841-016-9939-x, and this can be seen in the DOI record for this article:

https://api.crossref.org/v1/works/http://dx.doi.org/10.1007/s10841-016-9939-x

```
{
	"key": "9939_CR26",
	"unstructured": "GBIF Backbone Taxonomy (2016) doi:\n10.15468\/39omei\n\n. Accessed 28 Oct 2016",
	"DOI": "10.15468\/39omei"
}
```

Unfortunately at the moment we can't query the CrossRef API for articles that cite a given DOI. I discovered this article citation via [Google Scholar](https://scholar.google.co.uk/scholar?hl=en&q=10.15468).




		






            

# crossref-event-hackathon

Playing with [CrossRef event data](https://www.eventdata.crossref.org/guide/index.html) at [WikiCite 2017](https://meta.wikimedia.org/wiki/WikiCite_2017), see also [etherpad](https://etherpad.wikimedia.org/p/WikiCite17Day3EventData).

## Getting a stream

To get 100 events for GBIF DOIs (prefix **10.15468**):

https://query.eventdata.crossref.org/events?rows=100&filter=prefix%3A10.15468


## Events

The things that mentions a DOI is the subject, the DOI it mentions is the object.

## Relationships

### is_previous_version_of

DOIs for 


## Example events

### GBIF DOI linked to paper

This paper has a CrossRef DOI **10.5431/aramit5205**

Lissner, J., & Bosmans, R. (2016, September 30). Description of a newGibbaranea(Araneae: Araneidae) from the Western Mediterranean. Arachnologische Mitteilungen. Arachnologische Gesellschaft e.v. https://doi.org/10.5431/aramit5205

This event [003fcaa7-af8a-458a-b584-3aabd2c8924b](https://query.eventdata.crossref.org/events/003fcaa7-af8a-458a-b584-3aabd2c8924b) links the GBIF DOI [10.15468/dl.28rkpl](https://doi.org/10.15468/dl.28rkpl) to the article  [10.5431/aramit5205](https://doi.org/10.5431/aramit5205).

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
            

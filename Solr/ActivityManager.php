<?php
namespace Odl\ActivityStreamBundle\Solr;

use Odl\ActivityStreamBundle\Model\Object;
use Odl\ActivityStreamBundle\Model\Activity;

use Solarium_Client;
use Solarium_Query;

class ActivityManager
{
    protected $solrClient;
    protected $mapping;
    protected $queryHelper;

    public function __construct(Solarium_Client $solrClient, array $mapping = array()) {
        $this->solrClient = $solrClient;
        $this->queryHelper = $solrClient->createSelect()->getHelper();
        $this->mapping = $mapping;
    }

    // Serialize activity to solr format
    public function addSolrDocument(Activity $activity) {
        $update = $this->solrClient->createUpdate();
        $document = $update->createDocument();

        $indexes = $this->getSolrDocumentArray($activity);
        foreach ($indexes as $key => $value) {
            if (!$value) {
                continue;
            }

            if ($value instanceof \DateTime) {
                $value = $this->queryHelper->formatDate($value);
            }

            $document->addField($key, $value);
        }

        $update->addDocuments(array($document));
        $update->addCommit();

        // this executes the query and returns the result
        $result = $this->solrClient->update($update);
        return $result;
    }

    // Get Results out of solr
    public function getResults(Solarium_Query $query) {
        // Get the results from solr
    }

    public function getSolrDocumentArray(Activity $activity) {
        $retVal = array();

        $retVal['id'] = $activity->getId();
        $retVal['verb'] = $activity->getVerb();
        $retVal['updated'] = $activity->getUpdated();
        $retVal['published'] = $activity->getPublished();

        if ($actor = $activity->getActor()) {
            $indexes = $this->getIndexes('actor_', $actor);
            $retVal = array_merge($retVal, $indexes);
        }

        if ($object = $activity->getObject()) {
            $indexes = $this->getIndexes('object_', $object);
            $retVal = array_merge($retVal, $indexes);
        }

        if ($target = $activity->getTarget()) {
            $indexes = $this->getIndexes('taget_', $target);
            $retVal = array_merge($retVal, $indexes);
        }

        return $retVal;
    }

    protected function getIndexes($prefix, Object $object) {
        $indexes = array();
        $retVal = array();

        $indexes['id'] = $object->getId();
        $indexes['type'] = $object->getObjectType();
        if ($objectIndexes = $object->getProperty('indexes')) {
            $indexes  = array_merge($indexes, $objectIndexes);
        }

        foreach ($indexes as $key => $value) {
            if (isset($this->mapping[$key])) {
                $key = $this->mapping[$key];
            }
            else {
                $key = $key . '_i';
            }

            $retVal[$prefix . $key] = $value;
        }

        return $retVal;
    }
}
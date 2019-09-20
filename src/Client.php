<?php

namespace DevoraliveCachet;

use JMS\Serializer\SerializerBuilder;
use DevoraliveCachet\Entity\Metric;
use DevoraliveCachet\Result\Generic\StringEnvelope;
use DevoraliveCachet\Entity\Component;
use DevoraliveCachet\Result\Component\ComponentEnvelope;
use DevoraliveCachet\Result\Component\ComponentsEnvelope;
use DevoraliveCachet\Entity\Incident;
use DevoraliveCachet\Result\Incident\IncidentEnvelope;
use DevoraliveCachet\Result\Incident\IncidentsEnvelope;
use DevoraliveCachet\Entity\Group;
use DevoraliveCachet\Result\Group\GroupEnvelope;
use DevoraliveCachet\Result\Group\GroupsEnvelope;
use DevoraliveCachet\Http\RequestHandler;
use DevoraliveCachet\Result\Metric\MetricEnvelope;
use DevoraliveCachet\Result\Metric\MetricsEnvelope;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Client
 * @package DevoraliveCachet
 */
class Client
{
    /**
     * @var string
     */
    private $endpoint;

    /**
     * @var string
     */
    private $token;

    /**
     * RequestHandler
     */
    private $handler;

    /**
     * Client constructor.
     *
     * @param      $endpoint
     * @param null $token
     */
    public function __construct($endpoint, $token = null)
    {
        $this->endpoint = $endpoint;
        $this->token = $token;

        $serializer = SerializerBuilder::create()->build();
        $this->handler = new RequestHandler($this, $serializer);
    }

    /**
     * Get the value of Endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Get the value of Token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return mixed
     * @throws GuzzleException
     */
    public function ping()
    {
        $envelope = $this->handler->get('ping', StringEnvelope::class);

        return $envelope->getData();
    }

    /**
     * @param array $params
     *
     * @return Component[]
     * @throws GuzzleException
     */
    public function getComponents(array $params = [])
    {
        $envelope = $this->handler->get('components', ComponentsEnvelope::class, $params);

        return $envelope->getData();
    }

    /**
     * @param $id
     *
     * @return Component
     * @throws GuzzleException
     */
    public function getComponent($id)
    {
        $envelope = $this->handler->get('components/' . $id, ComponentEnvelope::class);

        return $envelope->getData();
    }

    /**
     * @param Component $component
     *
     * @return Component
     * @throws GuzzleException
     */
    public function addComponent(Component $component)
    {
        $envelope = $this->handler->post('components', ComponentEnvelope::class, $component);

        return $envelope->getData();
    }

    /**
     * @param Component $component
     *
     * @return Component
     * @throws GuzzleException
     */
    public function updateComponent(Component $component)
    {
        $envelope = $this->handler->put('components/' . $component->getId(), ComponentEnvelope::class, $component);

        return $envelope->getData();
    }

    /**
     * @param $id
     *
     * @return bool
     * @throws GuzzleException
     */
    public function deleteComponent($id)
    {
        $this->handler->delete('components/' . $id, $id);

        return true;
    }

    /**
     * @param array $params
     *
     * @return Incident[]
     * @throws GuzzleException
     */
    public function getIncidents(array $params = [])
    {
        $envelope = $this->handler->get('incidents', IncidentsEnvelope::class, $params);

        return $envelope->getData();
    }

    /**
     * @param int $id
     *
     * @return Incident
     * @throws GuzzleException
     */
    public function getIncident($id)
    {
        $envelope = $this->handler->get('incidents/' . $id, IncidentEnvelope::class);

        return $envelope->getData();
    }

    /**
     * @param Incident $incident
     *
     * @return Incident
     * @throws GuzzleException
     */
    public function addIncident(Incident $incident)
    {
        $envelope = $this->handler->post('incidents', IncidentEnvelope::class, $incident);

        return $envelope->getData();
    }

    /**
     * @param Incident $incident
     *
     * @return Incident
     * @throws GuzzleException
     */
    public function updateIncident(Incident $incident)
    {
        $envelope = $this->handler->put('incidents/' . $incident->getId(), IncidentEnvelope::class, $incident);

        return $envelope->getData();
    }

    /**
     * @param $id
     *
     * @return bool
     * @throws GuzzleException
     */
    public function deleteIncident($id)
    {
        $this->handler->delete('incidents/' . $id, $id);

        return true;
    }

    /**
     * @param array $params
     *
     * @return Group[]
     * @throws GuzzleException
     */
    public function getGroups(array $params = [])
    {
        $envelope = $this->handler->get('components/groups', GroupsEnvelope::class, $params);

        return $envelope->getData();
    }

    /**
     * @param int $id
     *
     * @return Component
     * @throws GuzzleException
     */
    public function getGroup($id)
    {
        $envelope = $this->handler->get('components/groups/' . $id, GroupEnvelope::class);

        return $envelope->getData();
    }

    /**
     * @param array $params
     *
     * @return Metric[]
     * @throws GuzzleException
     */
    public function getMetrics(array $params = [])
    {
        $envelope = $this->handler->get('metrics', MetricsEnvelope::class, $params);

        return $envelope->getData();
    }

    /**
     * @param int $id
     *
     * @return Metric
     * @throws GuzzleException
     */
    public function getMetric($id)
    {
        $envelope = $this->handler->get('metrics/' . $id, MetricEnvelope::class);

        return $envelope->getData();
    }

    /**
     * @param Metric $metric
     *
     * @return Metric
     * @throws GuzzleException
     */
    public function addMetric(Metric $metric)
    {
        $envelope = $this->handler->post('metrics', MetricEnvelope::class, $metric);

        return $envelope->getData();
    }

    /**
     * @param Metric $metric
     *
     * @return Metric
     * @throws GuzzleException
     */
    public function updateMetric(Metric $metric)
    {
        $envelope = $this->handler->put('metrics/' . $metric->getId(), MetricEnvelope::class, $metric);

        return $envelope->getData();
    }

    /**
     * @param $id
     *
     * @return bool
     * @throws GuzzleException
     */
    public function deleteMetric($id)
    {
        $this->handler->delete('metrics/' . $id, $id);

        return true;
    }
}

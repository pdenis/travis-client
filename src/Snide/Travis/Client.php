<?php

namespace Snide\Travis;

use Snide\Travis\Hydrator\SimpleHydrator;
use Snide\Travis\Model\Build;
use Snide\Travis\Model\Repository;
use Guzzle\Http\Client as GuzzleClient;

/**
 * Class Client
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Client
{
    /**
     * Magnum CI API host
     *
     * @var string
     */
    protected $endpoint = 'https://api.travis-ci.org';

    /**
     * Hydrate object from array  data
     *
     * @var SimpleHydrator
     */
    protected $hydrator;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Constructor
     *
     * @param SimpleHydrator $hydrator
     */
    public function __construct(SimpleHydrator $hydrator = null)
    {
        if (!$hydrator) {
            $this->hydrator = new SimpleHydrator();
        } else {
            $this->hydrator = $hydrator;
        }

        $this->client = new GuzzleClient($this->endpoint, array());
    }

    /**
     * Fetch project into project instance
     *
     * @param Repository $repository
     * @param bool $withBuild (Indicate if builds should be retrieve
     * @return \Snide\Travis\Model\Repository
     */
    public function fetchRepository(Repository $repository, $withBuild = true)
    {
        $response = $this->getResponse(
            sprintf('/repos/%s',$repository->getSlug()),
            array()
        );
        // Hydrate response into repository
        $project = $this->hydrate($repository, $response);

        if (!$withBuild) {
            return $project;
        }
        // Load Repository builds
        return $this->fetchBuilds($repository);
    }

    /**
     * Fetch builds into proejct instance
     *
     * @param Repository $repository
     * @return \Snide\Travis\Model\Repository
     */
    public function fetchBuilds(Repository $repository)
    {
        $response = $this->getResponse(
            sprintf('/repos/%s/builds',$repository->getSlug()),
            array());

        if (is_array($response)) {
            // Load project builds
            foreach ($response as $buildData) {
                $build = new Build();
                // Add build to repository instance
                $repository->addBuild($this->hydrate($build, $buildData));
            }
        }

        return $repository;
    }

    /**
     * @param \Snide\Travis\Client $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return \Snide\Travis\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Get Response from API
     * Response is an array (Result of json_decode)
     *
     * @param string $uri API URI
     * @param array $queryParams Query params
     * @return mixed
     */
    protected function getResponse($uri, array $queryParams = array())
    {
        $request = $this->client->get($uri, array(), array('query' => $queryParams));

        return $request->send()->json();
    }

    /**
     * Hydrate object with data
     *
     * @param mixed $object An object
     * @param array $data data to inject
     * @return mixed
     */
    protected function hydrate($object, $data)
    {
        return $this->hydrator->hydrate($object, $data);
    }
}
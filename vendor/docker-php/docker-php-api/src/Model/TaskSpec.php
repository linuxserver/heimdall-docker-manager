<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpec
{
    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*.
     *
     * @var TaskSpecPluginSpec
     */
    protected $pluginSpec;
    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @var TaskSpecContainerSpec
     */
    protected $containerSpec;
    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @var TaskSpecResources
     */
    protected $resources;
    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @var TaskSpecRestartPolicy
     */
    protected $restartPolicy;
    /**
     * @var TaskSpecPlacement
     */
    protected $placement;
    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @var int
     */
    protected $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @var string
     */
    protected $runtime;
    /**
     * @var TaskSpecNetworksItem[]
     */
    protected $networks;
    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @var TaskSpecLogDriver
     */
    protected $logDriver;

    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*.
     *
     * @return TaskSpecPluginSpec
     */
    public function getPluginSpec(): ?TaskSpecPluginSpec
    {
        return $this->pluginSpec;
    }

    /**
     * Invalid when specified with `ContainerSpec`. *(Experimental release only.)*.
     *
     * @param TaskSpecPluginSpec $pluginSpec
     *
     * @return self
     */
    public function setPluginSpec(?TaskSpecPluginSpec $pluginSpec): self
    {
        $this->pluginSpec = $pluginSpec;

        return $this;
    }

    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @return TaskSpecContainerSpec
     */
    public function getContainerSpec(): ?TaskSpecContainerSpec
    {
        return $this->containerSpec;
    }

    /**
     * Invalid when specified with `PluginSpec`.
     *
     * @param TaskSpecContainerSpec $containerSpec
     *
     * @return self
     */
    public function setContainerSpec(?TaskSpecContainerSpec $containerSpec): self
    {
        $this->containerSpec = $containerSpec;

        return $this;
    }

    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @return TaskSpecResources
     */
    public function getResources(): ?TaskSpecResources
    {
        return $this->resources;
    }

    /**
     * Resource requirements which apply to each individual container created as part of the service.
     *
     * @param TaskSpecResources $resources
     *
     * @return self
     */
    public function setResources(?TaskSpecResources $resources): self
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @return TaskSpecRestartPolicy
     */
    public function getRestartPolicy(): ?TaskSpecRestartPolicy
    {
        return $this->restartPolicy;
    }

    /**
     * Specification for the restart policy which applies to containers created as part of this service.
     *
     * @param TaskSpecRestartPolicy $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(?TaskSpecRestartPolicy $restartPolicy): self
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }

    /**
     * @return TaskSpecPlacement
     */
    public function getPlacement(): ?TaskSpecPlacement
    {
        return $this->placement;
    }

    /**
     * @param TaskSpecPlacement $placement
     *
     * @return self
     */
    public function setPlacement(?TaskSpecPlacement $placement): self
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @return int
     */
    public function getForceUpdate(): ?int
    {
        return $this->forceUpdate;
    }

    /**
     * A counter that triggers an update even if no relevant parameters have been changed.
     *
     * @param int $forceUpdate
     *
     * @return self
     */
    public function setForceUpdate(?int $forceUpdate): self
    {
        $this->forceUpdate = $forceUpdate;

        return $this;
    }

    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @return string
     */
    public function getRuntime(): ?string
    {
        return $this->runtime;
    }

    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime(?string $runtime): self
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * @return TaskSpecNetworksItem[]
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }

    /**
     * @param TaskSpecNetworksItem[] $networks
     *
     * @return self
     */
    public function setNetworks(?array $networks): self
    {
        $this->networks = $networks;

        return $this;
    }

    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @return TaskSpecLogDriver
     */
    public function getLogDriver(): ?TaskSpecLogDriver
    {
        return $this->logDriver;
    }

    /**
     * Specifies the log driver to use for tasks created from this spec. If not present, the default one for the swarm will be used, finally falling back to the engine default if not specified.
     *
     * @param TaskSpecLogDriver $logDriver
     *
     * @return self
     */
    public function setLogDriver(?TaskSpecLogDriver $logDriver): self
    {
        $this->logDriver = $logDriver;

        return $this;
    }
}
